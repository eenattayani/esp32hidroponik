<?php
	include 'session.php';

	// error_reporting(0);

	// buat koneksi ke database
	require_once 'dbconn.php';

/** variabel start*/
    $ketLantai = "LANTAI 2";
    $tbKontrolManual = "tb_manual_b";
    $tbSetTimer = "tb_settimer_b"; 
/** variabel end*/

/** awal pengecekan data POST kontrol manual**/
if (isset($_POST["alat1on"])) {
    $idalat = $_POST['alat1id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "A";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat1off"])) {
    $idalat = $_POST['alat1id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "A";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat2on"])) {
    $idalat = $_POST['alat2id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "B";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat2off"])) {
    $idalat = $_POST['alat2id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "B";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat3on"])) {
    $idalat = $_POST['alat3id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "C";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat3off"])) {
    $idalat = $_POST['alat3id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "C";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat4on"])) {
    $idalat = $_POST['alat4id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "D";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat4off"])) {
    $idalat = $_POST['alat4id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "D";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat5on"])) {
    $idalat = $_POST['alat5id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "E";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat5off"])) {
    $idalat = $_POST['alat5id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "E";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat6on"])) {
    $idalat = $_POST['alat6id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "F";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat6off"])) {
    $idalat = $_POST['alat6id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "F";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat7on"])) {
    $idalat = $_POST['alat7id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "G";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat7off"])) {
    $idalat = $_POST['alat7id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "G";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat8on"])) {
    $idalat = $_POST['alat8id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "H";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat8off"])) {
    $idalat = $_POST['alat8id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "H";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat9on"])) {
    $idalat = $_POST['alat9id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "I";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat9off"])) {
    $idalat = $_POST['alat9id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "I";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat10on"])) {
    $idalat = $_POST['alat10id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "J";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat10off"])) {
    $idalat = $_POST['alat10id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "J";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat11on"])) {
    $idalat = $_POST['alat11id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "K";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat11off"])) {
    $idalat = $_POST['alat11id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "K";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat12on"])) {
    $idalat = $_POST['alat12id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "L";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat12off"])) {
    $idalat = $_POST['alat12id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "L";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat13on"])) {
    $idalat = $_POST['alat13id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "M";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat13off"])) {
    $idalat = $_POST['alat13id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "M";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat14on"])) {
    $idalat = $_POST['alat14id'];
    $statusalat = 1;

    $_SESSION['modeesp'] = "N";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

} else if (isset($_POST["alat14off"])) {
    $idalat = $_POST['alat14id'];
    $statusalat = 0;

    $_SESSION['modeesp'] = "N";
    $_SESSION['dataesp'] = $statusalat;

    $simpan = mysqli_query($konek,
    "update $tbKontrolManual 
    set status=$statusalat 
    where id='$idalat'
    ");

}

/** akhir pengecekan data POST kontrol manual**/

/** awal pengecekan data POST  set timer**/
if(isset($_POST["submit0"])){
    $idalat = $_POST['submit0'];

    $hourstart = $_POST["sc1JamS"];
    $minstart = $_POST["sc1MenitS"];
    $hourend = $_POST["sc1JamE"];
    $minend = $_POST["sc1MenitE"];

    $_SESSION['modeesp'] = "a";
    $_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
         where id='$idalat'
        ");

} else if(isset($_POST["submit1"])){
    $idalat = $_POST['submit1'];

    $hourstart = $_POST["sc2JamS"];
    $minstart = $_POST["sc2MenitS"];
    $hourend = $_POST["sc2JamE"];
    $minend = $_POST["sc2MenitE"];

    $_SESSION['modeesp'] = "b";
    $_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
         where id='$idalat'
        ");

} else if(isset($_POST["submit2"])){
    $idalat = $_POST['submit2'];

    $hourstart = $_POST["sc3JamS"];
    $minstart = $_POST["sc3MenitS"];
    $hourend = $_POST["sc3JamE"];
    $minend = $_POST["sc3MenitE"];

    $_SESSION['modeesp'] = "c";
    $_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
         where id='$idalat'
        ");

} else if(isset($_POST["submit3"])){
    $idalat = $_POST['submit3'];

    $hourstart = $_POST["sc4JamS"];
    $minstart = $_POST["sc4MenitS"];
    $hourend = $_POST["sc4JamE"];
    $minend = $_POST["sc4MenitE"];

    $_SESSION['modeesp'] = "d";
    $_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
         where id='$idalat'
        ");

} else if(isset($_POST["submit4"])){
    $idalat = $_POST['submit4'];

    $acsuhu = $_POST["acSuhu"];

    $_SESSION['modeesp'] = "e";
    $_SESSION['dataesp'] = $acsuhu;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set suhu=$acsuhu
         where id='$idalat'
        ");

} else if(isset($_POST["submit5"])){
    $idalat = $_POST['submit5'];

    $intervalmenit = $_POST["intervalMenit"];

    $_SESSION['modeesp'] = "f";
    $_SESSION['dataesp'] = $intervalmenit;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set interval_menit=$intervalmenit
         where id='$idalat'
        ");

} else if(isset($_POST["submit6"])){
    $idalat = $_POST['submit6'];

    $hourstart = $_POST["sc5JamS"];
    $minstart = $_POST["sc5MenitS"];
    $hourend = $_POST["sc5JamE"];
    $minend = $_POST["sc5MenitE"];

    $_SESSION['modeesp'] = "g";
    $_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
         where id='$idalat'
        ");

} else if(isset($_POST["submit7"])){
    $idalat = $_POST['submit7'];

    $hourstart = $_POST["sc6JamS"];
    $minstart = $_POST["sc6MenitS"];
    $hourend = $_POST["sc6JamE"];
    $minend = $_POST["sc6MenitE"];

    $_SESSION['modeesp'] = "h";
    $_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
         where id='$idalat'
        ");

} else if(isset($_POST["submit8"])){
    $idalat = $_POST['submit8'];

    $acsuhu = $_POST["acSuhuB"];

    $_SESSION['modeesp'] = "i";
    $_SESSION['dataesp'] = $acsuhu;

    $simpan = mysqli_query($konek, 
        "update $tbSetTimer
         set suhu=$acsuhu
         where id='$idalat'
        ");

}
else {
    //echo "<br><br><br> tidak ada data";
}

/** akhir pengecekan data POST set timer**/


/** awal baca database  timer**/
$arrSet = array();

$sql = mysqli_query($konek, "select * from $tbSetTimer"); 

if (!$sql) {
    echo "Error: " . $sql . "<br>" . mysqli_error($konek);
}

foreach ($sql as $key => $value) {
    $h['id'] = $value['id'];
    $h['nama'] = $value['nama_set'];
    $h['onjam'] = $value['on_jam'];
    $h['onmenit'] = $value['on_menit'];
    $h['offjam'] = $value['off_jam'];
    $h['offmenit'] = $value['off_menit'];
    $h['intervalmenit'] = $value['interval_menit'];
    $h['suhuac'] = $value['suhu'];

    array_push($arrSet, $h);
}
/** akhir baca database timer**/

/** awal baca database kontrol**/
$arrStatus = array();

$sql = mysqli_query($konek, "select id, status from $tbKontrolManual");

if (!$sql) {
    echo "Error: " . $sql . "<br>" . mysqli_error($konek);
}

foreach ($sql as $key => $value) {
    $h['id'] = $value['id'];
    $h['status'] = $value['status'];

    array_push($arrStatus, $h);
}
/** akhir baca database kontrol**/

/** kumpulan function **/
function cek_status($status)
{
    $retVal = ($status == 1) ? 'Nyala' : 'Padam' ;

    return $retVal;
}

function cek_tbl_off($status)
{
    $retVal = ($status == 0) ? 'btn btn-primary' : 'btn btn-secondary';

    return $retVal;
}

function cek_tbl_on($status)
{
    $retVal = ($status == 1) ? 'btn btn-primary' : 'btn btn-secondary';

    return $retVal;
}
/** akhir kumpulan function **/


?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include 'temp/icon.php'; ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/813cbbbcbe.js" crossorigin="anonymous"></script>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Quantico&family=ZCOOL+QingKe+HuangYou&family=Fjalla+One&family=Squada+One&family=Teko&display=swap" rel="stylesheet" />

<style type="text/css">  

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0,0,0,0.9);
    }

    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0,0,0,0.5);
    }

    .bayangan {
        box-shadow: 0 2px 5px 2px rgba(0, 0, 0, 0.2);
    }

    .tema-warna {
        background-color: #d9f99d;;
    }

    .tema-warna-a {
        background-color: #bef264;;
    }

    .tema-warna-b {
        background-color: floralwhite;   
    }

  h2 {
    font-family: "Squada One", "Teko", "Fjalla One", sans-serif;        
  }

  .btn-group button {
    font-size: 13px;
  } 
  
  .card button.status-on-off {
    font-size: 13px;
  }

  .card button.status-on-off:hover {
      cursor: default;
  }

  .input-group span {
      display: none;
  }

  .input-group span.derajat {
      display: block;
      font-size: 12px;
  }

  .input-group input {
      font-size: 12px;
  }

  .card {
    font-family: "Quantico","Fjalla One", sans-serif;     
    font-size: 14px;   
  }

  .footer, nav {
    font-family: "Quantico", "Fjalla One", sans-serif;        
  }

  @media (min-width: 768px) { 
  .card {
    font-size: 18px;   
  }

  .input-group input {
      font-size: 18px;
  }

  .input-group span {
      display: block;
  }

  .input-group span.derajat {          
      font-size: 18px;
  }

  .btn-group button {
    font-size: 18px;
  } 

  .card button.status-on-off {
    font-size: 18px;
  }

  button {
    font-size: 18px;
  }
 }
</style>

<title>Hidroponik Smart System - PT. LGAP</title>


</head>
<body class="tema-warna-b">

<?php include 'temp/navbar.php'; ?>



<!-- content start -->
<div class="container" style="text-align: center; margin-top: 100px;">    
    <!-- content kontrol manual start -->
    <div class="card text-center" style="width: 100%;">
        <div class="card-header tema-warna" style="font-size: 16px; font-weight: bold;">
        KONTROL MANUAL <?=$ketLantai;?>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="tema-warna-b">TOWER 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Saklar</th>								  		
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Lamp 1</th>
                                        <td scope="col">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat1off" type="submit" class="<?=cek_tbl_off($arrStatus[0]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat1on" type="submit" class="<?=cek_tbl_on($arrStatus[0]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>				 	
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat1id" value="<?=$arrStatus[0]['id'];?>">	
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[0]['status']);?></button>
                                        </td>                                
                                    </tr>
                                    <tr>
                                        <th scope="row">Fan 1</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat3off" type="submit" class="<?=cek_tbl_off($arrStatus[1]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat3on" type="submit" class="<?=cek_tbl_on($arrStatus[1]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		  
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat3id" value="<?=$arrStatus[1]['id'];?>">
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[1]['status']);?></button>
                                        </td>                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Pomp 1</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat5off" type="submit" class="<?=cek_tbl_off($arrStatus[2]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat5on" type="submit" class="<?=cek_tbl_on($arrStatus[2]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
                                            </div>
                                        </td>
                                        <td>								     
                                            <input type="hidden" name="alat5id" value="<?=$arrStatus[2]['id'];?>"> 	
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[2]['status']);?></button>			  
                                        </td>                                    
                                    </tr>                                       
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="tema-warna-b">TOWER 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                        <th>#</th>								  		
                                        <th>Saklar</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>                                                                        
                                        <th scope="col">Lamp 2</th>
                                        <td scope="col">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat2off" type="submit" class="<?=cek_tbl_off($arrStatus[4]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat2on" type="submit" class="<?=cek_tbl_on($arrStatus[4]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
                                            </div>
                                        </td>
                                        <td>	
                                            <input type="hidden" name="alat2id" value="<?=$arrStatus[4]['id'];?>">	
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[4]['status']);?></button>		  
                                        </td>
                                    </tr>
                                    <tr>                                    
                                        <th>Fan 2</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat4off" type="submit" class="<?=cek_tbl_off($arrStatus[5]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat4on" type="submit" class="<?=cek_tbl_on($arrStatus[5]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat4id" value="<?=$arrStatus[5]['id'];?>">
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[5]['status']);?></button>			  
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pomp 2</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat6off" type="submit" class="<?=cek_tbl_off($arrStatus[6]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat6on" type="submit" class="<?=cek_tbl_on($arrStatus[6]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>	
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat6id" value="<?=$arrStatus[6]['id'];?>">
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[6]['status']);?></button>		  
                                        </td>
                                    </tr>                                        
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="tema-warna-b">TOWER 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <th>Saklar</th>								  		
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Lamp 3</th>
                                        <td scope="col">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat9off" type="submit" class="<?=cek_tbl_off($arrStatus[8]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat9on" type="submit" class="<?=cek_tbl_on($arrStatus[8]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>				 	
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat9id" value="<?=$arrStatus[8]['id'];?>">	
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[8]['status']);?></button>
                                        </td>                                
                                    </tr>
                                    <tr>
                                        <th scope="row">Fan 3</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat10off" type="submit" class="<?=cek_tbl_off($arrStatus[9]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat10on" type="submit" class="<?=cek_tbl_on($arrStatus[9]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		  
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat10id" value="<?=$arrStatus[9]['id'];?>">
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[9]['status']);?></button>
                                        </td>                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Pomp 3</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat11off" type="submit" class="<?=cek_tbl_off($arrStatus[10]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat11on" type="submit" class="<?=cek_tbl_on($arrStatus[10]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
                                            </div>
                                        </td>
                                        <td>								     
                                            <input type="hidden" name="alat11id" value="<?=$arrStatus[10]['id'];?>"> 	
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[10]['status']);?></button>			  
                                        </td>                                    
                                    </tr>                                        
                                </tbody>
                            </table>
                        </div>
                        <div class="col">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="4" class="tema-warna-b">TOWER 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                                        
                                        <th>#</th>								  		
                                        <th>Saklar</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>                                                                        
                                        <th scope="col">Lamp 4</th>
                                        <td scope="col">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat12off" type="submit" class="<?=cek_tbl_off($arrStatus[11]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat12on" type="submit" class="<?=cek_tbl_on($arrStatus[11]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
                                            </div>
                                        </td>
                                        <td>	
                                            <input type="hidden" name="alat12id" value="<?=$arrStatus[11]['id'];?>">	
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[11]['status']);?></button>		  
                                        </td>
                                    </tr>
                                    <tr>                                    
                                        <th>Fan 4</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat13off" type="submit" class="<?=cek_tbl_off($arrStatus[12]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat13on" type="submit" class="<?=cek_tbl_on($arrStatus[12]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat13id" value="<?=$arrStatus[12]['id'];?>">
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[12]['status']);?></button>			  
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pomp 4</th>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button name="alat14off" type="submit" class="<?=cek_tbl_off($arrStatus[13]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                <button name="alat14on" type="submit" class="<?=cek_tbl_on($arrStatus[13]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>	
                                            </div>
                                        </td>
                                        <td>
                                            <input type="hidden" name="alat14id" value="<?=$arrStatus[13]['id'];?>">
                                            <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[13]['status']);?></button>		  
                                        </td>
                                    </tr>                                        
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="col-lg-6">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="4" class="tema-warna-b">TOWER SEMAI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>                                        
                                            <th>#</th>								  		
                                            <th>Saklar</th>
                                            <th>Status</th>
                                        </tr>  
                                        <tr>
                                            <th scope="row">Lampu Semai</th>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button name="alat7off" type="submit" class="<?=cek_tbl_off($arrStatus[3]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                    <button name="alat7on" type="submit" class="<?=cek_tbl_on($arrStatus[3]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
                                                </div>
                                            </td>
                                            <td>
                                                <input type="hidden" name="alat7id" value="<?=$arrStatus[3]['id'];?>">
                                                <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[3]['status']);?></button>	  
                                            </td>                                    
                                        </tr>                                      
                                        <tr>
                                            <th>Kipas Semai</th>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button name="alat8off" type="submit" class="<?=cek_tbl_off($arrStatus[7]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
                                                    <button name="alat8on" type="submit" class="<?=cek_tbl_on($arrStatus[7]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		 
                                                </div>
                                            </td>
                                            <td>
                                                <input type="hidden" name="alat8id" value="<?=$arrStatus[7]['id'];?>">
                                                <button type="button" class="status-on-off btn btn-primary"><?=cek_status($arrStatus[7]['status']);?></button>		 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- content kontrol manual end -->

    <!-- awal set timer -->
    <div style="display: flex; margin-top: 20px;">
        <!-- menampilkan nilai suhu -->
        <div class="card text-center" style="width: 100%;">
            <div class="card-header tema-warna" style="font-size: 16px; font-weight: bold;">
            SET TIMER <?=$ketLantai;?>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <table class="table text-center align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Waktu On</th>
                                <th scope="col">Waktu Off</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>	  
                            <tr>                
                                <th scope="row">Lampu Tower 1</th>
                                <td>
                                    <div class="input-group">
                                        <input name="sc1JamS" value="<?=$arrSet[0]['onjam'];?>" readonly id="sc1JamS" type="text" class="form-control text-center" placeholder="00" aria-label="Jammulai"><span class="input-group-text">:</span>
                                        <input name="sc1MenitS" value="<?=$arrSet[0]['onmenit'];?>" readonly id="sc1MenitS" type="text" class="form-control text-center" placeholder="00" aria-label="Menitmulai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input name="sc1JamE" value="<?=$arrSet[0]['offjam'];?>" readonly id="sc1JamE" type="text" class="form-control text-center" placeholder="00" aria-label="Jamselesai"><span class="input-group-text">:</span>
                                        <input name="sc1MenitE" value="<?=$arrSet[0]['offmenit'];?>" readonly id="sc1MenitE" type="text" class="form-control text-center" placeholder="00" aria-label="Menitselesai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">  
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" onclick="tuJadwalClick(0);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                            <button disabled name="submit0" type="submit" value="set-001" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Lampu Tower 2</th>
                                <td>
                                    <div class="input-group">
                                        <input name="sc2JamS" value="<?=$arrSet[1]['onjam'];?>" readonly id="sc2JamS" type="text" class="form-control text-center" placeholder="00" aria-label="Jammulai"><span class="input-group-text">:</span>
                                        <input name="sc2MenitS" value="<?=$arrSet[1]['onmenit'];?>" readonly id="sc2MenitS" type="text" class="form-control text-center" placeholder="00" aria-label="Menitmulai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input name="sc2JamE" value="<?=$arrSet[1]['offjam'];?>" readonly id="sc2JamE" type="text" class="form-control text-center" placeholder="00" aria-label="Jamselesai"><span class="input-group-text">:</span>
                                        <input name="sc2MenitE" value="<?=$arrSet[1]['offmenit'];?>" readonly id="sc2MenitE" type="text" class="form-control text-center" placeholder="00" aria-label="Menitselesai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">    
                                        <div class="btn-group" role="group" aria-label="Basic example"> 
                                            <button type="button" onclick="tuJadwalClick(1);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                            <button disabled name="submit1" type="submit" value="set-002" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>                
                                <th scope="row">Lampu Tower 3</th>
                                <td>
                                    <div class="input-group">
                                        <input name="sc5JamS" value="<?=$arrSet[5]['onjam'];?>" readonly id="sc5JamS" type="text" class="form-control text-center" placeholder="00" aria-label="Jammulai"><span class="input-group-text">:</span>
                                        <input name="sc5MenitS" value="<?=$arrSet[5]['onmenit'];?>" readonly id="sc5MenitS" type="text" class="form-control text-center" placeholder="00" aria-label="Menitmulai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input name="sc5JamE" value="<?=$arrSet[5]['offjam'];?>" readonly id="sc5JamE" type="text" class="form-control text-center" placeholder="00" aria-label="Jamselesai"><span class="input-group-text">:</span>
                                        <input name="sc5MenitE" value="<?=$arrSet[5]['offmenit'];?>" readonly id="sc5MenitE" type="text" class="form-control text-center" placeholder="00" aria-label="Menitselesai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">  
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" onclick="tuJadwalClick(2);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                            <button disabled name="submit6" type="submit" value="set-006" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Lampu Tower 4</th>
                                <td>
                                    <div class="input-group">
                                        <input name="sc6JamS" value="<?=$arrSet[6]['onjam'];?>" readonly id="sc6JamS" type="text" class="form-control text-center" placeholder="00" aria-label="Jammulai"><span class="input-group-text">:</span>
                                        <input name="sc6MenitS" value="<?=$arrSet[6]['onmenit'];?>" readonly id="sc6MenitS" type="text" class="form-control text-center" placeholder="00" aria-label="Menitmulai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input name="sc6JamE" value="<?=$arrSet[6]['offjam'];?>" readonly id="sc6JamE" type="text" class="form-control text-center" placeholder="00" aria-label="Jamselesai"><span class="input-group-text">:</span>
                                        <input name="sc6MenitE" value="<?=$arrSet[6]['offmenit'];?>" readonly id="sc6MenitE" type="text" class="form-control text-center" placeholder="00" aria-label="Menitselesai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">    
                                        <div class="btn-group" role="group" aria-label="Basic example"> 
                                            <button type="button" onclick="tuJadwalClick(3);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                            <button disabled name="submit7" type="submit" value="set-007" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Lampu Tower Semai</th>
                                <td>
                                    <div class="input-group">
                                        <input name="sc3JamS" value="<?=$arrSet[2]['onjam'];?>" readonly id="sc3JamS" type="text" class="form-control text-center" placeholder="00" aria-label="Jammulai"><span class="input-group-text">:</span>
                                        <input name="sc3MenitS" value="<?=$arrSet[2]['onmenit'];?>" readonly id="sc3MenitS" type="text" class="form-control text-center" placeholder="00" aria-label="Menitmulai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input name="sc3JamE" value="<?=$arrSet[2]['offjam'];?>" readonly id="sc3JamE" type="text" class="form-control text-center" placeholder="00" aria-label="Jamselesai"><span class="input-group-text">:</span>
                                        <input name="sc3MenitE" value="<?=$arrSet[2]['offmenit'];?>" readonly id="sc3MenitE" type="text" class="form-control text-center" placeholder="00" aria-label="Menitselesai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">   
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" onclick="tuJadwalClick(4);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                            <button disabled name="submit2" type="submit" value="set-003" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">AC</th>
                                <td>
                                    <div class="input-group">
                                        <input name="sc4JamS" value="<?=$arrSet[3]['onjam'];?>" readonly id="sc4JamS" type="text" class="form-control text-center" placeholder="00" aria-label="Jammulai"><span class="input-group-text">:</span>
                                        <input name="sc4MenitS" value="<?=$arrSet[3]['onmenit'];?>" readonly id="sc4MenitS" type="text" class="form-control text-center" placeholder="00" aria-label="Menitmulai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <input name="sc4JamE" value="<?=$arrSet[3]['offjam'];?>" readonly id="sc4JamE" type="text" class="form-control text-center" placeholder="00" aria-label="Jamselesai"><span class="input-group-text">:</span>
                                        <input name="sc4MenitE" value="<?=$arrSet[3]['offmenit'];?>" readonly id="sc4MenitE" type="text" class="form-control text-center" placeholder="00" aria-label="Menitselesai">
                                    </div>
                                </td>
                                <td>
                                <div class="input-group">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" onclick="tuJadwalClick(5);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                        <button disabled name="submit3" type="submit" value="set-004" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Suhu AC 1</th>
                                <td>
                                    <div class="input-group">                                        
                                        <input name="acSuhu" value="<?=$arrSet[3]['suhuac'];?>" readonly id="acSuhu" type="text" class="form-control text-center" placeholder="00" aria-label="acSuhu"><span class="input-group-text derajat">&deg;C</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        
                                    </div>
                                </td>
                                <td>
                                <div class="input-group">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" onclick="tuJadwalClick(6);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                        <button disabled name="submit4" type="submit" value="set-004" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Suhu AC 2</th>
                                <td>
                                    <div class="input-group">                                        
                                        <input name="acSuhuB" value="<?=$arrSet[7]['suhuac'];?>" readonly id="acSuhuB" type="text" class="form-control text-center" placeholder="00" aria-label="acSuhuB"><span class="input-group-text derajat">&deg;C</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        
                                    </div>
                                </td>
                                <td>
                                <div class="input-group">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" onclick="tuJadwalClick(7);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                        <button disabled name="submit8" type="submit" value="set-008" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                    </div>
                                </div>
                                </td>
                            </tr>
                            <tr hidden>
                                <th scope="col"></th>
                                <th scope="col">Interval</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            <tr hidden>
                                <th scope="row">Timer Sampling</th>
                                <td>
                                    <div class="input-group">
                                        <input name="intervalMenit" value="<?=$arrSet[4]['intervalmenit'];?>" readonly id="intervalMenit" type="text" class="form-control text-center" placeholder="00" aria-label="Jammulai">
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="input-group">   
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" onclick="tuJadwalClick(8);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
                                            <button disabled name="submit5" type="submit" value="set-005" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>	                    
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- akhir set timer -->     

    <!-- gambar pemanis -->
    <div class="container footer" style="margin-top: 20px;">
        <img height="100" src="images/logo.png" alt="logo+teks">
        <h3>PT. LGAP </h3>
        <h5>LANGGENG AGRO PERSADA </h5>
        <p>&copy; 2022</p>
    </div>
</div>
<!-- content end -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script type="text/javascript">
    window.onscroll = function () {
        const nav = document.querySelector("nav");
        const fixedNav = nav.offsetTop;            

        //   console.info(fixedNav);
        if (window.pageYOffset > fixedNav) {
            nav.classList.add("bayangan");                
        } else {
            nav.classList.remove("bayangan");                
        }
    };


    const tsJadwal = document.querySelectorAll(".bs-jadwal");

    function tuJadwalClick(sc) {
          // tsJadwalClick();

          tsJadwal[sc].disabled = false;

          switch (sc) {		
            case 0:
              sc1JamS.readOnly = false;
              sc1MenitS.readOnly = false;
              sc1JamE.readOnly = false;
              sc1MenitE.readOnly = false;
              sc1JamS.focus();
              break;
            case 1:
              sc2JamS.readOnly = false;
              sc2MenitS.readOnly = false;
              sc2JamE.readOnly = false;
              sc2MenitE.readOnly = false;
              sc2JamS.focus();
              break;
            case 2:
              sc5JamS.readOnly = false;
              sc5MenitS.readOnly = false;
              sc5JamE.readOnly = false;
              sc5MenitE.readOnly = false;
              sc5JamS.focus();
              break;
            case 3:
              sc6JamS.readOnly = false;
              sc6MenitS.readOnly = false;
              sc6JamE.readOnly = false;
              sc6MenitE.readOnly = false;
              sc6JamS.focus();
              break;
            case 4:
              sc3JamS.readOnly = false;
              sc3MenitS.readOnly = false;
              sc3JamE.readOnly = false;
              sc3MenitE.readOnly = false;
              sc3JamS.focus();
              break;
            case 5:
              sc4JamS.readOnly = false;
              sc4MenitS.readOnly = false;
              sc4JamE.readOnly = false;
              sc4MenitE.readOnly = false;
              sc4JamS.focus();
              break;
            case 6:
              acSuhu.readOnly = false;			      
              acSuhu.focus();
              break;
            case 7:
              acSuhuB.readOnly = false;			      
              acSuhuB.focus();			      
              break;
            case 8:			      
              intervalMenit.readOnly = false;			      
              intervalMenit.focus();
              break;			    
            default:
              break;
          }
        }
</script>

<!-- GSAP animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script>      
  gsap.from("nav img", { duration: 1, opacity: 0, rotateY: 360 });
  gsap.from(".footer img", { duration: 1, opacity: 0, rotateY: 360 });
</script>

</body>
</html>