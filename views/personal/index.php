<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Personal; // Tambahan baru


/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_personal',
            'nik',
            'nama_lengkap',
            [
                'label' => 'Tangal Lahir',
                'value' => function($model){
                    return date("d-M-Y", strtotime($model->tanggal_lahir));
                }
            ],
            'agama',
            'alamat',
            'no_hp',
            'jenis_kelamin',
            // 'tanggal_lahir',
            // 'tempat_lahir',
            // 'nama_panggilan',
            //'status_perkawinan',
            //'pendidikan',
            //'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Personal $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_personal' => $model->id_personal]);
                 }
            ],
        ],
    ]); ?>


</div>
