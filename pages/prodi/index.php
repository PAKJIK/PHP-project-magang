<?php
$sql = "SELECT * FROM prodi ORDER BY nama_prodi ASC";
$result = $db->query($sql);
?>

<h3 class="page-heading mb-4">#Program Studi</h3>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <div class="d-flex justify-content-start">
               <h5 class="card-title mb-4">List Data Prodi</h5>
               <p class="ml-3">
                  <a href="?page=pages/prodi/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Prodi</a>
               </p>
            </div>
            <div class="table-responsive">
               <table class="table center-aligned-table">
                  <thead>
                     <tr class="text-primary">
                        <th>No.</th>
                        <th>Nama Prodi</th>
                        <th>#Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($result as $key => $value) : ?>
                        <tr>
                           <td><?= $key + 1 ?></td>
                           <td><?= ucfirst($value["nama_prodi"]) ?></td>
                           <td>
                              <a href="?page=pages/prodi/edit&id_prodi=<?= $value["id_prodi"] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <a onclick="return confirm('Yakinn?')" href="?page=pages/prodi/delete&id_prodi=<?= $value["id_prodi"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>