<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            text-align: center;
        }
        table {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        a{
            text-decoration: none;
            color: black;
            margin-right: 1200px;
        }
    </style>
</head>
<body>
    <div class="table">

        <h1>Nilai Siswa</h1>
        
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Nilai MTK</th>
                <th>Nilai IPA</th>
                <th>Nilai Bahasa</th>
                <th>Rata-Rata</th>
                <th>Keterangan</th>
            </tr>
            <?php
        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($conn, "select * from nilaisiswa");
        
        while ($tampil = mysqli_fetch_array($ambildata)){
            $rata_rata = ($tampil['mtk'] + $tampil['ipa'] + $tampil['bahasa']) / 3;

                // Menentukan keterangan (Lulus/Gagal)
                $keterangan = ($rata_rata >= 75) ? "Lulus" : "Gagal";

            echo "
            <tr>
            <th>$no</th>
            <th>$tampil[username]</th>
            <th>$tampil[mtk]</th>
            <th>$tampil[ipa]</th>
            <th>$tampil[bahasa]</th>
            <td>" . number_format($rata_rata, 2) . "</td>
            <td>$keterangan</td>
            </tr>";
            
            $no++;
        }
        ?>
        </table>
    </div>
    <a href="data.html">Back</a>
</body>
</html>
