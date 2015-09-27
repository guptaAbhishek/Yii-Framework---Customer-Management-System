<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Dashboard-Yom Admin Panel';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">

    </head>
    
    <body>


<div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
         <div class="col-sm-3 col-md-3 sidebar-offcanvas" id="sidebar" role="navigation">
           
            <ul class="nav nav-sidebar">
              <li class="active">
                   <?= Html::a(' Home',['/site/index'],['class'=>"glyphicon glyphicon-home profile-usermenu"])?>
              </li>
              <li class="">
                   <?= Html::a(' Provider Registration',['/provider/create'],['class'=>"glyphicon glyphicon-user profile-usermenu"])?>
              </li>
              <li>
                <?= Html::a(' Consumer Registration',['/consumer/create'],['class'=>"glyphicon glyphicon-user"])?>
              </li>
              <li>
                <?= Html::a(' Find Provider',['/provider/index'],['class'=>"glyphicon glyphicon-user"])?>
              </li>
              <li>
                <?= Html::a(' Find Consumer',['/consumer/index'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

              <li>
                <?= Html::a(' Fast Reg. Consumer',['/consumer/create'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

              <li>
                <?= Html::a(' Fast Reg. Provider',['/provider/create'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

              <li>
                <?= Html::a(' Notes Consumer',['/consumer/index'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

              <li>
                <?= Html::a(' Paymet Provider',['/consumer/index'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

              <li>
                <?= Html::a(' Paymet Consumer',['/consumer/index'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

              <li>
                <?= Html::a(' Upload Excel',['/consumer/index'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

              <li>
                <?= Html::a(' Add Properties',['/consumer/index'],['class'=>"glyphicon glyphicon-user"])?>
              </li>

            </ul>
        </div><!--/span-->
        
        <div class="col-sm-8 col-md-9 main">
          
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
          <h1 class="page-header">
            Dashboard
            <p class="lead">(<a href="http://www.bootply.com/128936">with off-canvas sidebar</a>)</p>
          </h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder text-center">
              <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder text-center">
              <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder text-center">
              <img src="//placehold.it/200/6666ff/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder text-center">
              <img src="//placehold.it/200/66ff66/fff" class="center-block img-responsive img-circle" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>
          
          <hr>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>

          <a href="http://www.bootply.com/128936">Get the Source Code</a>
          
      </div><!--/row-->
    </div>
</div><!--/.container-->

<footer>
  <p class="pull-right">©2014 Company</p>
</footer>
        
    <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>