<?php

/**
 * @package   Yii2-Settings
 * @author    José Peña <joepa37@gmail.com>
 * @link https://plus.google.com/+joepa37/
 * @copyright Copyright (c) 2018 José Peña
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @version   1.0.0
 */

use gearsoftware\helpers\Html;
use gearsoftware\settings\assets\SettingsAsset;
use gearsoftware\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model gearsoftware\models\Setting */
/* @var $form gearsoftware\widgets\ActiveForm */

$this->title = Yii::t('core/settings', 'Reading Settings');
$this->params['breadcrumbs'][] = $this->title;

SettingsAsset::register($this);
?>
<div class="setting-index">

    <div class="row">
        <div class="col-lg-8"><h3 class="lte-hide-title page-title"><?= Html::encode($this->title) ?></h3></div>
        <div class="col-lg-4"></div>
    </div>

    <div class="setting-form">
        <?php
        $form = ActiveForm::begin([
            'id' => 'setting-form',
            'validateOnBlur' => false,
            'fieldConfig' => [
                'template' => "<div class=\"settings-group\"><div class=\"settings-label\">{label}</div>\n<div class=\"settings-field\">{input}\n{hint}\n{error}</div></div>"
            ],
        ])
        ?>

        <?= $form->field($model, 'page_size')->textInput(['maxlength' => true])->hint($model->getDescription('page_size')) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('core', 'Save'), ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>


