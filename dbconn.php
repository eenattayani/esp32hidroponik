<?php

    // date_default_timezone_set('Asia/Jakarta');
    // $waktu = getdate(date("U"));
    // $namaHari = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
    // $namaBulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    // $hari = $namaHari[$waktu['wday']];
    // $tanggal = $waktu['mday'];
    // $bulan = $namaBulan[$waktu['mon']-1];
    // $tahun = $waktu['year'];

    // $tanggalnya = "$hari, $tanggal $bulan $tahun";
    // $jamnya = "$waktu[hours]:$waktu[minutes]:$waktu[seconds]";

    // $waktunya = "$tanggalnya || $jamnya";

    // $servername = "localhost";
    // $username = "u420165457_sat";
    // $password = "Pa4sOGJkw|";
    // $database = "u420165457_sat_puskesmas";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbmultisensor_esp32";

    // $servername = "localhost";
    // $username = "u420165457_een";
    // $password = "esp32WebServ";
    // $database = "u420165457_esp32";

    // create connection
    $konek = mysqli_connect($servername, $username, $password, $database);

    // check connection
    if (!$konek) {
        die("connection failed: " . mysqli_connect_error());
    }

    // echo "Connected succesfully<hr>";

?>