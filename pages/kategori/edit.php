<?php
$id_kategori = $_GET['id_kategori'];
$kategori = $db->query("SELECT * FROM kategori WHERE id_kategori = $id_kategori");
$kategori = $kategori->fetch_assoc();
if (empty($kategori)) {
   echo "<script>alert('kategori not found.');window.location.href='index.php?page=pages/kategori/index';</script>";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $nama_kategori =  $db->real_escape_string($_POST['nama_kategori']);

   // Update kategori
   $sql = "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = $id_kategori";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('kategori updated successfully.');window.location.href='index.php?page=pages/kategori/index';</script>";
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
                  <label for="id_kategori">ID Kategori </label>
                  <input type="text" class="form-control p-input" id="id_kategori" placeholder="Masukkan id kategori" name="id_kategori" required value="<?= $kategori['id_kategori'] ?>">
               </div>
               <div class="form-group">
                  <label for="nama_kategori">Nama Kategori </label>
                  <input type="text" class="form-control p-input" id="nama_kategori" placeholder="Masukkan nama kategori" name="nama_kategori" required value="<?= $kategori['nama_kategori'] ?>">
               </div>
               <div class="form-group">
                  <label for="deskripsi_kategori">Deskripsi Kategori </label>
                  <input type="text" class="form-control p-input" id="deskripsi_kategori" placeholder="Masukkan deskripsi kategori" name="deskripsi_kategori" required value="<?= $kategori['deskripsi_kategori'] ?>">
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Update</button>
            </form>
         </div>
      </div>
   </div>
</div>