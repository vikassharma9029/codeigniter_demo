<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">CodeIgniter</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url('login/register');?>">Register <span class="sr-only">(current)</span></a></li>
        <?php if(!empty($this->session->userdata('user_id'))): ?>
        <li><a href="<?php echo base_url('listing') ?>">UserList</a></li>
        <?php endif;?> </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php $checkdata = $this->session->userdata('user_id'); 
              ?>
        <li><a href="<?php echo !empty($checkdata) ? base_url('login/logout') : base_url('Login');?>"><?php echo !empty($checkdata) ? 'Logout' : 'Login';?></a></li>
      </ul>
    </div>
  </div>
</nav>