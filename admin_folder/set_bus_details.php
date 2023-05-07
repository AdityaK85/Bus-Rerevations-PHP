
<?php 
include 'db_con.php';

$bus_name = $_POST['bus_name'];
$bus_no = $_POST['bus_no'];
$bus_status = $_POST['bus_status'];
$bus_seat_price = $_POST['bus_seat_price'];
$from_location = $_POST['from_location'];
$to_location = $_POST['to_location'];
$from_date = $_POST['from_date'];
$bus_seat = $_POST['bus_seat'];
$bus_time = $_POST['bus_time'];


$query = "UPDATE available_bus SET ( bus_name ,bus_no, bus_status, bus_seat_price, from_location, to_location, from_date, bus_seat, bus_time) 
VALUES ( '$bus_name' ,'$bus_no', '$bus_status', '$bus_seat_price', '$from_location', '$to_location', '$from_date', '$bus_seat' , '$bus_time')";

mysqli_query($con, $query);

?>