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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>OPMP</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Welcome:<?php echo $this->session->userdata('rol'); ?></b></span>
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
               <a href="<?php echo base_url(); ?>index.php/Personaldetail" target="_self"><i class="fa fa-th"></i>
                <span>PERSONAL DETAILS</span>
              </a>
            </li>

            <li>
              <a href="<?php echo base_url(); ?>index.php/Academicdetail"><i class="fa fa-th"></i>
                <span>ACADEMIC DETAILS</span>
              </a>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-th"></i> <span>PROJECTS</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>  <a href="<?php echo base_url(); ?>index.php/Userpage/project"><i class="fa fa-th"></i>GITHUB PROJECTS</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>index.php/Project" target="_self"> <i class="fa fa-th"></i>ACADEMIC PROJECTS</a></li>
              </ul>
            </li>
            <li>
             <a href="<?php echo base_url(); ?>index.php/Userpage/resume">
                <i class="fa fa-th"></i> <span>RESUME</span>
              </a>
            </li>
            <li>
             <a href="<?php echo base_url(); ?>index.php/Skillset">
                <i class="fa fa-th"></i> <span>TECHNOLOGY STACK</span>
              </a>
            </li>
           <!--
            <li>
           <a href="<?php echo base_url(); ?>index.php/My_calendar/skillset">
                <i class="fa fa-th"></i>CALENDAR <span></span>
              </a>
            </li>-->
      </aside>
</section>