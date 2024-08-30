<?php
$barang = $db->query("SELECT * FROM barang");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_kategori_barang =  $db->real_escape_string($_POST['id_kategori_barang']);
   $deskripsi_kategori_barang =  $db->real_escape_string($_POST['deskripsi_kategori_barang']);
   $nama_kategori_barang =  $db->real_escape_string($_POST['nama_kategori_barang']);
   
   // Insert ke database
   $sql = "INSERT INTO kategori_barang (id_kategori_barang,deskripsi__kategori_barang,nama_kategori_barang) VALUES ('$id_kategori_barang','$deskripsi_kategori_barang','$nama_kategori_barang')";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('kategori_barang created successfully.');window.location.href='index.php?page=pages/kategori_barang/index';</script>";
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
            <h5 class="card-title mb-4">Inputkan data barang</h5>
            <?php if (isset($error)): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
               </div>
            <?php endif; ?>
             <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
               </div>
               <div class="form-group">
                  <label for="id_kategori_barang">nama kategori barang </label>
                  <input type="text" class="form-control p-input" id="id_kategori_barang" placeholder="Masukkan id_kategori_barang" name="id_kategori_barang" required>
               </div>
               <div class="form-group">
                  <label for="deskripsi_kategori_barang">deskripsi barang </label>
                  <input type="text" class="form-control p-input" id="deskripsi_kategori_barang" placeholder="Masukkan deskripsi_kategori_barang" name="deskripsi_kategori_barang" required>
               </div>
               <div class="form-group">
                  <label for="nama_kategori_barang">Nama_kategori Barang </label>
                  <input type="text" class="form-control p-input" id="nama_kategori_barang" placeholder="Masukkan nama_kategori_barang" name="nama_kategori_barang" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>