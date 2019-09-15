<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<meta charset="utf-8">
	<title>CodeIgniter Project</title>
<style type="text/css">
 .switch {
  position: relative;
  height: 26px;
  width: 120px;
  margin: 5px 0px;
  background: rgba(0, 0, 0, 0.25);
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
}

.switch-label {
  position: relative;
  z-index: 2;
  float: left;
  width: 58px;
  line-height: 26px;
  font-size: 11px;
  color: rgba(255, 255, 255, 0.35);
  text-align: center;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.45);
  cursor: pointer;
}
.switch-label:active {
  font-weight: bold;
}
.switch-input {
  display: none;
}
.switch-input:checked + .switch-label {
  font-weight: bold;
  color: rgba(0, 0, 0, 0.65);
  text-shadow: 0 1px rgba(255, 255, 255, 0.25);
  -webkit-transition: 0.15s ease-out;
  -moz-transition: 0.15s ease-out;
  -ms-transition: 0.15s ease-out;
  -o-transition: 0.15s ease-out;
  transition: 0.15s ease-out;
  -webkit-transition-property: color, text-shadow;
  -moz-transition-property: color, text-shadow;
  -ms-transition-property: color, text-shadow;
  -o-transition-property: color, text-shadow;
  transition-property: color, text-shadow;
}
.switch-input:checked + .switch-label-on ~ .switch-selection {
  left: 60px;
  /* Note: left: 50%; doesn't transition in WebKit */
}

.switch-selection {
  position: absolute;
  z-index: 1;
  top: 2px;
  left: 2px;
  display: block;
  width: 58px;
  height: 22px;
  border-radius: 3px;
  background-color: #65bd63;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #9dd993), color-stop(100%, #65bd63));
  background-image: -webkit-linear-gradient(top, #9dd993, #65bd63);
  background-image: -moz-linear-gradient(top, #9dd993, #65bd63);
  background-image: -ms-linear-gradient(top, #9dd993, #65bd63);
  background-image: -o-linear-gradient(top, #9dd993, #65bd63);
  background-image: linear-gradient(top, #9dd993, #65bd63);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), 0 0 2px rgba(0, 0, 0, 0.2);
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -ms-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out;
}

.switch-yellow .switch-selection {
  background-color: #c4bb61;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #e0dd94), color-stop(100%, #c4bb61));
  background-image: -webkit-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -moz-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -ms-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: -o-linear-gradient(top, #e0dd94, #c4bb61);
  background-image: linear-gradient(top, #e0dd94, #c4bb61);
}


/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>
</head>
<body>
    <?php include('Login/header.php');?>
       <div class="container">
         <div class="col-lg-7">
            <?php $form_arr = array(
            'class'=>'form-horizontal');?>
           <!-- <form class="form-horizontal"> -->
              <?php echo form_open('useraction/edit_user',$form_arr);?>
              <?php if(!empty($user_rec))
              {
              foreach($user_rec as $info)
                 {?>
  <fieldset>
    <legend>User Registration</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'Username','value'=>$info->username])?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Email"> -->
        <?php echo form_hidden('uid',$info->id);?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password','value'=>$info->password])?>
        <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
        <!--<div class="checkbox">
           <label>
            <?php //echo form_checkbox('checkbox','Checkbox',true)?>
            <!-- <input type="checkbox"> Checkbox 
          </label> 
        </div>-->
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">User Detail</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="desc" rows="3" id="textArea"><?php echo $info->desc;?></textarea>
      </div>
    </div>


      <div class="form-group">
        <label for="textArea" class="col-lg-2 control-label">Status</label>
  <div class="col-lg-10">
  <label class="switch">
    <input name="status" type="checkbox" checked="<?php echo $info->status == '0' ? '' : 'checked'?>">
    <span class="slider round"></span>
  </label>
  </div>
  </div>

<!-- <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Status</label>
      <div class="col-lg-10">
<div class="switch switch-yellow">
     
      <input type="radio" class="switch-input" name="view3" value="week3" id="week3" checked>
      <label for="week3" class="switch-label switch-label-off">Active</label>
     
      <input type="radio" class="switch-input" name="view3" value="month3" id="month3">
      <label for="month3" class="switch-label switch-label-on">Inactive</label>
      <span class="switch-selection"></span>
    </div>
  </div>
</div> -->
    <!-- <div class="form-group">
      <label class="col-lg-2 control-label">Status</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Option one is this
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else
          </label>
        </div>
      </div>
    </div> -->
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Selects Type</label>
      <div class="col-lg-10">
        <select class="form-control" name="type" id="select">
         <option><?php echo $info->type;?></option>
          <option>Student</option>
          <option>Employee</option>
          <option>Admin</option>
          <option>Retailer</option>
          <option>Super Admin</option>
        </select>
        <br>
        
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
        <?php echo form_reset(['name'=>'Reset','value'=>'Reset','class'=>'btn btn-default'])?>
        <?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary'])?>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </div>
    </div>
  </fieldset>
  <?php } }?>
</form>
         </div>
       </div>

  <?php 
	 if(!empty($usr_data))
	echo '<span>Data is successfully inserted </span>';
	?>
</body>
</html>