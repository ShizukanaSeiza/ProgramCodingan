<!doctype html>
<?php
session_start();

if (isset($_SESSION['alert'])) {
    echo $_SESSION['alert']; // Display the alert messege
    unset($_SESSION['alert']); // Remove messege after displaying  
}
include "koneksi.php";

$sql = "SELECT id,namaMhs,NIPD,tanggalLahir,Alamat FROM mhs";
$result = $conn->query($sql);


?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Hello, World!</title>
</head>
<body class="text-center">
    <h1>Data Mahasiswa ASE 10</h1>

    <div class="container text-center">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIPD</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result->num_rows > 0){
                            $i = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th scope='row'>".$i."</th>";
                                echo "<td>".$row['namaMhs']."</td>";
                                echo "<td>".$row['NIPD']."</td>";
                                echo "<td>".$row['tanggalLahir']."</td>";
                                echo "<td>".$row['Alamat']."</td>";
                                echo "<td>
                                <a href='ubahDatamhs.php?id=".$row['id']."'>
                                <button class='btn-primary'>Ubah</button> 
                                | 
                                <a href='prosesHapus.php?id=".$row['id']."'>
                                <button class='btn-danger'>Hapus</button>
                                </a>
                                </td>";
                                echo "</tr>";
                                $i++;
                            }
                        }
                    ?>

            </tbody>
            </table>
            <a href="tambahDatamhs.php"><button type="button" class="form-control btn
            btn-success mb-3" name="submit">Tambah Data</button></a>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLX15PILFhosVNubq5LC7Qb9DXgDA91+tQ8Zj3iWWAWPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGwiC2A14u+LWgxfKTRIcfu@JTXR+EQDz/bgldoEy14H8zUFBQKbrJeEcQF" crossorigin="anonymous"><script>
    -->
    </body>
</html>