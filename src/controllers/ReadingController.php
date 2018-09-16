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

/**
 * ReadingController implements Reading Settings page.
 *
 * @author José Peña <joepa37@gmail.com>
 */
class ReadingController extends SettingsBaseController
{
    public $modelClass = 'gearsoftware\settings\models\ReadingSettings';
    public $viewPath = '@vendor/gearsoftware/yii2-settings/views/reading/index';

}