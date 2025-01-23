<html>
    <head>
        <title>
            Latihan Form
        </title>
    </head>
    <body>
        <h1>Input Nama</h1>
        <form action="" method="POST">
            Nama Depan : <input type="text" name="FirstName"><br>
            Nama Belakang : <input type="text" name="LastName"><br>
            Nama Kelas : <input type="text" name="ClassName"><br>
            <button type="Submit">Submit</button>
        </form>
        <?php
            if(!empty($_POST)){
                echo "Nama Kamu Adalah : <br>";
                echo "<b>".$_POST['FirstName']."</b>";
                echo "<b>".$_POST['LastName']."</b><br>";
                echo "Kamu Di Kelas : <br>";    
                echo "<b>".$_POST['ClassName']."</b><br>";
            }
        ?>
    </body>
</html>