
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/bootstrap/css/docs.css" rel="stylesheet">
	<style>
		body{
			margin:20px;
			}
	</style>
	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap-tooltip.js"></script>
  </head>

  <body>
	<div class="well">
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
		<?php echo form_open('app_admin_kabupaten/simpan','class="form-horizontal"'); ?>
		  <div class="control-group">
		  	<legend>Master Kabupaten</legend>
			<label class="control-label" for="nama_hukuman">Nama Kabupaten</label>
			<div class="controls">
			  <input type="text" class="span" name="nama_kabupaten" id="nama_kabupaten" value="<?php echo $nama_kabupaten; ?>" placeholder="Nama Kabupaten" disabled="disabled">
			</div>
		  </div>
		<?php echo form_close(); ?>
	</div>    
	
  </body>
</html>
