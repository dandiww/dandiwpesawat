<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Maskapai</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
        <h2>Form Pendaftaran Maskapai Penerbangan</h2>
        <form method="post" action="keluaran.php">
            <label>Nama Maskapai :</label>
            <input type="text" name="nama_maskapai" required>
    
            <label>Bandara Asal :</label>
            <select name="bandara_asal">
                <?php
                $bandara_asal = array("Soekarno Hatta", "Husein Sastranegara", "Abdul Rachman Saleh", "Juanda");
                sort($bandara_asal);
                foreach ($bandara_asal as $bandara) {
                    echo "<option value=\"$bandara\">$bandara</option>";
                }
                ?>
            </select>
            <label>Bandara Tujuan :</label>
            <select name="bandara_tujuan">
                <?php
                $bandara_tujuan = array("Ngurah Rai", "Hasanudin", "Inanwatan", "Sultan Iskandar Muda");
                sort($bandara_tujuan);
                foreach ($bandara_tujuan as $bandara) {
                    echo "<option value=\"$bandara\">$bandara</option>";
                }
                ?>
            </select>
            <label>Kelas :</label>
            <select name="kelas">
                <option value="Ekonomi">Ekonomi [Rp 1.000.000]</option>
                <option value="Bisnis">Bisnis [Rp 2.000.000]</option>
                <option value="First Class">First Class [Rp 3.500.000]</option>
            </select>

            <input type="submit" name="submit" value="Daftar Maskapai Baru">
        </form>
</div>
</body>
</html>