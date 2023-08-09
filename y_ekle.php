<?php
    include("baglan.php");
    if(isset($_POST["Yeni"])){
        $name=$_POST["k_adi"];
        $email=$_POST["mail"];
        $phone=$_POST["telefon"];
        $password=$_POST["sifre"];
        $insert="INSERT INTO kullanıcılar (kullanıcı_adı,email, telefon, sifre) VALUES ('$name','$email','$phone','$password')";
        $calistirekle=mysqli_query($baglan,$insert);
         mysqli_close($baglan);
         echo '<script>window.location.href = "regular.php";</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <style>
        body {
            padding: 25px;
            font-family: Arial, sans-serif;
        }
        .container { 
            width: 35%;
            margin: 0 auto;
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 12px;
            margin: 15px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }

        button {
            text-align: center;
            display: block;
            width: 50%;
            margin: 0 auto; 
            padding: 12px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: lightgray;
            color:#333;
        }

        /* Style for the user-management header */
        .user-management {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            border-radius: 10px 10px 0 0;
        }

        /* Style for the form container */
        .container {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }

        /* Responsive layout */
        @media (max-width: 600px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="user-management">
        <h2>Kullanıcı Yönetimi</h2>
    </div>

    <div class="container">
        <form id="addUserForm" action="y_ekle.php" method="POST">
            <input type="text" id="newUsername" name="k_adi" required placeholder="Kullanıcı Adı">
            <input type="text" id="newEmail" name="mail" required placeholder="Email">
            <input type="text" id="phone" name="telefon" required placeholder="Phone">
            <input type="password" id="sifre" name="sifre" required placeholder="Password">
            <button type="submit" name="Yeni">Kullanıcı Ekle</button>
        </form>
    </div>
</body>
</html>
