<?php

include 'db_con.php';

$bus_id = $_POST['bus_id'];

$query = "SELECT * FROM bus_details WHERE bus_id = '" . $bus_id . "'";

$result = mysqli_query($con, $query);

$bus_name = '';
$bus_no = '';
$bus_seat = '';
$bus_img = '';


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        $bus_name = $row['bus_name'];
        $bus_no = $row['bus_no'];
        $bus_seat = $row['bus_seat'];
        $bus_img = $row['bus_image'];

        $arr = array('bus_name' => $bus_name, 'bus_no' => $bus_no, 'bus_seat' => $bus_seat, 'bus_image' => $bus_img);
        
        echo json_encode($arr);
    }
}
;


