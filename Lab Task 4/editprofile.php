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

        <form method="" action="">  
        <fieldset>
        <legend>Edit Profile:</legend>
        <label for="uname">Name:</label>
        <input type="text" id="uname" name="uname" ><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <hr>
        
        <label for="birth"> Date of Birth</label><br>
        <input type="date" id="birthday" name="birthday"><br><br>
        <input type="submit" value="Submit">
        
        </fieldset>
        </form>
<?php include ('footer.php')?>        
</body>
</html>