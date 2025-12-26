<?php
    require_once "config.php";

    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO siswa (Nama, Nisn, Alamat) VALUES ('$nama', '$nisn',
    '$alamat')";

    $result = mysqli_query($conn, $query);

    header("Location: halaman16.php");
    exit;

?>

<?php
    require_once "config.php";

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
    exit;

?>