<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<?php include ('firstHeader.php')?>
<form action="/action_page.php">
 <fieldset>
    <legend>Registration:</legend>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="uname">User Name:</label>
    <input type="text" id="uname" name="uname"><br><br>
    <label for="pasword">Password:</label>
    <input type="text" id="password" name="password"><br><br>
    <label for="cpasword">Confirm Password:</label>
    <input type="text" id="cpassword" name="cpassword"><br><br>
    <fieldset>
    <legend>Gender:</legend>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        
    </fieldset> 
    <br>   
    <fieldset>
    <legend>Date of Birth:</legend>
        <input type="date" id="birthday" name="birthday"><br><br>
    </fieldset>
    <br>
    <input type="submit" value="Submit">
 </fieldset>
</form>
<?php include ('footer.php')?>
</body>
</html>