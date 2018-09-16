<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use yii\db\Migration;

class m150719_154955_add_setting_menu_links extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link}}', ['id' => 'settings', 'menu_id' => 'admin-menu', 'image' => 'demo-psi-gear-2', 'created_by' => 1, 'order' => 20]);
        $this->insert('{{%menu_link}}', ['id' => 'settings-general', 'menu_id' => 'admin-menu', 'link' => '/settings/default/index', 'parent_id' => 'settings', 'created_by' => 1, 'order' => 1]);
        $this->insert('{{%menu_link}}', ['id' => 'settings-reading', 'menu_id' => 'admin-menu', 'link' => '/settings/reading/index', 'parent_id' => 'settings', 'created_by' => 1, 'order' => 2]);
        $this->insert('{{%menu_link}}', ['id' => 'settings-cache', 'menu_id' => 'admin-menu', 'link' => '/settings/cache/flush', 'parent_id' => 'settings', 'created_by' => 1, 'order' => 99]);

        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings', 'label' => 'Settings', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-general', 'label' => 'General Settings', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-reading', 'label' => 'Reading Settings', 'language' => 'en-US']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'settings-cache', 'label' => 'Flush Cache', 'language' => 'en-US']);
    }

    public function down()
    {
        $this->delete('{{%menu_link}}', ['like', 'id', 'settings-cache']);
        $this->delete('{{%menu_link}}', ['like', 'id', 'settings-general']);
        $this->delete('{{%menu_link}}', ['like', 'id', 'settings']);
    }
}