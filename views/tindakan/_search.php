<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TindakanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tindakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'nama_tindakan') ?>

    <?= $form->field($model, 'keterangan_tindakan') ?>

    <?= $form->field($model, 'biaya_tindakan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
