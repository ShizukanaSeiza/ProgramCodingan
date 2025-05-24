    <!-- Sidebar Bootstrap -->
    <div class="sidebar">
        <h4>Admin ASE</h4>
        <hr>

        <?php
        $query = "SELECT * FROM menu";
        $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="'.$row['url'].'"><i class="fas fa-user"></i>
                '.$row['namaMenu'].'</a>';
            }
        ?>
        <!--<a href="../mhs/tampilDatamhs.php"><i class="fas fa-user"></i> Data Mahasiswa</a>
        <a href="../dsn/tampilDatadsn.php"><i class="fas fa-user"></i> Data Dosen</a>
        <a href="../matkul/tampilDatamatkul.php"><i class="fas fa-cogs"></i> Data Matakuliah</a>-->
        
        <div class="logout">
            <a href="../../auth/logout.php" class="logout-icon"><i class="fas fa-sign-out-alt"><i>
            logout</a>            
        </div>
    </div>