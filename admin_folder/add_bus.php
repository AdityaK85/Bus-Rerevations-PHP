<?php
// error_reporting(0);
include 'db_con.php';


if (isset($_POST['submit'])) {
  $bus_name = $_POST['bus_name'];
  $bus_no = $_POST['bus_no'];
  $bus_seat = $_POST['bus_seat'];
  $img_name = $_FILES['bus_image']['name'];
  $img_size = $_FILES['bus_image']['size'];
  $tmp_name = $_FILES['bus_image']['tmp_name'];
  $error = $_FILES['bus_image']['error'];

  if ($error === 0) {
    if ($img_size > 125000) {
      echo "<script>alert('Upload image less than 1MB');</script>";
    } else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array('jpeg', 'jpg', 'png');

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("BUS-", true) . '.' . $img_ex_lc;
        $image_upload_path = 'uploads/' . $new_img_name;
        move_uploaded_file($tmp_name, $image_upload_path);

        $query = "INSERT INTO bus_details(bus_image, bus_name,  bus_no, bus_seat) VALUES ('$new_img_name', $bus_name, '$bus_no', '$bus_seat')";

        mysqli_query($con, $query);
        header("Location: add_bus.php");
      } else {
        $em = "Unknown Error Occured";
        header("Location: add_bus.php?error=$em");
      }
    }
  }
}
;

?>

<?php 
include "header.php"; 
?>
    <!--End topbar header-->
    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <div class="card-title">Add New Bus's</div>
            <hr />
            <form method="post" enctype="multipart/form-data">
              <div class="float-right my-3">
                <img id="blah" style="border-radius:10px" src="http://placehold.it/180" width="370px" height="250px"
                  alt="your image" />
              </div>
              <div class="row ">
                <div class="col-11 my-3">
                  <div class="form-group">
                    <label for="bus_image" class="form-control form-control-lg ">Select Bus Images</label>

                    <input type="file" class="form-control form-control-lg" onchange="readURL(this);" name="bus_image"
                      id='bus_image' placeholder="Enter Your Name" />
                  </div>
                </div>
                <div class="col-11">
                  <div class="form-group">
                    <label for="input-2">Bus Name</label>
                    <input type="text" class="form-control form-control-lg" name="bus_name" id="input-2"
                      placeholder="Enter Your Bus Name" />
                  </div>
                </div>
                <div class="col-11">
                  <div class="form-group">
                    <label for="input-2">Bus Number</label>
                    <input type="number" class="form-control form-control-lg" name="bus_no" id="input-2"
                      placeholder="Enter Your Email Address" />
                  </div>
                </div>
                <div class="col-11">
                  <div class="form-group">
                    <label for="input-3">Total Seat in Bus</label>
                    <input type="number" name="bus_seat" class="form-control form-control-lg" id="input-3"
                      placeholder="Total Seat in Bus" />
                  </div>
                </div>
              </div>
              <div class="text-right">
                <div class="form-group py-2">
                  <button type="submit" class="btn btn-light px-5 mx-3" name="submit" id="submit">
                    <i class="icon-lock"></i> Register
                  </button>
                </div>
              </div>
            </form>
          </div>

          <!--start overlay-->
          <div class="overlay toggle-menu"></div>
          <!--end overlay-->
        </div>
        <!-- End container-fluid-->
      </div>
      <!--End content-wrapper-->
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i>
      </a>
      <!--End Back To Top Button-->

      <!--Start footer-->
      <?php 
include "footer.php"; 
?>

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

  <script>
    $("#bus_image").hide()


    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $("#blah").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }

    function readsign(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $("#sel_stu_sign").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

