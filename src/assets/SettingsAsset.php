<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\settings\assets;

use gearsoftware\assets\core\CoreAsset;
use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * SettingsAsset.
 *
 * @author José Peña <joepa37@gmail.com>
 */
class SettingsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/gearsoftware/yii2-settings/assets/source';
    public $css = [
        'css/settings.css',
    ];
    public $depends = [
        BootstrapAsset::class,
        JqueryAsset::class,
	    CoreAsset::class
    ];

}