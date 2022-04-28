<?php
	include 'session.php';

	// error_reporting(0);

	// buat koneksi ke database
	require_once 'dbconn.php';
	
/** awal pengecekan data POST **/
	if(isset($_POST["submit0"])){
		$hourstart = $_POST["sc1JamS"];
		$minstart = $_POST["sc1MenitS"];
		$hourend = $_POST["sc1JamE"];
		$minend = $_POST["sc1MenitE"];

		$_SESSION['modeesp'] = "a";
		$_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

		$simpan = mysqli_query($konek, 
			"update tb_settimer
			 set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
			 where id='set-001'
			");

	} else if(isset($_POST["submit1"])){
		$hourstart = $_POST["sc2JamS"];
		$minstart = $_POST["sc2MenitS"];
		$hourend = $_POST["sc2JamE"];
		$minend = $_POST["sc2MenitE"];

		$_SESSION['modeesp'] = "b";
		$_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

		$simpan = mysqli_query($konek, 
			"update tb_settimer
			 set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
			 where id='set-002'
			");

	} else if(isset($_POST["submit2"])){
		$hourstart = $_POST["sc3JamS"];
		$minstart = $_POST["sc3MenitS"];
		$hourend = $_POST["sc3JamE"];
		$minend = $_POST["sc3MenitE"];

		$_SESSION['modeesp'] = "c";
		$_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

		$simpan = mysqli_query($konek, 
			"update tb_settimer
			 set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
			 where id='set-003'
			");

	} else if(isset($_POST["submit3"])){
		$hourstart = $_POST["sc4JamS"];
		$minstart = $_POST["sc4MenitS"];
		$hourend = $_POST["sc4JamE"];
		$minend = $_POST["sc4MenitE"];

		$_SESSION['modeesp'] = "d";
		$_SESSION['dataesp'] = $hourstart . ":" . $minstart . ":". $hourend . ":" . $minend;

		$simpan = mysqli_query($konek, 
			"update tb_settimer
			 set on_jam=$hourstart, on_menit=$minstart, off_jam=$hourend, off_menit=$minend
			 where id='set-004'
			");

	} else if(isset($_POST["submit4"])){
		$intervalmenit = $_POST["intervalMenit"];

		$_SESSION['modeesp'] = "e";
		$_SESSION['dataesp'] = $intervalmenit;

		$simpan = mysqli_query($konek, 
			"update tb_settimer
			 set interval_menit=$intervalmenit
			 where id='set-005'
			");

	}
	else {
		//echo "<br><br><br> tidak ada data";
	}

/** akhir pengecekan data POST **/


/** awal baca database **/
	$arrSet = array();

	$sql = mysqli_query($konek, "select * from tb_settimer"); 

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

		array_push($arrSet, $h);
	}
/** akhir baca database **/


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
      h2 {
        font-family: "Squada One", "Teko", "Fjalla One", sans-serif;        
      }

      .card{
        font-family: "Quantico","Fjalla One", sans-serif;        
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
      <!-- awal set timer -->
      <div style="display: flex; margin-top: 20px;">
        <!-- menampilkan nilai suhu -->
        <div class="card text-center" style="width: 100%;">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue;">
            SET TIMER
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
	                      <th scope="row">Lampu Tower I</th>
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
	                      <th scope="row">Lampu Tower II</th>
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
	                            <button type="button" onclick="tuJadwalClick(2);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
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
	                            <button type="button" onclick="tuJadwalClick(3);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
	                            <button disabled name="submit3" type="submit" value="set-004" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
	                          </div>
	                        </div>
	                      </td>
	                    </tr>
	                     <tr>
   							        <th scope="col"></th>
              	        <th scope="col">Interval</th>
	                      <th scope="col"></th>
	                      <th scope="col"></th>
	                    </tr>
	                    <tr>
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
	                            <button type="button" onclick="tuJadwalClick(4);" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ubah"><i class="bi bi-pencil-square"></i></button>
	                            <button disabled name="submit4" type="submit" value="set-005" class="btn btn-primary bs-jadwal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="simpan"><i class="bi bi-save2"></i></button>
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
        <img src="images/setetesair.png">
        <h3>PT. LGAP </h3>
        <p>&copy; 2022</p>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script type="text/javascript">
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
			      sc3JamS.readOnly = false;
			      sc3MenitS.readOnly = false;
			      sc3JamE.readOnly = false;
			      sc3MenitE.readOnly = false;
			      sc3JamS.focus();
			      break;
			    case 3:
			      sc4JamS.readOnly = false;
			      sc4MenitS.readOnly = false;
			      sc4JamE.readOnly = false;
			      sc4MenitE.readOnly = false;
			      sc4JamS.focus();
			      break;
			    case 4:
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