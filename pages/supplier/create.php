<?php
$supplier = $db->query("SELECT * FROM supplier");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_supplier =  $db->real_escape_string($_POST['id_supplier']);
   $nama_supplier =  $db->real_escape_string($_POST['nama_supplier']);
   $no_telp =  $db->real_escape_string($_POST['no_telp']);
   $alamat =  $db->real_escape_string($_POST['alamat']);
   
   $sql = "INSERT INTO supplier (id_supplier,nama_supplier,no_telp,alamat) VALUES ('$id_supplier','$nama_supplier','$no_telp','$alamat')";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('supplier created successfully.');window.location.href='index.php?page=pages/supplier/index';</script>";
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
            <h5 class="card-title mb-4">Inputkan data supplier</h5>
            <?php if (isset($error)): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
               </div>
            <?php endif; ?>
             <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
               </div>
               <div class="form-group">
                  <label for="id_supplier"> id supplier </label>
                  <input type="text" class="form-control p-input" id="id_supplier" placeholder="Masukkan id_supplier" name="id_supplier" required>
               </div>
               <div class="form-group">
                  <label for="nama_supplier">Nama supplier </label>
                  <input type="text" class="form-control p-input" id="nama_supplier" placeholder="Masukkan nama_supplier" name="nama_supplier" required>
               </div>
               <div class="form-group">
                  <label for="no_telp">NO Telpon </label>
                  <input type="text" class="form-control p-input" id="no_telp" placeholder="Masukkan no_telp" name="no_telp" required>
               </div>
               <div class="form-group">
                  <label for="alamat">alamat supplier </label>
                  <input type="text" class="form-control p-input" id="alamat" placeholder="Masukkan alamat" name="alamat" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>