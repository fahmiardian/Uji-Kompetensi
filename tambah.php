<?php
require 'functions.php';
// cek tombol
if (isset($_POST["submit"])) {

	// cek apakah data berhasil ditambah/tidak
	if (tambahmahasiswa($_POST) > 0){
		echo "
		<script>
			alert('Berhasil ditambahkan');
			document.location.href = 'main.php';
		</script>
		";
	}else {
		echo "
		<script>
			alert('Gagal ditambahkan');
			document.location.href = 'tambah.php';
		</script>
		";		
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data</title>
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
			<ul style="list-style-type: none;">
				<li class="logging">
					<label for="NIM">NIM :</label>
					<input type="text" name="NIM" id="NIM" required>
				</li>
				<li class="logging">
					<label for="namamahasiswa">Nama :</label>
					<input type="text" name="namamahasiswa" id="namamahasiswa" required>
				</li>			
				<li class="logging">
					<label for="jurusan">Jurusan :</label>
					<input type="text" name="jurusan" id="jurusan" required>
				</li>
				<li class="logging">
					<label for="semester">Semester :</label>
					<input type="text" name="semester" id="semester" required>
				</li>
				<li class="logging">
					<label for="semester">Alamat :</label>
					<input type="text" name="alamat" id="alamat" required>
				</li>
				<li class="logging">
					<label for="notelp">No. Telepon :</label>
					<input type="text" name="notelp" id="notelp" required>
				</li>
				<li class="logging">
					<button type="submit" name="submit">Tambah Data</button>
				</li>				
			</ul>
		</form>
	</div>

</body>
</html>