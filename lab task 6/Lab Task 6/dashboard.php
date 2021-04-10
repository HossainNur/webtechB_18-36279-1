<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
     <a href="viewprofile.php">View Profile</a><br>
     <a href="editprofile.php">Edit Profile</a><br>
     <a href="cpassword.php">Change Password</a><br>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>