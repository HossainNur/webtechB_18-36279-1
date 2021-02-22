<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>