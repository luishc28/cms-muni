<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>addons/css/bootstrap.min.css">
	
	<!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>addons/administrador/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>addons/administrador/dist/css/AdminLTE.min.css">
  	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>addons/administrador/dist/css/skins/_all-skins.min.css">
	<!-- Google Font -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


</head>
<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">
		    <!-- Logo -->
		    <a href="#" class="logo">
		      <!-- mini logo for sidebar mini 50x50 pixels -->
		      <span class="logo-mini"><b>A</b>LT</span>
		      <!-- logo for regular state and mobile devices -->
		      <span class="logo-lg"><b>Admin</b>LTE</span>
		    </a>
		    <!-- Header Navbar: style can be found in header.less -->
		    <nav class="navbar navbar-static-top">
			    <!-- Sidebar toggle button-->
			    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </a>

		      	<div class="navbar-custom-menu">
		        	<ul class="nav navbar-nav">

				        <!-- User Account: style can be found in dropdown.less -->
				        <li class="dropdown user user-menu">
				            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				                <img src="<?php echo base_url();?>addons/administrador/img/user2-160x160.jpg" class="user-image" alt="User Image">
				                <span class="hidden-xs">Alexander Pierce</span>
				            </a>
				            <ul class="dropdown-menu">
				                <!-- User image -->
				                <li class="user-header">
				                    <img src="<?php echo base_url();?>addons/administrador/img/user2-160x160.jpg" class="img-circle" alt="User Image">

					                <p>
					                    Alexander Pierce - Web Developer
					                    <small>Member since Nov. 2012</small>
					                </p>
				                </li>
				                <!-- Menu Footer-->
				                <li class="user-footer">
					                <div class="pull-left">
					                    <a href="#" class="btn btn-default btn-flat">Profile</a>
					                </div>
					                <div class="pull-right">
					                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
					                </div>
				                </li>
				            </ul>
		          		</li>
		        	</ul>
		      	</div>
		    </nav>
		</header>