<?php
$barang = $_GET['barang'];
$sql = "DELETE FROM supplier WHERE barang=$barang";
if ($db->query($sql) === TRUE) {
   echo "<script>alert('supplier deleted successfully.');window.location.href='index.php?page=pages/supplier/index';</script>";
} else {
   $error = "Error: " . $sql . "<br>" . $db->error;
   echo $error;
}
