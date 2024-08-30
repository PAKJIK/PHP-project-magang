<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_barang_masuk =  $db->real_escape_string($_POST['id_barang_masuk']);
   $id_barang =  $db->real_escape_string($_POST['id_barang']);
   $id_supplier =  $db->real_escape_string($_POST['id_supplier']);
   $tgl_masuk_barang =  $db->real_escape_string($_POST['tgl_masuk_barang']);
   $jml_barang_masuk =  $db->real_escape_string($_POST['jml_barang_masuk']);
   $keterangan =  $db->real_escape_string($_POST['keterangan']);

   // Insert ke database
   $sql = "INSERT INTO barang_masuk (id_barang_masuk,id_barang,id_supplier,tgl_barang_masuk,jml_barang_masuk,keterangan) VALUES ('$id_barang_masuk','$id_barang','$id_supplier','$tgl_masuk_barang','$jml_barang_masuk','$keterangan')";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('barang_masuk created successfully.');window.location.href='index.php?page=pages/barang_masuk/index';</script>";
   } else {
      $error = "Error: " . $sql . "<br>" . $db->error;
   }
}
?>

<h3 class="page-heading mb-4">Tambah</h3>
<div class="row">
   <div class="col-md-6">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title mb-4">tambahkan</h5>
            <?php if (isset($error)): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
               </div>
            <?php endif; ?>
            <form action="" method="post">
               <div class="form-group">
                  <label for="id_barang_masuk">ID barang masuk </label>
                  <input type="text" class="form-control p-input" id="id_barang_masuk" placeholder="Masukkan id_barang_masuk" name="id_barang_masuk" required>
               </div>
               <div class="form-group">
                  <label for="id_barang">id barang </label>
                  <input type="text" class="form-control p-input" id="id_barang" placeholder="Masukkan id_barang" name="id_barang" required>
               </div>
               <div class="form-group">
                  <label for="id_supplier">id supplier </label>
                  <input type="text" class="form-control p-input" id="id_supplier" placeholder="Masukkan id_supplier" name="id_supplier" required>
               </div>
               <div class="form-group">
                  <label for="tgl_masuk_barang">tanggal barang masuk </label>
                  <input type="text" class="form-control p-input" id="tgl_masuk_barang" placeholder="Masukkan tgl_masuk_barang" name="tgl_masuk_barang" required>
               </div>
               <div class="form-group">
                  <label for="jml_barang_masuk">jumlah barang masuk </label>
                  <input type="text" class="form-control p-input" id="jml_barang_masuk" placeholder="Masukkan jml_barang_masuk" name="jml_barang_masuk" required>
               </div>
               <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control p-input" id="keterangan" placeholder="Masukkan keterangan" name="keterangan" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>