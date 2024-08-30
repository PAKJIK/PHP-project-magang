<?php
$id_supplier = $_GET['id_supplier'];
$sql = "DELETE FROM supplier WHERE id_supplier=$id_supplier";
if ($db->query($sql) === TRUE) {
   echo "<script>alert('supplier deleted successfully.');window.location.href='index.php?page=pages/supplier/index';</script>";
} else {
   $error = "Error: " . $sql . "<br>" . $db->error;
   echo $error;
}
