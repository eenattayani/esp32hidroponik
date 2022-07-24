<?php
include 'session.php';

$counter = "count3a";
$status = "status3a";
$dataAlat = "dataAlat3a";
$idEsp = "idESPE";

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

  if (isset($_SESSION['kontrol3a'])) {
    $dataAlat = $_SESSION['kodealat3a'] ."=". $_SESSION['kontrol3a'];
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