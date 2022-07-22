<?php
include 'session.php';

$counter = "count1a";
$status = "status1a";
$dataAlat = "dataAlat1a";
$idEsp = "idESPA";

if (!isset($_SESSION[$counter]))
{
  $_SESSION[$counter] = 1;
  $_SESSION[$status] = "loading...";
}
else
{
  $_SESSION[$counter]++;
  
  if ($_SESSION[$counter] > 30 ) {
    $_SESSION[$counter] = 1;
    $_SESSION[$status] = "koneksi terputus";
    unset($_SESSION[$dataAlat]);
    unset($_SESSION[$idEsp]);
  }
}

if (isset($_SESSION[$dataAlat])) {
  $dataAlat = $_SESSION[$dataAlat];
  
  if (isset($_SESSION['kontrol1a'])) {
    $dataAlat = $_SESSION['kodealat1a'] ."=". $_SESSION['kontrol1a'];
  }
} else {
  $dataAlat = "NULL";
}

if (isset($_SESSION[$idEsp])) {
  $idAlat = $_SESSION[$idEsp];
} else {
  $idAlat = "NULL";
}

echo $dataAlat;
echo ":";
echo $_SESSION[$counter];
echo ":";
echo $_SESSION[$status];
echo ":";
echo $idAlat;