<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CguardPassport */

$this->title = 'Update Cguard Passport: ' . $model->cguard_id;
$this->params['breadcrumbs'][] = ['label' => 'Cguard Passports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cguard_id, 'url' => ['view', 'id' => $model->cguard_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cguard-passport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
