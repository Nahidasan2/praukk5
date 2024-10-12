<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mtk = $_POST['mtk'];
    $ipa = $_POST['ipa'];
    $bahasa = $_POST['bahasa'];
    // Menghitung rata-rata
    $rata = ($mtk + $ipa + $bahasa) / 3;

    // Menentukan hasil lulus atau gagal
    if ($mtk >= 60) {
        $hasil1 = "LULUS";
    } else {
        $hasil1 = "GAGAL";
    }
    if ($ipa >= 60) {
        $hasil2 = "LULUS";
    } else {
        $hasil2 = "GAGAL";
    }
    if ($bahasa >= 60) {
        $hasil3 = "LULUS";
    } else {
        $hasil3 = "GAGAL";
    }
    if ($rata >= 60) {
        $hasil = "LULUS";
    } else {
        $hasil = "GAGAL";
    }

    echo "<h2>Hasil Penilaian</h2>";
    echo "Nilai 1: $nilai1, $hasil1 <br>";
    echo "Nilai 2: $nilai2, $hasil2 <br>";
    echo "Nilai 3: $nilai3, $hasil3 <br>";
    echo "Rata-rata: $rata <br>";
    echo "Hasilnya: $hasil";
}
?>