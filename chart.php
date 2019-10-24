
<?php

$koneksi     = mysqli_connect("localhost", "root", "", "crud");
$nama_hewan       = mysqli_query($koneksi, "SELECT nama_hewan FROM peternakan  order by id_hewan asc");
$jenis_hewan = mysqli_query($koneksi, "SELECT jenis_hewan FROM peternakan  order by id_hewan asc");
$stock = mysqli_query($koneksi, "SELECT stock FROM peternakan order by id_hewan asc");

?>
<html>
<head>
    <title>Chart</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

    
    <style type="text/css">
        .container {
            width: 50%;
            margin: 15px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <canvas id="myChart" width="100" height="100"></canvas>
    </div>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php while ($p = mysqli_fetch_array($nama_hewan)) { echo '"' . $p['nama_hewan'] . '",';}?>],
                datasets: [{
                    label: 'Jumlah Stock',
                    data: [<?php while ($b = mysqli_fetch_array($stock)) { echo '"' . $b['stock'] . '",';}?>],
                    
                            //data: [<?php while ($b = mysqli_fetch_array($stock)) { echo '"' . $b['jenis_hewan'] . '",';}?>],

                            backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            </script>
        </body>
        </html>