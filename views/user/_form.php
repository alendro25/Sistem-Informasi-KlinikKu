<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; //Tambah baru untuk baca data tabel

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>

    <?php 
    
    $dataPost=ArrayHelper::map(\app\models\Pegawai::find()->asArray()->all(), 'id_pegawai', 'id_pegawai');
	echo $form->field($model, 'id_pegawai')
        ->dropDownList(
            $dataPost,
            ['id_pegawai'=>'jenis_pegawai']
        );

    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
