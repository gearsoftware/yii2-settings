<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

class m170731_070227_i18n_es_menu_settings extends yii\db\Migration
{
	public function up()
	{
		$this->insert('{{%menu_link_lang}}', ['link_id' => 'settings', 'label' => 'Ajustes', 'language' => 'es-ES']);
		$this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-general', 'label' => 'Ajustes generales', 'language' => 'es-ES']);
		$this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-reading', 'label' => 'Ajustes de lectura', 'language' => 'es-ES']);
		$this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-cache', 'label' => 'Flush Cache', 'language' => 'es-ES']);
	}
}
