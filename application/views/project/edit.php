<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">
<div class="row">
<div class="col-md-12">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="box box-success" style="margin-top:20px">



    <center><h3> Project Details </h3>  </center>      

<?php foreach ($students as $student): ?>
<?php echo form_open_multipart('project/edit/'.$student['projectid'],array("class"=>"form-horizontal")); ?>
	
	<div class="form-group">
		<label for="ptitle" class="col-md-4 control-label">Ptitle</label>
		<div class="col-md-6">
			<input type="text" name="ptitle" value="<?php echo ($this->input->post('ptitle') ? $this->input->post('ptitle') : $student['ptitle']); ?>" class="form-control" id="ptitle" />
		</div>
	</div>
	<div class="form-group">
		<label for="technology" class="col-md-4 control-label">Technology</label>
		<div class="col-md-6">
			<input type="text" name="technology" value="<?php echo ($this->input->post('technology') ? $this->input->post('technology') : $student['technology']); ?>" class="form-control" id="technology" />
		</div>
	</div>
	<div class="form-group">
		<label for="description" class="col-md-4 control-label">Description</label>
		<div class="col-md-6">
			<textarea name="description" class="form-control" id="description" rows="10" cols="10"><?php echo ($this->input->post('description') ? $this->input->post('description') : $student['description']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<!--<label for="rollno" class="col-md-4 control-label">Rollno</label>-->
		<div class="col-md-6">
			<input type="hidden" name="rollno" value="<?php echo ($this->input->post('rollno') ? $this->input->post('rollno') : $student['rollno']); ?>" class="form-control" id="rollno" readonly />
		</div>
	</div>
	<div class="form-group">
		<!--<label for="rollno" class="col-md-4 control-label">Id</label>-->
		<div class="col-md-6">
			<input type="hidden" name="projectid" value="<?php echo ($this->input->post('rollno') ? $this->input->post('rollno') : $student['projectid']); ?>" class="form-control" id="rollno" readonly />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	<br>
	<?php endforeach ?>
	
	
<?php echo form_close(); ?>
</div>
</div>
</div>
</div><!--row-->
</div>
<?php include 'footer.php'; ?>