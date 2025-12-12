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
     $nama=['fadhil','rian','keysa','fran','hami'];
     $jenis_kelamin=['laki_laki','laki_laki','perempuan','laki_laki','perempuan'];
     $kelas=['XIIG','XIIG','XIIG','XIIG','XIIG'];
     $keterangan=['hadir','izin','tanpa_keterangan','hadir','sakit'];
    ?>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Keterangan</th>
        </tr>
        <?php for ($i=0; $i <= 4 ; $i++) { ?>
            <tr>
                <td><?php echo($i+1) ?></td>
                <td><?php echo($nama[$i]) ?></td>
                <td><?php echo($jenis_kelamin[$i]) ?></td>
                <td><?php echo($kelas[$i]) ?></td>
                <td><?php echo($keterangan[$i]) ?></td>      
            </tr>
        <?php } ?>








    </table>
</body>
</html>