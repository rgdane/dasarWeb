<?php
    $nilaiNumerik = 92;
    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai huruf: C";
    } elseif ($nilaiNumerik < 70) {
        echo "Nilai huruf: D";
    }

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;
    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }
    echo " <br> Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;
    for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }
    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

    $skorUjian = [85, 92, 78, 96, 88]; $totalSkor = 0;
    foreach ($skorUjian as $skor) { $totalSkor += $skor;
    }
    echo "Total skor ujian adalah: $totalSkor <br>";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
    foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
    echo "Nilai: $nilai (Tidak lulus) <br>";
    continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
    }

    echo "<br> Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. <br>
    Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. <br>
    Bantu guru ini menghitung total nilai yang akan digunakan  untuk menentukan <br>
    nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. <br>
    Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br>
    <b>Jawaban</b> <br>";

    $nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

    sort($nilai_siswa);

    array_shift($nilai_siswa);
    array_shift($nilai_siswa);

    array_pop($nilai_siswa);
    array_pop($nilai_siswa);

    $total_nilai = array_sum($nilai_siswa);

    $jumlah_siswa = count($nilai_siswa);

    $rata_rata = $total_nilai / $jumlah_siswa;

    echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
    echo "Nilai rata-rata setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $rata_rata . "<br>";


    echo"<br> Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. <br>
    Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. <br>
    Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon. <br>
    <b>Jawaban</b> <br>";
    $harga_produk = 120000;

    $diskon = 0.2;

    $batas_diskon = 100000;

    if ($harga_produk > $batas_diskon) {
        $harga_setelah_diskon = $harga_produk - ($harga_produk * $diskon);
    } else {
        $harga_setelah_diskon = $harga_produk;
    }

    echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($harga_setelah_diskon, 2, ',', '.');

    echo"<br><br>Seorang pemain game ingin menghitung total skor mereka dalam permainan. <br>
    Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, <br>
    maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”.<br>
    Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)” <br>
    <b>Jawaban</b> <br>";

    $skor_pemain = 700;

    $total_skor = "Total skor pemain adalah: " . $skor_pemain;

    $hadiah_tambahan = ($skor_pemain > 500) ? "YA" : "TIDAK";

    echo $total_skor . "<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah_tambahan;

?>