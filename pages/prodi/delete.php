<?php
$id_prodi = $_GET['id_prodi'];

$sql = "DELETE FROM prodi WHERE id_prodi = $id_prodi";

if ($db->query($sql) === TRUE) {
   echo "<script>alert('Prodi deleted successfully.');window.location.href='index.php?page=pages/prodi/index';</script>";
} else {
   $error = "Error: " . $sql . "<br>" . $db->error;
}
