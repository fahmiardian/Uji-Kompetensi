<?php 
	require 'functions.php';

	$mahasiswa = query("SELECT * FROM tabelmahasiswa");

	if (isset($_POST["cari"])) 
	{
		$mahasiswa = carimahasiswa($_POST["keyword"]);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Program Informasi</title>

    <link rel="stylesheet" type="text/css" href="mahasiswa.css">

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
            <li><a href="main.php" class="nvr">Home</a></li>
            <li><a href="login.php" class="nvr">Login</a></li>
            <li><a href="mahasiswa.php" class="nvr">Data Mahasiswa</a></li>
            <li><a href="dosen.php" class="nvr">Data Dosen</a></li>
            <li><a href="ta.php" class="nvr">Data TA</a></li>
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
		<table border="1" cellpadding="10" cellspacing="5" class="sortable">
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jurusan</th>
				<th>Semester</th>
				<th>Alamat</th>
				<th>No.Telp</th>
				<th class="ubahh"style="float-right; color:black;">Edit</th>
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
				<td>
					<a class="ubahh" href="ubahmahasiswa.php?NIM=<?php echo $row["NIM"]; ?>" style="text text-decoration: "><b>Ubah Data</b></a>
				</td>				
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>

	<br>
	<br>
	<div class="fungsiphp">
		<h3><a href="tambah.php">Tambah data mahasiswa</a></h3>
	</div>

    <div class="footer">
    </div>
</body>

</html>