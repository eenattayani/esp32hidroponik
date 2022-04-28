<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	
	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$suhuair2 = $data['suhuair2'];

	// uji, apabila nilai suhuair2 belum ada, maka anggap suhuair2 = 0
	if ( $suhuair2 == "" ) $suhuair2 = 0;

	// cetak nilai suhuair2
	echo "$suhuair2";


 ?>