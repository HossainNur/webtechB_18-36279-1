<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php include ('firstHeader.php')?>
<form method="" action="">  
        <fieldset>
        <legend>LOGIN:</legend>
        <label for="uname">User name:</label>
        <input type="text" id="uname" name="uname" ><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br><br>
        <hr>
        <input type="checkbox" name="remember" value="remember">
        <label for="click"> Remember Me</label><br>
        <input type="submit" value="Submit">
        <a href="www.nur.me">Forgot Password?</a>
        </fieldset>
        </form>
<?php include ('footer.php')?>  
</body>
</html>