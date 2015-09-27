<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumerSchedule */

$this->title = 'Update Consumer Schedule: ' . ' ' . $model->SCHEDULE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Consumer Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SCHEDULE_ID, 'url' => ['view', 'id' => $model->SCHEDULE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="consumer-schedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
