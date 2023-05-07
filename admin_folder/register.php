<?php

include 'db_con.php';

if (isset($_POST['submit'])) {

  $username = $_POST['user_name'];
  $email_id = $_POST['user_email'];
  $password = $_POST['password'];

  $query = "INSERT INTO admin_login(user_name, user_email, password) VALUES ('$username', '$email_id', '$password')";

  $result = mysqli_query($con, $query);

  if ($result) {
    echo "<script>alert('Succesfully Register');</script>";
    header("Location: login.php");
  } else {
    echo "<script>alert('Try Again Later');</script>";
  }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- end loader -->

  <!-- Start wrapper-->
  <div id="wrapper">

    <div class="card card-authentication1 mx-auto my-4">
      <form action="#" method="post">
        <div class="card-body">
          <div class="card-content p-2">
            <div class="text-center">
              <img src="assets/images/logo-icon.png" alt="logo icon">
            </div>
            <div class="card-title text-uppercase text-center py-3">Sign Up</div>
            <form>
              <div class="form-group">
                <label for="user_name" class="sr-only">Name</label>
                <div class="position-relative has-icon-right">
                  <input type="text" id="user_name" name="user_name" class="form-control input-shadow" placeholder="Enter Your Name">
                  <div class="form-control-position">
                    <i class="icon-user"></i>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="user_email" class="sr-only">Email ID</label>
                <div class="position-relative has-icon-right">
                  <input type="text" id="user_email" name="user_email" class="form-control input-shadow"
                    placeholder="Enter Your Email ID">
                  <div class="form-control-position">
                    <i class="icon-envelope-open"></i>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">
                  <input type="text" id="password" name="password" class="form-control input-shadow" placeholder="Choose Password">
                  <div class="form-control-position">
                    <i class="icon-lock"></i>
                  </div>
                </div>
              </div>


              <button type="submit" name="submit" id="submit"
                class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
              <div class="text-center mt-3">Sign Up With</div>


            </form>
          </div>
        </div>
      </form>

      <div class="card-footer text-center py-3">
        <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
      </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">

        <p class="mb-0">Gaussion Texture</p>
        <hr>

        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>

        <p class="mb-0">Gradient Background</p>
        <hr>

        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>

      </div>
    </div>
    <!--end color switcher-->

  </div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

</body>

</html>