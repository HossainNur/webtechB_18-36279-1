<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Task 2</title>
    <style>
     .error {color: #FF0000;}
    </style>
</head>
<body>

      <?php
      // define variables and set to empty values
      $nameErr = $emailErr = $genderErr = $degreeErr = $bloodErr = "";
      $name = $email = $gender = $birth= $degree = $blood = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }
        }
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
        }
          
        if (empty($_POST["birth"])) {
          $birthErr = "Birth Day required";
        } else {
          $birth = test_input($_POST["birth"]);
          
          if (!preg_match ("/^[0-100]*$/", $birth)) {
            $birthlErr = "Invalid birth format";
          }   
        }

        if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } else {
          $gender = test_input($_POST["gender"]);
          if(!isset( $_POST["gender"] ))
          {
            $genderErr = "Fillup gender";
          }
          
        }

        if (empty($_POST["degree"])) {
          $degreeErr = "Degree is required";
        } else {
          $degree = test_input($_POST["degree"]);
          if(!isset( $_POST["degree"] ))
          {
            $degreeErr = "Fillup degree";
          }
          
          }
        }

        if (empty($_POST["blood"])) {
          $bloodErr = "BloodGroup is required";
        } else {
          $blood = test_input($_POST["blood"]);
          if(!isset( $_POST["blood"] ))
          {
            $bloodErr = "Fillup blood";
          }
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
        <legend>NAME:</legend>
        <input type="text" id="name" name="name" placeholder="Enter your name"><br><br>
      </fieldset>

        <br>
      <fieldset>
        <legend>EMAIL:</legend>
        <input type="email" id="email" name="email" placeholder="Enter your Email"><br><br>
      </fieldset>

      <br>
      <fieldset>
        <legend>DATE OF BIRTH:</legend>
        <input type="date" name="birth" id="birth"><br><br>
      </fieldset>

      <br>
      <fieldset>
        <legend>GENDER:</legend>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>   
      </fieldset>

      <br>
      <fieldset>
        <legend>DEGREE:</legend>
          <input type="checkbox" id="ssc" name="degree" value="SSC">
          <label for="vehicle1"> SSC</label>
          <input type="checkbox" id="hsc" name="degree" value="HSC">
          <label for="vehicle2">HSC</label>
          <input type="checkbox" id="bsc" name="degree" value="BSC">
          <label for="vehicle3"> BSC</label>
          <input type="checkbox" id="msc" name="degree" value="MSC">
          <label for="vehicle3"> MSC</label>
      </fieldset>

      <br>
      <fieldset>
        <legend>BLOOD GROUP:</legend>
        <label for="blood">Select Blood Group:</label>

        <select id="blood" name="blood" >
          <option  value="A+">A+</option>
          <option  value="B+">B+</option>
          <option  value="A-">A-</option>
          <option  value="B-">B-</option>
          <option  value="AB+">AB+</option>
          <option  value="O+">O+</option>
          <option  value="O-">O-</option>
        </select>
      </fieldset>
        <br>
        <input type="submit" value="Submit">
    </form>

      <?php
      echo "<h2>Your Input:</h2>";
      echo $name;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $birth;
      echo "<br>";
      echo $gender;
      echo "<br>";
      echo $degree;
      echo "<br>";
      echo $blood;
      ?>
</body>
</html>