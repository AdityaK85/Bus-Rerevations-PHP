<?php

include "header.php";
?>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">



        <?php
        include 'db_con.php';
        $query = "SELECT * FROM booked_bus ORDER BY id DESC";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>

                <div class="row mt-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="section-body">
                                    <div class="invoice">
                                        <div class="invoice-print">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="invoice-title">
                                                        <h2>Mr/Mrs <?php echo $row['name'] ?></h2>
                                                        <div class="invoice-number">Order #12345</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <address>
                                                                <strong>Billed To:</strong><br>
                                                                <?php echo $row['email'] ?>,<br>
                                                                <?php echo $row['name'] ?><br>
                                                            </address>
                                                        </div>
                                                        <div class="col-md-6 text-md-right">
                                                            <address>
                                                                <strong>Address :</strong><br>
                                                                <?php echo $row['name'] ?><br>
                                                                <?php echo $row['address'] ?><br>
                                                                <?php echo $row['mobile'] ?>,<br>
                                                                <?php echo $row['altphone'] ?>
                                                            </address>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <address>
                                                                <strong>Payment Method:</strong><br>
                                                                Visa ending **** 5687<br>
                                                                RazorPay.com
                                                            </address>
                                                        </div>
                                                        <div class="col-md-6 text-md-right">
                                                            <address>
                                                                <strong>Order Date:</strong><br>
                                                                <span id='date-time'></span><br><br>
                                                            </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <div class="section-title">Travle Summary</div>
                                                    <p class="section-lead">All items here cannot be deleted.</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover table-md">
                                                            <tr>
                                                                <th data-width="40">No</th>
                                                                <th>Bus No</th>
                                                                <th class="text-center">Seat price</th>
                                                                <th class="text-center">Bus Seats</th>
                                                                <th class="text-center">Date</th>
                                                                <th class="text-center">Time</th>
                                                                <th class="text-right">No Of Passangers</th>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $row['id'] ?></td>
                                                                <td><?php echo $row['bus_no'] ?></td>
                                                                <td class="text-center"><?php echo $row['per_seat_price'] ?></td>
                                                                <td class="text-center"><?php echo $row['bus_seat'] ?></td>
                                                                <td class="text-right"><?php echo $row['date'] ?></td>
                                                                <td class="text-right"><?php echo $row['time'] ?></td>
                                                                <td class="text-right"><?php echo $row['no_of_passanger'] ?>-P</td>
                                                            </tr>
                                                        </table>    
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-8">
                                                            <div class="section-title">Payment Method</div>
                                                            <p class="section-lead">The payment method that we provide is to make it easier for you to pay
                                                                invoices.</p>
                                                        </div>
                                                        <div class="col-lg-4 text-right">
                                                            <div class="invoice-detail-item">
                                                                <div class="invoice-detail-name">Subtotal</div>
                                                                <div class="invoice-detail-value"><?php echo $row['total_price'] ?>/-</div>
                                                            </div>
                                                            <hr class="mt-2 mb-2">
                                                            <div class="invoice-detail-item">
                                                                <div class="invoice-detail-name">Total</div>
                                                                <div class="invoice-detail-value invoice-detail-value-lg"><?php echo $row['total_price'] ?>/-</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text-md-right">
                                            <div class="float-lg-left mb-lg-0 mb-3">
                                                <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process
                                                    Payment status -></button>
                                            </div>
                                            <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i><?php echo $row['payment_status'] ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php  }
        }
?>
    </div>
</div>
<!--start overlay-->
<div class="overlay toggle-menu"></div>
<!--end overlay-->

<?php

include "footer.php";
?>

<script>
    var dt = new Date();
    document.getElementById('date-time').innerHTML = dt;
</script>