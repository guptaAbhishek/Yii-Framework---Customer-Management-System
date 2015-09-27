<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CONSUMER_ID') ?>

    <?= $form->field($model, 'NAME') ?>

    <?= $form->field($model, 'PHONE_NUM') ?>

    <?= $form->field($model, 'EMAIL_ADDRESS') ?>

    <?= $form->field($model, 'PASSWORD') ?>

    <?php // echo $form->field($model, 'BIRTH_DATE') ?>

    <?php // echo $form->field($model, 'ADDRESS') ?>

    <?php // echo $form->field($model, 'ZONE') ?>

    <?php // echo $form->field($model, 'GENDER') ?>

    <?php // echo $form->field($model, 'CREATED_DT') ?>

    <?php // echo $form->field($model, 'LAST_UPDATED_DT') ?>

    <?php // echo $form->field($model, 'TrailClass') ?>

    <?php // echo $form->field($model, 'Notes') ?>

    <?php // echo $form->field($model, 'Source') ?>

    <?php // echo $form->field($model, 'Budget') ?>

    <?php // echo $form->field($model, 'ReqTrainerGender') ?>

    <?php // echo $form->field($model, 'StartDateTime') ?>

    <?php // echo $form->field($model, 'EndDateTime') ?>

    <?php // echo $form->field($model, 'del') ?>

    <?php // echo $form->field($model, 'wayToContact') ?>

    <?php // echo $form->field($model, 'leadStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
