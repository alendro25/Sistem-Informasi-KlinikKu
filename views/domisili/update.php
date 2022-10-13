<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Domisili */

$this->title = 'Update Domisili: ' . $model->id_domisili;
$this->params['breadcrumbs'][] = ['label' => 'Domisilis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_domisili, 'url' => ['view', 'id_domisili' => $model->id_domisili]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="domisili-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
