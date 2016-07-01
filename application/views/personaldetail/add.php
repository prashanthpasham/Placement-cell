<?php echo validation_errors(); ?>

<?php echo form_open('personaldetail/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="rollno" class="col-md-4 control-label">Rollno</label>
		<div class="col-md-8">
			<input type="text" name="rollno" value="<?php echo $this->input->post('rollno'); ?>" class="form-control" id="rollno" />
		</div>
	</div>
	<div class="form-group">
		<label for="branch" class="col-md-4 control-label">Branch</label>
		<div class="col-md-8">
			<input type="text" name="branch" value="<?php echo $this->input->post('branch'); ?>" class="form-control" id="branch" />
		</div>
	</div>
	<div class="form-group">
		<label for="ypass" class="col-md-4 control-label">Ypass</label>
		<div class="col-md-8">
			<input type="text" name="ypass" value="<?php echo $this->input->post('ypass'); ?>" class="form-control" id="ypass" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="phoneno" class="col-md-4 control-label">Phoneno</label>
		<div class="col-md-8">
			<input type="text" name="phoneno" value="<?php echo $this->input->post('phoneno'); ?>" class="form-control" id="phoneno" />
		</div>
	</div>
	<div class="form-group">
		<label for="address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<input type="text" name="address" value="<?php echo $this->input->post('address'); ?>" class="form-control" id="address" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>