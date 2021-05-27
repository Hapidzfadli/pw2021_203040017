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
session_destroy();
header("Location: login.php");
exit;
