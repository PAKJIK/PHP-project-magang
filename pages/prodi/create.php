<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $nama_prodi =  $db->real_escape_string($_POST['nama_prodi']);

   // Insert ke database
   $sql = "INSERT INTO prodi (nama_prodi) VALUES ('$nama_prodi')";
   if ($db->query($sql) === TRUE) {
      echo "<script>alert('Prodi created successfully.');window.location.href='index.php?page=pages/prodi/index';</script>";
   } else {
      $error = "Error: " . $sql . "<br>" . $conn->error;
   }
}
?>

<h3 class="page-heading mb-4">#Tambah</h3>
<div class="row">
   <div class="col-md-6">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title mb-4">Inputkan data Program Studi</h5>
            <?php if (isset($error)): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
               </div>
            <?php endif; ?>
            <form action="" method="post">
               <div class="form-group">
                  <label for="nama_prodi">Nama Program Studi </label>
                  <input type="text" class="form-control p-input" id="nama_prodi" placeholder="Masukkan nama Prodi" name="nama_prodi" required>
               </div>
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-paper-plane"></i> Submit</button>
            </form>
         </div>
      </div>
   </div>
</div>