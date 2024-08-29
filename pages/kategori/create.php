<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_kategori =  $db->real_escape_string($_POST['id_kategori']);
   $nama_kategori =  $db->real_escape_string($_POST['nama_kategori']);
   $deskripsi_kategori =  $db->real_escape_string($_POST['deskripsi_kategori']);

   // Insert ke database
   $sql = "INSERT INTO kategori (id_kategori,nama_kategori,deskripsi_kategori) VALUES ('$id_kategori','$nama_kategori','$deskripsi_kategori')";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('kategori created successfully.');window.location.href='index.php?page=pages/kategori/index';</script>";
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
                  <label for="id_kategori">ID Kategori </label>
                  <input type="text" class="form-control p-input" id="id_kategori" placeholder="Masukkan id_kategori" name="id_kategori" required>
               </div>
               <div class="form-group">
                  <label for="nama_kategori">Nama kategori </label>
                  <input type="text" class="form-control p-input" id="nama_kategori" placeholder="Masukkan nama_kategori" name="nama_kategori" required>
               </div>
               <div class="form-group">
                  <label for="deskripsi_kategori">Deskripsi Kategori </label>
                  <input type="text" class="form-control p-input" id="deskripsi_kategori" placeholder="Masukkan deskripsi_kategori" name="deskripsi_kategori" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>