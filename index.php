<?php 
  error_reporting(0);

  // redirect 
  //   header("location: login.php", true, 301);
  //   exit();

    $dataLtSatuA = "--- --- ---";
    $dataLtSatuB = "--- --- ---";
    $dataLtDuaA = "--- --- ---";
    $dataLtDuaB = "--- --- ---";
    $dataLtTigaA = "--- --- ---";

    $urlLantaiSatu = "kontrol-1.php";
    $urlLantaiDua = "kontrol-2.php";
    $urlLantaiTiga = "kontrol-3.php";

    $status = "loading...";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include 'temp/icon.php'; ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- AOS animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Quantico&family=ZCOOL+QingKe+HuangYou&family=Fjalla+One&family=Squada+One&family=Teko&display=swap" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <style type="text/css">  

        #main table {
            font-size: 14px;    
            font-family: "Quantico","Fjalla One", sans-serif;     
        }
        
        #main table tr td{            
            border-color: coral;
        }

        #main table tr th{            
            border-color: coral;
            border-bottom: none;
        }

        .navbar .navbar-brand img{
            height: 50px;
        }

        .navbar-light .nav-link {
            color: rgba(0,0,0,0.9);
            font-size: 14px;
        }

        .navbar-light .nav-link:hover {
            color: rgba(0,0,0,0.5);
        }

        .bayangan {
            box-shadow: 0 2px 5px 2px rgba(0, 0, 0, 0.2);
        }

        .tema-warna {
            background-color: #d9f99d;;
        }

        .tema-warna-a {
            background-color: #bef264;
        }

        .tema-warna-b {
            background-color: floralwhite;   
        }

        .tema-warna-c {
            background-color: #a3e635;
            border-color: #a3e635;
        }

        .tema-warna-d {
            background-color: #44403c;
            border-color: #44403c;
        }

      h2 {
        font-family: "Squada One", "Teko", "Fjalla One", sans-serif;        
      }

      .btn-group button {
            font-size: 10px;
            padding: 0.375rem 0.55rem
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

      .footer, nav , #form-login {
        font-family: "Quantico", "Fjalla One", sans-serif;        
      }

      .style-link-tabel{
        color: #44403c;
        background-color:#bef264; 
        padding:5px 10px; 
        border-radius:5px;
      }
      

      @media (min-width: 768px) { 
        #main table {
            font-size: 18px;            
        }

        .navbar .navbar-brand img{
            height: 60px;
        }

        .navbar-light .nav-link {
            color: rgba(0,0,0,0.9);
            font-size: 18px;
        }

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
            padding: 0.375rem 0.75rem
        } 

      .card button.status-on-off {
        font-size: 18px;
      }

      button {
        font-size: 18px;
      }
     }
    </style>

    <title>Traffic Light Monitoring | Provinsi Kalimantan Barat</title>
  </head>
  <body class="tema-warna-b">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top tema-warna-a">
        <a class="navbar-brand mb-0 h1" href="index.php">
            <img src="images/logo-teks-1.png" class="d-inline-block align-top" alt="logo">
        </a>  
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">        

            </div>
        </div>  
        <form class="form-inline my-2 my-lg-0">        
            <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right" aria-hidden="true"></i> Login</a>          
            <a class="nav-link" href="kontrol-1.php"><i class="bi bi-tools" aria-hidden="true"></i> Halaman Kontrol</a> 
        </form>
    </nav>    
    <!-- Akhir NAVBAR -->

    <div class="container" style="text-align: center; margin-top: 100px;">            
         <!-- MAIN -->
        <section id="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <table class="mt-3 table table-striped table-info table-bordered text-center tema-warna-b">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Device</th>
                                    <th scope="col">Data</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Kontrol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td class="text-left">Lantai 1 - device A</td>
                                    <td class="data-lt1a"><?= $dataLtSatuA; ?></td>
                                    <td class="status-lt1a font-italic font-weight-bold"><?= $status; ?></td>
                                    <td><a class="style-link-tabel" style="" href="<?= $urlLantaiSatu; ?>"><i class="bi bi-tools"></i></a></td>
                                </tr>                                                        
                                <tr>
                                    <td scope="row">2</td>
                                    <td class="text-left">Lantai 1 - device B</td>
                                    <td class="data-lt1b"><?= $dataLtSatuB; ?></td>
                                    <td class="status-lt1b font-italic font-weight-bold"><?= $status; ?></td>
                                    <td><a class="style-link-tabel" href="<?= $urlLantaiSatu; ?>"><i class="bi bi-tools"></i></a></td>
                                </tr>                                                        
                                <tr>
                                    <td scope="row">3</td>
                                    <td class="text-left">Lantai 2 - device A</td>
                                    <td class="data-lt2a"><?= $dataLtDuaA; ?></td>
                                    <td class="status-lt2a font-italic font-weight-bold"><?= $status; ?></td>
                                    <td><a class="style-link-tabel" href="<?= $urlLantaiDua; ?>"><i class="bi bi-tools"></i></a></td>
                                </tr>                                                        
                                <tr>
                                    <td scope="row">4</td>
                                    <td class="text-left">Lantai 2 - device B</td>
                                    <td class="data-lt2b"><?= $dataLtDuaB; ?></td>
                                    <td class="status-lt2b font-italic font-weight-bold"><?= $status; ?></td>
                                    <td><a class="style-link-tabel" href="<?= $urlLantaiDua; ?>"><i class="bi bi-tools"></i></a></td>
                                </tr> 
                                <tr>
                                    <td scope="row">5</td>
                                    <td class="text-left">Lantai 3 - device A</td>
                                    <td class="data-lt3a"><?= $dataLtTigaA; ?></td>
                                    <td class="status-lt3a font-italic font-weight-bold"><?= $status; ?></td>
                                    <td><a class="style-link-tabel" href="<?= $urlLantaiTiga; ?>"><i class="bi bi-tools"></i></a></td>
                                </tr>                                                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir MAIN -->


        <!-- FOOTER -->  
        <div class="row">
            <div class="col">
                <div class="container footer" style="margin-top: 20px;">
                    <img height="100" src="images/logo.png" alt="logo+teks">
                    <h3>PT. LGAP </h3>
                    <h5>LANGGENG AGRO PERSADA </h5>
                    <p>&copy; 2022</p>
                </div>
            </div>
        </div>  
        <!-- Akhir FOOTER -->
    </div>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        once: true,
      });
    </script>

    <!-- GSAP animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script>
      gsap.from(".navbar", { duration: 1.5, opacity: 0, y: "-100%", ease: "bounce" });
      gsap.from(".footer img", { duration: 1, opacity: 0, rotateY: 360 });
      gsap.from(".footer h3", { duration: 1.5, opacity: 0 });
      gsap.from(".footer h5", { duration: 1.5, opacity: 0 });
      gsap.from(".footer p", { duration: 1.5, opacity: 0 });
    </script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    <script>
      const userInput = document.querySelector("#user-input");      
      setTimeout(() => {        
        userInput.focus();
      }, 500);
    </script>
  </body>
</html>

