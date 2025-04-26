<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awasome (Ikon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

     <style>
        body {
            display: flex;
            flex-dirextion: column;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background-color: #343a40;
            color: white;
            padding: 20px;
            position:fixed;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-dicoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
        }
        .header {
            width: 100%;
            background-color: rgb(237, 239, 244);
            color: black;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            z-index: 1000;
        }
        .logout-button {
            background-color: red;
            border: none;
            padding: 10px 15px;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .logout-button:hover {
            background-color: red;
        }
     </style>
</head>
<body>

    <!-- Sidebar Bootstrap -->
     <div class="sidebar">
        <h4>Admin ASE</h4>
        <hr>
        <a href="#"><i class="fas fa-user"></i> Data Mahasiswa</a>
        <a href="#"><i class="fas fa-user"></i> Data Dosen</a>
        <a href="#"><i class="fas fa-cogs"></i> Data MataKuliah</a>
     </div>

     <!-- Header dengan logout -->
      <div class="header">
        <h4>Data Mahasiswa ASE10</h4>
      </div>

      <!-- Body Content --> 
       <div class="content" style="margin-top: 70px;">
        <!-- <h1 class='text-center'>Data Mahasiswa ASE10 -->

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIPD</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $sql = "SELECT id,namaMhs,NIPD,tanggalLahir,Alamat FROM mhs";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $i = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>".$i++."</th>";
                        echo "<td>".$row['namaMhs']."</td>";
                        echo "<td>".$row['NIPD']."</td>";
                        echo "<td>".$row['tanggalLahir']."</td>";
                        echo "<td>".$row['Alamat']."</td>";
                        echo "<td>
                                <a href='ubahDatamhs.php?id=".$row['id']."'>
                                    <button class='btn-primary'>Ubah</button></a> |
                                <a href='proseshapus.php?id=".$row['id']."'>
                                    <button class='btn-primary'>Hapus</button></a>
                            </td>";
                        echo "</tr>";
                    }
                }
            ?>
        </tbody>
    </table>
    <a href="tambahDatamhs.php"><button type="button" class="form-control btn
            btn-success mb-3" name="submit">Tambah Data</button></a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>