<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; //Tambah baru untuk baca data tabel

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    
    $dataPost=ArrayHelper::map(\app\models\Personal::find()->asArray()->all(), 'id_personal', 'nama_lengkap');
	echo $form->field($model, 'id_personal')
        ->dropDownList(
            $dataPost,
            ['id_personal'=>'nama_lengkap']
        );

    ?>

     <!-- $form->field($model, 'jenis_pegawai')->textInput(['maxlength' => true]) -->
    <?= $form->field($model, 'jenis_pegawai')->dropDownList(
        [
            'Medis'=>'Medis',
            'Non Medis'=>'Non Medis',
        ]
        )?>

    <?= $form->field($model, 'status_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_bergabung')->textInput() ?>

    <?= $form->field($model, 'gaji')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
