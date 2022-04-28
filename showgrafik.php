<?php
    require_once 'dbconn.php';

    // $jamMenit = mysqli_query($konek, "select id from tb_monitor order by id desc limit 40");
    // $ph1 = mysqli_query($konek, "select ph1 from tb_monitor order by id desc limit 40");
    // $ph2 = mysqli_query($konek, "select ph2 from tb_monitor order by id desc limit 40");
    
    $arrSensor = array();

    $sqlSensor = mysqli_query($konek, "select id,ph1,ph2,tds1,tds2,suhuair1,suhuair2,suhuudara,kelembaban from tb_monitor order by id desc limit 40");
    
    if(!$sqlSensor){
        echo "<br><br><br>Error: " . $sqlSensor . "<br" . mysqli_error($konek);
    } else {
        // echo "<br><br><br>Query berhasil";
    }


    foreach ($sqlSensor as $key => $value) {
        $s['id'] = $value['id'];
        $s['ph1'] = $value['ph1'];
        $s['ph2'] = $value['ph2'];
        $s['tds1'] = $value['tds1'];
        $s['tds2'] = $value['tds2'];
        $s['suhuair1'] = $value['suhuair1'];
        $s['suhuair2'] = $value['suhuair2'];
        $s['suhuudara'] = $value['suhuudara'];
        $s['kelembaban'] = $value['kelembaban'];

        array_push($arrSensor, $s);
    }

    echo json_encode($arrSensor);
?>