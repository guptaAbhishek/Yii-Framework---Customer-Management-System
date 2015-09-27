<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="images/Blue6.png" />
     <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
<?php 
	if(Yii::$app->user->isGuest){

	}else{
?>
<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Y</b>OM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>YOM</b>Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">                      
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span class="hidden-xs"><?= Yii::$app->user->identity->username;?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p>
                      <?= Yii::$app->user->identity->username;?>
                      <small>Member since Aug. 2015</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <?= Html::a('Sign Out',['/site/logout'],['class'=>"btn btn-default btn-flat",'data-method'=>'post'])?>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

       <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>

            <!-- <li class="treeview">
              <?= Html::a('Provider Registration',['/provider/create'],['class'=>"glyphicon glyphicon-user"])?>
            </li> -->

            <li class="treeview">
              <?= Html::a(' Provider',['/provider/index'],['class'=>"glyphicon glyphicon-user"])?>
            </li>

            <!-- <li class="treeview">
              <?= Html::a('Fast Reg. Provider',['/provider/fastprovider'],['class'=>"glyphicon glyphicon-search"])?>
            </li> -->

           <!--  <li class="treeview">
              <?= Html::a('Consumer Registration',['/consumer/create'],['class'=>"glyphicon glyphicon-search"])?>
            </li> -->

            
            <li class="treeview">
              <?= Html::a(' Consumer',['/consumer/index'],['class'=>"glyphicon glyphicon-user"])?>
            </li>

            <!--  <li class="treeview">
              <?= Html::a('Fast Reg. Consumer',['/consumer/create'],['class'=>"glyphicon glyphicon-search"])?>
            </li>
 -->
            <li class="treeview">
              <?= Html::a(' Upload Excel',['/site/upload'],['class'=>"glyphicon glyphicon-upload"])?>
            </li>

            <li class="treeview">
              <?= Html::a(' Insert Yoga Style',['/tabletypeofyoga/index'],['class'=>"glyphicon glyphicon-upload"])?>
            </li>


            <li class="treeview">
              <?= Html::a(' Google Cloud Messaging',['/gcmusers/index'],['class'=>"glyphicon glyphicon-user"])?>
            </li>

            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-rupee"></i> <span>Payment</span></i>
              </a>
            </li>
            
            <li class="treeview">
              <?= Html::a(' Schedule',['/site/schedule'],['class'=>"glyphicon glyphicon-calendar"])?>
            </li>

            </ul>  
          </section>
        <!-- /.sidebar -->
      </aside>
	<?php }?>
    <?= $content ?>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
