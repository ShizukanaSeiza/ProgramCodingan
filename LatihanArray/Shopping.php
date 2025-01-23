<!DOCTYPE html>
<head>
    <title>Daftar Belanja</title>
</head>
<body>
    <h1>Daftar Belanja</h1>
    <?php display_list(); ?>

    <h2>Tambahkan Item</h2>
    <form method="post">
        <input type="text" name="new_item" placeholder="Masukkan item baru" required>
        <input type="submit" value="Tambah">
    </form>

    <h2>Hapus Item</h2>
    <form method="post">
        <input type="text" name="remove_item" placeholder="Masukkan item yang dihapus" required>
        <input type="submit" value="Hapus">
    </form>
</body>
</html>

<?php
// Deklarasikan array untuk menyimpan daftar belanja
$shopping_list = array("Apel", "Pisang", "Jeruk");

// Fungsi untuk menambahkan iten ke daftar belanja
function add_item($item) {
    global $shopping_list;
    array_push($shopping_list, $item);
}

// Fungsi untuk menampilkan daftar belanja
function display_list() {
    global $shopping_list;
    if (is_array($shopping_list) && !empty($shopping_list)) {
        echo "<ul>";
        foreach ($shopping_list as $item) {
            echo "<li>" . htmlspecialchars($item) . "</li>";
        }
        echo "<ul>";
    }else {
        echo "Daftar belanja kosong";
    }
}

// Fungsi untuk menghapus item dari daftar belanja 
function remove_item($item) {
    global $shopping_list;
    $index = array_Search($item, $shopping_list);
    if ($index !== false) {
        unset($shopping_list[$index]);
        $shopping_list = array_values($shopping_list);// Re-index array
    }
}

// Tambahkan item ke daftar belanja jika form dikirim
if (!empty($_POST)) {
    if (!empty($_POST['new_item'])) {
        add_item($_POST['new_item']);
    }
    if (!empty($_POST['remove_item'])) {
        remove_item($_POST['remove_item']);
    }
}
?>

