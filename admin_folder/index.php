<?php

include "header.php";
?>


<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">

    <!--Start Dashboard Content-->

    <div class="card mt-3">
      <div class="card-content">
        <div class="row row-group m-0">
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa fa-shopping-cart"></i></span></h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Total Orders <span class="float-right">+4.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa fa-usd"></i></span></h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Total Revenue <span class="float-right">+1.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">6200 <span class="float-right"><i class="fa fa-eye"></i></span></h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Visitors <span class="float-right">+5.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">5630 <span class="float-right"><i class="fa fa-envira"></i></span></h5>
              <div class="progress my-3" style="height:3px;">
                <div class="progress-bar" style="width:55%"></div>
              </div>
              <p class="mb-0 text-white small-font">Messages <span class="float-right">+2.2% <i class="zmdi zmdi-long-arrow-up"></i></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-6 col-lg-5">
        <div class="card">
          <div class="card-header">Recent Tables
            <div class="card-action">
              <div class="dropdown">
                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="">All details</i>
                </a>
              </div>
            </div>
          </div>
          <!-- <div class="col-3"> -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush table-borderless">
                <thead>
                  <tr>
                    <th>Buses Name</th>
                    <th>Buses No.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'db_con.php';
                  $query = "SELECT * FROM bus_details ORDER BY bus_id DESC";
                  $result = mysqli_query($con, $query);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?php echo $row['bus_name'] ?></td>
                        <td><?php echo $row['bus_no'] ?></td>
                      </tr>
                  <?php }
                  }
                  ?>
                </tbody>

              </table>
            <!-- </div>s -->
          </div>
          
        </div>
      </div>

      <div class="col-6 col-lg-7">
        <div class="card">
          <div class="card-header">Recent Tables
            <div class="card-action">
              <div class="dropdown">
                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="">All details</i>
                </a>
              </div>
            </div>
          </div>
         
            <div class="table-responsive">
              <table class="table align-items-center table-flush table-borderless">
                <thead>
                  <tr>
                    <th>Available Buses</th>
                    <th>Current Location</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM available_bus";
                  $result = mysqli_query($con, $query);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?php echo $row['bus_no'] ?></td>
                        <td><?php echo $row['from_location'] ?></td>
                        <td><?php echo $row['from_date'] ?></td>
                      </tr>
                  <?php }
                  }
                  ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>


      <div class="col-12 col-lg-12">
        <div class="card">
          <div class="card-header">Recent Tables
            <div class="card-action">
              <div class="dropdown">
                <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                  <i class="">All details</i>
                </a>
              </div>
            </div>
          </div>
         
            <div class="table-responsive">
              <table class="table align-items-center table-flush table-borderless">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>No of Passanger</th>
                    <th>Bus No.</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM booked_bus ORDER BY -id";
                  $result = mysqli_query($con, $query);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['mobile'] ?></td>
                        <td>P-<?php echo $row['no_of_passanger'] ?></td>
                        <td><?php echo $row['bus_no'] ?></td>
                      </tr>
                  <?php }
                  }
                  ?>
                </tbody>
              </table>
          </div>
        </div>
      </div>
    </div>
    <?php

    include "footer.php";
    ?>