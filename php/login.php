<?php

error_reporting(0);

if(isset($_POST['login'])){
    $kulAd="G221210594";
    $sifre="12345";
    $kullaniciAdi=htmlspecialchars($_POST["kullaniciAdi"]);
    $parola=htmlspecialchars($_POST["parola"]);
    if(!empty($kullaniciAdi) && !empty($parola)){
        if($kullaniciAdi==$kulAd && $parola==$sifre){
            echo "Hoşgeldiniz <br><hr>";
            echo "$kullaniciAdi";
        }
        else{
            header("Location:../html/login.html");
            exit();
        }
    }
    else{
        header("Location:../html/login.html");
        exit();
    }
}
else {
    header("Location:../html/login.html");
    exit();
}
?>