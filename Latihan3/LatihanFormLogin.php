<html>
    <head>
        <title>
            Latihan Form Login
        </title>
    </head>
    <body>
        <h1>Input Nama</h1>
        <form action="" method="POST">
            Username : <input type="text" name="Username"><br>
            Password : <input type="text" name="Password"><br>          
            <button type="Submit">Submit</button>
        </form>
        <?php
            if(!empty($_POST)){
                $Username = $_POST['Username'];
                $Password = $_POST['Password'];
                if($Username == 'admin' && $Password == 'admin'){
                    echo "Selamat Kamu Berhasil Login";
                }else{
                    echo "Maaf Kombinasi Username Dan Password Salah";
                }
            }
        ?>
    </body>
</html>