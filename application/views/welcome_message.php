<?php

if (isset($this->session->userdata['rol'])) {

header("location: http://gnies.org/index.php/Userpage");
}
?>
<!doctype HTML>
<html>
<head>
<title>Home</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/dist/css/AdminLTE.min.css">
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/iCheck/flat/blue.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

<style type="text/css">
table{
border: 15px solid #25BAE4;
border-collapse:collapse;
margin-top: 50px;
margin-left: 250px;
}
td{
width: 50px;
height: 50px;
text-align: center;
border: 1px solid #e2e0e0;
font-size: 18px;
font-weight: bold;
}
th{
height: 50px;
padding-bottom: 8px;
background:#25BAE4;
font-size: 20px;
}
.prev_sign a, .next_sign a{
color:white;
text-decoration: none;
}
tr.week_name{
font-size: 16px;
font-weight:400;
color:red;
width: 10px;
background-color: #efe8e8;
}
.highlight{
background-color:#25BAE4;
color:white;
height: 27px;
padding-top: 13px;
padding-bottom: 7px;
}
body
{
	background-image: url('<?php echo base_url(); ?>images/max.jpg') ;
	
       -moz-background-size: cover;
-webkit-background-size: cover;
background-size: cover;
background-position: top;
background-repeat: no-repeat !important;
/*background-attachment: fixed;*/
        width:100%;
        height:100%;
     opacity: 0.9;
    filter: alpha(opacity=20);
   overflow: hidden;
  
        
        
}
.modal .modal-dialog {


 
 
  margin-top: 200px;
}
h2 span { 
   color: white; 
   font: bold 50px/35px Helvetica, Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.7);
   padding: 10px; 
}
h2
{  /* font-style: italic; 
	
	font-size: 60px;
	font-weight:normal;
	color: white;
	margin-top: 180px;
	width:auto;*/
	font-size:50px;
	position: absolute; 
   top: 200px;
   left: 0; 
   width: 100%; 
   
 word-wrap: break-word;        
}

@media only screen and (max-width: 600px) {
   
}
/*.modal-header
{
	background-color: #27AE60;
	background-color: white;
}*/
.modal-content
{
/*background-color: lightgrey;*/	
}
/*.modal-footer button
{
	background-color: #27AE60;
	color: white;
}*/
</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <button type="button"  class="btn btn-default navbar-btn"  data-toggle="modal" data-target="#myModal">STUDENT</button>
        <button type="button"  class="btn btn-default navbar-btn" data-toggle="modal" data-target=".bs-example-modal-sm">PLACEMENT CELL</button>
        <button type="button"  class="btn btn-default navbar-btn">COMPANY</button>
   
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="col-md-3"></div>
<div class="col-md-6">
<img src="<?php echo base_url(); ?>images/logo.png" class="img-responsive" style="width:80%;margin-top:10%">
 <!--<h2><span style="background-color:blue"> PLACEMENT</span><span style="background-color:red">HUB</span></h2>-->
 </div>
 <div class="col-md-4">
<!-- <h2><span style="background-color:red">HUB</span></h2>-->
 </div>
 </div>
</div>
</div>
<!-- Modal -->
<?php
$this->load->helper('form');
?>
<?php echo  form_open('Userpage/login'); ?>
<div class="col-md-12">
<div class="col-md-4"></div>
<div class="col-md-2">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>&nbsp;STUDENT LOGIN</center></h4>
      </div><!--modal-header-->
      <div class="modal-body">
      
        <a href="#" class="list-group-item">
                    
             
                  
        <input type="text" name="rollno" id="rollno" class="form-control" placeholder="Rollnumber" required>
       <br>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </a>
       
      </div><!--modal-body -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-default">Login</button>
         <?php echo form_close(); ?>
         <a href="<?php echo base_url(); ?>index.php/Signup/changepwd" style="float:left">Forgot your Password?</a>
         <input type="button" class="btn btn-default" value="Signup" onclick="window.location.href='<?php echo base_url(); ?>index.php/Welcome/reg'" />
         <!--
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Welcome/signup" target="_self">SignUp </a></button>
        -->
</div><!--modal footer-->
      </div><!--content -->
    </div><!--dialog -->
  </div><!--fade -->
  </div><!--col-md-4-->
  <div class="col-md-4"></div>
</div><!--col-md-12-->
<?php echo  form_open('Admin/admin'); ?>
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><center>&nbsp;ADMIN LOGIN</center></h4>
      </div><!--modal-header-->
      <div class="modal-body">
      
      	
        <a href="#" class="list-group-item">
                    
             
                  
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
       <br>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </a>
      </div><!--modal-body -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-default">Login</button>
         <?php echo form_close(); ?>
         <!--
         <a href="<?php echo base_url(); ?>index.php/Signup/changepwd" style="float:left">Forgot your Password?</a>
         
         <input type="button" class="btn btn-default" value="Signup" onclick="window.location.href='<?php echo base_url(); ?>index.php/Welcome/reg'" />
       
        <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>index.php/Welcome/signup" target="_self">SignUp </a></button>
        -->
</div><!--modal footer-->
    </div>
  </div>
</div>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>