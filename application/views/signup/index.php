<html>
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">  

<script src="<?php echo base_url(); ?>jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="<?php echo base_url(); ?>jquery.easing.min.js" type="text/javascript"></script>



<style>
/*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	/*Image only BG fallback*/
	background: rgba(0,0,0,0.3) url('bg.jpg');
	background-color: rgba(0,0,0,0.3); 
overflow:hidden;
}

body {

	font-family: montserrat, arial, verdana;
	height: 100%;
	
	background: url('http://thecodeplayer.com/uploads/media/gs.png');
	
	background: 
		linear-gradient(rgba(196, 102, 0, 0.2), rgba(155, 89, 182, 0.2)), 
		url('http://thecodeplayer.com/uploads/media/gs.png');
		background-size: ;
		overflow:hidden;

}

  #mhead{
  font-family: Georgia !important;
background-color: #f5f5f5;
border: 1px solid #e3e3e3;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
text-align: center; 
font-family: georgia;
/*position: fixed;*/
top: 0px;
width: 100%;
padding: 20px;
} 
</style>
</head>
<script type="text/javascript">
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<div id="mhead"><h2>Online Placement Management System</h2>
	 
<a href="<?php echo base_url(); ?>" class="btn btn-success" style="float:left">Back</a> </div>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<br>
			<br>
			<br>
			<br>
			
			<div class="list-group">
           <?php echo form_open('signup/add',array("class"=>"form-horizontal")); ?>
				<a href="#" class="list-group-item">
					<center><h4>Reset Your Password!</h4></center>

					<?php echo validation_errors(); ?>
			<input type="text" class="form-control" id="rollno" value="<?php echo $this->input->post('rollno'); ?>" name="rollno" placeholder="Rollno" required><br>	
			<input type="password" class="form-control" id="password" value="<?php echo $this->input->post('password'); ?>" name="password" placeholder="Password" required><br>
			<input type="password" class="form-control" id="confirm_password" name="password2" value="<?php echo $this->input->post('password2'); ?>" placeholder="Confirm Password" required><br>	
			<button type="submit" class="btn btn-primary" value="Submit">Submit</button>	
				</a>
			</div>
		</div>
	</div>
	<div>
		<?php echo form_close(); ?>
</body>
</html>