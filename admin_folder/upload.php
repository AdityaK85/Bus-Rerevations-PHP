<?php 

if(isset($_POST['submit']) && isset($_FILES['my_image'])) {

    include "database_con.php"; 



    echo "<script>alert('success');</script>";

    // echo "<pre>";
    // print_r($_FILES['my_image']);
    // echo "</pre>";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];


    if ($error === 0){
        if ($img_size > 125000){
            echo "<script>alert('not more 1mb');</script>";
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex); 

            $allowed_exs = array('jpeg', 'jpg', 'png');

            if (in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $image_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $image_upload_path);
                // insert image in database_con

                $query = "INSERT INTO images(image_url, name, gender, age) VALUES('$new_img_name', '$name', '$gender', '$age' )";

                mysqli_query($con, $query); 
                header("Location: test.php");

            }else {
                $em = "Unknown error occured";
                header("Location: test.php?error=$em");
            }
        }
    }

} else {
    echo `<script>alert("not upload");</script>`;
}


?>