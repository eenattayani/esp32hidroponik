<?php
include 'session.php';

$counter = "count1b";
$status = "status1b";
$dataAlat = "dataAlat1b";
$idEsp = "idESPB";

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

  if (isset($_SESSION['kontrol1b'])) {
    $dataAlat = $_SESSION['kodealat1b'] ."=". $_SESSION['kontrol1b'];
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