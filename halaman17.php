 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
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
 </body>
 </html>