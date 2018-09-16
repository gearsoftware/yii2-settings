<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\settings;

/**
 * Settings Module For Yii2
 *
 * @author José Peña <joepa37@gmail.com>
 */
class SettingsModule extends \yii\base\Module
{
    /**
     * Version number of the module.
     */
    const VERSION = '0.1.0';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'gearsoftware\settings\controllers';

}