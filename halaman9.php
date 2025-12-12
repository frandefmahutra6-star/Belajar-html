<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    table, tr, td, th {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<body>
    <?php include 'menu.html'?>
    <?php
    $nama = $_POST["Input_Nama"];
    $jenis_kelamin = $_POST["Pilih_jenis_kelamin"];
    $Tahun_lahir = $_POST["Input_Tahunlahir"];
    $Umur = 2025-$Tahun_lahir;
    if ($Umur < 6)
    {
        $Ketrangan = "Balita";
    }
    else if ($Umur < 12)
    {
        $Ketrangan = "Anak-Anak";
    }
    else if ($Umur < 17)
    {
        $Keterangan = "Remaja";
    }
    else if ($Umur < 25)
    {
        $Keterangan = "Paruh Baya";
    }
    else
    {
        $Keterangan = "Dewasa";
    }
    ?>

    

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jenis kelamin</th>
            <th>Kategori</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo($nama) ?></td>
            <td><?php echo($Umur) ?> Tahun</td>
            <td><?php echo($jenis_kelamin) ?></td>
            <td><?php echo($Keterangan) ?></td>
        </tr>
    </table>
    
</body>
</html>