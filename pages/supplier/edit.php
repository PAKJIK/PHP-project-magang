<?php
$id_supplier = $_GET['id_supplier'];
$supplier = $db->query("SELECT * FROM supplier WHERE id_supplier = $id_supplier");
$supplier = $supplier->fetch_assoc();
if (empty($supplier)) {
   echo "<script>alert('supplier not found.');window.location.href='index.php?page=pages/supplier/index';</script>";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_supplier =  $db->real_escape_string($_POST['id_supplier']);
   $nama_supplier =  $db->real_escape_string($_POST['nama_supplier']);
   $no_telp =  $db->real_escape_string($_POST['no_telp']);
   $alamat =  $db->real_escape_string($_POST['alamat']);

   // Update supplier
   $sql = "UPDATE supplier SET nama_supplier = '$nama_supplier' WHERE id_supplier = $id_supplier";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('supplier updated successfully.');window.location.href='index.php?page=pages/supplier/index';</script>";
   } else {
      $error = "Error: " . $sql . "<br>" . $db->error;
   }
}
?>

<h3 class="page-heading mb-4">#Edit</h3>
<div class="row">
   <div class="col-md-6">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title mb-4">Update data tahun ajaran</h5>
            <?php if (isset($error)): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
               </div>
            <?php endif; ?>
            <form action="" method="post">
               <div class="form-group">
                  <label for="id_supplier">ID supplier</label>
                  <input type="text" class="form-control p-input" id="id_supplier" placeholder="Masukkan id supplier" name="id_supplier" required value="<?= $supplier['id_supplier'] ?>">
               </div>

               <div class="form-group">
                  <label for="nama_supplier">Nama supplier</label>
                  <input type="text" class="form-control p-input" id="nama_supplier" placeholder="Masukkan nama supplier" name="nama_supplier" required value="<?= $supplier['nama_supplier'] ?>">
               </div>
               <div class="form-group">
                  <label for="no_telp">no telfon </label>
                  <input type="text" class="form-control p-input" id="no_telp" placeholder="Masukkan no_telp" name="no_telp" required value="<?= $supplier['no_telp'] ?>">
               </div>
               <div class="form-group">
                  <label for="alamat">Harga supplier</label>
                  <input type="text" class="form-control p-input" id="alamat" placeholder="Masukkan harga supplier" name="alamat" required value="<?= $supplier['alamat'] ?>">
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Update</button>
            </form>
         </div>
      </div>
   </div>
</div>