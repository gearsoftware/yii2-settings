<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\settings\controllers;

use gearsoftware\controllers\BaseController;
use gearsoftware\helpers\CoreHelper;
use Yii;

/**
 * CacheController implements Flush Cache page.
 *
 * @author José Peña <joepa37@gmail.com>
 */
class CacheController extends BaseController
{
    /**
     * @inheritdoc
     */
    public $enableOnlyActions = ['flush'];

    public function actionFlush()
    {
        $frontendAssetPath = Yii::getAlias('@frontend') . '/web/assets/';
        $backendAssetPath = Yii::getAlias('@backend') . '/web/assets/';

        CoreHelper::recursiveDelete($frontendAssetPath);
        CoreHelper::recursiveDelete($backendAssetPath);
        
        if (!is_dir($frontendAssetPath)) {
            @mkdir($frontendAssetPath);
        }
        
        if (!is_dir($backendAssetPath)) {
            @mkdir($backendAssetPath);
        }

        if (Yii::$app->cache->flush()) {
            Yii::$app->session->setFlash('primary', Yii::t('core/settings', 'Cache has been flushed.'));
        } else {
            Yii::$app->session->setFlash('danger', Yii::t('core/settings', 'Failed to flush cache.'));
        }

        return Yii::$app->getResponse()->redirect(Yii::$app->getRequest()->referrer);
    }
}