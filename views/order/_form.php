<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper; //Tambah baru untuk baca data tabel
use app\models\Order; // Tambahan baru

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    
    $dataPost=ArrayHelper::map(\app\models\Pegawai::find()->asArray()->all(), 'id_pegawai', 'id_personal');
	echo $form->field($model, 'id_pegawai')
        ->dropDownList(
            $dataPost,
            ['id_pegawai'=>'id.pegawai']
        );

    ?>

    <?php 
    
    $dataPost=ArrayHelper::map(\app\models\Biodata::find()->asArray()->all(), 'id_biodata', 'nama');
	echo $form->field($model, 'id_biodata')
        ->dropDownList(
            $dataPost,
            ['id_biodata'=>'nama']
        );

    ?>

    <?php 
    
    $dataPost=ArrayHelper::map(\app\models\Obat::find()->asArray()->all(), 'id_obat', 'nama_obat');
	echo $form->field($model, 'id_obat')
        ->dropDownList(
            $dataPost,
            ['id_obat'=>'nama_obat']
        );

    ?>

    <?php 
    
    $dataPost=ArrayHelper::map(\app\models\Tindakan::find()->asArray()->all(), 'id_tindakan', 'nama_tindakan');
	echo $form->field($model, 'id_tindakan')
        ->dropDownList(
            $dataPost,
            ['id_tindakan'=>'nama_tindakan']
        );

    ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
