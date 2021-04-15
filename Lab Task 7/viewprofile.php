<!DOCTYPE html>
<html>
<head>
	<title>VIEWPROFILE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="viewprofile.php" method="post">
     	<h2>VIEW PROFILE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         <label>Name</label>
     	<input type="text" name="name" placeholder="Name"><br>

     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>
     	<button type="submit">UPDATE</button>
		 
     </form>
</body>
</html>