<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tabletypeofyoga;

/* @var $this yii\web\View */
/* @var $model app\models\Consumer */
/* @var $form yii\widgets\ActiveForm */
?>
<link href="css/multiple-select.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/select2/4.0.0/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<div class="consumer-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">

        <div class="row">
            <div class="form-group">
                <div class="col-md-4">
                    <?= $form->field($model, 'NAME')->textInput(array('placeholder'=>'Consumer Name'),['maxlength' => true]) ?>    
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'PHONE_NUM')->textInput(array('placeholder'=>'Phone Number'),['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'EMAIL_ADDRESS')->textInput(array('placeholder'=>'Email Address'),['maxlength' => true]) ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-md-4">
                    <?= $form->field($model, 'ADDRESS',['inputOptions'=>[
                        'class'=>'form-control',
                        'id'=>'autocomplete'
                    ]])->textInput(array('placeholder'=>'Enter Address'),['maxlength' => true]) ?>
                </div>
                <?php 
                    $gender = ["Male"=>"Male","Female"=>"Female"];
                    $trainerGender = ["Any"=>"Any","Male"=>"Male","Female"=>"Female"];
                ?>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                        <?= $form->field($model, 'GENDER')->dropdownList($gender,['prompt'=>'Select Lead Gender']) ?>    
                        </div>

                        <div class="col-md-6">
                            <?= $form->field($model, 'ReqTrainerGender')->dropdownList($trainerGender,['prompt'=>'  Trainer Gender']) ?>
                        </div>    
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-8">
                            <?php
                                $numOfPeopleList = ["1 Male"=>"1 Male","1 Female"=>"1 Female",
                                    "Couple(Male/Female)"=>"Couple(Male/Female)","Group of Male"=>"Group of Male","Group of Female"=>"Group of Female"];
                                ?>
                            <?= $form->field($model,'numOfPeople')->dropdownList($numOfPeopleList);?>        
                        </div>
                        <div class="col-md-4">
                        <?php $countNumPeopleList = ["0"=>"0","1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7",
                        "8"=>"8","9"=>"9","10"=>"10","11"=>"11","12"=>"12","13"=>"13","14"=>"14","15"=>"15+"
                        ]; ?>
                            <?= $form->field($model,'countNumPeople')->dropdownList($countNumPeopleList);?>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-md-4">
                <?php 
                    $yogaStyleList = ArrayHelper::map(Tabletypeofyoga::find()->asArray()->all(),'TypeOfYogaId','TypeOfYogaName');  
                ?>
                <?=  $form->field($model,'yogaStyle[]',['inputOptions'=>[
                    'class'=>'form-control',
                    'id'=>'yogaStyle'
                ]])->dropdownList($yogaStyleList,array('multiple'=>'multiple'),['placeholder'=>'Select Yoga Style'])?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'Source')->dropDownList(
                    [
                        'Urban Clap'=>'Urban Clap',
                        'Near'=>'Near',
                        'Find Yaha'=>'Find Yaha',
                        'Local Oye'=>'Local Oye',
                        'Urban Pro'=>'Urban Pro',
                        'Qyk App'=>'Qyk App',
                        'WhatsApp'=>'WhatsApp',
                        'Facebook'=>'Facebook',
                        'Google Search'=>'Google Search',   
                        'Quiker'=>'Quiker',
                        'Olx'=>'Olx',
                        'LinkdIn'=>'LinkdIn',
                        'Trainer'=>'Trainer',
                        'Client'=>'Client',
                        'Other'=>'Other'
                    ],
                    [
                        'prompt' => 'Referred By'
                    ]
                ) ?> 
                </div>
                <div class="col-md-4">
                <?php $monthlyList = ["500"=>"500","1000"=>"1000","1500"=>"1500","2000"=>"2000","2500"=>"2500","3000"=>"3000",
                "3500"=>"3500","4000"=>"4000","4500"=>"4500","5000"=>"5000","5500"=>"5500","6000"=>"6000","6500"=>"6500","7000"=>"7000",
                "7500"=>"7500","8000"=>"8000","8500"=>"8500","9000"=>"9000","9500"=>"9500",];?>
                    <?= $form->field($model, 'Budget')->dropdownList($monthlyList,['prompt'=>'Select Price Permonth']) ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-md-4">
                    <?= $form->field($model, 'TrailClass',['inputOptions'=>[
                        'class'=>'form-control',
                        'id'=>'trailClassDate'
                    ]])->textInput(array('placeholder'=>'Trail Class Date'),['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'StartDateTime',['inputOptions'=>[
                        'class'=>'form-control',
                        'id'=>'startDateTime'
                    ]])->textInput(array('placeholder'=>'Start Date Time'),['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model,'Notes')->textInput(array('placeholder'=>'Notes'))?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <?php $wayToContactList = ["Phone"=>"Phone","Email"=>"Email","WhatsApp"=>"WhatsApp"]; ?>
                <div class="col-md-4">
                    <?= $form->field($model, 'wayToContact[]',['inputOptions'=>[
                        'class'=>'form-control','id'=>'wayToContact']])->dropdownList(
                    $wayToContactList,
                    array('multiple'=>'multiple'))?>
                </div>
                <div class="col-md-4">
                <?php $leadStatusList = ["It is just a Lead"=>"It is just a Lead","Not Interested"=>"Not Interested","Spoken Once"=>"Spoken Once",
                "Spoken Twice"=>"Spoken Thrice","Qualified Lead"=>"Qualified Lead","Trainer Alloted"=>"Trainer Alloted"];?>
                    <?= $form->field($model, 'leadStatus')->dropdownList($leadStatusList,['prompt'=>'Select Lead Status']) ?>
                </div>
                <div class="col-md-4">
                     <?= $form->field($model, 'nextCallDate',['inputOptions'=>[
                        'class'=>'form-control',
                        'id'=>'nextCallDate'
                    ]])->textInput(array('placeholder'=>'Next Call Date'),['maxlength' => true]) ?>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-4">
                        <?php 
                            $numDays = ["1"=>"1","2"=>"2","3"=>"3","4"=>"4","5"=>"5","6"=>"6","7"=>"7"];
                         ?>
                        <?= $form->field($model,'numOfDaysAWeek')->dropdownList($numDays);?>
                    </div>
                    <div class="col-md-8">
                        <?= $form->field($model,'DaysOfTheWeek',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'daysOfTheWeek']])->dropdownList(app\models\Consumer::getDaysOfTheWeek(),
                        array('multiple'=>'multiple'))
                        ?>
                    </div>
                    
                </div>
               
            </div>
            <div class="col-md-4">
                <?php 
                $timingList = ["5:00"=>"5:00 AM","5:30"=>"5:30 AM","6:00"=>"6:00 AM","6:30"=>"6:30 AM","7:00"=>"7:00 AM",
                "7:30"=>"7:30 AM","8:00"=>"8:00 AM","8:30"=>"8:30 AM","9:00"=>"9:00 AM","9:30"=>"9:30 AM","10:00"=>"10:00 AM",
                "10:30"=>"10:30 AM","11:00"=>"11:00 AM","12:00"=>"12:00 PM","01:00"=>"01:00 PM","01:30"=>"01:30 PM",
                "2:00"=>"2:00 PM","02:30"=>"02:30 PM","03:00"=>"03:00 PM","03:30"=>"03:30 PM","04:00"=>"04:00 PM",
                "5:00"=>"5:00 PM","5:30"=>"5:30 PM","6:00"=>"6:00 PM","6:30"=>"6:30 PM","7:00"=>"7:00 PM",
                "7:30"=>"7:30 PM","8:00"=>"8:00 PM","8:30"=>"8:30 PM","9:00"=>"9:00 PM","9:30"=>"9:30 PM","10:00"=>"10:00 PM",
                "10:30"=>"10:30 PM","11:00"=>"11:00 PM","12:00"=>"12:00 AM"]; ?>

                  <?= $form->field($model, 'Timing',['inputOptions'=>[
                            'class'=>'form-control',
                            'id'=>'timing'
                        ]])->dropdownList($timingList,array('multiple'=>'multiple')) ?>
            </div>

            <div class="col-md-4">
                
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
    $("#wayToContact").select2({
        theme: "classic"
    });
    $("#yogaStyle").select2({
        theme: "classic"
    });
    $("#daysOfTheWeek").select2({
        theme: "classic"
    });

    $("#timing").select2({
        theme:"classic"
    });
    
</script>

<script type="text/javascript">
    jQuery("#startDateTime").datetimepicker({
        startDate:'+1971/05/01'
    });  
    
    jQuery("#endDateTime").datetimepicker({
        startDate:'+1971/05/01'
    });  

    jQuery("#trailClassDate").datetimepicker({
        startDate:'+1971/05/01'
    });  
    jQuery("#nextCallDate").datetimepicker({
        startDate:'+1971/05/01'
    });  
       
    jQuery("#timing").datetimepicker({
        datepicker:false,
        format:'H:i'

    });  
        

</script>