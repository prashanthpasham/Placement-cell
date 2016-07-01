<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/dist/css/AdminLTE.min.css">
   
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    table{
border: 15px solid #25BAE4;
border-collapse:collapse;
margin-top: 5px;
/*margin-left: 250px;*/
}
td{
width: 450px;
height: 80px;
text-align: center;
border: 1px solid #e2e0e0;
font-size: 13px;
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
    .calendar {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}
table.calendar {
    background: #DEF;
    border: 1px solid #999;
    border-radius: 3px;
    margin: auto;
    padding: 5px;
}
.calendar .heading th {
    padding: 10px;
    color: #00620C;
    font-size: 24px;
}
.title {
    color: #A70000;
    font-size: 18px;
}
.calendar .prev_class {
    text-align: left;
    font-size: 18px;
}
.calendar .next_class {
    text-align: right;
    font-size: 18px;
}
.calendar a {
    text-decoration: none;
    color: #A70000;
}
.calendar a:hover {
    text-decoration: underline;
    color: #73B9D1;
}
.calendar .weekdays td {
    padding: 5px;
    color: #A70000;
    font-weight: bold;
    font-size: 24px;
}
.calendar .days td {
    width: 420px;
    height: 90px;
    padding: 2px;
    border: 1px solid #999;
    vertical-align: top;
}
.calendar .days td:hover {
    background: #fff;
}
.calendar .highlight {
    font-weight: bold;
    font-size: 18px;
    color: #002166;
}
.day_event, .this_day {
    margin-bottom: 2px;
    padding: 1px;
}
#form_event {
    width: 300px;
    border: 1px solid #999;
    border-radius: 3px;
    padding: 5px;
    display: none;
}
.selected {
    background: #D893A1;
}
#form_event {
    margin: auto;
    margin-bottom: 10px;
}
.field_set {
    display: ;
    width: 300px;
    background: #DEF;
    margin: auto;
    padding: 20px;
    border: 2px solid #999;
    border-radius: 5px;
}
</style>
    
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>OPMP</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Placement Cell</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
                    <div class="pull-right" style="margin:5px">
                     <a class="btn btn-default btn-default" href="<?php echo base_url(); ?>index.php/Userpage/logout">Logout</a>
                     
                    </div>
                  </li>
                </ul>
              </li>
            
          
            </ul>
          </div>
        </nav>
      </header>
     
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">PLACEMENT HUB</li><br>
            <li>
               <a href="<?php echo base_url(); ?>index.php/Admin" target="_self"><i class="fa fa-th"></i>
                <span>STUDENT INFORMATION</span>
              </a>
            </li>
<br>
            <li>
              <a href="<?php echo base_url(); ?>"><i class="fa fa-th"></i>
                <span>COMPANY INFORMATION</span>
              </a>
            </li>
           <br>
             
             <li>
             <a href="<?php echo base_url(); ?>">
                <i class="fa fa-th"></i> <span>PLACEMENT INFORMATION</span>
              </a>
            </li>
            <br>
            <li>
             <a href="<?php echo base_url(); ?>index.php/My_calendar/index">
                <i class="fa fa-th"></i>CALENDAR <span></span>
              </a>
            </li>
            <br>
            <li>
             <a href="<?php echo base_url(); ?>index.php/Admin/services">
                <i class="fa fa-th"></i>SERVICES <span></span>
              </a>
            </li>
          
      </aside>
</section>