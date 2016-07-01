<?php echo validation_errors(); ?>

<?php echo form_open('academicdetail/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="rollno" class="col-md-4 control-label">Rollno</label>
		<div class="col-md-8">
			<input type="text" name="rollno" value="<?php echo $this->input->post('rollno'); ?>" class="form-control" id="rollno" />
		</div>
	</div>
	<div class="form-group">
		<label for="school" class="col-md-4 control-label">School</label>
		<div class="col-md-8">
			<input type="text" name="school" value="<?php echo $this->input->post('school'); ?>" class="form-control" id="school" />
		</div>
	</div>
	<div class="form-group">
		<label for="ssc" class="col-md-4 control-label">Ssc</label>
		<div class="col-md-8">
			<input type="text" name="ssc" value="<?php echo $this->input->post('ssc'); ?>" class="form-control" id="ssc" />
		</div>
	</div>
	<div class="form-group">
		<label for="intercollege" class="col-md-4 control-label">Intercollege</label>
		<div class="col-md-8">
			<input type="text" name="intercollege" value="<?php echo $this->input->post('intercollege'); ?>" class="form-control" id="intercollege" />
		</div>
	</div>
	<div class="form-group">
		<label for="inter" class="col-md-4 control-label">Inter</label>
		<div class="col-md-8">
			<input type="text" name="inter" value="<?php echo $this->input->post('inter'); ?>" class="form-control" id="inter" />
		</div>
	</div>
	<div class="form-group">
		<label for="Btechcollege" class="col-md-4 control-label">Btechcollege</label>
		<div class="col-md-8">
			<input type="text" name="Btechcollege" value="<?php echo $this->input->post('Btechcollege'); ?>" class="form-control" id="Btechcollege" />
		</div>
	</div>
	<div class="form-group">
		<label for="percent" class="col-md-4 control-label">Percent</label>
		<div class="col-md-8">
			<input type="text" name="percent" value="<?php echo $this->input->post('percent'); ?>" class="form-control" id="percent" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>