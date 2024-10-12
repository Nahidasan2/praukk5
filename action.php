<?php
require_once('koneksi.php');

$username = $_POST ['username'];
$mtk = $_POST ['mtk'];
$ipa = $_POST ['ipa'];
$bahasa = $_POST ['bahasa'];

$sql = "INSERT INTO nilaisiswa (username, mtk, ipa, bahasa) VALUES ('$username', '$mtk', '$ipa', '$bahasa')";
$query = mysqli_query($conn, $sql);

if ($query){
    echo "<script>
            alert('Berhasil Memasukkan Nilai Kedalam Database');
            document.location.href='data.html'
            </script>";
}else{
    echo "<script>
            alert('Gagal Masuk KeDatabase');
            document.location.href='login.html'
            </script>";
}

?>