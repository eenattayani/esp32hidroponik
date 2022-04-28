<?php
include 'session.php';
$_SESSION['status'] = "terhubung";

error_reporting(0);
header('Access-Control-Allow-Origin: *');

$fileKontrol = 'json/data-simpang.json';


if (isset($_SESSION['modeesp'])) {
     echo "mode:kontrol:" . $_SESSION['modeesp'] . ":" . $_SESSION['dataesp'];

     unset($_SESSION['modeesp']);
} else{
    echo"mode:monitoring";
    echo "<br>";
    echo "status: " . $_SESSION['status'];
}
