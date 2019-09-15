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
    	   <?php if(!empty($msg= $this->session->flashdata('msg'))):?>
            <div class="alert alert-dismissible alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong> <?php echo $msg;?> </strong>.
      </div>
<?php endif;?>
	<table class="table table-striped table-hover" id="main">
  <thead>
    <tr>
      <th>#</th>
      <th>Username</th>
      <th>Password</th>
      <th>Description</th>
      <th>Type</th>
      <th>Status</th>
      <th>AddedOn</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
		<?php if(isset($listing)) {
			$i=1;
			foreach($listing as $list) {?>
		<tr>
			<td><?php echo $i?> </td>
			<td><?php echo $list->username;?></td>
			<td><?php echo $list->password;?></td>
			<td><?php echo $list->desc;?></td>
			<td><?php echo $list->type;?></td>
			<td><?php echo $list->status;?></td>
			<td><?php echo $list->addedon;?></td>
			<td><a href="javascript::" class="btn btn-primary btn-xs" onClick="delete_rec(<?php echo $list->id;?>);">Delete</a> | <a href="<?php echo base_url('useraction/userdata/' . $list->id)?>" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
		<?php $i++;}
	}?>
</tbody>
</table>
</div>
</body>
<script type="text/javascript">
	function delete_rec(u_id){
		var confrm = confirm("Are You Sure? You Wants to Delete?");
		if(confrm == true)
		{
	$(document).ready(function()
	{
		$.ajax({
			type:'POST',
			//data: u_id,
			url : "<?php echo base_url('useraction/userdelete/')?>"+u_id,
			success :  function(msg)
			{
				//$('#main').load("<?php //echo base_url('listing')?> #main");
				$('#main').load("<?php echo base_url('listing')?> #main", function () {
					/// can add another function here
					});
				//$('#delete_status').html(msg);
			}
		});
	});
}
}
</script>
</html>