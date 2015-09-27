<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Qualification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="qualification-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'INSTITUTE')->textInput(array('placeholder'=>'Enter Institute Name'),['maxlength' => true]) ?>                
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'DEGREE')->textInput(array('placeholder'=>'Enter Degree'),['maxlength' => true]) ?>            
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'COURSE_TYPE')->textInput(array('placeholder'=>'Select Course Type'),['maxlength' => true]) ?>            
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'BATCH_START')->textInput(array('placeholder'=>'Batch Start')) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'BATCH_END')->textInput(array('placeholder'=>'Batch End')) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'certificateAwards')->textInput(array('placeholder'=>'Certificates Awards')) ?>
            </div>
        </div>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Complete Profile' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>  
    </div>

    

    <?php ActiveForm::end(); ?>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
