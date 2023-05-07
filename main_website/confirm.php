<?php


session_start();


include 'db_con.php';
$id = $_GET['book'];
$query = "SELECT * FROM available_bus WHERE id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$bus_name = $row['bus_name'];
$bus_no = $row['bus_no'];
$bus_image = $row['bus_image'];
$bus_status = $row['bus_status'];
$bus_seat_price = $row['bus_seat_price'];
$from_location = $row['from_location'];
$to_location = $row['to_location'];
$from_date = $row['from_date'];
$bus_seat = $row['bus_seat'];
$bus_time = $row['bus_time'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $bus_name ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">+45 345 3324 56789</div>
                            <div class="social">
                                <ul class="social_list">
                                    <li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="user_box ml-auto">
                                <div id="ses" class="user_box_login user_box_link"><a id="email_id" href="#" id="ses"><?php echo $_SESSION["email_id"] ?></a></div>
                                <div class="user_box_login user_box_link"><a href="#" id="signOut" name="signOut">Sign
                                        Out</a></div>
                                <div class="user_box_login user_box_link"><a href="#">login</a></div>
                                <div class="user_box_register user_box_link"><a href="#">register</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
                            </div>
                            <div class="main_nav_container ml-auto">
                                <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="index.php">HOME</a></li>
									<li class="main_nav_item"><a href="blog.php">news</a></li>
									<li class="main_nav_item"><a href="buses.php">Buses</a></li>
									<li class="main_nav_item"><a href="contact.php">contact</a></li>
									<li class="main_nav_item"><a href="find.php">Find My bus</a></li>
                                </ul>
                            </div>
                            <div class="content_search ml-lg-0 ml-auto">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                                            s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                                            C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                                            M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                                            c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                                            c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                                            C-2.019,484.77-2.019,497.865,6.057,505.942z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <form id="search_form" class="search_form bez_1">
                                <input type="search" class="search_content_input bez_1">
                            </form>

                            <div class="hamburger">
                                <i class="fa fa-bars trans_200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                <ul>
                    <li class="menu_item"><a href="index.php">home</a></li>
                    <li class="menu_item"><a href="about.html">about us</a></li>
                    <li class="menu_item"><a href="offers.html">offers</a></li>
                    <li class="menu_item"><a href="blog.html">news</a></li>
                    <li class="menu_item"><a href="#">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact_background.jpg"></div>
            <div class="home_content">
                <div class="home_title"><?php echo $bus_status ?></div>
            </div>
        </div>

        <!-- Contact -->

        <div class="contact_form_section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="payment/pay.php" method="post">
                            <!-- Contact Form -->
                            <div class="contact_form_container">




                                <div class="contact_title text-center">Book the <?php echo $bus_name ?></div>
                                <h4 class="text-center text-white">Personal Details</h4>
                                <form action="#" id="contact_form" class="contact_form text-center">


                                    <input type="hidden" name="bus_name" id="contact_form_email" class="contact_form_email input_field" value="<?php echo $bus_name ?>" placeholder="E-mail" required="required" data-error="Email is required.">

                                    <input type="text" name="email" id="email" class="contact_form_email input_field" value="<?php echo $_SESSION["email_id"] ?>" placeholder="E-mail" required="required" data-error="Email is required.">

                                    <input type="text" name="bus_no" id="bus_no" class="contact_form_email input_field" value="<?php echo $bus_no ?>" placeholder="E-mail" required="required" data-error="Email is required.">

                                    <input type="text" id="name" name="name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">

                                    <input type="text" id="mobile" name="mobile" class="contact_form_name input_field my-3" placeholder="Mobile" required="required" data-error="Name is required.">

                                    <input type="text" id="altphone" name="altphone" class="contact_form_email input_field my-3" value="" placeholder="Alt-phone" required="required" data-error="Email is required.">

                                    <input type="text" id="address" name="address" class="contact_form_subject input_field" placeholder="Address" required="required" data-error="Subject is required.">

                                    <h4 class="text-center text-white my-lg-5 ">Pessager Details</h4>




                                    <input type="text" value="<?php echo $_SESSION["email_id"] ?>" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">

                                    <input type="text" id="bus_seat" name="bus_seat" class="contact_form_email input_field" value="<?php echo $bus_seat ?>" readonly placeholder="E-mail" required="required" data-error="Email is required.">

                                    <div class="row">

                                        <input type="text" id="no_of_passanger" name="no_of_passanger" class="contact_form_name col-3 input_field my-3" placeholder="No of Passanger" required="required" data-error="Name is required.">

                                        <input type="hidden" id="seat" name="seat" class="contact_form_name col-3  input_field my-3" value="<?php echo $bus_seat_price ?>" placeholder="Price" readonly required="required" data-error="Email is required.">
                                        
                                        <input type="text" id="per_seat_price" name="per_seat_price" class="contact_form_name col-3  input_field my-3" value="<?php echo $bus_seat_price . " Per Seat " ?>" placeholder="Price" readonly required="required" data-error="Email is required.">

                                        <input type="text" id="total_price" name="total_price" class="contact_form_name col-3  input_field my-3" value="" placeholder="Total Price" readonly required="required" data-error="Email is required.">

                                        <input type="text" id="from_location_to" name="from_location_to" class="contact_form_name col-4  input_field my-3" value="<?php echo $from_location . "-- To --> " . $to_location ?>" placeholder="Price" readonly required="required" data-error="Email is required.">

                                        <input type="text" id="date" name="date" class="contact_form_name col-6 input_field my-2" value="<?php echo $from_date . " Date " ?>" placeholder="Date" required="required" data-error="Subject is required.">


                                        <input type="text" id="time" name="time" value="<?php echo $bus_time . " Day Timing " ?>" class="contact_form_name col-6 input_field my-2" placeholder="Time" required="required" data-error="Subject is required.">

                                    </div>
                                    <button type="submit" name="submit" value="submit" class="form_submit_button button trans_200">Payments<span></span><span></span><span></span></but>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <!-- About - Image -->

                        <div class="about_image">
                            <img src="images/man.png" alt="">
                        </div>

                    </div>

                    <div class="col-lg-4">

                        <!-- About - Content -->

                        <div class="about_content">
                            <div class="logo_container about_logo">
                                <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
                            </div>
                            <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis
                                vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci
                                eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>
                            <ul class="about_social_list">
                                <li class="about_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="about_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="about_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="about_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li class="about_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-3">

                        <!-- About Info -->

                        <div class="about_info">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div>
                                        <div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div>
                                        <div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_text">2556-808-8613</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div>
                                        <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div>
                                        <div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div>
                                    </div>
                                    <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Google Map -->

        <div class="travelix_map">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_content footer_about">
                                <div class="logo_container footer_logo">
                                    <div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
                                </div>
                                <p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer
                                    eleme ntum orci eu vehicula pretium.</p>
                                <ul class="footer_social_list">
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">blog posts</div>
                            <div class="footer_content footer_blog">

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a>
                                        </div>
                                        <div class="footer_blog_date">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">New destinations for you</a>
                                        </div>
                                        <div class="footer_blog_date">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a>
                                        </div>
                                        <div class="footer_blog_date">Nov 29, 2017</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">tags</div>
                            <div class="footer_content footer_tags">
                                <ul class="tags_list clearfix">
                                    <li class="tag_item"><a href="#">design</a></li>
                                    <li class="tag_item"><a href="#">fashion</a></li>
                                    <li class="tag_item"><a href="#">music</a></li>
                                    <li class="tag_item"><a href="#">video</a></li>
                                    <li class="tag_item"><a href="#">party</a></li>
                                    <li class="tag_item"><a href="#">photography</a></li>
                                    <li class="tag_item"><a href="#">adventure</a></li>
                                    <li class="tag_item"><a href="#">travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">contact info</div>
                            <div class="footer_content footer_contact">
                                <ul class="contact_info_list">
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/placeholder.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/phone-call.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="contact_info_text">2556-808-8613</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/planet-earth.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        

    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="js/contact_custom.js"></script>
    <script>
        var ses = $("#email_id").val();

        $('#ses').hide();
        $('#signOut').hide();

        if (ses == undefined) {
            location.href = "login.php"
        } else {
            $('#ses').show();
            $('#signOut').show();
        }

        // $("#price ,#qty").keyup(function () {
        //     let total = 0;
        //     let prodPrice = $("#price").val();
        //     let prodQty = Number($("#qty").val());

        //     total = prodPrice * prodQty;
        //     $("#total_price").val(total);
        //     total_msg = `Qty : ${prodQty} Price : ${total}`;

        //     $("#allTotal").val(total_msg);

        $("#seat, #no_of_passanger").keyup(function() {
            let total = 0;
            let totalSeatprice = $("#seat").val();
            let bus_seat = $("#bus_seat").val();
            let no_of_pass = Number($("#no_of_passanger").val());
            console.log(totalSeatprice)
            if (no_of_pass <= bus_seat) {
                total = totalSeatprice * no_of_pass
                $("#total_price").val(total)
            } else {
                $("#total_price").val(`Please Enter below ${bus_seat}`)
            }
        })

        $([name = 'seat']).keyup(function() {
            seat = $([name = 'seat']).val()
            console.log(seat)
        })
    </script>


</body>

</html>