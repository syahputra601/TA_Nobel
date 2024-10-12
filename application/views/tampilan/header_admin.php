<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/pages/dashboard.css')?>" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="">CV Pilar Mas</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          
              <li><a href="<?php echo base_url('c_login/logout')?>">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container"/>
      <ul class="mainnav">
        <li><a href="<?php echo base_url('index.php/admin/daftar_barang');?>"><i class="icon-user"></i><span>Data Barang</a></li>
        <li><a href="<?php echo base_url('index.php/admin/daftar_masuk');?>"><i class="icon-user"></i><span>Barang Masuk</a></li>
         <li><a href="<?php echo base_url('index.php/admin/daftar_user');?>"><i class="icon-user"></i><span>User</span> </a> </li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">