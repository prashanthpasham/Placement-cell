<?php echo validation_errors(); ?>

<?php echo form_open('skillset/edit/'.$skillset['skillid'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="skill" class="col-md-4 control-label">Skill</label>
		<div class="col-md-8">
			<input type="text" name="skill" value="<?php echo ($this->input->post('skill') ? $this->input->post('skill') : $skillset['skill']); ?>" class="form-control" id="skill" />
		</div>
	</div>
	<div class="form-group">
		<label for="rollno" class="col-md-4 control-label">Rollno</label>
		<div class="col-md-8">
			<input type="text" name="rollno" value="<?php echo ($this->input->post('rollno') ? $this->input->post('rollno') : $skillset['rollno']); ?>" class="form-control" id="rollno" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>