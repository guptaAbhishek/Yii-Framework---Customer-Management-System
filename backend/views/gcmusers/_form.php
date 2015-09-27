<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gcmusers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gcmusers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emailid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gcmregid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
