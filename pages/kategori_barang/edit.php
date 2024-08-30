<?php
$id_kategori_barang = $_GET['id_kategori_barang'];
$kategori_barang = $db->query("SELECT * FROM kategori_barang WHERE id_kategori_barang = $id_kategori_barang");
$kategori_barang = $kategori_barang->fetch_assoc();
if (empty($kategori_barang)) {
   echo "<script>alert('kategori_barang not found.');window.location.href='index.php?page=pages/kategori_barang/index';</script>";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $id_kategori_barang =  $db->real_escape_string($_POST['id_kategori_barang']);
   $nama_kategori_barang =  $db->real_escape_string($_POST['nama_kategori_barang']);
   $deskripsi_kategori_barang =  $db->real_escape_string($_POST['deskripsi_kategori$deskripsi_kategori_barang']);

   // Update kategori_barang
   $sql = "UPDATE kategori_barang SET nama_kategori_barang = '$nama_kategori_barang' WHERE id_kategori_barang = $id_kategori_barang";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('kategori_barang updated successfully.');window.location.href='index.php?page=pages/kategori_barang/index';</script>";
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
                  <label for="id_kategori_barang">ID kategori_barang</label>
                  <input type="text" class="form-control p-input" id="id_kategori_barang" placeholder="Masukkan id kategori_barang" name="id_kategori_barang" required value="<?= $kategori_barang['id_kategori_barang'] ?>">
               </div>

               <div class="form-group">
                  <label for="nama_kategori_barang">Nama kategori_barang</label>
                  <input type="text" class="form-control p-input" id="nama_kategori_barang" placeholder="Masukkan nama kategori_barang" name="nama_kategori_barang" required value="<?= $kategori_barang['nama_kategori_barang'] ?>">
               </div>
               <div class="form-group">
                  <label for="deskripsi_kategori$deskripsi_kategori_barang">deskripsi kategori barang </label>
                  <input type="text" class="form-control p-input" id="deskripsi_kategori$deskripsi_kategori_barang" placeholder="Masukkan deskripsi_kategori$deskripsi_kategori_barang" name="deskripsi_kategori$deskripsi_kategori_barang" required value="<?= $kategori_barang['deskripsi_kategori$deskripsi_kategori_barang'] ?>">
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Update</button>
            </form>
         </div>
      </div>
   </div>
</div>