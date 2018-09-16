<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\settings\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * @author José Peña <joepa37@gmail.com>
 */
class ReadingSettings extends BaseSettingsModel
{
    const GROUP = 'reading';

    public $page_size;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return ArrayHelper::merge(parent::rules(),
            [
                [['page_size'], 'required'],
                [['page_size'], 'integer'],
                ['page_size', 'default', 'value' => 10],
            ]);
    }

    public function attributeLabels()
    {
        return [
            'page_size' => Yii::t('core/settings', 'Page Size'),
        ];
    }

}