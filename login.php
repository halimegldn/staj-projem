<?php
    include("baglan.php");
    if(isset($_POST["login"])){
    
        $email=$_POST["Email"];

        $password=$_POST["password"];

        $sorgu="SELECT * FROM kullanıcılar WHERE email='$email' AND sifre='$password'";
        $sonuc=mysqli_query($baglan,$sorgu);
        $row=mysqli_fetch_assoc($sonuc);

        if(empty($row)){
            echo "yanlış kullanıcı adı veya şifre";
        }
        else{
            header('Location:homee.php');
            exit();
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/calisma.css">
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
            <a class="nav-item nav-link text-warning" href="login.html">Login</a>
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
  <div class="wrapper ">
    <form class="form-signin bg-black m-auto" action="login.php" method="POST">       
      <!-- <i class="bi bi-person-circle person"></i> -->
      <svg xmlns="http://www.w3.org/2000/svg" width="330" height="100" fill="currentColor" class="bi bi-person-circle text-primary"  viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
      <h2 class="form-signin-heading text-primary">Welcome</h2>
      <div class="d-flex justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="50" fill="currentColor" class="bi bi-person-circle me-3 text-primary" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        <input type="text" class="form-control mb-3" name="Email" placeholder="Email Address" required="" autofocus="" />
      </div >
      <div class="d-flex justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="50" fill="currentColor" class="bi bi-file-lock2 me-3 text-primary" viewBox="0 0 16 16">
          <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1zm2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224z"/>
          <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
        </svg>
        <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      </div>
      <div class="d-flex justify-content-between mb-5">
        <!-- <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
          <label class="form-check-label text-primary" for="flexCheckIndeterminate">Remember me</label>
        </div> -->
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label text-primary" for="flexSwitchCheckDefault">Remember me</label>
        </div>
        <div class="forget">
          <a href="forget.html" class="forget">Forget Password</a>  
        </div>
      </div> 
      
      
      <div class="d-flex justify-content-center align-items-center rounded-3" >
        <button class="btn btn-primary w-100" name="login">Login</button>
      </div>
      <div class="register mt-3">
        <a href="kayit.php">Register</a>
      </div>
      
      
      
    </form>
  </div>
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
</body>

</html>