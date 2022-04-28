<?php    
    function readDBSensor()
    {
        require_once 'dbconn.php';
        
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

        return $arrSensor;
    }

    $arrSensor = readDBSensor();

?>


<!doctype html>
<html>

<head>
    <!-- <meta http-equiv="refresh" content="5"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <?php include 'temp/icon.php'; ?>

    <title>Grafik Log Data Sensor - PT. LGAP</title>
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/813cbbbcbe.js" crossorigin="anonymous"></script>
    
    <!-- chartJS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

      .footer, nav {
        font-family: "Quantico", "Fjalla One", sans-serif;        
      }

      canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
      }
    </style>
</head>

<body>
    <?php include 'temp/navbar.php'; ?>

    <!-- content -->
    <div class="container" style="text-align: center; margin-top: 100px;">
        <div style="width:100%;">
            <canvas id="canvas"></canvas>
        </div>

        <div style="width:100%;">
            <canvas id="tdsCanvas"></canvas>
        </div>

        <div id="ajaxDiv"></div>

        <br>
        <br>
        <button id="randomizeData" hidden>Randomize Data</button>
        <button id="addDataset" hidden>Add Dataset</button>
        <button id="removeDataset" hidden>Remove Dataset</button>
        <button id="addData" hidden>Add Data</button>
        <button id="removeData" hidden>Remove Data</button>



     <!-- gambar pemanis -->
      <div class="container footer" style="margin-top: 20px;">
        <img src="images/setetesair.png">
        <h3>PT. LGAP </h3>
        <p>&copy; 2022</p>
      </div>
     </div>

        


    <script>
        const jam = 7;

        var BULAN = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var WAKTU = [];
        var PH1 = [], PH2 = [], TDS1 = [], TDS2 = [];
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 14 );
        };
        var randomColorFactor = function() {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function(opacity) {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
        };

        var config = {
            type: 'line',
            data: {
                labels: WAKTU,
                datasets: [{
                    label: "pH 1",
                    data: PH1,
                    lineTension: 0,
                    fill: false,
                },
                {
                    label: "pH 2",
                    data: PH2,
                    lineTension: 0,
                    fill: false,
                }]
            },
            options: {
                animation: {
                    duration: false,
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                hover: {
                    mode: 'label'
                },
                scales: {                                        
                    x: {
                        type: 'linear',
                        max:WAKTU[39],
                        min: WAKTU[0],  
                        ticks: {
                            stepSize: 1,
                        },                      
                        title: {
                            display: true,
                            text: 'waktu',
                        }
                    },
                    y: {
                        type: 'linear',                        
                        max: 14,
                        min: 0,
                        ticks: {
                            stepSize: 0.5,
                        },
                        title: {
                            display: true,
                            text: 'nilai pH',
                        }
                    }
                },
                title: {
                    display: true,
                    text: 'Data Log Nilai pH air'
                }                
            }
        };

        var tdsConfig = {
            type: 'line',
            data: {
                labels: WAKTU,
                datasets: [{
                    label: "TDS 1",
                    data: TDS1,
                    lineTension: 0,
                    fill: false,
                },
                {
                    label: "TDS 2",
                    data: TDS2,
                    lineTension: 0,
                    fill: false,
                }]
            },
            options: {
                animation: {
                    duration: false,
                },
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                hover: {
                    mode: 'label'
                },
                scales: {                                        
                    x: {
                        type: 'linear',   
                        max:WAKTU[39],
                        min: WAKTU[0],  
                        ticks: {
                            stepSize: 1,
                        },                      
                        title: {
                            display: true,
                            text: 'waktu',
                        }
                    },
                    y: {
                        type: 'linear',                        
                        max: 600,
                        min: 0,
                        ticks: {
                            stepSize: 10,
                        },
                        title: {
                            display: true,
                            text: 'nilai TDS',
                        }
                    }
                },
                title: {
                    display: true,
                    text: 'Data Log Nilai TDS air'
                }                
            }
        };


        

        $.each(config.data.datasets, function(i, dataset) {
            var background = randomColor(0.5);
            // var background =     

            dataset.borderColor = background;
            dataset.backgroundColor = background;
            dataset.pointBorderColor = background;
            dataset.pointBackgroundColor = background;
            dataset.pointBorderWidth = 1;
        });

        $.each(tdsConfig.data.datasets, function(i, dataset) {
            var background = randomColor(0.5);
            // var background =     

            dataset.borderColor = background;
            dataset.backgroundColor = background;
            dataset.pointBorderColor = background;
            dataset.pointBackgroundColor = background;
            dataset.pointBorderWidth = 1;
        });

        window.onload = function() {
            loadPHP();

            setTimeout(function(){
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myLine = new Chart(ctx, config);

                var tds = document.getElementById("tdsCanvas").getContext("2d");
                window.tdsLine = new Chart(tds, tdsConfig);
            },500);

            
        };

        $(document).ready( function() {
            setInterval( function() {   

                loadPHP();

                // myLine.data.labels = WAKTU;
                // myLine.data.datasets[0].data = PH1;
                // myLine.data.datasets[1].data = PH2;
                myLine.update();


                // tdsLine.data.labels = WAKTU;
                tdsLine.update();

                console.log("reload chart");
            }, 2000 );
        } );

        function loadPHP(){
          let ajaxRequest = new XMLHttpRequest();

          ajaxRequest.onreadystatechange = function () {
            if (ajaxRequest.readyState == 4) {
              const ajaxDisplay = document.getElementById("ajaxDiv");
              
              var responTeks = ajaxRequest.responseText;              
              
              responTeks = JSON.parse(responTeks);

              responTeks.forEach((item, index ) => {
                WAKTU[index] = item["id"]; 
                BULAN[index] = item["id"]; 
                PH1[index] = item["ph1"];
                PH2[index] = item["ph2"];
                TDS1[index] = item["tds1"];
                TDS2[index] = item["tds2"];                
                // console.log(item["id"]);
                // console.log(PH1[index]);
              });

              
                              

            }
          };

          ajaxRequest.open("GET", "showgrafik.php", true);
          ajaxRequest.send(null);
        }

        $('#randomizeData').click(function() {
            $.each(config.data.datasets, function(i, dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });

            });

            window.myLine.update();
        });

        $('#addDataset').click(function() {
            var background = randomColor(0.5);
            var newDataset = {
                label: 'Dataset ' + config.data.datasets.length,
                borderColor: background,
                backgroundColor: background,
                pointBorderColor: background,
                pointBackgroundColor: background,
                pointBorderWidth: 1,
                fill: false,
                data: [],
            };

            for (var index = 0; index < config.data.labels.length; ++index) {
                newDataset.data.push(randomScalingFactor());
            }

            config.data.datasets.push(newDataset);
            window.myLine.update();
        });

        $('#addData').click(function() {
            if (config.data.datasets.length > 0) {
                var month = MONTHS[config.data.labels.length % MONTHS.length];
                config.data.labels.push(month);

                $.each(config.data.datasets, function(i, dataset) {
                    dataset.data.push(randomScalingFactor());
                });

                window.myLine.update();
            }
        });

        $('#removeDataset').click(function() {
            config.data.datasets.splice(0, 1);
            window.myLine.update();
        });

        $('#removeData').click(function() {
            config.data.labels.splice(-1, 1); // remove the label first

            config.data.datasets.forEach(function(dataset, datasetIndex) {
                dataset.data.pop();
            });

            window.myLine.update();
        });
    </script>

    <!-- GSAP animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script>      
      gsap.from("nav img", { duration: 1, opacity: 0, rotateY: 360 });
      gsap.from(".footer img", { duration: 1, opacity: 0, rotateY: 360 });
    </script>

     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>
