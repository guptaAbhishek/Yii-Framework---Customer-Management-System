<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Qualification */

$this->title = 'Update Qualification: ' . ' ' . $model->QUALIFICATION_ID;
$this->params['breadcrumbs'][] = ['label' => 'Qualifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->QUALIFICATION_ID, 'url' => ['view', 'id' => $model->QUALIFICATION_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="qualification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
