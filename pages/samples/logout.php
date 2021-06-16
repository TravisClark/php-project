<?php
session_start();
unset($_SESSION['user']);
header("location: http://localhost:1234/php-project/pages/tables/SanPham.php");
?>