<?php

$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kosongdd
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan errorketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";