<?php
include 'session.php';

require_once 'dbconn.php';

/** awal pengecekan data POST **/
	if (isset($_POST["alat1on"])) {
		$idalat = $_POST['alat1id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "A";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat1off"])) {
		$idalat = $_POST['alat1id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "A";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat2on"])) {
		$idalat = $_POST['alat2id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "B";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat2off"])) {
		$idalat = $_POST['alat2id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "B";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat3on"])) {
		$idalat = $_POST['alat3id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "C";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat3off"])) {
		$idalat = $_POST['alat3id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "C";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat4on"])) {
		$idalat = $_POST['alat4id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "D";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat4off"])) {
		$idalat = $_POST['alat4id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "D";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat5on"])) {
		$idalat = $_POST['alat5id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "E";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat5off"])) {
		$idalat = $_POST['alat5id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "E";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat6on"])) {
		$idalat = $_POST['alat6id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "F";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat6off"])) {
		$idalat = $_POST['alat6id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "F";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat7on"])) {
		$idalat = $_POST['alat7id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "G";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat7off"])) {
		$idalat = $_POST['alat7id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "G";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat8on"])) {
		$idalat = $_POST['alat8id'];
		$statusalat = 1;

		$_SESSION['modeesp'] = "H";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	} else if (isset($_POST["alat8off"])) {
		$idalat = $_POST['alat8id'];
		$statusalat = 0;

		$_SESSION['modeesp'] = "H";
		$_SESSION['dataesp'] = $statusalat;

		$simpan = mysqli_query($konek,
		"update tb_kontrolmanual 
		 set status=$statusalat 
		 where id='$idalat'
		");

	}

/** akhir pengecekan data POST **/


/** awal baca database **/
$arrStatus = array();

$sql = mysqli_query($konek, "select id, status from tb_kontrolmanual");

if (!$sql) {
	echo "Error: " . $sql . "<br>" . mysqli_error($konek);
}

foreach ($sql as $key => $value) {
	$h['id'] = $value['id'];
	$h['status'] = $value['status'];

	array_push($arrStatus, $h);
}
/** akhir baca database **/

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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/813cbbbcbe.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Quantico&family=ZCOOL+QingKe+HuangYou&family=Fjalla+One&family=Squada+One&family=Teko&display=swap" rel="stylesheet" />

    <style type="text/css">
      h2 {
        font-family: "Squada One", "Teko", "Fjalla One", sans-serif;        
      }

      .card{
        font-family: "Quantico", sans-serif;        
      }

      .footer, nav {
        font-family: "Quantico", "Fjalla One", sans-serif;        
      }
    </style>

    <title>Hidroponik Smart System - PT. LGAP</title>
    

  </head>
  <body>

<?php include 'temp/navbar.php'; ?>

<!-- content -->
    <div class="container" style="text-align: center; margin-top: 100px;">

      <div class="card text-center" style="width: 100%;">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue;">
            KONTROL MANUAL
          </div>
          <div class="card-body">
            	<form action="" method="post">
						    <table class="table">
								  <thead>
								    
								  </thead>
								  <tbody>
								  	<tr>
								  		<th>#</th>
								  		<th>Saklar</th>								  		
								  		<th>Status</th>
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
								      	<button type="button" class="btn btn-primary"><?=cek_status($arrStatus[0]['status']);?></button>
								      </td>
								      <th scope="col">Lamp 2</th>
								      <td scope="col">
								      	<div class="btn-group" role="group" aria-label="Basic example">
												  <button name="alat2off" type="submit" class="<?=cek_tbl_off($arrStatus[4]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
												  <button name="alat2on" type="submit" class="<?=cek_tbl_on($arrStatus[4]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
												</div>
								      </td>
								      <td>	
								      	<input type="hidden" name="alat2id" value="<?=$arrStatus[4]['id'];?>">	
												<button type="button" class="btn btn-primary"><?=cek_status($arrStatus[4]['status']);?></button>		  
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
												 <button type="button" class="btn btn-primary"><?=cek_status($arrStatus[1]['status']);?></button>
								      </td>
								      <th>Fan 2</th>
								      <td>
								      	<div class="btn-group" role="group" aria-label="Basic example">
												  <button name="alat4off" type="submit" class="<?=cek_tbl_off($arrStatus[5]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
												  <button name="alat4on" type="submit" class="<?=cek_tbl_on($arrStatus[5]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
												</div>
								      </td>
								      <td>
								      	<input type="hidden" name="alat4id" value="<?=$arrStatus[5]['id'];?>">
												<button type="button" class="btn btn-primary"><?=cek_status($arrStatus[5]['status']);?></button>			  
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
												<button type="button" class="btn btn-primary"><?=cek_status($arrStatus[2]['status']);?></button>			  
								      </td>
								      <th>Pomp 2</th>
								      <td>
								      	<div class="btn-group" role="group" aria-label="Basic example">
												  <button name="alat6off" type="submit" class="<?=cek_tbl_off($arrStatus[6]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
												  <button name="alat6on" type="submit" class="<?=cek_tbl_on($arrStatus[6]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>	
												</div>
								      </td>
								      <td>
								      	<input type="hidden" name="alat6id" value="<?=$arrStatus[6]['id'];?>">
												<button type="button" class="btn btn-primary"><?=cek_status($arrStatus[6]['status']);?></button>		  
								      </td>
								    </tr>
								    <tr>
								      <th scope="row">Semai Lamp 1</th>
								      <td>
								      	<div class="btn-group" role="group" aria-label="Basic example">
												  <button name="alat7off" type="submit" class="<?=cek_tbl_off($arrStatus[3]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
												  <button name="alat7on" type="submit" class="<?=cek_tbl_on($arrStatus[3]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		
												</div>
								      </td>
								      <td>
								      	<input type="hidden" name="alat7id" value="<?=$arrStatus[3]['id'];?>">
												<button type="button" class="btn btn-primary"><?=cek_status($arrStatus[3]['status']);?></button>	  
								      </td>
								      <th>Semai Lamp 2</th>
								      <td>
								      	<div class="btn-group" role="group" aria-label="Basic example">
												  <button name="alat8off" type="submit" class="<?=cek_tbl_off($arrStatus[7]['status']);?>"><i class="fa fa-times-circle-o" aria-hidden="true"></i>  Off</button>
												  <button name="alat8on" type="submit" class="<?=cek_tbl_on($arrStatus[7]['status']);?>">On  <i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>		 
												</div>
								      </td>
								      <td>
								      	<input type="hidden" name="alat8id" value="<?=$arrStatus[7]['id'];?>">
												<button type="button" class="btn btn-primary"><?=cek_status($arrStatus[7]['status']);?></button>		 
								      </td>
								    </tr>
								  </tbody>
								</table>
							</form>
          </div>
        </div>


      <!-- gambar pemanis -->
      <div class="container footer" style="margin-top: 20px;">
        <img src="images/setetesair.png">
        <h3>PT. LGAP </h3>
        <p>&copy; 2022</p>
      </div>

    </div>

    <!-- GSAP animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script>      
      gsap.from("nav img", { duration: 1, opacity: 0, rotateY: 360 });
      gsap.from(".footer img", { duration: 1, opacity: 0, rotateY: 360 });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>