<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kategori_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exp_obat')->textInput() ?>
    
    <?= $form->field($model, 'stok_obat')->textInput() ?>
    
    <?= $form->field($model, 'harga_obat')->textInput() ?>
    
    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
