<?php
$id_kategori = $_GET['id_kategori'];

$sql = "DELETE FROM kategori WHERE id_kategori = $id_kategori";

if ($db->query($sql) === TRUE) {
   echo "<script>alert('kategori deleted successfully.');window.location.href='index.php?page=pages/kategori/index';</script>";
} else {
   $error = "Error: " . $sql . "<br>" . $db->error;
}
