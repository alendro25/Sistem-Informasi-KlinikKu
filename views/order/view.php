<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Pegawai; // Tambahan baru
use app\models\Personal; // Tambahan baru

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = $model->id_order;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_order' => $model->id_order], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_order' => $model->id_order], [
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
            'id_order',
            // 'id_pegawai',
            // 'id_pegawai',
            // 'id_biodata',
            'pegawai.personal.nama_lengkap',
            'biodata.nama',
            'obat.nama_obat',
            'tindakan.nama_tindakan',
        ],
    ]) ?>

</div>
