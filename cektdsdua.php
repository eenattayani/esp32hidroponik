<?php 
	// buat koneksi ke database
	require_once 'dbconn.php';
	
	// baca data dari tabel tb_sensor
	$sql = mysqli_query($konek, "select * from tb_monitor order by id desc"); // data terakhir akan berada di atas

	// baca data paling atas
	$data = mysqli_fetch_array($sql);
	$tds2 = $data['tds2'];

	// uji, apabila nilai tds2 belum ada, maka anggap tds2 = 0
	if ( $tds2 == "" ) $tds2 = 0;

	// cetak nilai tds2
	echo "$tds2";


 ?>