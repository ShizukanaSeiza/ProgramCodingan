<?php
$conn = new mysqli("localhost", "root", "", "joki");
$id = $_GET['id'];
$conn->query("DELETE FROM joki WHERE id = $id");
header("Location: index.php");
