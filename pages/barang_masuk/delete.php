<?php
$barang = $_GET['barang_masuk'];
$sql = "DELETE FROM barang_masuk WHERE barang=$barang";
if ($db->query($sql) === TRUE) {
   echo "<script>alert('barang_masuk deleted successfully.');window.location.href='index.php?page=pages/barang_masuk/index';</script>";
} else {
   if($db->errno ==1451) {
      echo "<script>alert('cannot delete this barang because it is referenced in other tables.');window.location.href</script>";
   }else {
     $error = "error" .$sql ."<br>".$db->error;
     echo "<script>alert($error);window.location.href='index.php?page/barang/index';</script>";
}
}
