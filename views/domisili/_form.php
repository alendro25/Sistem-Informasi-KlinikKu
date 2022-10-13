<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Domisili */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="domisili-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_domisili')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
