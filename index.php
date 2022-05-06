<?php
// redirect 
header("location: kontrol-1.php", true, 301);
exit();
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
        font-family: "Fjalla One", sans-serif;        
      }

      .card .card-header{
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

      <h2>LIVE MONITORING SENSOR</h2>
      
      <!-- tower I -->
      <div style="display: flex; margin-top: 20px;">
        <!-- menampilkan nilai suhu -->
        <div class="card text-center" style="width: 25%;">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue;">
            pH 1
          </div>
          <div class="card-body">
            <h3> <span id="phsatu"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan nilai suhu -->

         <!-- menampilkan nilai kelembaban -->
        <div class="card text-center" style="width: 25%">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue; color: black;" >
            TDS 1
          </div>
          <div class="card-body">
            <h3> <span id="tdssatu"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan nilai kelembaban -->

         <!-- menampilkan nilai LDR -->
        <div class="card text-center" style="width: 25%">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue; color: black;">
            Suhu Air 1
          </div>
          <div class="card-body">
            <h3> <span id="suhuairsatu"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan nilai LDR -->

         <!-- menampilkan suhu udara -->
        <div class="card text-center" style="width: 25%">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue; color: black;">
            Suhu Udara
          </div>
          <div class="card-body">
            <h3> <span id="suhuudara"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan suhu udara -->
      </div>
      <!-- akhir tower I -->

      <!-- tower II -->
      <div style="display: flex; margin-top: 30px;">
        <!-- menampilkan nilai suhu -->
        <div class="card text-center" style="width: 25%;">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue;">
            pH 2
          </div>
          <div class="card-body">
            <h3> <span id="phdua"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan nilai suhu -->

         <!-- menampilkan nilai kelembaban -->
        <div class="card text-center" style="width: 25%">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue; color: black;" >
            TDS 2
          </div>
          <div class="card-body">
            <h3> <span id="tdsdua"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan nilai kelembaban -->

         <!-- menampilkan nilai LDR -->
        <div class="card text-center" style="width: 25%">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue; color: black;">
            Suhu Air 2
          </div>
          <div class="card-body">
            <h3> <span id="suhuairdua"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan nilai LDR -->

         <!-- menampilkan suhu udara -->
        <div class="card text-center" style="width: 25%">
          <div class="card-header" style="font-size: 16px; font-weight: bold; background-color: lightskyblue; color: black;">
            Kelembaban
          </div>
          <div class="card-body">
            <h3> <span id="kelembaban"> 0 </span> </h3>
          </div>
        </div>
        <!-- akhir menampilkan suhu udara -->
      </div>
      <!-- akhir tower II -->


      <!-- gambar pemanis -->
      <div class="container footer" style="margin-top: 20px;">
        <img src="images/setetesair.png">
        <h3>PT. LGAP </h3>
        <p>&copy; 2022</p>
      </div>

    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    <!-- load otomatis / realtime -->
    <script type="text/javascript">
      
      $(document).ready( function() {
        setInterval( function() {          
          $("#phsatu").load('cekphsatu.php');
          $("#tdssatu").load('cektdssatu.php');
          $("#suhuairsatu").load('ceksuhuairsatu.php');
          $("#suhuudara").load('ceksuhuudara.php');
          $("#phdua").load('cekphdua.php');
          $("#tdsdua").load('cektdsdua.php');
          $("#suhuairdua").load('ceksuhuairdua.php');
          $("#kelembaban").load('cekkelembaban.php');          
        }, 2000 );
      } );

    </script>

    <!-- GSAP animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script>      
      gsap.from("nav img", { duration: 1, opacity: 0, rotateY: 360 });
      gsap.from(".footer img", { duration: 1, opacity: 0, rotateY: 360 });
    </script>

  </body>
</html>