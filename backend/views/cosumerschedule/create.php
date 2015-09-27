<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ConsumerSchedule */

$this->title = 'Create Consumer Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Consumer Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumer-schedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
