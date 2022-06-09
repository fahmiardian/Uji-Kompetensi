<?php 
	require 'functions.php';

	$ta = query("SELECT * FROM tabelakademik");

	if (isset($_POST["cari"])) 
	{
		$ta = ta($_POST["keyword"]);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Program Informasi</title>

    <link rel="stylesheet" type="text/css" href="ta.css">

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
				<th>Kode Pembimbing</th>
				<th>Kode Jurusan</th>
				<th>NIP</th>
				<th>Nama Dosen</th>
				<th>NIM</th>
				<th>Nama Mahasiswa</th>
			</tr>

			<?php $i= 1;?>
			<?php foreach($ta as $row) : ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row["kdBimbingan"] ?></td>
				<td><?php echo $row["kdjurusan"] ?></td>
				<td><?php echo $row["NIP"] ?></td>
				<td><?php echo $row["namadosen"] ?></td>
				<td><?php echo $row["NIM"] ?></td>
				<td><?php echo $row["namamahasiswa"] ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>

    <div class="footer">
    </div>
</body>

</html>