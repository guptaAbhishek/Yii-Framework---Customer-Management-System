<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConsumerScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consumer Schedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumer-schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Consumer Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SCHEDULE_ID',
            'PROFILE',
            'CONSUMER_ID',
            'PROVIDER_ID',
            'TYPE_OF_SERVICE',
            // 'VENUE',
            // 'VENUE_LAT',
            // 'VENUE_LONG',
            // 'START_DATE',
            // 'END_DATE',
            // 'MON',
            // 'TUE',
            // 'WED',
            // 'THURS',
            // 'FRI',
            // 'SAT',
            // 'SUN',
            // 'PROMO_CODE',
            // 'RATE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
