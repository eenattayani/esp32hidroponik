<?php 
	include 'session.php';	

	// buat koneksi ke database
	require_once 'dbconn.php';

    $idEsp = "NULL";

	// baca data yang dikirim dari ESP32
	// $ph1 = $_GET['ph1'];
	// $tds1 = $_GET['tds1'];
	// $suhuair1 = $_GET['suhuair1'];
	// $suhuudara = $_GET['suhuudara'];
	// $ph2 = $_GET['ph2'];
	// $tds2 = $_GET['tds2'];
	// $suhuair2 = $_GET['suhuair2'];
	// $kelembaban = $_GET['kelembaban'];
    if (isset($_GET['id'])) {    
        $idEsp = $_GET['id']; 
        if (isset($_GET['dataesp'])) {
            $dataEsp = $_GET['dataesp'];
        } else {
            $dataEsp = "no data";
        }                          

        if ($idEsp === "ESPA") {            
            $_SESSION['idESPA'] = $idEsp;  
            $_SESSION['status1a'] = "terhubung";
            $_SESSION['count1a'] = 0;
            $_SESSION['dataAlat1a'] = $dataEsp;    
            
            // jika ada perintah kontrol unutk ESPA
            if (isset($_SESSION['kontrol1a'])) {
                echo "id:" . $idEsp;
                echo ":mode:kontrol:";
                echo $_SESSION['kodealat1a'] . ":";
                echo $_SESSION['kontrol1a'];
   
                unset($_SESSION['kodealat1a']);
                unset($_SESSION['kontrol1a']);
            } else{
                echo "id:" . $idEsp;
                echo ":";
                echo"mode:monitoring";
                echo ":";
                echo "status:terhubung";                
    
            }

        } elseif ($idEsp === "ESPB") { 
            $_SESSION['idESPB'] = $idEsp;        
            $_SESSION['status1b'] = "terhubung";
            $_SESSION['count1b'] = 0;            
            $_SESSION['dataAlat1b'] = $dataEsp;    
            
            // jika ada perintah kontrol unutk ESPB
            if (isset($_SESSION['kontrol1b'])) {
                echo "id:" . $idEsp;
                echo ":mode:kontrol:";
                echo $_SESSION['kodealat1b'] . ":";
                echo $_SESSION['kontrol1b'];
   
                unset($_SESSION['kodealat1b']);
                unset($_SESSION['kontrol1b']);
            } else{
                echo "id:" . $idEsp;
                echo ":";
                echo"mode:monitoring";
                echo ":";
                echo "status:terhubung";                
    
            }
        } elseif ($idEsp === "ESPC") { 
            $_SESSION['idESPC'] = $idEsp;        
            $_SESSION['status2a'] = "terhubung";
            $_SESSION['count2a'] = 0;            
            $_SESSION['dataAlat2a'] = $dataEsp;    
            
            // jika ada perintah kontrol untuk ESPC
            if (isset($_SESSION['kontrol2a'])) {
                echo "id:" . $idEsp;
                echo ":mode:kontrol:";
                echo $_SESSION['kodealat2a'] . ":";
                echo $_SESSION['kontrol2a'];
   
                unset($_SESSION['kodealat2a']);
                unset($_SESSION['kontrol2a']);
            } else{
                echo "id:" . $idEsp;
                echo ":";
                echo"mode:monitoring";
                echo ":";
                echo "status:terhubung";                
    
            }
        } elseif ($idEsp === "ESPD") { 
            $_SESSION['idESPD'] = $idEsp;        
            $_SESSION['status2b'] = "terhubung";
            $_SESSION['count2b'] = 0;            
            $_SESSION['dataAlat2b'] = $dataEsp;    
            
            // jika ada perintah kontrol untuk ESPD
            if (isset($_SESSION['kontrol2b'])) {
                echo "id:" . $idEsp;
                echo ":mode:kontrol:";
                echo $_SESSION['kodealat2b'] . ":";
                echo $_SESSION['kontrol2b'];
   
                unset($_SESSION['kodealat2b']);
                unset($_SESSION['kontrol2b']);
            } else{
                echo "id:" . $idEsp;
                echo ":";
                echo"mode:monitoring";
                echo ":";
                echo "status:terhubung";                
    
            }
        } elseif ($idEsp === "ESPE") { 
            $_SESSION['idESPE'] = $idEsp;        
            $_SESSION['status3a'] = "terhubung";
            $_SESSION['count3a'] = 0;            
            $_SESSION['dataAlat3a'] = $dataEsp;    
            
            // jika ada perintah kontrol unutk ESPE
            if (isset($_SESSION['kontrol3a'])) {
                echo "id:" . $idEsp;
                echo ":mode:kontrol:";
                echo $_SESSION['kodealat3a'] . ":";
                echo $_SESSION['kontrol3a'];
   
                unset($_SESSION['kodealat3a']);
                unset($_SESSION['kontrol3a']);
            } else{
                echo "id:" . $idEsp;
                echo ":";
                echo"mode:monitoring";
                echo ":";
                echo "status:terhubung";                
    
            }
        }
    }

	// simpan ke tabel tb_sensor

	// auto increment = 1 / mengembalikan id menjadi 1 apabila dikosongkan
	// mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

	// simpan data sensor ke tabel tb_sensor
	// $simpan = mysqli_query($konek, "insert into tb_monitor(ph1,tds1,suhuair1,suhuudara,ph2,tds2,suhuair2,kelembaban)values('$ph1','$tds1','$suhuair1','$suhuudara','$ph2','$tds2','$suhuair2','$kelembaban')");

	// uji simpan untuk memberikan respon ke ESP32
	// if($simpan)		
		// if (isset($_SESSION['modeesp'])) {
		//      echo "id:" . $idEsp . ":mode:kontrol:" . $_SESSION['modeesp'] . ":" . $_SESSION['dataesp'];

		//      unset($_SESSION['modeesp']);
		// }

        else {
		    echo "id:" . $idEsp;
            echo ":";
            echo"mode:monitoring";
		    echo ":";
		    echo "status:terhubung";                

		}

 ?>