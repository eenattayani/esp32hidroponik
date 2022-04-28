<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	
	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$suhuair1 = $data['suhuair1'];

	// uji, apabila nilai suhuair1 belum ada, maka anggap suhuair1 = 0
	if ( $suhuair1 == "" ) $suhuair1 = 0;

	// cetak nilai suhuair1
	echo "$suhuair1";


 ?>