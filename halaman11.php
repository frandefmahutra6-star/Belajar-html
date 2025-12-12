<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $nilai_mtk = $_POST["input_nilai-mtk"];
    $nilai_ipa = $_POST["input_nilai_ipa"];
    $nilai_ips = $_POST["input_nilai_ips"];

    if ($nilai_mtk >90)
    {
        $Keterangan_mtk = "A";
    }
    else if ($nilai_mtk >80)
    {
        $Keterangan_mtk = "B";
    }
    else if ($nilai_mtk >60)
    {
        $Keterangan_mtk = "C";
    }
    else if ($nilai_mtk >40)
    {
        $Keterangan_mtk = "D";
    }
    else
    {
        $Keterangan_mtk = "E";
    }



    if ($nilai_ipa >90)
    {
        $Keterangan_ipa= "A";
    }
    else if ($nilai_ipa <90)
    {
        $Keterangan_ipa = "B";
    }
    else if ($nilai_ipa < 79)
    {
        $Keterangan_ipa = "c";
    }
    else
    {
        $Keterangan_ipa = "E";
    }



    if ($nilai_ips >90)
    {
        $Keterangan_ips = "A";
    }
    else if ($nilai_ips <90)
    {
        $Keterangan_ips = "B";
    }
    else if ($nilai_ips < 79)
    {
        $Keterangan_ips = "c";
    }
    else
    {
        $Keterangan_ips = "E";
    }
    ?>

    <table>
        <tr>
            <th>MTK</th>
            <th>IPA</th>
            <th>IPS</th>
        </tr>
        <tr>
            <td><?php echo($Keterangan_mtk) ?></td>  
        </tr>
        <tr>
            <td><?php echo($Keterangan_ipa) ?></td> 
        </tr>
    </table>

</body>
</html>