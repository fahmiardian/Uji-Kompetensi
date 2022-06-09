<?php
require 'functions.php';

// ambil data di URL
$NIM = $_GET["NIM"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM tabelmahasiswa WHERE NIM = $NIM")[0];


// cek tombol
if (isset($_POST["submit"])) {

	// cek apakah data berhasil diubah/tidak
	if (ubah($_POST) > 0){
		echo "
		<script>
			alert('Data berhasil diubah');
			document.location.href = 'mahasiswa.php';
		</script>
		";
	}else {
		echo "
		<script>
			alert('Data gagal diubah');
			document.location.href = 'mahasiswa.php';
		</script>
		";		
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ubah data</title>
	<link rel="stylesheet" type="text/css" href="ubahmahasiswa.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

</head>

<body>
	<!-- Awal Nav -->
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
    <!-- Akhir Nav -->

	<div class="loggin">
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="NIM" value=<?php echo $mhs["NIM"]; ?>>
		<ul style="list-style-type: none;">
			<li class="logging">
				<label for="nama">NIM :</label>
				<input type="text" name="NIM" id="NIM" value="<?php echo $mhs["NIM"]; ?>">
			</li>
			<li class="logging">
				<label for="namamahasiswa">Nama :</label>
				<input type="text" name="namamahasiswa" id="namamahasiswa" value="<?php echo $mhs["namamahasiswa"]; ?>">
			</li>
			<li class="logging">
				<label for="jurusan">NIM :</label>
				<input type="text" name="jurusan" id="jurusan" value="<?php echo $mhs["jurusan"]; ?>">
			</li>			
			<li class="logging">
				<label for="semester">Semester :</label>
				<input type="text" name="semester" id="semester" value="<?php echo $mhs["semester"]; ?>">
			</li>
			<li class="logging">
				<label for="alamat">Alamat :</label>
				<input type="text" name="alamat" id="alamat" value="<?php echo $mhs["alamat"]; ?>">
			</li>
			<li class="logging">
				<label for="notelp">No. Telepon :</label>
				<input type="text" name="notelp" id="notelp" value="<?php echo $mhs["notelp"]; ?>">
			</li>
			<li class="logging">
				<button type="submit" name="submit">Ubah data</button>
			</li>
		</ul>
	</form>
	</div>	



</body>
</html>