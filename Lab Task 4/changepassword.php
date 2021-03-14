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
        <legend>CHANGE PASSWORD</legend>
        <label for="password">Current Password:</label>
        <input type="password" id="cpassword" name="cpassword" ><br><br>
        
        <label for="npassword">New Password:</label>
        <input type="password" id="npassword" name="npassword" ><br><br>
        <label for="rpassword">Retype New Password:</label>
        <input type="password" id="rpassword" name="rpassword" ><br><br> 
        <hr> 
        <input type="submit" value="Submit" name="submit">
        </fieldset>
        </form>
<?php include ('footer.php')?>
</body>
</html>