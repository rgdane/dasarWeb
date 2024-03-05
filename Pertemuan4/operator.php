<?php
$a = 10;
$b = 5;

echo "--- Operator Aritmatika --- <br>";

$hasilTambah = $a + $b;
echo "Hasil penjumlahan $a dan $b adalah $hasilTambah. <br>";

$hasilKurang = $a - $b;
echo "Hasil pengurangan $a dan $b adalah $hasilKurang. <br>";


$hasilKali = $a * $b;
echo "Hasil perkalian $a dan $b adalah $hasilKali. <br>";


$hasilBagi = $a / $b;
echo "Hasil pembagian $a dan $b adalah $hasilBagi. <br>";

$sisaBagi = $a % $b;
echo "Sisa pembagian $a dan $b adalah $sisaBagi. <br>";

$pangkat = $a ** $b;
echo "Hasil $a pangkat $b adalah $pangkat. <br>";

echo "<br> --- Operator Pembanding --- <br>";

$hasilSama = $a == $b;
echo "Hasil sama $a dan $b adalah $hasilSama. <br>";

$hasilTidakSama = $a != $b;
echo "Hasil tidak sama $a dan $b adalah $hasilTidakSama. <br>";

$hasilLebihKecil = $a < $b;
echo "Hasil lebih kecil $a dan $b adalah $hasilLebihKecil. <br>";

$hasilLebihBesar = $a > $b;
echo "Hasil lebih besar $a dan $b adalah $hasilLebihBesar. <br>";

$hasilLebihKecilSama = $a <= $b;
echo "Hasil lebih kecil sama $a dan $b adalah $hasilLebihKecilSama. <br>";

$hasilLebihBesarSama = $a >= $b;
echo "Hasil lebih besar sama $a dan $b adalah $hasilLebihBesarSama. <br>";

echo "<br> --- Operator Logika --- <br>";

$hasilAnd = $a && $b;
echo "Hasil AND $a dan $b adalah $hasilAnd. <br>";

$hasilOr = $a || $b;
echo "Hasil OR $a dan $b adalah $hasilOr. <br>";

$hasilNotA = !$a;
echo "Hasil NOT $a adalah $hasilNotA. <br>";

$hasilNotB = !$b;
echo "Hasil NOT $b adalah $hasilNotB. <br>";

echo "<br> --- Operator Penugasan --- <br>";

echo "Hasil += dari $a dan $b adalah ";
$a += $b;
echo "$a <br>";
echo "Hasil -= dari $a dan $b adalah ";
$a -= $b;
echo "$a <br>";
echo "Hasil *= dari $a dan $b adalah ";
$a *= $b;
echo "$a <br>";
echo "Hasil /= dari $a dan $b adalah ";
$a /= $b;
echo "$a <br>";
echo "Hasil %= dari $a dan $b adalah ";
$a %= $b;
echo "$a <br>";

echo "<br> --- Operator Identik --- <br>";
$a = 10;

$hasilIdentik = $a === $b;
echo "Hasil identik $a dan $b adalah $hasilIdentik. <br>";

$hasilTidakIdentik = $a !== $b;
echo "Hasil tidak identik $a dan $b adalah $hasilTidakIdentik. <br>";

echo " <br> Sebuah restoran memiliki 45 kursi di dalamnya. <br>
Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. <br>
Berapa persen kursi yang masih kosong di restoran tersebut? <br>";

$kursi = 45;
$pelanggan = 28;
$sisaKursi = ($kursi - $pelanggan) / 45 * 100;

echo "Sisa kursi yang masih kosong adalah $sisaKursi%";
?>