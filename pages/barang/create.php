<?php
$barang = $db->query("SELECT * FROM barang");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_barang =  $db->real_escape_string($_POST['id_barang']);
   $id_kategori_barang =  $db->real_escape_string($_POST['id_kategori_barang']);
   $deskripsi_barang =  $db->real_escape_string($_POST['deskripsi_barang']);
   $nama_barang =  $db->real_escape_string($_POST['nama_barang']);
   $harga_barang =  $db->real_escape_string($_POST['harga_barang']);
   $stock_barang =  $db->real_escape_string($_POST['stock_barang']);
   
   // Insert ke database
   $sql = "INSERT INTO barang (id_barang,id_kategori_barang,deskripsi_barang,nama_barang,harga_barang,stock_barang) VALUES ('$id_barang','$id_kategori_barang','$deskripsi_barang','$nama_barang','$harga_barang','$stock_barang')";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('barang created successfully.');window.location.href='index.php?page=pages/barang/index';</script>";
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
                  <label for="id_barang">ID barang </label>
                  <input type="text" class="form-control p-input" id="id_barang" placeholder="Masukkan id_barang" name="id_barang" required>
               </div>
               <div class="form-group">
                  <label for="id_kategori_barang">nama kategori barang </label>
                  <input type="text" class="form-control p-input" id="id_kategori_barang" placeholder="Masukkan id_kategori_barang" name="id_kategori_barang" required>
               </div>
               <div class="form-group">
                  <label for="deskripsi_barang">deskripsi barang </label>
                  <input type="text" class="form-control p-input" id="deskripsi_barang" placeholder="Masukkan deskripsi_barang" name="deskripsi_barang" required>
               </div>
               <div class="form-group">
                  <label for="nama_barang">Nama Barang </label>
                  <input type="text" class="form-control p-input" id="nama_barang" placeholder="Masukkan nama_barang" name="nama_barang" required>
               </div>
               <div class="form-group">
                  <label for="harga_barang">Harga barang </label>
                  <input type="text" class="form-control p-input" id="harga_barang" placeholder="Masukkan harga_barang" name="harga_barang" required>
               </div>
               <div class="form-group">
                  <label for="stock_barang">Stock barang </label>
                  <input type="text" class="form-control p-input" id="stock_barang" placeholder="Masukkan stock_barang" name="stock_barang" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>