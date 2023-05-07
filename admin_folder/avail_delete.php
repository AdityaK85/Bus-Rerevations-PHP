<?php 


include 'db_con.php';

if(isset($_GET['deleteid'])){
	$id = $_GET['deleteid'];

	$query = " DELETE FROM available_bus WHERE id=$id ";

	$result = mysqli_query($con, $query);

	
	if($result){
		echo "<script>alert('Deleted');</script>";
		header('location:available_bus.php');
	}else{
		echo "<script>alert('Not Deleted');</script>";
	}
}


?>