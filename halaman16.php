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
        $query = "SELECT * FROM siswa";
        $query_guru = "SELECT * FROM guru";
        $query_jadwal=  "SELECT * FROM `jadwal pelajaran`";
        
        // berikan perintah mengeksekuesi 
        $result = mysqli_query($conn, $query);
        $result_guru = mysqli_query($conn, $query_guru);
        $result_jadwal = mysqli_query($conn, $query_jadwal);
        // var_dump('halo');
        // die();

        // tes apakah berhasil
        // $row, = $reesult->fetch_assoc();
        // die();

        // hasil
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $rows_guru = mysqli_fetch_all($result_guru, MYSQLI_ASSOC);
        $rows_jadwal_pelajaran = mysqli_fetch_all($result_jadwal, MYSQLI_ASSOC);
     
     ?>

     <!-- baca data dari db -->


     <form action="tambah.php" method="POST">
        <div>
            <label for="">Nama :</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">NISN :</label>
            <input type="text" name="nisn">
        </div>
        <div>
            <label for="">Alamat :</label>
            <textarea name="alamat" id=""></textarea>
        </div>
        <button>tambah</button>
        
        



     </form>
      
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nisn</th>
            <th>AlamatS</th>
            <th>aksi</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($rows as $row) { ?>
            
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['Nama']; ?></td>
                <td><?= $row['Nisn']; ?></td>
                <td><?= $row['Alamat']; ?></td>
                <td>
                    <a href="hapus.php?id=<?= $row['id']; ?>">hapus</a>
                    <a href="update.php?id=<?= $row['id']; ?>">update</a>
                </td>
            </tr>
            <?php } ?>
    </table>
    <hr>
    <table>
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>NIP</th>
            <th>NUPTK/NRG</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>

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
            </tr>
            <?php } ?>

    </table>
      <hr>
      <table>
            <tr>
            <th>no</th>
            <th>mata pelajaran</th>
            <th>jam ke</th>
            <th>waktu</th>
            <th>guru mapel</th>

        </tr>
        <?php $no = 1; ?>
        <?php foreach($rows_jadwal_pelajaran as $row_jadwal_pelajaran) { ?>
            
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row_jadwal_pelajaran['mata pelajaran']; ?></td>
                <td><?= $row_jadwal_pelajaran['jam ke']; ?></td>
                <td><?= $row_jadwal_pelajaran['waktu']; ?></td>
                <td><?= $row_jadwal_pelajaran['guru mapel']; ?></td>
                
            </tr>
            <?php } ?>
      </table>
</body>
</html>