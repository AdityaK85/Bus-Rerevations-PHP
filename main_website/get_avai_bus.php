<?php 

include 'db_con.php';

$id = $_POST['id'];

$query = "SELECT * FROM available_bus WHERE id = '" . $id . "'";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        $bus_name = $row['bus_name'];
        $bus_no = $row['bus_no'];
        $bus_seat = $row['bus_seat'];
        $bus_img = $row['bus_image'];
        $from_location = $row['from_location'];
        $to_location = $row['to_location'];
        $from_date = $row['from_date'];
        $bus_time = $row['bus_time'];

        $arr = array('bus_name' => $bus_name, 'bus_no' => $bus_no, 'bus_seat' => $bus_seat, 'bus_image' => $bus_img, 'from_location'=>$from_location, 'to_location' => $to_location ,'from_date' => $from_date, 'bus_time' => $bus_time);
        
        echo json_encode($arr);
        header("Location: book_bus.php");
    }
}
;

?>