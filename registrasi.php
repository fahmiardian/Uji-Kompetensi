<?php  
require 'functions.php';

if (isset($_POST["register"])) {
	
	if (registrasi($_POST) > 0) {
		echo "<script>
		alert('User baru berhasil ditambahkan!');
		</script";

		header("Location: login.php");
	} else {
		echo mysqli_error($conn);
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="registrasi.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	</style>
</head>

<body>
	<!-- Start Navbar -->
    <nav>
        <div class="logo">
            <h2 class="nvr"> Portal Akademik</h2>
        </div>
        
        <ul>
            <li><a href="login.php" class="nvr">Login</a></li>
            <li><a href="registrasi.php" class="nvr">Registrasi</a></li>
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

	<div class="loggin">
	<form action="" method="post">
		<ul style="list-style-type: none;">
			<li class="logging">
				<label for="username">Username</label>
				<input type="username" name="username" id="username" required>
			</li>
			<li class="logging">
				<label for="password">Password</label>
				<input type="password" name="password" id="password"required>				
			</li>
			<li class="logging">
				<label for="password2">Konfirmasi Password</label>
				<input type="password" name="password2" id="password2" required>				
			</li>		
			<li class="logging">
				<button type="submit" name="register">Register</button>
			</li>	
		</ul>
	</form>
	</div>

	<div class="footer">
		
	</div>




</body>
</html>