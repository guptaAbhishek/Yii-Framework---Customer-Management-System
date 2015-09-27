<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ConsumerSchedule */

$this->title = $model->SCHEDULE_ID;
$this->params['breadcrumbs'][] = ['label' => 'Consumer Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumer-schedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SCHEDULE_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SCHEDULE_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'SCHEDULE_ID',
            'PROFILE',
            'CONSUMER_ID',
            'PROVIDER_ID',
            'TYPE_OF_SERVICE',
            'VENUE',
            'VENUE_LAT',
            'VENUE_LONG',
            'START_DATE',
            'END_DATE',
            'MON',
            'TUE',
            'WED',
            'THURS',
            'FRI',
            'SAT',
            'SUN',
            'PROMO_CODE',
            'RATE',
        ],
    ]) ?>

</div>
