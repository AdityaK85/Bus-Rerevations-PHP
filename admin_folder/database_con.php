<?php 

$con = mysqli_connect("localhost", "root", "", "test_db");

if (!$con){
    echo "connection failed";
    exit();
}

?>