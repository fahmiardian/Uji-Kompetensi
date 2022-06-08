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

    <link rel="stylesheet" href="main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <h2 class="nvr">Portal Akademik</h2>
        </div>
        
        <ul>
            <li><a href="" class="nvr">Home</a></li>
            <li><a href="" class="nvr">Login</a></li>
            <li><a href="" class="nvr">Main Menu</a></li>
            <li><a href="" class="nvr">FAQ</a></li>
        </ul>

        <div class="menu-toogle">
           <input type="checkbox">
           <span></span> 
           <span></span> 
           <span></span>
           <span></span> 
        </div>
    </nav>
    <br>
    <br>
    <br>

    <!-- fungsi search -->
    <form class="fungsiphp2" action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="Cari disini" autocomplete="off">
		<button type="submit" name="cari" style="margin-left: 5px">Cari</button>
	</form>
	<br>
	<div class="fungsiphp">
		<table border="1" cellpadding="10" cellspacing="5">
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jurusan</th>
				<th>Semester</th>
				<th>Alamat</th>
				<th>No.Telp</th>
			</tr>

			<?php $i= 1;?>
			<?php foreach($mahasiswa as $row) : ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row["NIM"] ?></td>
				<td><?php echo $row["namamahasiswa"] ?></td>
				<td><?php echo $row["jurusan"] ?></td>
				<td><?php echo $row["semester"] ?></td>
				<td><?php echo $row["alamat"] ?></td>
				<td><?php echo $row["notelp"] ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>

    <div class="footer">
    </div>
</body>

</html>
