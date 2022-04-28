<?php 
	
	// tangkap JSON nya
	$dataJSON = $_GET['datajson'];

	// uji simpan untuk memberikan respon ke ESP32
	if($dataJSON){
		
		echo "Berhasil dikirim <br> $dataJSON <br><br>";

		$mahasiswa = json_decode($dataJSON);

		echo "Nama: {$mahasiswa->nama} <br>";
		echo "Domisili: {$mahasiswa->domisili}<br>";
		echo "Domisili: {$mahasiswa->hobi[0]}<br>";
	}
	else{
		echo "Gagal terkirim";
	}
 ?>