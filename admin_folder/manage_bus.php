<?php 

include "header.php"; 
?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Bus Data here</h5>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">BUS ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Bus No</th>
                    <th scope="col">Number of Seat's in bus</th>
                    <th scope="col">Update</th>
                    <th scope="col">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  include 'db_con.php';
                  // $query = "SELECT * FROM bus_details ORDER BY id DESC";
                  $query = "SELECT * FROM bus_details ORDER BY bus_id DESC";
                  $result = mysqli_query($con, $query);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <th scope="row"><?php echo $row['bus_id'] ?></th>
                        <td><img src="uploads/<?= $row['bus_image'] ?>" height="40px" width="90px" style="border-radius:10px" alt="" srcset=""></td>
                        <td><?php echo $row['bus_name'] ?></td>
                        <td><?php echo $row['bus_no'] ?></td>
                        <td><?php echo $row['bus_seat'] ?> - Seats Available</td>
                        <td><button class="btn btn-info">View</button></td>
                        <td><button class="btn btn-warning">Remove</button></td>
                      </tr>
                      
                      <?php }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!--End Row-->

        <?php 

include "footer.php"; 
?>