<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 3</title>
    <style>
        input{
            
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
        <?php
        // define variables and set to empty values
        $nameErr = $passwordErr = "";
        $uname  = $password = "";
        
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["uname"])) {
            $nameErr = "Name is required";
        } else {
            $uname = test_input($_POST["uname"]);
            
            if (!preg_match("/^[a-zA-Z0-9_]{2,}$/",$uname)) {
            $nameErr = "alpha numeric characters, period, dash contain at least two (2) characters allowed";
            }
        }
        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
        } else {
            $password = test_input($_POST["password"]);
            
            if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/",$password)) {
            $passwordErr = "eight (8) characters  at least password one of the special characters  allowed";
            }
        }
        // if(isset($_POST['password'])){
        //     $password = $_POST['password'];
        //     if(strlen($password) <=8 ){
        //         echo "Password should be more than 8 characters";
        //     }
        // }
        
          
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <fieldset>
        <legend>LOGIN:</legend>
        <label for="uname">User name:</label>
        <input type="text" id="uname" name="uname" value="<?php echo $uname;?>"><span class="error">* <?php echo $nameErr;?></span><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $password;?>"><span class="error">* <?php echo $passwordErr;?></span><br><br>
        <hr>
        <input type="checkbox" name="remember" value="remember">
        <label for="click"> Remember Me</label><br>
        <input type="submit" value="Submit">
        <a href="www.nur.me">Forgot Password?</a>
        </fieldset>
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo $uname;
        echo "<br>";
        echo $password;
        echo "<br>";
        ?>
</body>
</html>
