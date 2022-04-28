<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	
	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$tds1 = $data['tds1'];

	// uji, apabila nilai tds1 belum ada, maka anggap tds1 = 0
	if ( $tds1 == "" ) $tds1 = 0;

	// cetak nilai tds1
	echo "$tds1";


 ?>