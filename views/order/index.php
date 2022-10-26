<?php

use app\models\Obat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Order; // Tambahan baru

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    
        $obat = 'obat.harga_obat';
        $tindakan = 'tindakan.biaya_tindakan';

        $query = (new \yii\db\Query())->from('obat');
        $sum = $query->sum('harga_obat');
        // echo $sum;  


    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_order',
            // 'pegawai.id_personal',
            [
                'label' => 'Nama Dokter',
                'value' => 'pegawai.personal.nama_lengkap',
            ],
            [
                'label' => 'Nama Pasien',
                'value' => 'biodata.nama',
            ],

            'obat.nama_obat',

            'obat.harga_obat',

            [
                'label' => 'Tindakan',
                'value' => 'tindakan.nama_tindakan',
            ],

            'tindakan.biaya_tindakan',

            [
                'label' => 'Total',
                'value' => '',
            ],
            
            [
                'header' => 'Aksi',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Order $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_order' => $model->id_order]);
                 }                 
            ],
        ],
    ]); ?>


</div>
