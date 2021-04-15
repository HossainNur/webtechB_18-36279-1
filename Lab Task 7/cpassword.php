<!DOCTYPE html>
<html>
<head>
	<title>CPASSWORD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="cpassword.php" method="post">
     	<h2>CHANGE PASSWORD</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Current Password</label>
     	<input type="password" name="cpassword" placeholder="Current Password"><br>

        <label>Re-type Password</label>
     	<input type="password" name="repassword" placeholder="Re-Password"><br>


     	<button type="submit">UPDATE</button>
		 
     </form>
</body>
</html>