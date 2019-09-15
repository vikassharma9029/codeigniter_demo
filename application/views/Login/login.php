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
    <?php include('header.php');?>
       <div class="container">
         <div class="col-lg-7">
            <?php if(!empty($msg= $this->session->flashdata('failed'))):?>
            <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> <?php echo $msg;?> </strong>.
          </div>
          <?php endif;?>

          <?php $form_arr = array(
            'class'=>'form-horizontal');?>
           <!-- <form class="form-horizontal"> -->
              <?php echo form_open('logincheck',$form_arr);?>
  <fieldset>
    <legend>User Login</legend>
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
      </div>
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
<?php echo form_close();?>
         </div>
       </div>
</body>
</html>