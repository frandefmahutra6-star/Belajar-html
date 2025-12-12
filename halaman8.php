<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar get and post</title>
</head>
<body>
    <?php include 'menu.html'?>
    <form action="halaman9.php" method="POST">
        <p>Nama : <input type="text" name="Input_Nama"></p>
        <p>tahun lahir : <input type="nummber" name="Input_Tahunlahir"></p>
        <p>Jenis kelamin : 
        <select name="Pilih_jenis_kelamin" id="">
            <option value="" disabled selected >-pilihan jenis kelamin-</option>
            <option value="Laki-Laki">l</option>
            <option value="Perempuan">P</option>
        </select>
        <p>Alamat : <textarea name="Input_Alamat" id="" cols="10" rows="5"></textarea>
        <button>Kirim</button>
    </form>
</body>
</html>