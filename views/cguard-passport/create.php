<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CguardPassport */

$this->title = 'Create Cguard Passport';
$this->params['breadcrumbs'][] = ['label' => 'Cguard Passports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cguard-passport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
