<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.html'?>
    <?php
        // menghubungkan dua filenya
        require_once "config.php";
        // berikan perintah membaca data
        $query_guru = "SELECT * FROM guru";        
        // berikan perintah mengeksekuesi     
        $result_guru = mysqli_query($conn, $query_guru);
        // var_dump('halo');
        // die();
        // tes apakah berhasil
        // $row, = $reesult->fetch_assoc();
        // die();

        // hasil
        $rows_guru = mysqli_fetch_all($result_guru, MYSQLI_ASSOC);
        ?>

 <!-- baca datadari db -->

    <form action="tambah.php" method="POST">
        <div>
            <label for="">Nama :</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">NIP :</label>
            <input type="text" name="nip">
        </div>
        <div>
            <label for="">NUPTK/NRG :</label>
            <input type="nummber" name="nuptk/nrg">
        </div>
        <div>
            <label for="">Tangal Lahir :</label>
            <input type="date" name="tanggal lahir">
        </div>
        <div>
            <label for="">Jenis Kelamin :</label>
            <select name="jenis kelamin" id="" >
                    <option value="" disabled selected >-pilihan jenis kelamin-</option>
                    <option value="">laki-Laki</option>
                    <option value="">Perempuan</option>
                </select>
        </div>

        <div>
            <label for="">Agama :</label>
            <select name="agama" id="">
                <option value="" disabled selected >-pilihan Agama-</option>
                <option value="">islam</option>
                <option value="">kristen protestan</option>
                <option value="">kristen katolik</option>
                <option value="">budha</option>
                <option value="">hindu</option>
                <option value="">konghucu</option>
            </select>
        </div>
        <button>tambah</button>

     </form>
     <table>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>NUPTK/NRG</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Aksi</th>

        </tr>
        <?php $no = 1; ?>
        <?php foreach($rows_guru as $row_guru) { ?>
            
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row_guru['Nama']; ?></td>
                <td><?= $row_guru['NIP']; ?></td>
                <td><?= $row_guru['NUPTK/NRG']; ?></td>
                <td><?= $row_guru['Tanggal Lahir']; ?></td>
                <td><?= $row_guru['Tanggal Lahir']; ?></td>
                <td><?= $row_guru['Agama']; ?></td>
                <td>
                    <a href="hapus.php?id=<?= $row['id']; ?>">hapus</a>
                    <a href="update.php?id=<?= $row['id']; ?>">update</a>
                </td>
            </tr>
            <?php } ?>

    </table>
     



</body>
</html>