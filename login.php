<?php  
require 'functions.php';

if (isset ($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST ["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			header("Location: main.php");
			header("Location: main.php");
			header("Location: main.php");
		}
	}
	$error = true;
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>
    <!-- Start Navbar -->
    <nav>
        <div class="logo">
            <h2 class="nvr"> Portal Akademik</h2>
        </div>
        
        <ul>
            <li><a href="login.php" class="nvr">Login</a></li>
        </ul>

        <div class="menu-toogle">
           <input type="checkbox">
           <span></span> 
           <span></span> 
           <span></span>
           <span></span> 
        </div>
    </nav>
    <!-- END Navbar -->	

	
    <!-- Start Login -->
	<?php if(isset($error)) : ?>
		<p style="font:italic; color:red;">username atau password salah!</p>
	<?php endif; ?>

	<div class="loggin">
	<form action="" method="post">
		<ul style="list-style-type: none;">
			<li class="logging">
				<label for="username">Username :</label>
				<input type="username" name="username">
			</li>
			<li class="logging">
				<label for="password">Password :</label>
				<input type="password" name="password">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
	</div>
	<!-- End Login -->
	<div class="footer">
    </div>
</body>
</html>