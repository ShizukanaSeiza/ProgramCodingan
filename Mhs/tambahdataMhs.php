<!doctype html>
<?php
    include "koneksi.php";

    if (isset($_POST['submit'])) {
        $nama          = $_POST['nama'];
        $nipd          = $_POST['nipd'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat        = $_POST['alamat'];

        $sql = "INSERT INTO mhs (NamaMhs,NIPD,TanggalLahir,Alamat) VALUES('$nama','$nipd','$tanggal_lahir','$alamat')";

        if ($conn->query($sql) === TRUE){
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Data berhasil ditambahkan!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
        }else{
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Error: " . $sql . "<br>" . $conn->error . "
                    <button type='button' class='btn-close' data-bs-dissmiss='alert' aria-label='Close'></button>
                  </div>";
        }
    }
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    
    <title>Tambah Data Mahasiswa</title>
</head>
<body class="">
    <h1 class="text-center">Tambah Data Mahasiswa ASE10</h1>

    <div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="POST" class="border p-4 rounded shadow">
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" for="" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">NIPD</label>
                    <input type="text" for="" name="nipd" class="form-control" maxlength="12" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" for="" name="tanggal_lahir" class="form-control" max="2006-12-31" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <textarea name="alamat" id="" col="3" class="form-control" required></textarea>
                </div>

                <div>
                    <button type="submit" class="form-control btn btn-primary mb-3" name="submit">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLX15PILFhosVNubq5LC7Qb9DXgDA91+tQ8Zj3iWWAWPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGwiC2A14u+LWgxfKTRIcfu@JTXR+EQDz/bgldoEy14H8zUFBQKbrJeEcQF" crossorigin="anonymous"><script>
    -->
    </body>
</html>