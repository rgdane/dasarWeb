<?php

function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ". $nama ."<br/>"; //Tulis sesuai nama kalian
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana","Hallo");

echo"<hr>";

$saya = "Dane";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>