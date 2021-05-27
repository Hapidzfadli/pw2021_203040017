<?php
/*
Hapid Fadli
203040017
https://github.com/Hapidzfadli/pw2021_203040017
pertemuan 12 - 6 Mei 2021
mempelajari mengenai login dan registrasi PHP 
*/
?>
<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "data gagal diubah!";
}
