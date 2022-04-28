<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	// $konek = mysqli_connect("localhost","root","","dbmultisensor_esp32");

	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$ph2 = $data['ph2'];

	// uji, apabila nilai ph2 belum ada, maka anggap ph2 = 0
	if ( $ph2 == "" ) $ph2 = 0;

	// cetak nilai ph2
	echo "$ph2";


 ?>