<?php
    $baglan = mysqli_connect("localhost", "root", "", "kullanıcı_bilgi");
    mysqli_set_charset($baglan, "UTF8");
    if($baglan){
        echo "başarılı";
    }
    

?>