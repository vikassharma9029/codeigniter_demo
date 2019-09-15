<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<meta charset="utf-8">
	<title>CodeIgniter Project</title>

</head>
<body>
    <?php include('Login/header.php');?>
       <div class="container">
         <div class="col-lg-7">
            <?php if(!empty($msg= $this->session->flashdata('usercheck'))):?>
            <div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong> <?php echo $msg;?> </strong>.
</div>
<?php endif;?>

          <?php $form_arr = array(
            'class'=>'form-horizontal');?>
           <!-- <form class="form-horizontal"> -->
              <?php echo form_open('login/register_user',$form_arr);?>
  <fieldset>
    <legend>User Registration</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'Username'])?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="Email"> -->
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password'])?>
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
        <textarea class="form-control" name="desc" rows="3" id="textArea"></textarea>
      </div>
    </div>
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
</form>
         </div>
       </div>

  <?php 
	 if(!empty($usr_data))
	echo '<span>Data is successfully inserted </span>';
	?>
</body>
</html>