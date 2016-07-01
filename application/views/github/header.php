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
    
    
    <style>
    
.user-page {
    padding: 1em;
}
.repos {
       
    padding-left: 0;
    list-style: none;
    border-top: 1px solid #E5E6F1;
    
}
 .repo {
    margin: 1px 0;
    padding: 0 13px 6px;
    color: #30418C;
    background: #F9F9FC;
    cursor: pointer;
    border-bottom: 1px solid #E5E6F1;
}
 .repo:hover {
    background: #F1F1F4;
}
.repo-name h3 {
    margin: 6px 0 0 0;
}
 .repo-stats {
    margin-top: 6px;
    background: url(../assets/app/arrow.gif) right center no-repeat;
}
 .repo-stats ul {
    list-style: none;
    padding-left: 0;
    height: 47px;
    line-height: 47px;
}
 .repo-stats b {
    display: block;
}
 .repo-stats span {
    display: block;
    font-size: 11px;
    color: #B6BCD7;
    color: rgba(48, 65, 140, 0.40);
}
.repo-stats .repo-watchers,
 .repo-stats .repo-forks {
    text-align: center;
    line-height: 11px;
    margin-top: 15px;
}
 .repo-desc {
    margin: 10px 20px 0 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: #B6BCD7;
    color: rgba(48, 65, 140, 0.40);
}



 .repo-page {
    padding: 1em;
}
.contributors {
    margin-left: -5px;
    margin-right: -5px;
    padding-left: 0;
    list-style: none;
}
 .contributor {
    margin: 5px;
    display: inline-block;
    *display: inline; zoom: 1;
}
 .contributor .avatar {
    position: relative;
    display: block;
}
 .contributor .avatar:link,
 .contributor .avatar:visited,
 .contributor .avatar:hover,
.contributor .avatar:active {
    text-decoration: none;
}
.contributor-name,
 .contributor-contributions {
    position: absolute;
    left: 0;
    margin: 2px;
    padding: 0 4px;
    width: 68px;
    font-size: 11px;
    color: #fff;
    background: #000;
    background: rgba(0,0,0, 0.2);
    text-shadow: 0 1px 0 rgba(0,0,0, 0.4);
}
.contributor-name {
    bottom: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-border-bottom-right-radius: 3px;
    -webkit-border-bottom-left-radius: 3px;
    -moz-border-radius-bottomright: 3px;
    -moz-border-radius-bottomleft: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
 .contributor-contributions {
    top: 0;
    -webkit-border-top-left-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    -moz-border-radius-topleft: 3px;
    -moz-border-radius-topright: 3px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}

td
{
padding:10px;}
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
            <a href="<?php echo base_url(); ?>index.php/My_calendar/github">
                <i class="fa fa-th"></i>CALENDAR <span></span>
              </a>
            </li>
          -->
      </aside>
</section>