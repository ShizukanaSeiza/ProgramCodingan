<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Masuk ATM</title>
</head>
<body>
    <h1>Sign In ATM</h1>
    <form action="loginATM.php" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
        <label for="sandi">No Rekening:</label><br>
        <input type="password" id="sandi" name="sandi" required><br><br>
        <input type="submit" value="Masuk">
    </form>
</body>
</html>