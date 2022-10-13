<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Domisili */

$this->title = $model->id_domisili;
$this->params['breadcrumbs'][] = ['label' => 'Domisilis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="domisili-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_domisili' => $model->id_domisili], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_domisili' => $model->id_domisili], [
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
            'id_domisili',
            'nama_domisili',
        ],
    ]) ?>

</div>
