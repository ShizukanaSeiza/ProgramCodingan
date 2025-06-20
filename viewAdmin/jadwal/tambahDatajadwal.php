<!doctype html>
<?php 
    include "../header.php";
    $target_dir = "../uploads/";

    if (isset($_POST['submit'])) {
      $id_kelas           = $_POST['id_kelas'];
      $id_matkul          = $_POST['id_matkul'];
      $id_dosen           = $_POST['id_dosen'];
      $id_ruangan         = $_POST['id_ruangan'];
      $id_hari            = $_POST['id_hari'];
      $id_jam_kuliah      = $_POST['id_jam_kuliah'];
      $semester           = $_POST['semester'];
      $tahun_ajaran       = $_POST['tahun_ajaran'];

      // handle gambar
      $fileName = basename($_FILES["photoProfile"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
      $target_file = $target_dir . $nama . "." .$imageFileType;

      // check if file is an actual image
      $check = getimagesize($_FILES["photoProfile"]["tmp_name"]);
      if ($check !== false) {
        $uploadOK = 1;
      }else{
        echo "file yang di upload bukan berupa gambar";
        $uploadOK = 0;
      }

      //check file size
      if ($_FILES["photoProfile"]["size"] > 500000) {
      echo "Maaf, File Terlalu Besar.";
      $uploadOK = 0;
      }

      // allow certain file formats
      if (!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
        echo "Maaf, Hanya jpg, jpeg, png & gif format yang diperbolehkan.";
        $uploadOK = 0;
      }

      // prosess upload
      if  ($uploadOK == 1) {
        if (move_uploaded_file($_FILES["photoProfile"]["tmp_name"], $target_file)) {
            $photoProfile = $nama.".".$imageFileType;
            $sql = "INSERT INTO jadwal_kuliah (id_kelas, id_matkul, id_dosen, id_ruangan, id_hari, id_jam_kuliah, semester, tahun_ajaran, uploadProfile) VALUES ('$id_kelas','$id_matkul', '$id_dosen', '$id_ruangan', '$id_hari', '$id_jam_kuliah', '$semester', '$tahun_ajaran','$photoProfile')";
        }else{
            echo "Maaf, Terjadi kesalahan ketika upload Photo Anda";
        }
      } 

      // $sql = "INSERT INTO mhs (namaMhs,NIPD,tanggalLahir,uploadProfile,alamat) VALUES('$nama','$nipd','$tanggal_lahir','$photoProfile','$alamat')";

      if ($conn->query($sql) === TRUE) {
          $_SESSION['alert'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                  Data berhasil di Tambah!
                                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
          $conn->close();
          header("Location: tampilDatajadwal.php");
          exit();
      } else {
          $_SESSION['alert'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                  Error: ".$sql." - " . $conn->error . "
                                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
          $conn->close();
          header("Location: tampilDatajadwal.php");
          exit();
      }
    }
?>

      <!-- Header dengan Logout -->
      <div class="header">
        <h4>Tambah Data Jadwal Kuliah</h4>
      </div>

        <div class="content" style="margin-top: 70px;">
            <form action="" method="POST" class="border p-4 rounded shadow" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="" class="form-label">id_kelas</label>
                <input type="text" for="" name="id_kelas" class="form-control" required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">id_matkul</label>
                <input type="text" for="" name="id_matkul" class="form-control" maxlength="12" required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">id_dosen</label>
                <input type="text" for="" name="id_dosen" class="form-control" maxlength="12" required>
              </div>
              
              <div class="mb-3">
                <label for="" class="form-label">id_ruangan</label>
                <input type="text" for="" name="id_ruangan" class="form-control" maxlength="12" required>
              </div>
              
              <div class="mb-3">
                <label for="" class="form-label">id_hari</label>
                <input type="text" for="" name="id_hari" class="form-control" maxlength="12" required>
              </div>
              
              <div class="mb-3">
                <label for="" class="form-label">id_jam_kuliah</label>
                <input type="text" for="" name="id_jam_kuliah" class="form-control" maxlength="12" required>
              </div>
              
              <div class="mb-3">
                <label for="" class="form-label">semester</label>
                <input type="text" for="" name="semester" class="form-control" maxlength="12" required>
              </div>
              
              <div class="mb-3">
                <label for="" class="form-label">tahun_ajaran</label>
                <input type="text" for="" name="tahun_ajaran" class="form-control" maxlength="12" required>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Photo Profile</label>
                <input type="file" for="" name="photoProfile" class="form-control" required>
              </div>

              <div class="row">
                <div class="col-8"></div> <!-- Div kosong di sebelah kiri -->
                <div class="col-4 text-end"> <!-- Div berisi tombol di sebelah kanan -->
                    <button type="submit" class="btn btn-primary mb-3" name="submit">Tambah Data Jadwal</button>
                    <button type="button" class="btn btn-secondary mb-3" onclick="window.history.back()">Kembali</button>
                </div>
              </div>
            </form>
        </div>

    <?php include "../footer.php"; ?>
