<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

namespace gearsoftware\settings\components;

/**
 * AttributeDetails.
 *
 * @author José Peña <joepa37@gmail.com>
 */
class AttributeDetails
{
    public $field;
    public $group;
    public $key;
    public $language;
    public $multilingual;

    public function __construct($field, $group, $key = NULL, $language = NULL)
    {
        $this->field = $field;
        $this->group = $group;
        $this->key = ($key === NULL) ? $field : $key;
        $this->language = $language;
        $this->multilingual = ($language === NULL) ? FALSE : TRUE;
    }
}