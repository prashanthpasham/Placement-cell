<?php

include 'header.php'; 
?>
 <div class="content-wrapper" style="margin-top:5px">
<div class="row">


<?php echo form_open('skillset/add',array("class"=>"form-horizontal")); ?>
<br>
<br>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-2"></div>
               <div class="col-md-8" style="margin-top:50px">
			<div class="box box-success" >
			<center><h3>Add a Skill</h3></center>
			<hr>
			<?php echo validation_errors(); ?>
			
	<div class="form-group">
	<div class="col-md-2"></div>
	<div class="col-md-6">
		<!--<label for="skill" class="col-md-4 control-label">Skill</label>-->
		
		Skill:<input type="text" name="skill" value="<?php echo $this->input->post('skill'); ?>" class="form-control" id="skill" />
		<input type="radio" name="level" value="Beginner" <?php echo set_radio('beginner','Beginner'); ?> checked>Beginner &nbsp; &nbsp;  &nbsp;
		<input type="radio" name="level" value="Intermediate" <?php echo set_radio('beginner','Intermediate');?>>Intermediate  &nbsp; &nbsp;  &nbsp;
		<input type="radio" name="level" value="Advanced" <?php echo set_radio('beginner','Advanced');?>>Advanced
		</div>
		</div>
	
	<div class="form-group">
		<!--<label for="rollno" class="col-md-4 control-label">Rollno</label>-->
		<div class="col-md-4">
			<input type="hidden" name="rollno" value="<?php echo $this->session->userdata('rol'); ?>" class="form-control" id="rollno" />
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
</div>

<?php echo form_close(); ?>
</div>
</div>
<?php include 'footer.php'; ?>