<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>

    <!-- $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) -->

    <?= $form->field($model, 'jenis_kelamin')->dropDownList(
        [
            'Pria'=>'Pria',
            'Wanita'=>'Wanita',
        ]
        )?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <!-- $form->field($model, 'status_perkawinan')->textInput(['maxlength' => true]) -->

    <?= $form->field($model, 'status_perkawinan')->dropDownList(
        [
            'Belum Menikah'=>'Belum Menikah',
            'Menikah'=>'Menikah',
            'Bercerai'=>'Bercerai',
        ]
        )?>

    <!-- $form->field($model, 'agama')->textInput(['maxlength' => true]) -->

    <?= $form->field($model, 'agama')->dropDownList(
        [
            'Islam'=>'Islam',
            'Kristen'=>'Kristen',
            'Katholik'=>'Katholik',
            'Hindu'=>'Hindu',
            'Budha'=>'Budha',
            'Konghuchu'=>'Konghuchu',
        ]
        )?>

    <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
