<?php 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YOM Admin | Dashboard</title>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            YOM
            <small>Admin Panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
                       <?php
            /* @var $this yii\web\View */
            /* @var $searchModel app\models\ConsumerSearch */
            /* @var $dataProvider yii\data\ActiveDataProvider */

            $this->title = 'Consumers';
            $this->params['breadcrumbs'][] = $this->title;
            ?>
            <div class="consumer-index">

                <h1><?= Html::encode($this->title) ?></h1>
                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <p>
                    <?= Html::a('Create Consumer', ['create'], ['class' => 'btn btn-success']) ?>
                </p>
                <?php Pjax::begin();?>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'emptyCell'=>'-',
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        //'CONSUMER_ID',
                        'NAME',
                        'PHONE_NUM',
                        'nextCallDate',
                        //'EMAIL_ADDRESS:email',
                        //'PASSWORD',
                        // 'BIRTH_DATE',
                         'ADDRESS',

                        // 'ZONE',
                        // 'GENDER',
                        //'CREATED_DT',
                        // 'LAST_UPDATED_DT',
                        // 'TrailClass',
                         'Notes:ntext',
                         //'Source',
                         //'Budget',
                         'ReqTrainerGender',
                        // 'StartDateTime',
                        // 'EndDateTime',
                        // 'del',
                        // 'wayToContact',
                         'leadStatus',
                         'AddedBy',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{view}{update}{link}',
                            'buttons'=>[
                                'update'=>function($url,$model){
                                    return Html::a(
                                        '<span class="glyphicon glyphicon-user"></span>',
                                        array('consumer/match','id'=>$model->CONSUMER_ID));
                                },
                            ],
                        ],

                    ],
                ]); ?>
                <?php Pjax::end();?>
            </div>         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>YOM 2015-2016 <a href="http://yom.co.in">Yom - Personal Yoga Trainer</a>.</strong>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>



