<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumerScheduleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumer-schedule-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SCHEDULE_ID') ?>

    <?= $form->field($model, 'PROFILE') ?>

    <?= $form->field($model, 'CONSUMER_ID') ?>

    <?= $form->field($model, 'PROVIDER_ID') ?>

    <?= $form->field($model, 'TYPE_OF_SERVICE') ?>

    <?php // echo $form->field($model, 'VENUE') ?>

    <?php // echo $form->field($model, 'VENUE_LAT') ?>

    <?php // echo $form->field($model, 'VENUE_LONG') ?>

    <?php // echo $form->field($model, 'START_DATE') ?>

    <?php // echo $form->field($model, 'END_DATE') ?>

    <?php // echo $form->field($model, 'MON') ?>

    <?php // echo $form->field($model, 'TUE') ?>

    <?php // echo $form->field($model, 'WED') ?>

    <?php // echo $form->field($model, 'THURS') ?>

    <?php // echo $form->field($model, 'FRI') ?>

    <?php // echo $form->field($model, 'SAT') ?>

    <?php // echo $form->field($model, 'SUN') ?>

    <?php // echo $form->field($model, 'PROMO_CODE') ?>

    <?php // echo $form->field($model, 'RATE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
