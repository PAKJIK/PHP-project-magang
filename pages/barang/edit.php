<?php
$id_barang = $_GET['id_barang'];
$barang = $db->query("SELECT * FROM barang WHERE id_barang = $id_barang");
$barang = $barang->fetch_assoc();
if (empty($barang)) {
   echo "<script>alert('barang not found.');window.location.href='index.php?page=pages/barang/index';</script>";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_barang =  $db->real_escape_string($_POST['id_barang']);
   $nama_kategori_barang =  $db->real_escape_string($_POST['nama_kategori_barang']);
   $deskripsi_barang =  $db->real_escape_string($_POST['deskripsi_barang']);
   $nama_barang =  $db->real_escape_string($_POST['nama_barang']);
   $harga_barang =  $db->real_escape_string($_POST['harga_barang']);
   $stock_barang =  $db->real_escape_string($_POST['stock_barang']);

   // Update barang
   $sql = "UPDATE barang SET nama_barang = '$nama_barang' WHERE id_barang = $id_barang";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('barang updated successfully.');window.location.href='index.php?page=pages/barang/index';</script>";
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
                  <label for="id_barang">ID barang</label>
                  <input type="text" class="form-control p-input" id="id_barang" placeholder="Masukkan id barang" name="id_barang" required value="<?= $barang['id_barang'] ?>">
               </div>
                  <label for="nama_kategori_barang">ID kategori</label>
                  <input type="text" class="form-control p-input" id="nama_kategori_barang" placeholder="Masukkan nama kategori barang" name="nama_kategori_barang" required value="<?=$barang['nama_kategori_barang'] ?>">
               </div>
               </div>
                  <label for="deskripsi_barang">Deskripsi Barang</label>
                  <input type="text" class="form-control p-input" id="deskripsi_barang" placeholder="Masukkan deskripsi barang" name="deskripsi_barang" required value="<?= $barang['deskripsi_barang'] ?>">
               </div>

               <div class="form-group">
                  <label for="nama_barang">Nama barang</label>
                  <input type="text" class="form-control p-input" id="nama_barang" placeholder="Masukkan nama barang" name="nama_barang" required value="<?= $barang['nama_barang'] ?>">
               </div>
               <div class="form-group">
                  <label for="harga_barang">no telfon </label>
                  <input type="text" class="form-control p-input" id="harga_barang" placeholder="Masukkan harga_barang" name="harga_barang" required value="<?= $barang['harga_barang'] ?>">
               </div>
               <div class="form-group">
                  <label for="stock_barang">Harga barang</label>
                  <input type="text" class="form-control p-input" id="stock_barang" placeholder="Masukkan harga barang" name="stock_barang" required value="<?= $barang['stock_barang'] ?>">
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Update</button>
            </form>
         </div>
      </div>
   </div>
</div>
