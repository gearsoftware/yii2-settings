<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\db\SourceMessagesMigration;

class m151121_235015_i18n_core_settings_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'core/settings';
    }

    public function getMessages()
    {
        return [
            'General Settings' => 1,
            'Reading Settings' => 1,
            'Site Title' => 1,
            'Site Description' => 1,
            'Admin Email' => 1,
            'Timezone' => 1,
            'Date Format' => 1,
            'Time Format' => 1,
            'Page Size' => 1,
	        'Your settings have been saved.' => 1,
	        'Cache has been flushed.' => 1,
	        'Failed to flush cache.' => 1,
        ];
    }
}