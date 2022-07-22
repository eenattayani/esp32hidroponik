<?php
include 'session.php';

$counter = "count2a";
$status = "status2a";
$dataAlat = "dataAlat2a";
$idEsp = "idESPC";

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

  if (isset($_SESSION['kontrol2a'])) {
    $dataAlat = $_SESSION['kodealat2a'] ."=". $_SESSION['kontrol2a'];
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