<?php 
  error_reporting(0);

  include "session.php";
  
  // buat koneksi ke database
	require_once 'dbconn.php';

  /** variabel start*/
  $tbUser = "tb_user";  
  /** variabel end*/

  /** awal baca database  timer**/
  $arrUser = array();

  $sql = mysqli_query($konek, "select * from $tbUser"); 

  if (!$sql) {
      echo "Error: " . $sql . "<br>" . mysqli_error($konek);
  }

  foreach ($sql as $key => $value) {
      $h['id'] = $value['id'];
      $h['username'] = $value['username'];
      $h['level'] = $value['level'];
      $h['password'] = $value['password'];      

      array_push($arrUser, $h);
  }

  // foreach ($arrUser as $key => $value) {
  //   echo $value['username'];
  // }

  // echo $arrUser[0]['password'];
  // $userOnDB = $arrUser[0]['username'];
  // $passOnDB = $arrUser[0]['password'];

  /** akhir baca database timer**/
  
  if (isset($_SESSION["login"])) {
    unset($_SESSION["login"]);
  }
  if (isset($_SESSION["admin"])) {
    unset($_SESSION["admin"]);
  }
  
    $lt = "1";
    if (isset($_GET["lt"])) {
        $lt = $_GET["lt"];
    }

    if (isset($_POST["login"])) {
        $username = $_POST["userLogin"];
        $password = md5($_POST["userPassword"]);

        foreach ($arrUser as $key => $value) {
          if ($username == $value['username']) {
            if ($password == $value['password']) {
              if ($value['level'] == "admin") {
                $_SESSION["login"] = true;
                $_SESSION["admin"] = true;
                header("Location:adminpage.php");
                exit;
              }
              $_SESSION["login"] = true;
              header("Location:kontrol-$lt.php");
              exit;
            }            
          }
        }

        // if ($username == $userOnDB && $password == $passOnDB) {            
        //     $_SESSION["login"] = true;
        //     header("Location:kontrol-$lt.php");
        //     exit;
        // }

        echo "<script>alert('user dan pasword tidak sesuai!');</script>";
    
    } 


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
    <!-- <link rel="stylesheet" href="css/style.css" /> -->

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

    <title>Hidroponik Smart System - PT. LGAP</title>
  </head>
  <body class="tema-warna-b">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-light fixed-top tema-warna-a">
        <a class="navbar-brand mb-0 h1" href="index.php">
            <img src="images/logo-teks-1.png" height="60" class="d-inline-block align-top" alt="logo">
            <!-- <img src="images/logo-teks.png" alt="logo+teks"> -->        
        </a>    
    </nav>
    <!-- Akhir NAVBAR -->

    <div class="container" style="text-align: center; margin-top: 100px;">            
        <!-- form login -->
        <div class="row justify-content-center">
            <div class="col-md-6 align-self-center">                
                <div class="card text-center mt-4 mb-2">
                    <div class="card-header tema-warna" style="font-size: 16px; font-weight: bold;">
                    USER LOGIN <?=$ketLantai;?>
                    </div>
                    <div class="card-body">                 
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="UserLogin" class="form-label">User</label>
                                        <input id="user-input" type="text" class="form-control" name="userLogin" id="UserLogin" aria-describedby="userHelp">          
                                    </div>
                                    <div class="mb-3">
                                        <label for="userPassword" class="form-label">Password</label>
                                        <div class="input-group">
                                          <input type="password" class="form-control" name="userPassword" id="userPassword">
                                          <div class="input-group-append">                        
                                              <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                              <span id="passicon" onclick="changePass()" class="input-group-text">
                      
                                                  <!-- icon mata bawaan bootstrap  -->
                                                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                                      xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                      <path fill-rule="evenodd"
                                                          d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                  </svg>
                                              </span>
                                          </div>
                                        </div>
                                    </div>    
                                    <button type="submit" name="login" class="btn btn btn-warning tema-warna-c">Login</button>
                                </form>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir form login -->


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

      function changePass() {
    
        // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
        let inputPass = document.querySelector("#userPassword");
        let tipeInputPass = document.querySelector("#userPassword").type;
        let iconMata = document.querySelector("#passicon");    

        //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
        if (tipeInputPass == "password") {            

            //ubah form input password menjadi text
            document.querySelector("#userPassword").type = "text";
            
            //ubah icon mata terbuka menjadi tertutup
            iconMata.innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                            <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                            <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                            </svg>`;
        }
        else {            
            //ubah form input password menjadi text
            document.querySelector("#userPassword").type = "password";

            //ubah icon mata terbuka menjadi tertutup
            iconMata.innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                            </svg>`;
        }
    }
    </script>
  </body>
</html>

