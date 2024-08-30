<?php
$barang = $_GET['barang'];
$sql = "DELETE FROM supplier WHERE barang=$barang";
if ($db->query($sql) === TRUE) {
   echo "<script>alert('supplier deleted successfully.');window.location.href='index.php?page=pages/supplier/index';</script>";
} else {
   if($db->errno ==1451) {
      echo "<script>alert('cannot delete this barang because it is referenced in other tables.');window.location.href</script>";
   }else {
     $error = "error" .$sql ."<br>".$db->error;
     echo "<script>alert($error);window.location.href='index.php?page/barang/index';</script>";
}
}
