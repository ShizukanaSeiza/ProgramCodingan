<!doctype html>
<?php 
    session_start();
    include "../../koneksi.php";
    $target_dir = "../uploads/";

    // Ambil ID mahasiswa yang akan diubah
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM dosen WHERE id = '$id'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
    }

    if (isset($_POST['update'])) {
        $nama           = $_POST['nama'];
        $nid            = $_POST['nid'];
        $alamat         = $_POST['alamat'];
        $matkul         = $_POST['matkul'];

        // handle gambar
    //     $fileName = basename($_FILES["photoProfile"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    //     $target_file = $target_dir . $nama . "." .$imageFileType;

    //     // check if file is an actual image
    //     $check = getimagesize($_FILES["photoProfile"]["tmp_name"]);
    //     if ($check !== false) {
    //         $uploadOK = 1;
    //     }else{
    //         echo "file yang di upload bukan berupa gambar";
    //         $uploadOK = 0;
    //     }

    //      //check file size
    //   if ($_FILES["photoProfile"]["size"] > 500000) {
    //     echo "Maaf, File Terlalu Besar.";
    //     $uploadOK = 0;
    //     }
  
    //     // allow certain file formats
    //     if (!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
    //       echo "Maaf, Hanya jpg, jpeg, png & gif format yang diperbolehkan.";
    //       $uploadOK = 0;
    //     }
  
    //     // prosess upload
    //     if  ($uploadOK == 1) {
    //       if (move_uploaded_file($_FILES["photoProfile"]["tmp_name"], $target_file)) {
    //           $photoProfile = $nama.".".$imageFileType;
    //           $sql = "UPDATE mhs SET nama='$nama', nid='$nid', alamat='$alamat', mataKuliah='$matkul', WHERE id='$id'";
    //       }else{
    //           echo "Maaf, Terjadi kesalahan ketika upload Photo Anda";
    //       }
    //     } 


        $sql = "UPDATE dosen SET nama='$nama', nid='$nid', alamat='$alamat', mataKuliah='$matkul', WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['alert'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    Data berhasil Di ubah!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                  </div>";
            $conn->close();
            header("Location: tampilDatamhs.php");
            exit();
        } else {
            $_SESSION['alert'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    Error: ".$sql." - " . $conn->error . "
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                  </div>";
            $conn->close();
            header("Location: tampilDatamhs.php");
            exit();
        }
    }

?>
   <?php include "../header.php"; ?>

    <div class="header">
        <h4>Ubah Data Mahasiswa ASE10</h4>
    </div>

    <div class="content" style="margin-top: 70px;">
        <form method="POST" class="border p-4 rounded shadow" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NID</label>
                <input type="text" name="nid" class="form-control" maxlength="12" value="<?php echo $row['nid']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required><?php echo $row['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mata Kuliah</label>
                <textarea name="matkul" class="form-control" required><?php echo $row['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-warning" name="update">Update Data</button>
        </form>
    </div>

   <?php include "../footer.php"; ?>