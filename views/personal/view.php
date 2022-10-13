<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */

$this->title = $model->id_personal;
$this->params['breadcrumbs'][] = ['label' => 'Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_personal' => $model->id_personal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_personal' => $model->id_personal], [
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
            'id_personal',
            'nama_lengkap',
            'nama_panggilan',
            'jenis_kelamin',
            'tempat_lahir',
            [
                'label' => 'Tangal Lahir',
                'value' => function($model){
                    return date("d-M-Y", strtotime($model->tanggal_lahir));
                }
            ],
            'status_perkawinan',
            'agama',
            'pendidikan',
            'alamat',
            'nik',
            'no_hp',
            'email:email',
        ],
    ]) ?>

</div>
