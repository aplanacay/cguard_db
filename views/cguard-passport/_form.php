<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CguardPassport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cguard-passport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'region_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collection_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collectors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_collected')->textInput() ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'municipality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barangay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sitio_purok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'altitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'crop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variety')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meaning_of_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_dialect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_planted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_harvested')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_grower_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photograph_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'collecting_src')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sample_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genetic_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sampling_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topography')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soil_texture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soil_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stoniness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'farming_cultural_practice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sowing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'irrigation_water_src')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drainage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'crop_sequence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fertilizer_mgt_practice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pest_weed_mgt_practice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usage_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'key_desc_of_cultivar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'years_in_possession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addtl_notes')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
