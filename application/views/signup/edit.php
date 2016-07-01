<?php echo validation_errors(); ?>

<?php echo form_open('signup/edit/'.$signup['rollno'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $signup['password']); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="pid" class="col-md-4 control-label">Pid</label>
		<div class="col-md-8">
			<input type="text" name="pid" value="<?php echo ($this->input->post('pid') ? $this->input->post('pid') : $signup['pid']); ?>" class="form-control" id="pid" />
		</div>
	</div>
	<div class="form-group">
		<label for="image" class="col-md-4 control-label">Image</label>
		<div class="col-md-8">
			<input type="text" name="image" value="<?php echo ($this->input->post('image') ? $this->input->post('image') : $signup['image']); ?>" class="form-control" id="image" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>