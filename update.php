<?php

    require_once "config.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM siswa WHERE id=$id";
    $result= mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($result);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = $_POST['nama'];
        $nisn = $_POST['nisn'];
        $alamat = $_POST['alamat'];

        $query = "UPDATE siswa SET Nama='$nama', Nisn='$nisn', Alamat='$alamat' WHERE id=$id";

        $result = mysqli_query($conn, $query);

        header("Location: halaman16.php");
    }

?>



<?php

    require_once "config.php";
    $id = $_GET['id'];
    $query_guru = "SELECT * FROM guru WHERE id=$id";
    $result_guru= mysqli_query($conn, $query_guru);
    $row=mysqli_fetch_assoc($result_guru);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $nuptk/nrg = $_POST['nuptk/nrg'];
        $tanggal_lahir = $_POST['tanggal lahir'];
        $tanggal_lahir = $_POST['nuptk/nrg'];
        $agama = $_POST['agama'];


     $query_guru = "INSERT INTO guru (Nama, NUPTK/NRG, Alamat, Tanggal Lahir, Jenis Kelamin, Agama) VALUES ('$nama', '$nip',
    '$nuptk/nrg', '$tanggal_lahir', '$jenis_kelamin', '$agama' )";


        $result_guru = mysqli_query($conn, $query_guru);

        header("Location: halaman18.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.html'?>

    <form action="update.php?id=<?= $row['id']; ?>" method="POST">
        <div>
            <label for="">Nama :</label>
            <input type="text" name="nama" value="<?= $row['Nama'] ?>">
        </div>
        <div>
            <label for="">NISN :</label>
            <input type="text" name="nisn" value="<?= $row['Nisn'] ?>">
        </div>
        <div>
            <label for="">Alamat :</label>
            <textarea name="alamat" id=""><?= $row['Alamat'] ?></textarea>
        </div>
        <button>tambah</button>
    </form>
        
</body>
</html>