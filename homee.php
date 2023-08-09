<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aylara Göre Değer Grafiği</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />


  <link rel="stylesheet" href="./css/bootstrap-icons.css">
  <style>
  /* body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }

  .row {
    margin-right: 0;
    margin-left: 0;
  } */

  #yanmenu {
      background-color: #333;
      color: #fff;
      height: 100vh;
      /* width: 250px; */
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 20px;
    }
    .yanmenu-baglantisi {
      color: #fff;
    }
    .yanmenu-baglantisi:hover {
      color: #f0ad4e;
    }

  .chart-container {
    padding: 10px;
  }

  table {
    border-collapse: collapse;
    /* width: 100%; */
    border: 1px solid #ccc;
    background-color: #fff;
  }

  th, td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
    text-align: center;
  }

  th {
    background-color: #f2f2f2;
    color:black;
  }

  tr:hover {
    background-color: #333;
    color:white;
  }

  td:last-child {
    font-style: italic;
    color: #aaa;
  }
</style>






</head>
<body>
    <div class="row">
        <div class="col-md-2 col-xs-5">
            <div id="yanmenu">
                <h2 class="text-center mb-4">Yönetici Paneli</h2>
                <div class="col">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link yanmenu-baglantisi" href="homee.php"><i class="bi bi-speedometer2 me-2"></i>Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link yanmenu-baglantisi" href="regular.php"><i class="bi bi-person me-2"></i>Kullanıcılar</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link yanmenu-baglantisi" href="y_ekle.php"><i class="bi bi-person me-2"></i>Yeni Ekle</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link yanmenu-baglantisi" href="login.php"><i class="bi bi-lock me-2"></i>Giriş Sayfası</a>
                    </li>
                    
                  </ul>
                </div>
                
              </div>
        </div>
        <div class="col-10 col-xs-ms-5">
            <div class="row mt-5 ">
                <div class="chart-container col-md-4 col-xs-10">
                    <canvas id="chart1"></canvas>
                </div>  
                <div class="col-md-4 col-xs-10">
                    <canvas id="chart2"></canvas>
                </div>
                <div class="chart-container col-md-4 col-xs-10">
                    <canvas id="chart3"></canvas>
                </div>
            </div>
        
        <!-- <div class="col-6 nav-item">
          <i class="bi bi-speedometer2 me-2 text-black"></i>
        </div> -->
       
        <div id="icerik" class="mt-5 ms-5 col-md-9 col-xs-9">
          <h1>Yönetici Paneli</h1>
          <?php
            include("baglan.php");
            $oku = "SELECT * FROM kullanıcılar";
            $sql = mysqli_query($baglan, $oku);
            echo "<div></div>";
            echo "<table border='1' width='100%'>";
            echo "<tr>";
            echo "<th></th>";
            echo "<th>Kullanıcı_Adı</th>";
            echo "<th>Email</th>";
            echo "<th>Telefon</th>";
            echo "<th>Şifre</th>";
            echo "</tr>";

            if ($sql && mysqli_num_rows($sql) > 0) {
                while ($tablo = mysqli_fetch_assoc($sql)) {
                    $kullanici_adı = $tablo["kullanıcı_adı"];
                    $email = $tablo["email"];
                    $telefon = $tablo["telefon"];
                    $password = "********";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>$kullanici_adı</td>";
                    echo "<td>$email</td>";
                    echo "<td>$telefon</td>";
                    echo "<td>$password</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";

          

          ?>
      </div>
      </div>
    </div>
</body>
<script>
   var data = {
  labels: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
  datasets: [{
    label: "Personel",
    data: [120, 250, 180, 300, 400, 350, 280, 200, 150, 280, 320, 220],
    borderColor: '#000000',
    fill: false
  }]
};
var ctx = document.getElementById("chart1").getContext("2d");
var chart1 = new Chart(ctx, {
  type: "line",
  data: data,
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
})
//2. çizgi grafiği
var data = {
  labels: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
  datasets: [{
    label: "Veriler",
    data: [12, 20, 10, 30, 40, 30, 20, 25, 10, 20, 35, 40],
    borderColor: '#616161',
    fill: false
  }]
};


var ctx_two = document.getElementById("chart3").getContext("2d");
var chart3 = new Chart(ctx_two, {
  type: "line",
  data: data,
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
//sütun grafiği
 var data = {
   labels: ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"],
   datasets: [{
     label: "Maaş",
     data: [10000, 12000, 18000, 40000, 30000, 30000, 20000, 20000, 15000, 28000, 32000, 22000],
     backgroundColor: "rgba(75, 192, 192, 0.7)"
   }] };

 var ctx = document.getElementById("chart2").getContext("2d");
 var chart2 = new Chart(ctx, {
   type: "bar",
   data: data,
   options: {
     responsive: true,     scales: {
       y: {
         beginAtZero: true
       }
     }
   }
});
 chart2.data.datasets[0].backgroundColor = '#333'; 
 chart2.update();
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- <script src="script.js"></script> -->

</html>


