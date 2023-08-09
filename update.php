<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/bootstrap-icons.css">
    <style>
        body {
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color:#333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color:lightgray;
            color:#333;
        }

        #yanmenu {
          background-color: #333;
          color: #fff;
          height: 100vh;
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
        
      </div>
    </div>
    <div class="col-10">
    <?php
    include("baglan.php");
    $oku = "SELECT * FROM kullanıcılar";
    $sql = mysqli_query($baglan, $oku);
  

     if (isset($_POST['Update'])) {
       $kullanici_adı = $_POST['kullanici_adı']; 
     
       $query = "SELECT * FROM kullanıcılar WHERE kullanıcı_adı = '$kullanici_adı'";
       $result = mysqli_query($baglan, $query);
       $user = mysqli_fetch_assoc($result);

       echo "<h2>Kullanıcı Güncelle</h2>";
       echo "<form method='post' >";
       echo "<input type='hidden' name='kullanici_adı' value='" . $user['kullanıcı_adı'] . "'>";
       echo "Kullanıcı Adı: <input type='text' name='new_kullanici_adı' value='" . $user['kullanıcı_adı'] . "'><br>";
       echo "Email: <input type='text' name='new_email' value='" . $user['email'] . "'><br>";
       echo "Telefon: <input type='text' name='new_telefon' value='" . $user['telefon'] . "'><br>";
       echo "Şifre: <input type='password' name='new_password' value=''><br>";
       echo "<button type='submit' name='Kaydet'>Kaydet</button>";
       echo "</form>";
   }

  if (isset($_POST['Kaydet'])) {
      $kullanici_adı = $_POST['kullanici_adı'];
      $new_kullanici_adı = $_POST['new_kullanici_adı'];
      $new_email = $_POST['new_email'];
      $new_telefon = $_POST['new_telefon'];
      $new_password = $_POST['new_password'];      
      $query = "UPDATE kullanıcılar SET kullanıcı_adı='$new_kullanici_adı', email='$new_email', telefon='$new_telefon'";        
      $query .= " WHERE kullanıcı_adı='$kullanici_adı'";
      mysqli_query($baglan, $query);      
      echo '<script>window.location.href = "regular.php";</script>';
      exit();
  }   
?>
    </div>
  </div>
</body>
</html>
