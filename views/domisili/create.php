<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Domisili */

$this->title = 'Create Domisili';
$this->params['breadcrumbs'][] = ['label' => 'Domisilis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domisili-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
