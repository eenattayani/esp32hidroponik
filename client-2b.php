<?php
include 'session.php';

$counter = "count2b";
$status = "status2b";
$dataAlat = "dataAlat2b";
$idEsp = "idESPD";

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

  if (isset($_SESSION['kontrol2b'])) {
    $dataAlat = $_SESSION['kodealat2b'] ."=". $_SESSION['kontrol2b'];
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