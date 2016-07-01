<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student dashboard</title>
     
    
    <!-- Bootstrap Core CSS -->
     <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
     <link href="<?php echo base_url(); ?>assets/bootstrap/css/style.css" rel="stylesheet"> 
      <link href="<?php echo base_url(); ?>assets/bootstrap/css/sb-admin.css" rel="stylesheet"> 
       <link href="<?php echo base_url(); ?>assets/bootstrap/css/timeline.css" rel="stylesheet"> 
    <link href="<?php echo base_url(); ?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/bootstrap/js/sb-admin.js"></script>
   <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>js/morris-data.js"></script>
<link href="<?php echo base_url(); ?>bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <style type="text/css">
  

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

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome:<?php echo $this->session->userdata('rol'); ?></a>
            </div>
            <!-- /.navbar-header -->

             <ul class="nav navbar-top-links navbar-right">
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i>  <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="<?php echo base_url(); ?>index.php/Userpage/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul> 
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Personaldetail" target="_self"><i class="glyphicon glyphicon-user" ></i>&nbsp;Personal Details</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Academicdetail"><i class="glyphicon glyphicon-education"></i>&nbsp;Academic Details </a>
                        </li>
                           <li>
                            <a href="#"><i class="glyphicon glyphicon-briefcase"></i>&nbsp;Projects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/Userpage/project">Githubprojects</a>
                                </li>
                                <li>
                                   <a href="<?php echo base_url(); ?>index.php/Project" target="_self"> academic</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       <!--
                        <li>
                            <a href="<?php echo base_url(); ?>yui/docs/app/app-contributors.html"><i class="glyphicon glyphicon-flag"></i>&nbsp;Achievements </a>
                        </li>-->
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Userpage/resume"><i class="glyphicon glyphicon-education"></i>&nbsp;Resume </a>
                        </li>
                     
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/Userpage/demo"><i class="glyphicon glyphicon-bullhorn"></i>&nbsp;Technology Stack </a>
                        </li>
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    