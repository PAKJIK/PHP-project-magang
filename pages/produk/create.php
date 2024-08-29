<?php
$kategori = $db->query("SELECT * FROM kategori");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_kategori =  $db->real_escape_string($_POST['id_kategori']);
   $nama_produk =  $db->real_escape_string($_POST['nama_produk']);
   $deskripsi_produk =  $db->real_escape_string($_POST['deskripsi_produk']);
   $harga_produk =  $db->real_escape_string($_POST['harga_produk']);
   $stock_produk =  $db->real_escape_string($_POST['stock_produk']);

   $namaFile = $_FILES['image']['name'];
   $tmpName = $_FILES['image']['tmp_name'];

   $generateUniqueName = uniqid("", true). $namaFile;
   // simpan ke folder uploads
   $fileDestination = 'uploads/'.$generateUniqueName;
   move_uploaded_file($tmpName, $fileDestination);

   // Insert ke database
   $sql = "INSERT INTO produk (id_kategori,nama_produk,deskripsi_produk,harga_produk,stock_produk,image) VALUES ('$id_kategori','$nama_produk','$deskripsi_produk','$harga_produk','$stock_produk','$generateUniqueName')";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('produk created successfully.');window.location.href='index.php?page=pages/produk/index';</script>";
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
            <h5 class="card-title mb-4">Inputkan data Produk</h5>
            <?php if (isset($error)): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
               </div>
            <?php endif; ?>
             <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="id_kategori">Kategori Produk </label>
                  <select name="id_kategori" id="id_produk" class="form-control p-input" required>
                     <option value="">--select kategori</option>
                     <?php foreach($kategori as $item): ?>
                        <option value="<?=$item['id_kategori']?>"><?=$item['nama_kategori']?></option>
                        <?php endforeach;?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="nama_produk">Nama produk </label>
                  <input type="text" class="form-control p-input" id="nama_produk" placeholder="Masukkan nama_produk" name="nama_produk" required>
               </div>
               <div class="form-group">
                  <label for="image">Image </label>
                  <input type="file" class="form-control p-input" id="image" name="image" required>
               </div>
               <div class="form-group">
                  <label for="deskripsi_produk">Deskripsi produk </label>
                  <input type="text" class="form-control p-input" id="deskripsi_produk" placeholder="Masukkan deskripsi_produk" name="deskripsi_produk" required>
               </div>
               <div class="form-group">
                  <label for="harga_produk">Harga produk </label>
                  <input type="text" class="form-control p-input" id="harga_produk" placeholder="Masukkan harga_produk" name="harga_produk" required>
               </div>
               <div class="form-group">
                  <label for="stock_produk">Stock produk </label>
                  <input type="text" class="form-control p-input" id="stock_produk" placeholder="Masukkan stock_produk" name="stock_produk" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>