<?php

error_reporting(0);

if(isset($_POST['send'])){
    
    $ad=$_POST["ad"];
    $email=$_POST["email"];
    $cinsiyet=$_POST["cinsiyet"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    if($ad!="" && $email!="" && $cinsiyet!="" && $konu!="" && $mesaj!=""){
        echo "Ad Soyad: $ad <br>";
        echo "E-Mail: $email <br>";
        echo "Cinsiyet: $cinsiyet <br>";
        echo "Şikayet Konusu: $konu <br>";
        echo "<br>Şikayet Metni: $mesaj";
    }
    else{
        header("Location:../html/iletisim.html");
    }
}
else {
    header("Location:../html/iletisim.html");
}
?>
