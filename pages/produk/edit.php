<?php
$id_produk = $_GET['id_produk'];
$produk = $db->query("SELECT * FROM produk WHERE id_produk = $id_produk");
$produk = $produk->fetch_assoc();
if (empty($produk)) {
   echo "<script>alert('produk not found.');window.location.href='index.php?page=pages/produk/index';</script>";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_produk =  $db->real_escape_string($_POST['id_produk']);
   $id_kategori =  $db->real_escape_string($_POST['id_kategori']);
   $nama_produk =  $db->real_escape_string($_POST['nama_produk']);
   $deskripsi_produk =  $db->real_escape_string($_POST['deskripsi_produk']);
   $harga_produk =  $db->real_escape_string($_POST['harga_produk']);
   $stock_produk =  $db->real_escape_string($_POST['stock_produk']);

   // Update produk
   $sql = "UPDATE produk SET nama_produk = '$nama_produk' WHERE id_produk = $id_produk";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('produk updated successfully.');window.location.href='index.php?page=pages/produk/index';</script>";
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
                  <label for="id_produk">ID produk</label>
                  <input type="text" class="form-control p-input" id="id_produk" placeholder="Masukkan id produk" name="id_produk" required value="<?= $produk['id_produk'] ?>">
               </div>
               <div class="form-group">
                  <label for="id_kategori">ID Kategori</label>
                  <input type="text" class="form-control p-input" id="id_kategori" placeholder="Masukkan id kategori" name="id_kategori" required value="<?= $produk['id_kategori'] ?>">
               </div>
               <div class="form-group">
                  <label for="nama_produk">Nama Produk</label>
                  <input type="text" class="form-control p-input" id="nama_produk" placeholder="Masukkan nama produk" name="nama_produk" required value="<?= $produk['nama_produk'] ?>">
               </div>
               <div class="form-group">
                  <label for="derskripsi_produk">Deskripsi Produk </label>
                  <input type="text" class="form-control p-input" id="deskripsi_produk" placeholder="Masukkan deskripsi produk" name="deskripsi_produk" required value="<?= $produk['deskripsi_produk'] ?>">
               </div>
               <div class="form-group">
                  <label for="harga_produk">Harga produk</label>
                  <input type="text" class="form-control p-input" id="harga_produk" placeholder="Masukkan harga produk" name="harga_produk" required value="<?= $produk['harga_produk'] ?>">
               </div>
               <div class="form-group">
                  <label for="stock_produk">Stock  produk </label>
                  <input type="text" class="form-control p-input" id="stock_produk" placeholder="Masukkan stock produk" name="stock_produk" required value="<?= $produk['stock_produk'] ?>">
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Update</button>
            </form>
         </div>
      </div>
   </div>
</div>