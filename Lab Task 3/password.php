<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $cpassword = "old";
    $npassword = $rpassword ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($_POST['submit'])){
 
        $npassword = $_POST['npassword'];
        $rpassword = $_POST['rpassword'];
        if($cpassword != $_POST['cpassword']){
            $errmsg="old pass not machted";
        }else{
            if($npassword == $rpassword){
                $errmsg = "Valid password";
            }
            else{
                $errmsg = "Confirm password not machted";
            }

 

        }
        
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
}
?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
       
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
 
        <?php
        echo "<h2>Your Input:</h2>";
        if (isset($errmsg)) {
            
        echo $errmsg;
        echo "<br>";
        }
        echo $npassword;
        echo "<br>";
        echo $rpassword;
        echo "<br>";
        
        ?>
</body>
</html>