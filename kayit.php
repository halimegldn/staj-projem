<?php
    include("baglan.php");
    if(isset($_POST["register"])){
        $name=$_POST["username"];
        $email=$_POST["Email"];
        $phone=$_POST["phone"];
        $password=$_POST["password"];

        $ekle="INSERT INTO kullanıcılar (kullanıcı_adı,email, telefon, sifre) VALUES ('$name','$email','$phone','$password')";
        $calistirekle=mysqli_query($baglan,$ekle);
        // if($calistirekle){
        //     echo '<div class="alert alert-white" role="alert">
        //     Kayıt başarılı!
        //   </div>';
        // }
        // else{
        //     echo '<div class="alert alert-danger" role="alert">
        //     Kayıt başarısız!
        //   </div>';
        // }
        // mysqli_close($baglanti);
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/bootstrap-icons.css">
    <link rel="stylesheet" href="./ornek.css">
</head>
<body>
  <section class="bg-image p-3" style="background-image: url('./img/head.png');">
    <header id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
        <a class="logo"  href="#"><img src="./img/logo.png"></a>
        <div><button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button></div>   
        <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
          <div class="navbar-nav fs-5">
            <a class="nav-item nav-link active text-white" href="calisma.html">Home</a>
            <a class="nav-item nav-link text-warning" href="#about">About</a>
            <a class="nav-item nav-link text-warning" href="#team">Team</a>
            <a class="nav-item nav-link text-warning" href="#services">Services</a>
            <a class="nav-item nav-link text-warning" href="#contact">Contact</a>
            <a class="nav-item nav-link text-warning" href="login.php">Login</a>
          </div>
        </div>
        <div class="search-box">
          <input class="search-text float-start border-0 p-0 text-white fs-6" type="text" id="search-input" placeholder="Search">
          <div class="search-btn float-end d-flex justify-content-center align-items-center  
            align-items-center text-decoration-none">
            <i class="bi bi-search" id="search-button"></i>
          </div>
        </div>
        

      </nav>
    </header>
    
  </section>
  <form class="form_register bg-black w-50" action="kayit.php" method="POST">
    <h4 class="text-lg-center border-bottom text-primary w-50 mb-3 custom-margin">Register</h4>
    <input class="form-control w-100 bg-transparent border-top-0 border-start-0 border-end-0 fs-5 text-white" name="username" placeholder="Username" required="" autofocus="" />
    <input type="email" class="form-control w-100 bg-transparent border-top-0 border-start-0 border-end-0 fs-5 text-white" name="Email" placeholder="Email" required="" autofocus="" />
    <input class="form-control w-100 bg-transparent border-top-0 border-start-0 border-end-0 fs-5 text-white" name="phone" placeholder="Phone" required="" autofocus="" />
    <input type="password" class="form-control w-100 bg-transparent border-top-0 border-start-0 border-end-0 fs-5 text-white" name="password" placeholder="Password" required=""/>
    <!-- <input type="password" placeholder="Password"> -->
    <button class="register_buton bg-primary border-0 w-50 fs-5 p-2 mt-5 text-white" name="register">Register</button>
  </form>
  <section>
    <div class="row d-flex justify-content-center bg-dark" style="padding: 3%;">
      <div class="col-md-3 col-xs-12 justify-content-center">
        <h2>Useful links</h2>
        <p class="text-white">It is a long established fact that a reader will be distracted by the readable content of
          a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
          distribution of letters,</p>
      </div>
      <div class="col-md-3 col-xs-12 justify-content-center">
        <h2>Find us</h2>
        <div class="d-flex">
          <i class="bi bi-geo-alt-fill link-warning fs-5 me-2"></i>
          <p class="text-white">It is a long established fact that a reader will be distracted</p>
        </div>
        <div class="d-flex">
          <i class="bi bi-telephone-fill link-warning fs-5 me-2"></i>
          <p class="text-white">(+71)9876543210</p>
        </div>
        <div class="d-flex">
          <i class="bi bi-envelope-fill link-warning fs-5 me-2"></i>
          <p class="text-white">demo@gmail.com</p>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 justify-content-center">
        <h2>News letter</h2>
        <form class="d-block">
          <div class="input-group mb-3 position-relative d-flex w-100">
            <input type="email" class="form-control p-2" placeholder="Email">
            <div class="subscribe d-flex">
              <button class="input-group-text bg-warning text-white rounded-0 rounded-end-1 p-2">Subscribe</button>
            </div>
          </div>
        </form>
        <div class="d-flex fs-2 text-white pt-5">
          <a href="#"><i class="bi bi-instagram ms-4 text-warning"></i></a>
          <a href="#"><i class="bi bi-twitter ms-4 text-warning"></i></a>
          <a href="#"><i class="bi bi-facebook ms-4 text-warning"></i></a>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <p class="text-center">
      Copyright 2023 All Right Reserved By.<a class="test" href="https://html.design/"
        style="text-decoration: none;color:black;">Free HTML Templates</a>
    </p>
  </div>
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>	
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="script.js"></script>  -->
 

</html>