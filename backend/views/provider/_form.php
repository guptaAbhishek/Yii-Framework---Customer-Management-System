<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\CHtml;
use yii\helpers\ArrayHelper;
use app\models\Tabletypeofyoga;
use app\models\Provider;
/* @var $this yii\web\View */
/* @var $model app\models\Provider */
/* @var $form yii\widgets\ActiveForm */
?>
<link href="css/multiple-select.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/select2/4.0.0/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<div class="provider-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'NAME')->textInput(array('placeholder'=>'Provider Name'),['maxlength' => true]);?>            
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'EMAIL_ADDRESS')->textInput(array('placeholder'=>'Email Address'),['maxlength' => true]);?>            
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'GENDER')->dropDownList(['Gender'=>'Select Gender','Male'=>'Male','Female'=>'Female']);?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'PrimaryPhoneNum')->textInput(array('placeholder'=>'Phone Number 1'),['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'SecondaryPhoneNum')->textInput(array('placeholder'=>'Phone Number 2'),['maxlength' => true]) ?>                
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'ReferredBy')->dropDownList(
                    [
                        'Facebook'=>'Facebook',
                        'Google Search'=>'Google Search',   
                        'Quiker'=>'Quiker',
                        'Olx'=>'Olx',
                        'LinkdIn'=>'LinkdIn',
                        'Trainer'=>'Trainer',
                        'Other'=>'Other'
                    ],
                    [
                        'prompt' => 'Referred By'
                    ]
                ) ?>    
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'ProviderIdProof',['inputOptions'=>[
                        'class'=>'form-control','id'=>'idProof'
                    ]]
                )->dropDownList([
                        'Pan Card'=>'Pan Card',
                        'Passport'=>'Passport',   
                        'Voter ID Card'=>'Voter ID Card',
                        'Driving License'=>'Driving License',
                        'Defence ID'=>'Defence ID',
                        'Employee ID Card(issued by govt.)'=>'Employee ID Card(issued by govt.)'
                    ],
                    array('multiple'=>'multiple')
                    ) ?>
            </div>
            <div class="col-md-4">
            <?php $yogaStyleList = ArrayHelper::map(Tabletypeofyoga::find()->asArray()->all(),'TypeOfYogaId','TypeOfYogaName');  ?>
                <?= $form->field($model, 'YogaStyle',['inputOptions'=>[
                    'class'=>'form-control','id'=>'yogaStyle'
                ]])->dropDownList($yogaStyleList,
                array('multiple'=>'multiple')
                ) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'ExperienceYear')->dropDownList([
                    'Select Experience'=>'Select Experience',
                    '0'=>'No Experience',
                    '1'=>'1 Years',
                    '2'=>'2 Years',
                    '3'=>'3 Years',
                    '4'=>'4 Years',
                    '5'=>'5 Years',
                    '6'=>'6 Years',
                    '7'=>'7 Years',
                    '8'=>'8 Years',
                    '9'=>'9 Years',
                    '10+'=>'10+ Years',
                    ]
                ) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'ADDRESS',['inputOptions'=>[
                    'class'=>'form-control','id'=>'autocomplete'
                ]])->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'City')->textInput(array('placeholder'=>'City'),['maxlength' => true]) ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'PreferredLocation',['inputOptions'=>[
                    'class'=>'form-control','id'=>'preferredLocation'
                ]])->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'AboutTrainer')->textarea(array('placeholder'=>'About Trainer'),['rows' => 1]) ?>            
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'NotesByTrainer')->textarea(array('placeholder'=>'Notes By Trainer'),['rows' => 1]) ?>            
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'NextCallDate',['inputOptions'=>[
                'class'=>'form-control','id'=>'nextCallDate']])->textInput(array('placeholder'=>'Next Call Date')) ?>            
            </div>
        </div>

        <?php $daysList = ["Mon"=>"Monday","Tue"=>"Tuesday","Wed"=>"Wednesday","Thu"=>"Thursday"
                            ,"Fri"=>"Friday","Sat"=>"Saturaday","Sun"=>"Sunday"] ?>        
                    <div class="form-group">
                      <label for="year" class="control-label input-group">Number Of Class Per Week</label>  
                        <div class="row" id="numOfClass">
                          <div class="col-xs-3">
                            <select id="class1" class="form-control" name="class1">
                              <option>1 Class</option>
                              <?php 
                                for($i=1000;$i<=5000;$i=$i+500){
                                  echo '<option>'.$i.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <select id="class2" class="form-control" name="class1">
                              <option>2 Class</option>
                              <?php 
                                for($i=1000;$i<=5000;$i=$i+500){
                                  echo '<option>'.$i.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <select id="class3" class="form-control" name="class1">
                              <option>3 Class</option>
                              <?php 
                                for($i=1000;$i<=5000;$i=$i+500){
                                  echo '<option>'.$i.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <select id="class4" class="form-control" name="class1">
                              <option>4 Class</option>
                              <?php 
                                for($i=1000;$i<=5000;$i=$i+500){
                                  echo '<option>'.$i.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <select id="class5" class="form-control" name="class1">
                              <option>5 Class</option>
                              <?php 
                                for($i=1000;$i<=5000;$i=$i+500){
                                  echo '<option>'.$i.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <select id="class6" class="form-control" name="class1">
                              <option>6 Class</option>
                              <?php 
                                for($i=1000;$i<=5000;$i=$i+500){
                                  echo '<option>'.$i.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <select id="class7" class="form-control" name="class1">
                              <option>7 Class</option>
                              <?php 
                                for($i=1000;$i<=5000;$i=$i+500){
                                  echo '<option>'.$i.'</option>';
                                }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    
                <div class="row">
                      <div class="col-md-4">
                      <?php 
                        $daysList = app\models\Provider::getTiming();
                      ?>
                          <?= $form->field($model,'AvailableOn',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'avaialbleOnMon'
                            ]])->dropDownList($daysList,
                        array('multiple'=>'multiple'));?>
                      </div>
                       <div class="col-md-4">
                         <?= $form->field($model,'AvailableOn',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'avaialbleOnTue'
                            ]])->dropDownList($daysList,
                        array('multiple'=>'multiple'));?>
                       </div>
                       <div class="col-md-4">
                         <?= $form->field($model,'AvailableOn',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'avaialbleOnWed'
                            ]])->dropDownList($daysList,
                        array('multiple'=>'multiple'));?>
                       </div> 
                    </div>
                <div class="row">
                  <div class="col-md-4">
                    <?= $form->field($model,'AvailableOn',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'avaialbleOnThu'
                            ]])->dropDownList($daysList,
                        array('multiple'=>'multiple'));?>
                  </div>
                  <div class="col-md-4">
                    <?= $form->field($model,'AvailableOn',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'avaialbleOnFri'
                            ]])->dropDownList($daysList,
                        array('multiple'=>'multiple'));?>
                  </div>
                  <div class="col-md-4">
                    <?= $form->field($model,'AvailableOn',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'avaialbleOnSat'
                            ]])->dropDownList($daysList,
                        array('multiple'=>'multiple'));?>
                  </div>
              </div>      
              <div class="row">
                <div class="col-md-4">
                  <?= $form->field($model,'AvailableOn',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'avaialbleOnSun'
                            ]])->dropDownList($daysList,
                        array('multiple'=>'multiple'));?>  
                </div>
                
              </div>
            <div class="form-group">
                <div class="row">
                    
                </div>
            </div>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places&amp;language=en-AU"></script>
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
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

    <script src="js/jquery.multiple.select.js"></script>

    <script src="https://cdn.jsdelivr.net/select2/4.0.0/js/select2.min.js"></script>

    <script src="js/jquery.datetimepicker.js"></script>
<!-- Google Autocomplete Input Box -->
<script>
  var autocomplete = new google.maps.places.Autocomplete($("#autocomplete")[0], {});

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      console.log(place.address_components);
  });
</script>

<script>
  var autocomplete = new google.maps.places.Autocomplete($("#preferredLocation")[0], {});

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
      var place = autocomplete.getPlace();
      console.log(place.address_components);
  });
</script>


<!-- Multiple Select -->

<script type="text/javascript">
    $("#idProof").select2({
        theme: "classic",
        placeholder:"Select Provider Id Proof"
    });

    $("#yogaStyle").select2({
        theme: "classic",
        placeholder:"Select Yoga Style"
    });
    $("#avaialbleOnMon").select2({
        placeholder:"Mon",
        theme: "classic"
    });

    $("#avaialbleOnTue").select2({
        placeholder:"Tue",
        theme: "classic"
    });

    $("#avaialbleOnWed").select2({
        placeholder:"Wed",
        theme: "classic"
    });


    $("#avaialbleOnThu").select2({
        placeholder:"Thu",
        theme: "classic"
    });

    $("#avaialbleOnFri").select2({
        placeholder:"Fri",
        theme: "classic"
    });

    $("#avaialbleOnSat").select2({
        placeholder:"Sat",
        theme: "classic"
    });
    $("#avaialbleOnSun").select2({
        placeholder:"Sun",
        theme: "classic"
    });


    $("#preferredLocation").select2({
        theme: "classic"
    });

    
</script>

<script type="text/javascript">
    jQuery("#nextCallDate").datetimepicker({
        startDate:'+1971/05/01'
    });

    jQuery("#dateOfBirth").datetimepicker({
        startDate:'+1971/05/01'

    });    
</script>