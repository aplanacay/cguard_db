<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CguardPassportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'CGUARD Passport';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cguard-passport-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cguard Passport Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="table-responsive">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'cguard_id',
                'region_no',
                'region_name',
                'collection_no',
                'collectors',
                // 'institute',
                // 'date_collected',
                 'province',
                 'municipality',
                 'barangay',
                 'sitio_purok',
                 /*'latitude',
                 'longitude',
                 'altitude',
                 'crop',
                 */'variety',/*
                 'meaning_of_name',
                 'language_dialect',
                 'date_planted',
                 'date_harvested',*/
                // 'source_grower_name',
                // 'contact_info',
                // 'photograph_no',
                // 'collecting_src',
                // 'sample_type',
                // 'genetic_status',
                 'sampling_method',
                 'topography',
                 'site',
                 'soil_texture',
                 'soil_color',
                 'stoniness',
                // 'farming_cultural_practice',
                // 'sowing',
                // 'irrigation_water_src',
                // 'drainage',
                // 'crop_sequence',
                // 'fertilizer_mgt_practice',
                // 'pest_weed_mgt_practice',
                // 'usage_1',
                // 'key_desc_of_cultivar',
                // 'years_in_possession',
                // 'addtl_notes',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>
