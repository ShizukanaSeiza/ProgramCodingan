<html>
    <head>
        <title>
            Latihan Form
        </title>
    </head>
    <body>
        <h1>Input Nama</h1>
        <form action="" method="POST">
            Nama : <input type="text" name="Nama"><br>            
            <button type="Submit">Submit</button>
        </form>
        <?php
            if(!empty($_POST)){
                $namaInput = $_POST['Nama'];
                $namaMahasiswaExist = "Seiza";

                if($namaInput == $namaMahasiswaExist){
                    echo "Kamu Adalah Mahasiswa Shinjuku";
                }else{
                    echo "Kamu Bukan Mahasiswa Shinjuku";
                }
            }
        ?>
    </body>
</html>