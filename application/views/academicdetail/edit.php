<?php

include 'header.php'; 
?>

<div class="content-wrapper" style="margin-top:5px">
<div class="row">
<?php echo form_open('academicdetail/edit',array("class"=>"form-horizontal")); ?>
         

          <div class="col-md-12">
          	<div class="col-md-3"></div>
          	<div class="col-md-6" style="margin-top:40px">
          	<div class="well">
          	<?php echo validation_errors(); ?>
          		<h3><center>Academic Details</center></h3>
	<div class="form-group">
		<label for="rollno" class="col-md-4 control-label">Rollno</label>
		<div class="col-md-8">
			<input type="text" name="rollno" value="<?php echo ($this->input->post('rollno') ? $this->input->post('rollno') : $academicdetails['rollno']); ?>" class="form-control" id="rollno" readonly />
		</div>
	</div>
	<div class="form-group">
		<label for="school" class="col-md-4 control-label">School</label>
		<div class="col-md-8">
			<input type="text" name="school" value="<?php echo ($this->input->post('school') ? $this->input->post('school') : $academicdetails['school']); ?>" class="form-control" id="school" />
		</div>
	</div>
	<div class="form-group">
		<label for="ssc" class="col-md-4 control-label">Ssc</label>
		<div class="col-md-8">
			<input type="text" name="ssc" value="<?php echo ($this->input->post('ssc') ? $this->input->post('ssc') : $academicdetails['ssc']); ?>" class="form-control" id="ssc" />
		</div>
	</div>
	<div class="form-group">
		<label for="intercollege" class="col-md-4 control-label">Intercollege</label>
		<div class="col-md-8">
			<input type="text" name="intercollege" value="<?php echo ($this->input->post('intercollege') ? $this->input->post('intercollege') : $academicdetails['intercollege']); ?>" class="form-control" id="intercollege" />
		</div>
	</div>
	<div class="form-group">
		<label for="inter" class="col-md-4 control-label">Inter</label>
		<div class="col-md-8">
			<input type="text" name="inter" value="<?php echo ($this->input->post('inter') ? $this->input->post('inter') : $academicdetails['inter']); ?>" class="form-control" id="inter" />
		</div>
	</div>
	<div class="form-group">
		<label for="Btechcollege" class="col-md-4 control-label">Btechcollege</label>
		<div class="col-md-8">
			<input type="text" name="Btechcollege" value="<?php echo ($this->input->post('Btechcollege') ? $this->input->post('Btechcollege') : $academicdetails['Btechcollege']); ?>" class="form-control" id="Btechcollege" />
		</div>
	</div>
	<div class="form-group">
		<label for="percent" class="col-md-4 control-label">Percent</label>
		<div class="col-md-8">
			<input type="text" name="percent" value="<?php echo ($this->input->post('percent') ? $this->input->post('percent') : $academicdetails['percent']); ?>" class="form-control" id="percent" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
	</div>
</div>
</div>
<?php echo form_close(); ?>
</div>
</div>
<?php include 'footer.php'; ?>