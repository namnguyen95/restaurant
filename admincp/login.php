<?php
session_start();
$errors = "";
if(isset($_SESSION['username']) && isset($_SESSION['role'])){
  header("Location:."); 
}
if(isset($_SESSION['error'])){
  $errors = '<div class="row">          
              <div class="col s12 m12 l12">
                 '.$_SESSION["error"].' 
              </div>
            </div>';

  //$_SESSION["error"] = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Đăng nhập</title>

  <!-- Favicons-->
  <link rel="icon" href="public/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="public/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="public/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="public/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="public/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="public/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="public/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form action="." method="post" class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="public/images/login-logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Đăng nhập quản lí nhà hàng</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username" type="text">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" name="password" type="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <?php echo $errors ;

        ?>

        <div class="row">
          <div class="input-field col s12">

            <button type="submit" name="login" class="btn waves-effect waves-light col s12">
              Login
            </button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>
  <!--    Scripts -->
  <!-- jQuery Library -->
  <script type="text/javascript" src="public/js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="public/js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="public/js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="public/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="public/js/plugins.js"></script>

</body>

</html>