<?php
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require 'function.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
        alert('Data berhasil dihapus');
        document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
        alert('Data Tidak berhasil dihapus');
        document.location.href = 'admin.php';
        </script>";
}
