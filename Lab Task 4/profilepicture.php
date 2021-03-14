<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include ('firstHeader.php')?>
<h3>Account</h3>
    <ul>
            <li><a href="#">Dashboard</li>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">View Profile</a></li>
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Logout</a></li>
        </ul>

        <fieldset>
    <legend>PROFILE PICTURE</legend>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile" id="myfile">
    <hr>
    <button type="submit" name="submit">Submit</button>
    </form>
    </fieldset>
    <?php
        if(isset($_POST['submit'])){
            $fileName = $_FILES['myfile']['name'];
            $fileType = $_FILES['myfile']['type'];
            $fileTmpn = $_FILES['myfile']['tmp_name'];
            $fileErr0 = $_FILES['myfile']['error'];
            $fileName = $_FILES['myfile']['size'];

            move_uploaded_file($fileTmpn, $fileName);
            
        }
    ?>
<?php include ('footer.php')?>  
</body>
</html>