<?php 
include 'header.php';
?>
<div class="content-wrapper" style="margin-top:5px">
<div class="row">
<?php echo form_open_multipart('Personaldetail/edit/'.$personaldetails['rollno'],array("class"=>"form-horizontal")); ?>
    <div class="col-md-12">
    	<div class="col-md-3"></div>
    	<div class="col-md-5">
    		<br>
    		
    <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
    			
    		<center><h3>PERSONAL DETAILS</center></h3><br>
       <div class="list-group">
	
	<div class="thumbnail" style="width:160px;margin-left:150px">
	<center><img id="output" src="<?php echo base_url('uploads/'.$personaldetails['image']); ?>" name="output" width="150"height="150">
         <input type="file" placeholder="image" name="userfile" id="userfile" size="20"   onchange="loadFile(event)"/></center>
         </div>
         <div class="form-group">
		<label for="name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $personaldetails['name']); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="rollno" class="col-md-4 control-label">Rollno</label>
		<div class="col-md-8">
			<input type="text" name="rollno" value="<?php echo ($this->input->post('rollno') ? $this->input->post('rollno') : $personaldetails['rollno']); ?>" class="form-control" id="rollno" readonly/>
		</div>
	</div>
	<div class="form-group">
		<label for="branch" class="col-md-4 control-label">Branch</label>
		<div class="col-md-8">
			<input type="text" name="branch" value="<?php echo ($this->input->post('branch') ? $this->input->post('branch') : $personaldetails['branch']); ?>" class="form-control" id="branch" />
		</div>
	</div>
	<div class="form-group">
		<label for="ypass" class="col-md-4 control-label">Ypass</label>
		<div class="col-md-8">
			<input type="text" name="ypass" value="<?php echo ($this->input->post('ypass') ? $this->input->post('ypass') : $personaldetails['ypass']); ?>" class="form-control" id="ypass" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $personaldetails['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="phoneno" class="col-md-4 control-label">Phoneno</label>
		<div class="col-md-8">
			<input type="text" name="phoneno" value="<?php echo ($this->input->post('phoneno') ? $this->input->post('phoneno') : $personaldetails['phoneno']); ?>" class="form-control" id="phoneno" />
		</div>
	</div>
	<div class="form-group">
		<label for="address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<input type="text" name="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $personaldetails['address']); ?>" class="form-control" id="address" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
    </div><!-- list-group-->
    </div>
	</div>
	</div>
</div>
<?php echo form_close(); ?>
</div>
<?php
include 'footer.php';
?>