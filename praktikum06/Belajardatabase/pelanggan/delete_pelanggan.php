<?php 

// import database
require_once 'dbkoneksi.php';
$delete = $_GET['iddel'];
// bikin querynya
$sql = "DELETE FROM pelanggan WHERE id=?";
// siapin querynya
$st = $dbh->prepare($sql);
// eksekusi query
$st->execute([$delete]);

header('location:list_pelanggan.php');

?>