<?php 
	require 'functions.php';

	$mahasiswa = query("SELECT * FROM tabelmahasiswa");

	if (isset($_POST["cari"])) 
	{
		$mahasiswa = cari($_POST["keyword"]);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Program Informasi</title>

    <link rel="stylesheet" type="text/css" href="main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Start Navbar -->
    <nav>
        <div class="logo">
            <h2 class="nvr"> Portal Akademik</h2>
        </div>
        
        <ul>
            <li><a href="main.php" class="nvr">Home</a></li>
            <li><a href="login.php" class="nvr">Login</a></li>
            <li><a href="mahasiswa.php" class="nvr">Data Mahasiswa</a></li>
            <li><a href="dosen.php" class="nvr">Data Dosen</a></li>
            <li><a href="" class="nvr">Data TA</a></li>
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

    <h1 style="display:flex;justify-content: center;margin-top: 10%">Selamat Datang!</h1>
    <h1 style="display:flex;justify-content: center;margin-top: 1%">Silahkan Pilih Menu Dari Navigation Bar</h1>


    <div class="footer">
    </div>
</body>

</html>
