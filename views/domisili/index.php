<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Domisili; // Tambahan baru

/* @var $this yii\web\View */
/* @var $searchModel app\models\DomisiliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Domisilis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domisili-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Domisili', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_domisili',
            'nama_domisili',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Domisili $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_domisili' => $model->id_domisili]);
                 }
            ],
        ],
    ]); ?>


</div>
