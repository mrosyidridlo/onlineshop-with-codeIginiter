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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <div class="container" >

<!--       <nav>
        <li><a href="register">Register</a></li>

        ?php if(isset($_SESSION['logged_in'])){ ?> 
        
          <li><a href="logout">Logout</a></li>

        ?php } else { ?>

          <li><a href="login">Login</a></li>

        ?php } ?>
      </nav> -->

    <?php echo form_open('login?redirect_to='.$redirect_to); ?>

    
      <div class="row">
      
        <div class="wrap-login col-md-4 col-md-offset-4">
          <img style="width: 120px; height: 120px; border-radius: 100%; position: absolute; top:-60px; left:calc(50% - 60px) " src="<?php echo base_url("assets/img/login.png")?>" >
          <h2 style="margin-top: 60px; text-align: center;">Log In</h2>
          <div class="form-group">
            <label for="email"><i class="fa fa-envelope" style="color: black"></i>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo set_value('email'); ?>"><br>
            <?php echo form_error('email','<div class="alert alert-danger" role="alert">','</div>');?>

            <label for="password"><i class="fa fa-unlock-alt" style="color: black"></i>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password"><br>
            <?php echo form_error('password','<div class="alert alert-danger" role="alert">','</div>');?>

            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>

          </div>
            <button type="submit" name="submit" class="btn-login btn btn-info"><span class="fa fa-sign-in" style="color: white"> Log in</span></button>
            <input type="hidden" name="redirect_to" value="<?php echo $redirect_to; ?>">
        </div>
      </div>
    </div>

    <?php echo form_close(); ?>
            
  
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("assets/plugins/bootstrap/js/bootstrap.min.js") ?>"></script>
  </body>
</html>
