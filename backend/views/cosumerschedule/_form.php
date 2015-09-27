<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumerSchedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumer-schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PROFILE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CONSUMER_ID')->textInput() ?>

    <?= $form->field($model, 'PROVIDER_ID')->textInput() ?>

    <?= $form->field($model, 'TYPE_OF_SERVICE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VENUE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VENUE_LAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VENUE_LONG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'START_DATE')->textInput() ?>

    <?= $form->field($model, 'END_DATE')->textInput() ?>

    <?= $form->field($model, 'MON')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TUE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WED')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'THURS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FRI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SAT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SUN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PROMO_CODE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'RATE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
