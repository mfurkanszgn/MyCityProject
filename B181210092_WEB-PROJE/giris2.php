<?php



$sifrem=123;
$mail2=$_POST["mails"];


if ( filter_var($_POST['mails'], FILTER_VALIDATE_EMAIL) )
{ 
   

    if(!empty($_POST['mails']) & !empty($_POST["sifre"]))
    {

        if($sifrem==$_POST["sifre"])
        {
            

                echo "HOŞGELDİN $mail2 ";
        }
    else{
    
    header("Location:http://localhost/webproje/giris/Giris.html");
    
        }

    }
}
else{
     header("Location:http://localhost/webproje/giris/Giris.html");
    
}


?>
