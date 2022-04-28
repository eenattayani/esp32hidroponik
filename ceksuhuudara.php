<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	
	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$suhuudara = $data['suhuudara'];

	// uji, apabila nilai suhuudara belum ada, maka anggap suhuudara = 0
	if ( $suhuudara == "" ) $suhuudara = 0;

	// cetak nilai suhuudara
	echo "$suhuudara";


 ?>