<?php
$conn = new mysqli("localhost", "root", "", "joki");

$nama = $_POST['nama'];
$rank_awal = $_POST['rank_awal'];
$rank_tujuan = $_POST['rank_tujuan'];
$catatan = $_POST['catatan'];

$rank_list = ["Grandmaster", "Epic", "Legend", "Mythic", "Honor", "Glory", "Immortal"];
$estimasi = abs(array_search($rank_tujuan, $rank_list) - array_search($rank_awal, $rank_list));

$conn->query("INSERT INTO joki (nama, rank_awal, rank_tujuan, catatan, estimasi)
              VALUES ('$nama', '$rank_awal', '$rank_tujuan', '$catatan', '$estimasi')");

header("Location: index.php");
