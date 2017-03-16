<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CguardPassportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cguard-passport-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cguard_id') ?>

    <?= $form->field($model, 'region_no') ?>

    <?= $form->field($model, 'region_name') ?>

    <?= $form->field($model, 'collection_no') ?>

    <?= $form->field($model, 'collectors') ?>

    <?php // echo $form->field($model, 'institute') ?>

    <?php // echo $form->field($model, 'date_collected') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'municipality') ?>

    <?php // echo $form->field($model, 'barangay') ?>

    <?php // echo $form->field($model, 'sitio_purok') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'altitude') ?>

    <?php // echo $form->field($model, 'crop') ?>

    <?php // echo $form->field($model, 'variety') ?>

    <?php // echo $form->field($model, 'meaning_of_name') ?>

    <?php // echo $form->field($model, 'language_dialect') ?>

    <?php // echo $form->field($model, 'date_planted') ?>

    <?php // echo $form->field($model, 'date_harvested') ?>

    <?php // echo $form->field($model, 'source_grower_name') ?>

    <?php // echo $form->field($model, 'contact_info') ?>

    <?php // echo $form->field($model, 'photograph_no') ?>

    <?php // echo $form->field($model, 'collecting_src') ?>

    <?php // echo $form->field($model, 'sample_type') ?>

    <?php // echo $form->field($model, 'genetic_status') ?>

    <?php // echo $form->field($model, 'sampling_method') ?>

    <?php // echo $form->field($model, 'topography') ?>

    <?php // echo $form->field($model, 'site') ?>

    <?php // echo $form->field($model, 'soil_texture') ?>

    <?php // echo $form->field($model, 'soil_color') ?>

    <?php // echo $form->field($model, 'stoniness') ?>

    <?php // echo $form->field($model, 'farming_cultural_practice') ?>

    <?php // echo $form->field($model, 'sowing') ?>

    <?php // echo $form->field($model, 'irrigation_water_src') ?>

    <?php // echo $form->field($model, 'drainage') ?>

    <?php // echo $form->field($model, 'crop_sequence') ?>

    <?php // echo $form->field($model, 'fertilizer_mgt_practice') ?>

    <?php // echo $form->field($model, 'pest_weed_mgt_practice') ?>

    <?php // echo $form->field($model, 'usage_1') ?>

    <?php // echo $form->field($model, 'key_desc_of_cultivar') ?>

    <?php // echo $form->field($model, 'years_in_possession') ?>

    <?php // echo $form->field($model, 'addtl_notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
