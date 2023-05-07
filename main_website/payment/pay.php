<?php
include('header.php');
include('db_con.php');




?>
<title>www.Travlers.in </title>
<link rel="stylesheet" href="admin_folder/assets/css/style.css">
<link rel="stylesheet" href="admin_folder/assets/css/components.css">
<link rel="stylesheet" href="admin_folder/assets/css/custom.css">
<link rel="stylesheet" href="BUS_SEAT_RESERVATION/admin_folder/assets/css/app.min.css">

<?php include('container.php');

if (isset($_POST['submit'])) {

    $bus_name = $_POST['bus_name'];
    $bus_no = $_POST['bus_no'];
    $from_location = $_POST['from_location_to'];
    $from_date = $_POST['date'];
    $bus_time = $_POST['time'];
    $user_name = $_POST['name'];
    $user_phone = $_POST['mobile'];
    $user_alt = $_POST['altphone'];
    $bus_seat_price = $_POST['per_seat_price'];
    $passanger = $_POST['no_of_passanger'];
    $bus_seat = $_POST['bus_seat'];
    $user_addr = $_POST['address'];
    $mail = $_POST['email'];
    $total_price = $_POST['total_price'];
    $payment_status	= "Done";

  
    $query = "INSERT INTO booked_bus(email, name, mobile, altphone, address, bus_no, bus_seat, no_of_passanger, per_seat_price, from_location_to, date, time, total_price, payment_status)
    VALUES ('$mail', '$user_name','$user_phone', '$user_alt', '$user_addr', '$bus_no', '$bus_seat', '$passanger', '$bus_seat_price', '$from_location', '$from_date', '$bus_time','$total_price', '$payment_status')";

    mysqli_query($con, $query) or die("Insert query failed !");
  
  }

?>
<div class="container">
    <div class="row">
        <h2>Confirm Your Ticket with Razor Pay Payments</h2>
        <br>


        <!-- Invoice -->


        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <div class="invoice">
                        <div class="invoice-print">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice-title">
                                        <h2>Razor Payments </h2>
                                        <div class="invoice-number">Order #12345</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong>Billed To:</strong><br>
                                                <?php echo $user_name ?><br>
                                                <?php echo $user_addr ?>,<br>
                                                Maharastra,<br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="section-title">Passanger Summary</div>
                                    <p class="section-lead">All items here cannot be deleted.</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-md">
                                            <tr>
                                                <th data-width="40">No</th>
                                                <th class="text-">Name</th>
                                                <th class="text-left">No of Passanger's</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">Email.</th>
                                                <th class="text-center">Phone No.</th>
                                                <th class="text-right">Total Rs/-</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><?php echo $user_name ?></td>
                                                <td class="text-center"><?php echo $passanger ?>-P</td>
                                                <td class="text-center"><?php echo $user_addr ?></td>
                                                <td class="text-center"><?php echo $mail ?></td>
                                                <td class="text-center"><?php echo $user_phone ?></td>
                                                <td class="text-right"><?php echo $total_price ?>/-</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- <button id="rzp-button1">Pay</button> -->
                                    <div class="row mt-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-md-right">
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <?php
        require('config.php');
        require('razorpay-php/Razorpay.php');
        // session_start();



        use Razorpay\Api\Api;

        $api = new Api($keyId, $keySecret);
        $orderData = [
            'receipt'         => 3456,
            'amount'          => intval($total_price) * 100,
            'currency'        => 'INR',
            'payment_capture' => 1
        ];
        $razorpayOrder = $api->order->create($orderData);
        $razorpayOrderId = $razorpayOrder['id'];
        // $_SESSION['razorpay_order_id'] = $razorpayOrderId;
        $displayAmount = $amount = $orderData['amount'];
        if ($displayCurrency !== 'INR') {
            $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
            $exchange = json_decode(file_get_contents($url), true);

            $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
        }
        $data = [
            "key"               => $keyId,
            "amount"            => $amount,
            "bus_name"          => $bus_name,
            "bus_no"            => $bus_no,
            "bus_seat"          => $bus_seat,
            "prefill"           => [
                "from_location"     => $from_location,
                "email"             => $mail,
                "user_phone"        => $user_phone,
            ],
            "prefill"           => [
                "user_name"         => $user_name,
                "user_alt"          => $user_alt,
                "bus_seat_price"    => $bus_seat_price,
            ],
            "prefill"           => [
                "passanger"         => $passanger,
                "from_date"         => $from_date,
                "bus_time"          => $bus_time,
            ],
            "prefill"           => [],
            "notes"             => [
                "user_addr"         => $user_addr,
                "merchant_order_id" => "12312321",
            ],
            "theme"             => [
                "color"             => "#F37254"
            ],
            "order_id"          => $razorpayOrderId,
        ];

        if ($displayCurrency !== 'INR') {
            $data['display_currency']  = $displayCurrency;
            $data['display_amount']    = $displayAmount;
        }


        $json = json_encode($data);


        require("checkout/manual.php");
        ?>



    </div>


    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>


    <?php include('footer.php'); ?>