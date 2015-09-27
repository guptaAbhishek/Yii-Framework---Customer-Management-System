<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QualificationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="qualification-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'QUALIFICATION_ID') ?>

    <?= $form->field($model, 'PROVIDER_ID') ?>

    <?= $form->field($model, 'DEGREE') ?>

    <?= $form->field($model, 'INSTITUTE') ?>

    <?= $form->field($model, 'COURSE_TYPE') ?>

    <?php // echo $form->field($model, 'BATCH_START') ?>

    <?php // echo $form->field($model, 'BATCH_END') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
