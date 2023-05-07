<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="upload.php" method="post" enctype="multipart/form-data" >

        <input type= "file" name="my_image">
        <input type= "text" name="name">
        <label for="">Gender</label>
        <label for="">Male</label>
        <input type= "radio" value="male" name="gender">
        <label for="">Female</label>
        <input type= "radio" value="female" name="gender">
        <input type= "number" name="age">
        <input type="submit" name="submit" value="upload">
        
            </form>

            <?php 
            include "database_con.php";

            $query = "SELECT * FROM images ORDER BY id DESC";
            $result = mysqli_query($con, $query);


            if (mysqli_num_rows($result) > 0 ){
                while ($row = mysqli_fetch_assoc($result)){ ?>

                    <img src="uploads/<?=$row['image_url']?>" alt="" srcset="" height="50rem" width="50rem">
                    <?php echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Gender : " . $row["gender"]. "Age : " . $row['age']. " ". "<br>"; ?>;

                <?php }
            }

            ?>
</body>
</html>
