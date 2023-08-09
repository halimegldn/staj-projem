

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/calisma.css">
  
  <style>
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
    #icerik {
      margin-left: 250px;
      padding: 20px;
    }
    .yanmenu-baglantisi {
      color: #fff;
    }
    .yanmenu-baglantisi:hover {
      color: #f0ad4e;
    }
   
    #icerik table {
      background-color: #333;
      color: white;
      border-collapse: collapse;
      margin: 0 auto; 
      padding: 30px; 
      height: 100%;
    }

tr {
  box-shadow: 0px -0.3px 0px 0px white;
    padding: 2px; 
  /* transition: opacity 0.3s; */
}

/* tr:hover {
  background-color: gray;
} */

th, td {
  padding: 10px;
  text-align: center;
}

form a { 
  color: white;
  text-decoration: none;
  font-size: xx-large;
 
}

button {
  border: 0;
  color: white;
  background-color: #333;
  padding: 10px;
}

button:hover {
  background-color: white;
  color: #333;
}

/* th:hover 
 {
  background-color: transparent;
} */

  </style>
</head>
<body>
  <div class="row">
    <div class="col-2">
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
        <!-- <div class="col">
          <iframe
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
            class="w-100 h-100">
          </iframe> 
        </div> -->
           
        
      </div>
    </div>
    <div class="col-11">
      <div id="icerik">
        <h1>Yönetici Paneline Hoş Geldiniz</h1>
        <?php
include("baglan.php");
$oku = "SELECT * FROM kullanıcılar";
$sql = mysqli_query($baglan, $oku);
echo "<div></div>";
echo "<table border='1' width='100%'>";

echo "<tr>";
echo "<th>
    <form method='post'>
        <input type='hidden' name='' value=''>
        <a href='y_ekle.php' onclick='redirectToRegular()'>+</a>
    </form>
</th>";
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

        echo "<td>
            <form method='post'>
                <input type='hidden' name='kullanici_adı' value='$kullanici_adı'>
                <button type='submit' name='Delete'>Delete</button>
            </form>
        </td>";
        echo "<td>
            <form method='post' action='update.php'>"; // action özelliği eklendi
        echo "<input type='hidden' name='kullanici_adı' value='" . $kullanici_adı . "'>";
        echo "<button type='submit' name='Update'>Update</button>";
        echo "</form>
        </td>";
        echo "<td></td>";


        echo "</tr>";
    }
}

echo "</table>";

if (isset($_POST['Delete'])) {

    $kullanici_adı = $_POST['kullanici_adı'];

    $query = "DELETE FROM kullanıcılar WHERE kullanıcı_adı = '$kullanici_adı'";
    mysqli_query($baglan, $query);


    echo '<script>window.location.href = "regular.php";</script>';
    exit();
}

?>




      </div>
    </div>
    <script>
       function redirectToRegular() {
    window.location.href = 'y_ekle.php';
  }
    </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>


