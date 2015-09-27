<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProviderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="provider-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PROVIDER_ID') ?>

    <?= $form->field($model, 'NAME') ?>

    <?= $form->field($model, 'EMAIL_ADDRESS') ?>

    <?= $form->field($model, 'PrimaryPhoneNum') ?>

    <?= $form->field($model, 'SecondaryPhoneNum') ?>

    <?php // echo $form->field($model, 'ProviderIdProof') ?>

    <?php // echo $form->field($model, 'PASSWORD') ?>

    <?php // echo $form->field($model, 'BIRTH_DATE') ?>

    <?php // echo $form->field($model, 'ADDRESS') ?>

    <?php // echo $form->field($model, 'City') ?>

    <?php // echo $form->field($model, 'GENDER') ?>

    <?php // echo $form->field($model, 'ExperienceYear') ?>

    <?php // echo $form->field($model, 'ExperienceMonths') ?>

    <?php // echo $form->field($model, 'CREATED_DT') ?>

    <?php // echo $form->field($model, 'LAST_UPDATED_DT') ?>

    <?php // echo $form->field($model, 'ReferredBy') ?>

    <?php // echo $form->field($model, 'PreferredLocation') ?>

    <?php // echo $form->field($model, 'YogaStyle') ?>

    <?php // echo $form->field($model, 'AboutTrainer') ?>

    <?php // echo $form->field($model, 'TrainerBlackList') ?>

    <?php // echo $form->field($model, 'delete') ?>

    <?php // echo $form->field($model, 'NotesByTrainer') ?>

    <?php // echo $form->field($model, 'NextCallDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
