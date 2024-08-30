<?php
$kategori_barang = $db->query("SELECT * FROM kategori_barang");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_kategori_barang =  $db->real_escape_string($_POST['id_kategori_barang']);
   $deskripsi_kategori_barang =  $db->real_escape_string($_POST['deskripsi_kategori_barang']);
   $nama_kategori_barang =  $db->real_escape_string($_POST['nama_kategori_barang']);
   
   $namaFile = $_FILES['image']['name'];
   $tmpName = $_FILES['image']['tmp_name'];

   $generateUniqueName = uniqid("", true). $namaFile;
   // simpan ke folder uploads
   $fileDestination = 'uploads/'.$generateUniqueName;
   move_uploaded_file($tmpName, $fileDestination);

   // Insert ke database
   $sql = "INSERT INTO kategori_barang (id_kategori_barang,deskripsi_kategori_barang,nama_kategori_barang,image) VALUES ('$id_kategori_barang','$deskripsi_kategori_barang','$nama_kategori_barang')";
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
            <h5 class="card-title mb-4">Inputkan data kategori_barang</h5>
            <?php if (isset($error)): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
               </div>
            <?php endif; ?>
             <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="id_kategori_barang$kategori_barang">kategori_barang$kategori_barang kategori_barang </label>
                  <select name="id_kategori_barang$kategori_barang" id="id_kategori_barang" class="form-control p-input" required>
                     <option value="">--select kategori_barang$kategori_barang</option>
                     <?php foreach($kategori_barang as $item): ?>
                        <option value="<?=$item['id_kategori_barang$kategori_barang']?>"><?=$item['nama_kategori_barang$kategori_barang']?></option>
                        <?php endforeach;?>
                  </select>
               </div>
               <div class="form-group">
                  <label for="deskripsi_kategori_barang">deskripsi kategori_barang </label>
                  <input type="text" class="form-control p-input" id="deskripsi_kategori_barang" placeholder="Masukkan deskripsi_kategori_barang" name="deskripsi_kategori_barang" required>
               </div>
               <div class="form-group">
                  <label for="image">Image </label>
                  <input type="file" class="form-control p-input" id="image" name="image" required>
               </div>
               <div class="form-group">
                  <label for="nama_kategori_barang">Nama kategori_Barang </label>
                  <input type="text" class="form-control p-input" id="nama_kategori_barang" placeholder="Masukkan nama_kategori_barang" name="nama_kategori_barang" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>