<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">
 <div class="row">
<div class="col-md-12">
	<br>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="box box-success" style="margin-top:30px">
			<h5><center style="font-size:18px">Add Objective</center></h5>
<?php echo form_open('Userpage/addobjective',array("class"=>"form-horizontal")); ?>
<center><?php echo validation_errors(); ?></center>
	
	
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-6">
			
		<textarea name="objective" rows="10" cols="5" value="<?php echo $this->input->post('objective'); ?>" class="form-control" id="description" ></textarea>
		</div>
	</div>
	<div class="form-group">
		<!--<label for="rollno" class="col-md-4 control-label">Rollno</label>-->
		<div class="col-md-8">
			<input type="hidden" name="rollno" value="<?php echo $this->session->userdata('rol'); ?>" class="form-control" id="rollno" readonly/>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
<br>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>