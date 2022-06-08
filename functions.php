<?php  
// koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "ujikompetensi");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function cari($keyword){
	$query = "SELECT * FROM tabelmahasiswa WHERE 
	NIM LIKE '%$keyword%' OR 
	namamahasiswa LIKE '%$keyword%' OR 	
	jurusan LIKE '%$keyword%' OR 
	semester LIKE '%$keyword%'
	alamat LIKE '%$keyword%'
	notelp LIKE '%$keyword%'
	";
	return query($query);
}

?>