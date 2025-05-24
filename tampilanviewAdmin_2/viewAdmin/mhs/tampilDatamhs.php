    <?php 
    include "../header.php"; 
    ?>

    <!-- Header dengan Logout -->
    <div class="header">
        <h4>Data Mahasiswa ASE10</h4>
    </div>

    <!-- Body Content -->
    <div class="content" style="margin-top: 70px;">
        <!-- <h1 class='text-center'>Data Mahasiswa ASE10</h1> -->
        <?php
        if (isset($_SESSION['alert'])) {
            echo $_SESSION['alert']; // Display the alert message
            unset($_SESSION['alert']); // Remove message after displaying
        }
        ?>

        <form action="cetakData.php" method="POST">
            <button type="submit" class="btn btn-primary float-end"><i class="fa fa-print"></i>Export Data</button>
        </form>
        
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
                    $sql = "SELECT Id, NamaMhs, NIPD, TanggalLahir, Alamat FROM mhs";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<th scope='row'>".$i++."</th>"; 
                            echo "<td>".$row['NamaMhs']."</td>";
                            echo "<td>".$row['NIPD']."</td>";
                            echo "<td>".$row['TanggalLahir']."</td>";
                            echo "<td>".$row['Alamat']."</td>";
                            echo "<td>
                                    <a href='ubahDataMhs.php?id=".$row['Id']."'>
                                        <button class='btn-primary'>Ubah</button></a> | 
                                    <a href='prosesHapus.php?id=".$row['Id']."'>
                                        <button class='btn-danger'>Hapus</button></a>
                                </td>";
                            echo "</tr>";
                        }
                    }    
                ?>
            </tbody>
        </table>
        <a href="tambahDatamhs.php"><button type="button" class="form-control btn btn-success mb-3" name="submit">Tambah Data</button></a>
    </div>

<?php include "../footer.php"; ?>