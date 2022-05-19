<?php

  $iconActive = "fa fa-building-o";
  $iconNonActive = "fa fa-building";

  $iconI = $iconNonActive;
  $iconII = $iconNonActive;
  $iconIII = $iconNonActive;

  if ($ketLantai === "LANTAI 1") {
    $iconI = $iconActive;
  }elseif ($ketLantai === "LANTAI 2") {
    $iconII = $iconActive;
  }elseif ($ketLantai === "LANTAI 3") {
    $iconIII = $iconActive;
  }

?>

<!-- navbar -->
    <!-- <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: lightskyblue;">
      <a class="navbar-brand mb-0 h1" href="index.php">
        <img src="images/setetesair.png" width="30" height="30" class="d-inline-block align-top" alt="">
        PT. LGAP
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">        
          <a class="nav-link" href="index.php"><i class="fa fa-television" aria-hidden="true"></i> Monitor</a>          
          <a class="nav-link" href="manual.php"><i class="fa fa-wrench" aria-hidden="true"></i> Kontrol</a>          
          <a class="nav-link" href="setlampu.php"><i class="fa fa-hourglass-half" aria-hidden="true"></i> Set Timer</a>
          <a class="nav-link" href="grafik.php"><i class="fa fa-line-chart" aria-hidden="true"></i> Data Log</a>
        </div>
      </div>
    </nav> -->

    <nav class="navbar navbar-expand-sm navbar-light fixed-top tema-warna-a">
      <a class="navbar-brand mb-0 h1" href="index.php">
        <img src="images/logo-teks-1.png" height="60" class="d-inline-block align-top" alt="logo">
        <!-- <img src="images/logo-teks.png" alt="logo+teks"> -->        
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">        
          <a class="nav-link" href="kontrol-1.php"><i class="<?=$iconI;?>" aria-hidden="true"></i> Lantai 1</a>          
          <a class="nav-link" href="kontrol-2.php"><i class="<?=$iconII;?>" aria-hidden="true"></i> Lantai 2</a>          
          <a class="nav-link" href="kontrol-3.php"><i class="<?=$iconIII;?>" aria-hidden="true"></i> Lantai 3</a>        
        </div>
      </div>
    </nav>

<!-- akhir navbar -->