

<?php 

$con = mysqli_connect("localhost", "root", "", "bus_management");


if (!$con){
    echo "<script>alert('Connection Failed to connect')</script>";
    exit();
}

?>