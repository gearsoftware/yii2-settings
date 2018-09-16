<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\db\PermissionsMigration;

class m150825_212310_add_settings_permissions extends PermissionsMigration
{

    public function beforeUp()
    {
        $this->addPermissionsGroup('settings', 'Settings');
    }

    public function afterDown()
    {
        $this->deletePermissionsGroup('settings');
    }

    public function getPermissions()
    {
        return [
            'settings' => [
                'links' => [
                    '/admin/settings/*',
                    '/admin/settings/default/*',
                ],
                'changeGeneralSettings' => [
                    'title' => 'Change General Settings',
                    'links' => ['/admin/settings/default/index'],
                    'roles' => [self::ROLE_PRINCIPAL],
                ],
                'changeReadingSettings' => [
                    'title' => 'Change Reading Settings',
                    'links' => ['/admin/settings/reading/index'],
                    'roles' => [self::ROLE_PRINCIPAL],
                ],
                'flushCache' => [
                    'title' => 'Flush Cache',
                    'links' => ['/admin/settings/cache/flush'],
                    'roles' => [self::ROLE_PRINCIPAL],
                ],
            ],
        ];
    }

}
