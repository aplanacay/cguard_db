<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CguardPassport */

$this->title = $model->cguard_id;
$this->params['breadcrumbs'][] = ['label' => 'Cguard Passports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cguard-passport-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cguard_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cguard_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cguard_id',
            'region_no',
            'region_name',
            'collection_no',
            'collectors',
            'institute',
            'date_collected',
            'province',
            'municipality',
            'barangay',
            'sitio_purok',
            'latitude',
            'longitude',
            'altitude',
            'crop',
            'variety',
            'meaning_of_name',
            'language_dialect',
            'date_planted',
            'date_harvested',
            'source_grower_name',
            'contact_info',
            'photograph_no',
            'collecting_src',
            'sample_type',
            'genetic_status',
            'sampling_method',
            'topography',
            'site',
            'soil_texture',
            'soil_color',
            'stoniness',
            'farming_cultural_practice',
            'sowing',
            'irrigation_water_src',
            'drainage',
            'crop_sequence',
            'fertilizer_mgt_practice',
            'pest_weed_mgt_practice',
            'usage_1',
            'key_desc_of_cultivar',
            'years_in_possession',
            'addtl_notes',
        ],
    ]) ?>

</div>
