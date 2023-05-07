<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <title>Miri UI Kit - Login</title>

    <!-- Vendor css -->
    <link rel="stylesheet" href="src/vendors/@mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="src/css/miri-ui-kit-free.css">
    <link rel="stylesheet" href="assets/css/demo.css">


    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="newCss/assets/bundles/sweetalert/sweetalert.min.js"></script>
    <script src="newCss/assets/js/page/sweetalert.js"></script>
</head>

<body class="login-page">
    <header class="miri-ui-kit-header header-no-bg-img header-navbar-only">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
            <a class="navbar-brand" href="index.php"><img src="logo.png" class="mx-1" alt="logo">Welcome /<a class="text-white font-weight-light" href="/Bus_seat_reservation/admin_folder/login.php"  >Admin Login</a></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miriUiKitNavbar" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="miriUiKitNavbar">
                    <div class="navbar-nav ml-auto">


                        <li class="nav-item">

                            <a class="nav-link nav-icon icon-fb" href="#"><i class="mdi mdi-facebook-box"></i></a>

                            <a class="nav-link nav-icon icon-twitter" href="#"><i class="mdi mdi-twitter-box"></i></a>

                            <a class="nav-link nav-icon icon-insta" href="#"><i class="mdi mdi-instagram"></i></a>

                        </li>

                        <form action="signup.php" class="form-inline ml-lg-3">
                            <button class="btn btn-danger">Sign-up Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="card login-card">
        <div class="card-body">
            <h3 class="text-center text-white font-weight-light mb-4">LOG IN</h3>
            <form action="#" method="post">
                <div class="form-group">
                    <input type="email" id="email_id" name="email_id" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Password" id="pass_word" name="pass_word" class="form-control">
                </div>
                <input type="submit" name="submit" id="submit" value="Login" class="btn btn-danger btn-block mb-3">
            </form>
            <div class="d-flex justify-content-between mt-4">
                <p class="text-white text-center font-weight-light">Login with</p>
                <p class="text-center mb-0">
                    <a href="#" class="social-login-btn icon-fb"><i class="mdi mdi-facebook-box"></i></a>
                    <a href="#" class="social-login-btn icon-twitter"><i class="mdi mdi-twitter"></i></a>
                    <a href="#" class="social-login-btn icon-gmail"><i class="mdi mdi-gmail"></i></a>
                </p>
            </div>
        </div>
    </div>

    <?php

    session_start();


    include 'db_con.php';

    if (isset($_POST['submit'])) {

        $email_id = $_POST['email_id'];
        $password = $_POST['pass_word'];

        $query = "SELECT * FROM  user_signup  WHERE email_id = '$email_id' AND pass_word = '$password' ";

        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>swal('login Successfully', 'Book Your Journey!', 'success').then(function() {
            location.href = 'index.php'
        });</script>";
            $_SESSION["email_id"] = $email_id;
        } else {
            echo "<script>swal('Invalid Crendetials', 'Check Your details !', 'error');</script>";
        }
    }

    ?>

    <script src="../miri-ui/src/vendors/jquery/dist/jquery.min.js"></script>
    <script src="../miri-ui/src/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../miri-ui/src/vendors/bootstrap/dist/js/bootstrap.min.js"></script>




</body>

</html>