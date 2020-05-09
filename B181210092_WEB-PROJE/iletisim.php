<?php

error_reporting(0);


    
    $adi = $_POST["names"];
  
    $email = $_POST["emails"];
    $sifre = $_POST["passwords"];
    $sehir = $_POST["city"];
    $cinsiyet = $_POST["cinsiyet"];

    $mesaj = $_POST["mesaj"];

    if($adi!=""  && $email!="" && $sifre!="" && $sehir!="" &&    $cinsiyet!="" && $mesaj!=""){
        echo "Ad Soyad : $adi <br>";
        echo "E-Mail : $email <br>";
        echo "Şifre : $sifre <br>";
        echo "Şehir : $sehir <br>";
        echo "Cinsiyet : $cinsiyet <br>";
      
        echo "<br>Mesaj : $mesaj";
    }

   else{
       header('Location:http://localhost/webproje/iletisim2/Iletisim.html');
   }







?>

