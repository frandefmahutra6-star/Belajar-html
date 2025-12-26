<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        #merah {
            height : 200px;
            background-color: red;
        }
        #biru {
            height : 200px;
            background-color: blue;
        }
        #kuning {
            height : 200px;
            background-color: yellow;
        }
        #hijau {
            height : 200px;
            background-color: green;
        }
        #hitam {
            height : 200px;
            background-color: black;
        }
        #coklat {
            height : 200px;
            background-color: brown;
        }
        #magenta {
            height : 200px;
            background-color: magenta;
        }
        #abu {
            height : 200px;
            background-color: grey;
        }
        #pink {
            height : 200px;
            background-color: pink;
        }
    </style>
</head>
<body>
    <?php include 'menu.html'?>

    <?php
        require_once "config.php";
        $query_guru = "SELECT * FROM guru";
        $result_guru = mysqli_query($conn, $query_guru);
        $rows_guru = mysqli_fetch_all($result_guru, MYSQLI_ASSOC);

        $query = "SELECT * FROM siswa";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

     ?>
    
    <!-- ini contoh font awesome -->
    <i class="fa fa-trash"></i>
    <i class="fa fa-table"></i>
    <i class="fa fa-chair"></i>
    <i class="fa fa-book"></i>
    <i class="fa fa-user"></i>
    <i class="fa fa-user-circle"></i>
    <hr>
    
    <!-- grid sistem -->
    <div class="col-md-12">
        <div class="row gx-4 gy-4">
            <div class="col-md-6" id="merah"></div>
            <div class="col-md-6" id="biru"></div>
            <div class="col-md-3" id="kuning"></div>
            <div class="col-md-3" id="hijau"></div>
            <div class="col-md-3" id="hitam"></div>
            <div class="col-md-3" id="coklat"></div>
            <div class="col-md-4" id="abu"></div>
            <div class="col-md-4" id="magenta"></div>
            <div class="col-md-4" id="pink"></div>
        </div>
    </div>
    <hr>

    <!-- tabel -->
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>no</th>
            <th>Nama</th>
            <th>NIP</th>
            <th class="text-center text-primary">NUPTK/NRG</th>
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

    <!-- modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#udin">
        bukak modalnya
    </button>

    <div class="modal" id="udin">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table table-striped">
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
                                <a class="btn btn-danger btn-sm" href="hapus.php?id=<?= $row['id']; ?>"><i class="fa fa-trash"></i></a>
                                <a class="btn btn-warning btn-sm" href="update.php?id=<?= $row['id']; ?>"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
    <hr>
    <!-- card -->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">judul</h4>
                        <p class="card-text" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus voluptatem accusamus ducimus, dolores quod suscipit, doloremque voluptatum laudantium nisi explicabo exercitationem. Et impedit quam aspernatur facilis voluptatum. Velit, quasi perferendis?</p>
                    </div>
                    <div class="card-footer">Footer</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">Content</div>
                    <div class="card-footer">Footer</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">Content</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Header</div>
                    <div class="card-body">Content</div>
                    <div class="card-footer">
                        <button>tambah</button>
                        <button>hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container-fluid">
        <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link 2</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lainnya
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Kontak</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                    </ul>
                    
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>
</html>