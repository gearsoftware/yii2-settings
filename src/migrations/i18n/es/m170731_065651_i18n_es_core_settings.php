<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\db\TranslatedMessagesMigration;

class m170731_065651_i18n_es_core_settings extends TranslatedMessagesMigration
{
	public function getLanguage()
	{
		return 'es-ES';
	}

	public function getCategory()
	{
		return 'core/settings';
	}

	public function getTranslations()
	{
		return [
			'General Settings' => 'Ajustes generales',
			'Reading Settings' => 'Ajustes de lectura',
			'Site Title' => 'Título del sitio',
			'Site Description' => 'Descripción del sitio',
			'Admin Email' => 'Correo electrónico del administrador',
			'Timezone' => 'Zona horaria',
			'Date Format' => 'Formato de fecha',
			'Time Format' => 'Formato de hora',
			'Page Size' => 'Paginación',
			'Your settings have been saved.' => 'Su configuración ha sido guardada.',
			'Cache has been flushed.' => 'Se ha vaciado la memoria caché.',
	        'Failed to flush cache.' => 'Error al vaciar la memoria caché.',
		];
	}
}
