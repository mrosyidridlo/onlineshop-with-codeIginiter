<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LOGIN ADMIN</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/css/font-awesome.min.css')?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url(<?php echo base_url('assets/img/gbr-1.jpg')?>); background-size: cover">
       
        <div class="container">


            <form class="form-signin">

              <h2 class="form-signin-heading">Please sign in</h2>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="fa fa-user"></span> Sign in</button>

            </form>

         </div> <!-- /container -->

  
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery/jquery.min.css')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/js/javascript.min.css')?>"></script>
  </body>
</html>