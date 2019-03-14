<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CobaDulu</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/bootstrap/css/mystyle.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/bootstrap/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/plugins/bootstrap/css/addtochart.css"); ?>"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
     WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand page-scroll">O N A MOESLIM</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1 ">
          <ul class="nav navbar-nav navbar-center">
            <li><a href="#">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Jilbab</a></li>
                  <li><a href="#">Muslimah Syari</a></li>
                  <li><a href="#">Koko</a></li>
                </ul>
            </li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <form class="navbar-form navbar-right">
              <div class="form-group">
                
                <input class="form-control" type="text" name="fa-search" placeholder="Search" ><i class="fa fa-search fa-lg" style="color: white"></i>
                
                  <a href="#"><i class="fa fa-shopping-cart fa-lg"></i></a>
               
                  <?php if(!isset($_SESSION['logged_in'])){ ?> 
                  <a href="<?php echo site_url('login'); ?>"><i class="fa fa-sign-in fa-lg" style="color: white"> Log in</i></a>
                  <?php } else { ?>
                  <a href="<?php echo site_url('logout'); ?>"><i class="fa fa-sign-out fa-lg" style="color: white"> Log out</i></a>
                  <?php } ?>
               
              </div>
          </form>
        </div>
      </div>
    </div>
  <!-- </div> -->
  </nav>
    <!-- akhir navbar -->