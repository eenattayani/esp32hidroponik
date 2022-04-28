<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	
	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$ph1 = $data['ph1'];

	// uji, apabila nilai ph1 belum ada, maka anggap ph1 = 0
	if ( $ph1 == "" ) $ph1 = 0;

	// cetak nilai ph1
	echo "$ph1";


 ?>