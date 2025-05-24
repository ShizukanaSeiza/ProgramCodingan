<!DOCTYPE html>
<html>
<head>
  <title>Request Jokian</title>
  <link rel="stylesheet" type="text/css" href="baju.css">
</head>
<body>
  <h2><center>Form Request Jokian</center></h2>
  <form action="proses.php" method="POST">
    Nama: <input type="text" name="nama" required><br>
    Rank Awal:
    <select name="rank_awal">
      <option>Grandmaster</option>
      <option>Epic</option>
      <option>Legend</option>
      <option>Mythic</option>
    </select><br>
    Rank Tujuan:
    <select name="rank_tujuan">
      <option>Epic</option>
      <option>Legend</option>
      <option>Mythic</option>
      <option>Honor</option>
      <option>Glory</option>
      <option>Immortal</option>
    </select><br>
    Catatan: <textarea name="catatan"></textarea><br>
    <center><input type="submit" value="Kirim Request"></center>
  </form>

  <h2><center>Daftar Request</center></h2>
  <?php
  $conn = new mysqli("localhost", "root", "", "joki");
  $res = $conn->query("SELECT * FROM joki ORDER BY id DESC");
  while ($row = $res->fetch_assoc()) {
    echo "<p>{$row['nama']} - {$row['rank_awal']} ke {$row['rank_tujuan']} (Estimasi: {$row['estimasi']} hari) 
    <a href='hapus.php?id={$row['id']}'>Hapus</a></p>";
  }
  ?>

<script>
  for (let i = 0; i < 100; i++) {
    const star = document.createElement("div");
    star.className = "star";
    star.innerText = "\u273A"; // bentuk bintang bisa diganti jadi ★, ✶, ✷, ✸, ✺
    star.style.left = Math.random() * window.innerWidth + "px";
    star.style.top = Math.random() * -window.innerHeight + "px";
    star.style.fontSize = (Math.random() * 20 + 18) + "px"; // ukuran acak
    star.style.animationDuration = (2 + Math.random() * 3) + "s";
    star.style.opacity = Math.random();
    document.body.appendChild(star);
  }
</script>

</body>
</html>
