<?php
include "header.php";
?>
<!--End topbar header-->
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <section class="section">
      <div class="section-body">
        <div class="card">
          <form class="needs-validation" novalidate="">
            <div class="card-header">
              <div class="text-right">
                <h4>SET BUS'S LOCATIONS</h4>
              </div>
            </div>
            <div class="card-body">
              <div class="float-lg-right">
                <input type="hidden" name="token"
                  value="b3f44c1eb885409c222fdb78c125f5e7050ce4f3d15e8b15ffe51678dd3a33d3a18dd3">
                <img src="http://placehold.it/180" id="bus_image" alt="Select Bus" style="border-radius: 10px;"
                  width="330px" height="170px" srcset="">
                <div class="row my-2">
                  <div class="col-6">
                    <label for="">From Date</label>
                    <input type="date" name="from_date" id="from_date" class="form-control">
                  </div>
                  <div class="col-6">
                    <label for="">Start Time</label>
                    <input type="time" name="bus_time" id="bus_time" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Select Bus</label>
                <div class="col-sm-7">
                  <select class="form-control selectric text-center" onchange="show_bus() " id="bus_id" name="bus_id">
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
                  <input type="text" id="bus_no" name="bus_no" readonly class="form-control" required="" />
                  <div class="invalid-feedback">
                    Oh no! Email is invalid.
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Seats</label>
                <div class="col-sm-7">
                  <input type="text" id="bus_seat" readonly class="form-control" />
                  <div class="valid-feedback">Good job!</div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Bus Name</label>
                <div class="col-sm-7">
                  <input type="text" id="bus_name" readonly class="form-control" />
                  <div class="valid-feedback">Good job!</div>
                </div>
              </div>
              <div id="bus_photo"></div>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label">Bus Status</label>
                <div class="col-sm-7">
                  <select class="form-control selectric text-center" id="bus_status" name="bus_status">
                    <option>--select--</option>
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
                  <input type="text" id="bus_seat_price" name="bus_seat_price" class="form-control" />
                  <div class="invalid-feedback">What's your name?</div>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-2 col-form-label">From</label>
                <div class="col-sm-8 mx-lg-5">
                  <input type="text" id="from_location" name="from_location" class="form-control" />
                  <div class="invalid-feedback">What's your name?</div>
                </div>
              </div>
              <div class="form-group row mx-0">
                <label class="col-sm-2 col-form-label">To </label>
                <div class="col-sm-8 mx-lg-5">
                  <input type="text" id="to_location" name="to_location" class="form-control" />
                  <div class="invalid-feedback">What's your name?</div>
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary" onclick="set_bus_location()">Location Set</button>
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
        $("#bus_seat").val(bus_seat)

        document.getElementById('bus_image').src = "/Bus_seat_reservation/admin_folder/uploads/" + bus_image

      }
    });

  }


  function set_bus_location() {
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

<?php

include "footer.php";
?>