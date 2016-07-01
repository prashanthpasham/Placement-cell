<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">
<div class="row">
<?php echo form_open('Userpage/editobjective/'.$objective['rollno'],array("class"=>"form-horizontal")); ?>
    <div class="col-md-12">
    	<div class="col-md-3"></div>
    	<div class="col-md-6">
    		<br>
    		<div class="box box-success" style="margin-top:30px">
    	
    		<center><h3>Resume objective</center></h3>
	  <hr>
	<div class="form-group">
		<!--<label for="rollno" class="col-md-4 control-label">Rollno</label>-->
		<div class="col-md-5">
			<input type="hidden" name="rollno" value="<?php echo ($this->input->post('rollno') ? $this->input->post('rollno') : $objective['rollno']); ?>" class="form-control" id="rollno" readonly/>
		</div>
	</div>
	
	<div class="form-group">
		<!--<label for="objective" class="col-md-4 control-label">Description</label>-->

		<div class="col-md-8">

			<textarea name="objective" rows= "10" cols="20" class="form-control" id="objective" style="margin-left:80px" ><?php echo ($this->input->post('objective') ? $this->input->post('objective') : $objective['objective']); ?></textarea>
		</div>
	</div>
	
	
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
       
    </div>
    <br>
	</div>
	</div>
	
</div>
<?php echo form_close(); ?>
</div>
</div>
<?php
include 'footer.php';
?>