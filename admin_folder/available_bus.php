<?php 

include "header.php"; 
?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bus Location's</h5>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead style="background-color:#8c97e8" >
                  <tr>
                    <th scope="col">ID.</th>
                    <th scope="col">BUS Name.</th>
                    <th scope="col">BUS NO.</th>
                    <th scope="col">BUS SEAT</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">FROM</th>
                    <th scope="col">TO</th>
                    <th scope="col">SEAT PRICE</th>
                    <th scope="col">DATE</th>
                    <th scope="col">TIME</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'db_con.php';
                  $query = "SELECT * FROM available_bus";
                  $result = mysqli_query($con, $query);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <th><?php echo $row['bus_name'] ?></th>
                        <th ><?php echo $row['bus_no'] ?></th>
                        <td><?php echo $row['bus_seat'] ?></td>
                        <td><?php echo $row['bus_status'] ?></td>
                        <td><?php echo $row['from_location'] ?></td>
                        <td><?php echo $row['to_location'] ?></td>
                        <td><?php echo $row['bus_seat_price'] ?> per Rs/-</td>
                        <td><?php echo $row['from_date'] ?></td> 
                        <td><?php echo $row['bus_time'] ?></td>
                        <td><button class="btn btn-warning" ><a href="avail_update.php?updateid=<?php echo $row['id'] ?>" >Update</a></button></td>
                        <td><button  class="btn btn-danger"><a href="avail_delete.php?deleteid=<?php echo $row['id'] ?>" >Delete</a></button></td>
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

  

  <?php 

include "footer.php"; 
?>