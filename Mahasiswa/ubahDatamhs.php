<!DOCTYPE html>
<?php
session_start();
    include "koneksi.php";

    // Ambil 10 mahasiswa yang akan diubah
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM mhs WHERE id = '$id'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
    }

    if (isset($_POST['update'])) {
        $nama          = $_POST['nama'];
        $nipd          = $_POST['nipd'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat        = $_POST['alamat'];

        $sql = "UPDATE mhs SET NamaMhs='$nama', NIPD='$nipd', TanggalLahir='$tanggal_lahir', Alamat='$alamat' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['alert'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Data berhasil diperbarui!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";

            $conn->close();
            header("Location: tampilDatamhs_action.php");
            exit();
        } else {
            $_SESSION['alert'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    Error: " .$sql . " - " . $conn->error . "
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
            $conn->close();
            header("Location: tampilDatamhs_action.php");
            exit();
        }
    }

?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
     <link href=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <title>Ubah data Mahasiswa</title>
</head>
<body class="">
    <h1 class="text-center">Ubah Data Mahasiswa ASE10</h1>

    <div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="POST" class="border p-4 rounded shadow">
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" for="" name="nama" class="form-control" value="<?php echo $row['NamaMhs']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">NIPD</label>
                    <input type="text" for="" name="nipd" class="form-control" maxlength="12" value="<?php echo $row['NIPD']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" for="" name="tanggal_lahir" class="form-control" value="<?php echo $row['TanggalLahir']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <textarea name="alamat" id="" col="3" class="form-control" required><?php echo $row['Alamat']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-warning" name="update">Update Data</button>
            </form>
        </div>
    </div>        
    </div> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">       
  </body>
</html>