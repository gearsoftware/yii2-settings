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
use Yii;

/**
 * SettingsBaseController implements base actions for settings pages.
 *
 * @author José Peña <joepa37@gmail.com>
 */
abstract class SettingsBaseController extends BaseController
{

    /**
     * Settings model class.
     *
     * @var string
     */
    public $modelClass;

    /**
     * Path to view file for settings.
     *
     * @var string
     */
    public $viewPath;

    /**
     * Action where settings is located
     *
     * @var array
     */
    public $enableOnlyActions = ['index'];

    /**
     * Lists all settings in group.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $modelClass = $this->modelClass;
        $model = new $modelClass();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            Yii::$app->session->setFlash('info', Yii::t('core/settings', 'Your settings have been saved.'));
            return $this->redirect($this->enableOnlyActions);
        }

        return $this->renderIsAjax($this->viewPath, compact('model'));
    }
}