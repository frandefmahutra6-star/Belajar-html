 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layouting</title>
    <style>
        td {
            vertical-align: top;
        }
    </style>
 </head>
 <body>
   <?php include 'menu.html'?>
    <table>
         <tr>
            <td>1.</td>
            <td colspan="4">Nama</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Panggilan</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>2.</td>
            <td colspan="2">NISN</td>
            <td>:</td>
            <td><input type="number"></td>
         </tr>
         <tr>
            <td>3.</td>
            <td colspan="4">Tempat,Tanggal lahir</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Tempat</td>
            <td>:</td>
            <td><textarea name cols="50" id rows="10"></textarea></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date"></td>
         </tr>
         <tr>
            <td>4.</td>
            <td colspan="2">Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="" id="" >
                    <option value="" disabled selected >-pilihan jenis kelamin-</option>
                    <option value="">laki-Laki</option>
                    <option value="">Perempuan</option>
                </select>
            </td>
         </tr>
         <tr>
            <td>5.</td>
            <td colspan="2">Golongang Darah</td>
            <td>:</td>
            <td>
                <input type="radio" name="pil">A
                <input type="radio" name="pil">B
                <input type="radio" name="pil">AB
                <input type="radio" name="pil">O
            </td>
         </tr>
         <tr>
            <td>7.</td>
            <td colspan="2">Anak Ke</td>
            <td>:</td>
            <td><input type="number"></td>
         </tr>
         <tr>
            <td>8.</td>
            <td colspan="2">Jumlah Saudara</td>
            <td>:</td>
            <td><input type="number"></td>
         </tr>
         <tr>
            <td>9.</td>
            <td colspan="2">Status Dalam Keluarga</td>
            <td>:</td>
            <td>
                <input type="radio" name="pil">anak kandung
                <input type="radio" name="pil">anak angkat
                <input type="radio" name="pil">anak tiri
            </td>
         </tr>
         <tr>
            <td>10.</td>
            <td colspan="2">Alamat Siswa</td>
            <td>:</td>
            <td><textarea name="" id="" cols="50" rows="10"></textarea></td>
         </tr>
        
    </table>
    <table>
      <tr>
         <td></td>
         <td>Orang Tua Wali</td>
      </tr>
         <tr>
            <td>1.</td>
            <td colspan="4">Nama Orang Tua</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama Ayah Kandung</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Ibu Kandung</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>2.</td>
            <td colspan="4">Pendidikan Tertinggi</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>3.</td>
            <td colspan="4">Pekerjaan</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>4.</td>
            <td colspan="4">Penghasilan Perbulan</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><input type="text" min="1000000"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text" min="1000000"></td>
         </tr>
         <tr>
            <td>5.</td>
            <td colspan="2">Nomor Whatshap</td>
            <td>:</td>
            <td><input type="number"></td>
         </tr>
   <table>
   <table>
      </tr>
         <tr>
            <td>1.</td>
            <td colspan="4">Nama Orang tua</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>2.</td>
            <td colspan="4">Pekerjaan</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama ayah</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>3.</td>
            <td colspan="2">Hubungan Terhadap Anak</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>4.</td>
            <td colspan="4">Pekerjaan</td>
         </tr>
         <tr>
            <td></td>
            <td>a.</td>
            <td>Nama Ayah</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td></td>
            <td>b.</td>
            <td>Nama Ibu</td>
            <td>:</td>
            <td><input type="text"></td>
         </tr>
         <tr>
            <td>5.</td>
            <td colspan="2">No Hp/Whatsapp</td>
            <td>:</td>
            <td><input type="number"></td>
         </tr>
    

 </table>
 <table>
   <tr>
      <td></td>
      <td>Asal Mula Anak</td>
   </tr>
   <tr>
      <td>1.</td>
      <td colspan="2">Masuk Sekolah ini Sebagai</td>
      <td>:</td>
      <td><input type="text"></td>
   </tr>
   <tr>
      <td>2.</td>
      <td colspan="2">Asal Anak</td>
      <td>:</td>
      <td>
          <input type="radio" name="pil">TK
          <input type="radio" name="pil">PAUD
     </td>
   </tr>
   <tr>
      <td>3.</td>
      <td colspan="2">Nama Asal Sekolah</td>
      <td>:</td>
      <Td><textarea name cols="50" id rows="10"></textarea></Td>
   </tr>
 </table>














 </body>
 </html>