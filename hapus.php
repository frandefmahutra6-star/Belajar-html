<?php
// menghubungkan dua filenya
require_once "config.php";

// ambil id dari url : hapus.php?id=....
$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE id = $id";

$result = mysqli_query($conn, $query);

header("Location: halaman16.php");
exit;

<?php
// menghubungkan dua filenya
require_once "config.php";

// ambil id dari url : hapus.php?id=....
$id = $_GET['id'];

$query_guru = "DELETE FROM guru WHERE id = $id";

$result_guru= mysqli_query($conn, $query_guru);

header("Location: halaman18.php");
exit;

