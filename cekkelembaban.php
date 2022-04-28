<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	
	// $konek = mysqli_connect("localhost","root","","dbmultisensor_esp32");

	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$kelembaban = $data['kelembaban'];

	// uji, apabila nilai kelembaban belum ada, maka anggap kelembaban = 0
	if ( $kelembaban == "" ) $kelembaban = 0;

	// cetak nilai kelembaban
	echo "$kelembaban";


 ?>