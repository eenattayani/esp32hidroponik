<?php
    error_reporting(0);

	include 'session.php';

    if (!isset($_SESSION["login"]) || !isset($_SESSION["admin"])) {
        // echo "<script>alert('silahkan login!');</script>";

        header("Location:login.php");
        exit;
    }

    // buat koneksi ke database
	require_once 'dbconn.php';

    /** variabel start*/
    $tbUser = "tb_user";  
    /** variabel end*/

    /** hapus data user */
    if (isset($_POST["delete"])) {  
        $userhapus = $_POST["delete"];
        // echo "usernya: " . $_POST["delete"];
        $sql = mysqli_query($konek, "DELETE from $tbUser where username='$userhapus'");

        if (!$sql) {
            echo "<br><br><br><br><br>";
            echo "Error: " . $sql . "<br>" . mysqli_error($konek);
        }

        echo "<script>alert('data berhasil dihapus!')</script>";
    }
    
  
    /** awal baca database  timer**/
    $arrUser = array();
  
    $sql = mysqli_query($konek, "select * from $tbUser"); 
  
    if (!$sql) {
        echo "Error: " . $sql . "<br>" . mysqli_error($konek);
    }
  
    foreach ($sql as $key => $value) {
        $h['nomor'] = $key + 1;
        $h['username'] = $value['username'];
        $h['level'] = $value['level'];
        $h['password'] = str_split($value['password'],strlen($value['password']) - 2)[0];
  
        array_push($arrUser, $h);
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
        table {
            font-family: "Quantico","Fjalla One", sans-serif;     
            font-size: 14px;   
        }

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

      h3 {
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

    <title>Admin Page - Hidroponik Smart System</title>
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
        <!-- show users -->
        <div class="row justify-content-center">
            <div class="col-md align-self-center">     
                <hr>    
                    <h3>MANAGE USER</h3>                           
                <hr>
                
                <form action="" method="POST">
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Username</th>
                                <!-- <th>Password</th> -->
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($arrUser as $key => $value) { ?>                              
                            <tr>
                                <td class="text-center"><?=$value['nomor'];?></td>
                                <td class="text-center"><?=$value['username'];?></td>
                                <!-- <td><?=$value['password'];?></td> -->
                                <td class="text-center"><?=$value['level'];?></td>
                                <td class="text-center">                                    
                                        <a class="btn btn-warning btn-sm" href="editpage.php?username=<?=$value['username'];?>" role="button"><i class="bi bi-pencil-square"></i> Edit</a>                                                                                                      
                                        <button type="submit" class="btn btn-secondary btn-sm" name="delete" value="<?=$value['username'];?>" disabled>Delete <i class="bi bi-trash"></i></button>                                                                                                                  
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <a class="btn btn-warning tema-warna-c" href="tambahuser.php" role="button">+ Tambah User</a>                      
                                </td>
                            </tr>
                        </tfoot>
                    </table>                  
                </form>                                                                                              
            </div>
        </div>
        <!-- akhir shows user -->


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
    //   const userInput = document.querySelector("#user-input");      
    //   setTimeout(() => {        
    //     userInput.focus();
    //   }, 500);
    </script>
  </body>
</html>

