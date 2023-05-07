<?php

include 'db_con.php';
$id = $_GET['updateid'];
$query = "SELECT * FROM available_bus WHERE id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$bus_name = $row['bus_name'];
$bus_no = $row['bus_no'];
$bus_status = $row['bus_status'];
$bus_seat_price = $row['bus_seat_price'];
$from_location = $row['from_location'];
$to_location = $row['to_location'];
$from_date = $row['from_date'];
$bus_seat = $row['bus_seat'];
$bus_time = $row['bus_time'];



if (isset($_POST['submit'])) {

    $bus_name = $_POST['bus_name']; 
    $bus_no = $_POST['bus_no'];
    $bus_status = $_POST['bus_status'];
    $bus_seat_price = $_POST['bus_seat_price'];
    $from_location = $_POST['from_location'];
    $to_location = $_POST['to_location'];
    $from_date = $_POST['from_date'];
    $bus_seat = $_POST['bus_seat'];
    $bus_time = $_POST['bus_time'];


    $query = "UPDATE available_bus SET id=$id, bus_name='$bus_name', bus_no='$bus_no', bus_status='$bus_status', bus_seat_price='$bus_seat_price', from_location='$from_location', to_location='$to_location', from_date='$from_date', bus_seat='$bus_seat', bus_time='$bus_time' WHERE id=$id ";

    $result = mysqli_query($con, $query);
    
	if($result){
		echo "<script>alert('Updated');</script>";
		header('location:available_bus.php');
	}else{
		echo "<script>alert('Not Deleted');</script>";
	}
}
;
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
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />
    <!-- external assest -->
    <link rel="stylesheet" href="external_assets/assets/css/components.css" />
    <link rel="stylesheet" href="external_assets/assets/bundles/jquery-selectric/selectric.css" />
    <link rel="stylesheet" href="external_assets/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="external_assets/assets/css/style.css" />
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
        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon" />
                    <h5 class="logo-text">Dashtreme Admin</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="index.html">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                        <small class="badge float-right badge-light">New</small>
                    </a>
                </li>

                <li>
                    <a href="add_bus.php">
                        <i class="zmdi zmdi-bus"></i> <span>Add Bus's</span>
                    </a>
                </li>

                <li>
                    <a href="manage_bus.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i>
                        <span>Manage Bus</span>
                    </a>
                </li>

                <li>
                    <a href="set_bus.php">
                        <i class="zmdi zmdi-grid"></i> <span>Set Bus Location</span>
                    </a>
                </li>

                <li>
                    <a href="available_bus.php">
                        <i class="zmdi zmdi-calendar-check"></i>
                        <span>Available Bus's</span>
                    </a>
                </li>

                <li>
                    <a href="profile.html">
                        <i class="zmdi zmdi-face"></i> <span>Customer</span>
                    </a>
                </li>

                <li>
                    <a href="login.html" target="_blank">
                        <i class="zmdi zmdi-lock"></i> <span>Login</span>
                    </a>
                </li>

                <li>
                    <a href="register.html" target="_blank">
                        <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
                    </a>
                </li>

                <li class="sidebar-header">LABELS</li>
                <li>
                    <a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i>
                        <span>Important</span></a>
                </li>
                <li>
                    <a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Warning</span></a>
                </li>
                <li>
                    <a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i>
                        <span>Information</span></a>
                </li>
            </ul>
        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords" />
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item">
                                <i class="flag-icon flag-icon-gb mr-2"></i> English
                            </li>
                            <li class="dropdown-item">
                                <i class="flag-icon flag-icon-fr mr-2"></i> French
                            </li>
                            <li class="dropdown-item">
                                <i class="flag-icon flag-icon-cn mr-2"></i> Chinese
                            </li>
                            <li class="dropdown-item">
                                <i class="flag-icon flag-icon-de mr-2"></i> German
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                                    alt="user avatar" /></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar">
                                            <img class="align-self-start mr-3" src="https://via.placeholder.com/110x110"
                                                alt="user avatar" />
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                            <p class="user-subtitle">mccoy@example.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <i class="icon-envelope mr-2"></i> Inbox
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <i class="icon-wallet mr-2"></i> Account
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <i class="icon-settings mr-2"></i> Setting
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <i class="icon-power mr-2"></i> Logout
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->
        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <section class="section">
                    <div class="section-body">
                        <div class="card">
                            <form method="post" action="" class="needs-validation" novalidate="">
                                <div class="card-header">
                                    <div class="text-right">
                                        <h4>SET BUS'S LOCATIONS</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="float-lg-right">
                                        <input type="hidden" name="token"
                                            value="b3f44c1eb885409c222fdb78c125f5e7050ce4f3d15e8b15ffe51678dd3a33d3a18dd3">
                                        <img src="http://placehold.it/180" id="bus_image" alt="Select Bus"
                                            style="border-radius: 10px;" width="330px" height="170px" srcset="">
                                        <div class="row my-2">
                                            <div class="col-6">
                                                <label for="">From Date</label>
                                                <input type="date" value="<?php echo $from_date ?>" name="from_date" id="from_date" class="form-control">
                                            </div>
                                            <div class="col-6">
                                                <label for="">Start Time</label>
                                                <input type="time" name="bus_time" value="<?php echo $bus_time ?>" id="bus_time" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Select Bus</label>
                                        <div class="col-sm-7">
                                            <select class="form-control selectric text-center" onchange="show_bus() "
                                                id="bus_id" name="bus_id">
                                                <option>--select--</option>
                                                <?php
                                                include "db_con.php";
                                                $buses = "SELECT bus_id , bus_no from bus_details";
                                                $result = mysqli_query($con, $buses);

                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($arr = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <option value="<?php echo $arr['bus_id'] ?>"><?php echo $arr['bus_no'] ?></option>
                                                    <?php }
                                                }
                                                ?>
                                            </select>
                                            <div class="invalid-feedback">What's your name?</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Bus Number</label>
                                        <div class="col-sm-7">
                                            <input type="text" id="bus_no" name="bus_no" value="<?php echo $bus_no ?>" readonly class="form-control"
                                                required="" />
                                            <div class="invalid-feedback">
                                                Oh no! Email is invalid.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Seats</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="bus_seat" value="<?php echo $bus_seat ?>" id="bus_seat" readonly class="form-control" />
                                            <div class="valid-feedback">Good job!</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Bus Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="bus_name" value="<?php echo $bus_name ?>" id="bus_name" readonly class="form-control" />
                                            <div class="valid-feedback">Good job!</div>
                                        </div>
                                    </div>
                                    <div id="bus_photo"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Bus Status</label>
                                        <div class="col-sm-7">
                                            <select class="form-control selectric text-center" value="<?php echo $bus_status ?>" id="bus_status"
                                                name="bus_status">
                                                <option>--select--</option>
                                                <option selected value="<?php echo $bus_status ?>" ><?php echo $bus_status ?></option>
                                                <option value="Active">Active</option>
                                                <option value="Not-Active">Not Active</option>
                                                <option value="None">None</option>
                                            </select>
                                            <div class="invalid-feedback">What's your name?</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Per Seat Price</label>
                                        <div class="col-sm-7">
                                            <input type="text" value="<?php echo $bus_seat_price ?>" id="bus_seat_price" name="bus_seat_price"
                                                class="form-control" />
                                            <div class="invalid-feedback">What's your name?</div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-0">
                                        <label class="col-sm-2 col-form-label">From</label>
                                        <div class="col-sm-8 mx-lg-5">
                                            <input type="text" value="<?php echo $from_location ?>" id="from_location" name="from_location"
                                                class="form-control" />
                                            <div class="invalid-feedback">What's your name?</div>
                                        </div>
                                    </div>
                                    <div class="form-group row mx-0">
                                        <label class="col-sm-2 col-form-label">To </label>
                                        <div class="col-sm-8 mx-lg-5">
                                            <input type="text" value="<?php echo $to_location ?>" id="to_location" name="to_location"
                                                class="form-control" />
                                            <div class="invalid-feedback">What's your name?</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary" type="submit" name="submit" id="submit" > Update Location Set</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>

                <!-- End container-fluid-->
            </div>
            <!--End content-wrapper-->
            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i>
            </a>
            <!--End Back To Top Button-->

            <!--Start footer-->
            <footer class="footer">
                <div class="container">
                    <div class="text-center">Copyright © 2018 Dashtreme Admin</div>
                </div>
            </footer>
            <!--End footer-->

            <!--start color switcher-->
            <div class="right-sidebar">
                <div class="switcher-icon">
                    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                </div>
                <div class="right-sidebar-content">
                    <p class="mb-0">Gaussion Texture</p>
                    <hr />

                    <ul class="switcher">
                        <li id="theme1"></li>
                        <li id="theme2"></li>
                        <li id="theme3"></li>
                        <li id="theme4"></li>
                        <li id="theme5"></li>
                        <li id="theme6"></li>
                    </ul>

                    <p class="mb-0">Gradient Background</p>
                    <hr />

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
        </div>
        <!--End wrapper-->
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

    <script src="external_assets/assets/js/page/forms-advanced-forms.js"></script>
    <script src="external_assets/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>

        function show_bus() {
            var bus_id = $("#bus_id").val()
            console.log(bus_id)
            $.ajax({
                method: "POST",
                url: "get_bus_details.php",
                data: {
                    bus_id
                },
                success: function (data) {
                    console.log(data)
                    var dataa = $.parseJSON(data)
                    var bus_name = dataa.bus_name
                    var bus_no = dataa.bus_no
                    var bus_seat = dataa.bus_seat
                    var bus_image = dataa.bus_image
                    console.log(dataa.bus_image)
                    $("#bus_name").val(bus_name)
                    $("#bus_no").val('Bus No. ' + bus_no)
                    $("#bus_seat").val('Seats. ' + bus_seat)

                    document.getElementById('bus_image').src = "/Bus_seat_reservation/admin_folder/uploads/" + bus_image

                }
            });

        }


        function update_bus_location() {
            var bus_name = $('#bus_name').val()
            var bus_no = $('#bus_no').val()
            var bus_seat = $('#bus_seat').val()
            var bus_status = $('#bus_status').val()
            var bus_seat_price = $('#bus_seat_price').val()
            var from_location = $('#from_location').val()
            var to_location = $('#to_location').val()
            var from_date = $('#from_date').val()
            var bus_time = $('#bus_time').val()

            console.log(bus_no)

            $.ajax({
                method: "POST",
                url: "set_bus_details.php",
                data: {
                    bus_name,
                    bus_no,
                    bus_seat,
                    bus_status,
                    bus_seat_price,
                    from_location,
                    to_location,
                    from_date,
                    bus_time
                },
                success: function (response) {
                    console.log(response)
                    alert("Location Set")
                }
            });

        }


    </script>


</body>

</html>