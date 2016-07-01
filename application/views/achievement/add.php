<?php echo validation_errors(); ?>

<?php echo form_open('achievement/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="achievement" class="col-md-4 control-label">Achievement</label>
		<div class="col-md-8">
			<input type="text" name="achievement" value="<?php echo $this->input->post('achievement'); ?>" class="form-control" id="achievement" />
		</div>
	</div>
	<div class="form-group">
		<label for="rollno" class="col-md-4 control-label">Rollno</label>
		<div class="col-md-8">
			<input type="text" name="rollno" value="<?php echo $this->input->post('rollno'); ?>" class="form-control" id="rollno" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>