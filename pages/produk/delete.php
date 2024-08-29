<?php
$id_produk = $_GET['id_produk'];
$sql = "DELETE FROM produk WHERE id_produk=$id_produk";
if ($db->query($sql) === TRUE) {
   echo "<script>alert('produk deleted successfully.');window.location.href='index.php?page=pages/produk/index';</script>";
} else {
   $error = "Error: " . $sql . "<br>" . $db->error;
   echo $error;
}
