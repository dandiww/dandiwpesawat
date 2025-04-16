<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_maskapai = $_POST['nama_maskapai'];
            $bandara_asal = $_POST['bandara_asal'];
            $bandara_tujuan = $_POST['bandara_tujuan'];
            $kelas = $_POST['kelas'];

            $harga_ekonomi = 1000000;
            $harga_bisnis = 2000000;
            $harga_first_class = 3500000;

            $harga_tiket = ($kelas == 'Ekonomi') ? $harga_ekonomi : (($kelas == 'Bisnis') ? $harga_bisnis : $harga_first_class);

            $pajak_bandara_asal = array("Soekarno Hatta" => 65000, "Husein Sastranegara" => 50000, "Abdul Rachman Saleh" => 40000, "Juanda" => 30000);
            $pajak_bandara_tujuan = array("Ngurah Rai" => 85000, "Hasanudin" => 70000, "Inanwatan" => 90000, "Sultan Iskandar Muda" => 60000);

            $pajak = $pajak_bandara_asal[$bandara_asal] + $pajak_bandara_tujuan[$bandara_tujuan];
            $total_harga_tiket = $harga_tiket + $pajak;

            echo "<div class='ticket'>";
            echo "<h2>Detail Hasil</h2>";
            echo "<div class='info-tiket'>Nomor Pendaftaran: <span>" . uniqid() . "</span></div>";
            echo "<div class='info-tiket'>Tanggal Pendaftaran: <span>" . date("Y-m-d \(H:i:s\)") . "</span></div>";
            echo "<div class='info-tiket'>Nama Maskapai: <span>$nama_maskapai</span></div>";
            echo "<div class='info-tiket'>Asal Penerbangan: <span>$bandara_asal</span></div>";
            echo "<div class='info-tiket'>Tujuan Penerbangan: <span>$bandara_tujuan</span></div>";
            echo "<div class='info-tiket'>Kelas: <span>$kelas</span></div>";
            echo "<div class='info-tiket'>Harga Tiket: <span>Rp " . number_format($harga_tiket) . "</span></div>";
            echo "<div class='info-tiket'>Pajak: <span>Rp " . number_format($pajak) . "</span></div>";
            echo "<div class='info-tiket'>Total Harga Tiket: <span>Rp " . number_format($total_harga_tiket) . "</span></div>";
            echo "</div>";
        }
        ?>
</body>
</html>
