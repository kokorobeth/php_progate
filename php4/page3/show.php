<?php
// Terima data query menggunakan $_GET, dan tetapkan ke variable $menuName
echo $menuName = $_GET['name'];
?>

<!-- Cetak variable $menuName -->
<h1><?php echo $menuName?> halaman detail</h1>