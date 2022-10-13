<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; //Tambah baru untuk baca data tabel

/* @var $this yii\web\View */
/* @var $model app\models\Biodata */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biodata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usia')->textInput(['maxlength' => true]) ?>

    <?php 
    
    $dataPost=ArrayHelper::map(\app\models\Domisili::find()->asArray()->all(), 'id_domisili', 'nama_domisili');
	echo $form->field($model, 'id_domisili')
        ->dropDownList(
            $dataPost,
            ['id_domisili'=>'nama_domisili']
        );

    ?>

    <br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
