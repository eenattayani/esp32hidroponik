<?php 
	include 'session.php';

	$_SESSION['status'] = "terhubung";

	// buat koneksi ke database
	require_once 'dbconn.php';

	// baca data yang dikirim dari ESP32
	$ph1 = $_GET['ph1'];
	$tds1 = $_GET['tds1'];
	$suhuair1 = $_GET['suhuair1'];
	$suhuudara = $_GET['suhuudara'];
	$ph2 = $_GET['ph2'];
	$tds2 = $_GET['tds2'];
	$suhuair2 = $_GET['suhuair2'];
	$kelembaban = $_GET['kelembaban'];

	// simpan ke tabel tb_sensor

	// auto increment = 1 / mengembalikan id menjadi 1 apabila dikosongkan
	mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

	// simpan data sensor ke tabel tb_sensor
	$simpan = mysqli_query($konek, "insert into tb_monitor(ph1,tds1,suhuair1,suhuudara,ph2,tds2,suhuair2,kelembaban)values('$ph1','$tds1','$suhuair1','$suhuudara','$ph2','$tds2','$suhuair2','$kelembaban')");

	// uji simpan untuk memberikan respon ke ESP32
	if($simpan)		
		if (isset($_SESSION['modeesp'])) {
		     echo "mode:kontrol:" . $_SESSION['modeesp'] . ":" . $_SESSION['dataesp'];

		     unset($_SESSION['modeesp']);
		} else{
		    echo"mode:monitoring";
		    echo ":";
		    echo "status:" . $_SESSION['status'];

		}

 ?>