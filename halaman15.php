<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
		$siswa = [
		    [
		        'id'              => 1,
		        'nis'             => '2023001',
		        'nama'            => 'Andi Saputra',
		        'jenis_kelamin'   => 'Laki-laki',
		        'kelas'           => 'X IPA 1',
		        'jurusan'         => 'MIPA',
		        'alamat'          => 'Jl. Merdeka No. 10',
		        'no_hp'           => '081234567801',
		        'status_kehadiran'=> 'hadir',
		        'nilai_uh'        => 85,
		        'nilai_pts'       => 80,
		        'nilai_pas'       => 88,
		    ],
		    [
		        'id'              => 2,
		        'nis'             => '2023002',
		        'nama'            => 'Budi Pratama',
		        'jenis_kelamin'   => 'Laki-laki',
		        'kelas'           => 'X IPA 1',
		        'jurusan'         => 'MIPA',
		        'alamat'          => 'Jl. Ahmad Yani No. 5',
		        'no_hp'           => '081234567802',
		        'status_kehadiran'=> 'izin',
		        'nilai_uh'        => 70,
		        'nilai_pts'       => 75,
		        'nilai_pas'       => 78,
		    ],
		    [
		        'id'              => 3,
		        'nis'             => '2023003',
		        'nama'            => 'Citra Dewi',
		        'jenis_kelamin'   => 'Perempuan',
		        'kelas'           => 'X IPA 2',
		        'jurusan'         => 'MIPA',
		        'alamat'          => 'Jl. Pahlawan No. 3',
		        'no_hp'           => '081234567803',
		        'status_kehadiran'=> 'sakit',
		        'nilai_uh'        => 88,
		        'nilai_pts'       => 90,
		        'nilai_pas'       => 92,
		    ],
		    [
		        'id'              => 4,
		        'nis'             => '2023004',
		        'nama'            => 'Dewi Lestari',
		        'jenis_kelamin'   => 'Perempuan',
		        'kelas'           => 'X IPS 1',
		        'jurusan'         => 'IPS',
		        'alamat'          => 'Jl. Kenanga No. 7',
		        'no_hp'           => '081234567804',
		        'status_kehadiran'=> 'hadir',
		        'nilai_uh'        => 78,
		        'nilai_pts'       => 82,
		        'nilai_pas'       => 80,
		    ],
		    [
		        'id'              => 5,
		        'nis'             => '2023005',
		        'nama'            => 'Eko Nugroho',
		        'jenis_kelamin'   => 'Laki-laki',
		        'kelas'           => 'XI IPA 1',
		        'jurusan'         => 'MIPA',
		        'alamat'          => 'Jl. Jambu No. 12',
		        'no_hp'           => '081234567805',
		        'status_kehadiran'=> 'tanpa keterangan',
		        'nilai_uh'        => 60,
		        'nilai_pts'       => 65,
		        'nilai_pas'       => 62,
		    ],
		    [
		        'id'              => 6,
		        'nis'             => '2023006',
		        'nama'            => 'Farah Aulia',
		        'jenis_kelamin'   => 'Perempuan',
		        'kelas'           => 'XI IPA 1',
		        'jurusan'         => 'MIPA',
		        'alamat'          => 'Jl. Sudirman No. 20',
		        'no_hp'           => '081234567806',
		        'status_kehadiran'=> 'hadir',
		        'nilai_uh'        => 92,
		        'nilai_pts'       => 89,
		        'nilai_pas'       => 94,
		    ],
		    [
		        'id'              => 7,
		        'nis'             => '2023007',
		        'nama'            => 'Gilang Ramadhan',
		        'jenis_kelamin'   => 'Laki-laki',
		        'kelas'           => 'XI IPS 2',
		        'jurusan'         => 'IPS',
		        'alamat'          => 'Jl. Anggrek No. 9',
		        'no_hp'           => '081234567807',
		        'status_kehadiran'=> 'sakit',
		        'nilai_uh'        => 75,
		        'nilai_pts'       => 70,
		        'nilai_pas'       => 72,
		    ],
		    [
		        'id'              => 8,
		        'nis'             => '2023008',
		        'nama'            => 'Hana Prameswari',
		        'jenis_kelamin'   => 'Perempuan',
		        'kelas'           => 'XII IPA 2',
		        'jurusan'         => 'MIPA',
		        'alamat'          => 'Jl. Melati No. 15',
		        'no_hp'           => '081234567808',
		        'status_kehadiran'=> 'hadir',
		        'nilai_uh'        => 84,
		        'nilai_pts'       => 86,
		        'nilai_pas'       => 88,
		    ],
		    [
		        'id'              => 9,
		        'nis'             => '2023009',
		        'nama'            => 'Indra Kurniawan',
		        'jenis_kelamin'   => 'Laki-laki',
		        'kelas'           => 'XII IPS 1',
		        'jurusan'         => 'IPS',
		        'alamat'          => 'Jl. Cendana No. 2',
		        'no_hp'           => '081234567809',
		        'status_kehadiran'=> 'izin',
		        'nilai_uh'        => 68,
		        'nilai_pts'       => 72,
		        'nilai_pas'       => 70,
		    ],
		    [
		        'id'              => 10,
		        'nis'             => '2023010',
		        'nama'            => 'Jihan Safitri',
		        'jenis_kelamin'   => 'Perempuan',
		        'kelas'           => 'XII IPA 3',
		        'jurusan'         => 'MIPA',
		        'alamat'          => 'Jl. Flamboyan No. 11',
		        'no_hp'           => '081234567810',
		        'status_kehadiran'=> 'hadir',
		        'nilai_uh'        => 90,
		        'nilai_pts'       => 91,
		        'nilai_pas'       => 93,
		    ],
		];
	?>
	<table>
		<tr>
            <th>Id</th>
            <th>Nis</th>
            <th>Nama</th>
			<th>jenis_kelamin</th>
            <th>Kelas</th>
			<th>jurusan</th>
            <th>Alamat</th>
			<th>No_Hp</th>
			<th>Status_Kehadiran</th>
			<th>Nilai_uh</th>
			<th>Nilai_pts</th>
			<th>Nilai_pas</th>
        </tr>
		<?php for ($i=0; $i <= 9 ; $i++) { ?>
            <tr>
                <td><?php echo($siswa[$i]['id']) ?></td>
                <td><?php echo($siswa[$i]['nis']) ?></td>
                <td><?php echo($siswa[$i]['nama']) ?></td>
                <td><?php echo($siswa[$i]['jenis_kelamin']) ?></td>
				<td><?php echo($siswa[$i]['kelas']) ?></td>
				<td><?php echo($siswa[$i]['jurusan']) ?></td>
				<td><?php echo($siswa[$i]['alamat']) ?></td>
				<td><?php echo($siswa[$i]['no_hp']) ?></td>
				<td><?php echo($siswa[$i]['status_kehadiran']) ?></td>
				<td><?php echo($siswa[$i]['nilai_uh']) ?></td>
				<td><?php echo($siswa[$i]['nilai_pts']) ?></td>
				<td><?php echo($siswa[$i]['nilai_pas']) ?></td>      

            </tr>
        <?php } ?>




	</table>
</body>
</html>