<?php
$sql = "SELECT * FROM kategori ORDER BY nama_kategori ASC";
$result = $db->query($sql);
?>

<h3 class="page-heading mb-4">kategori</h3>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <div class="d-flex justify-content-start">
               <h5 class="card-title mb-4">List Data kategori</h5>
               <p class="ml-3">
                  <a href="?page=pages/kategori/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah kategori</a>
               </p>
            </div>
            <div class="table-responsive">
               <table class="table center-aligned-table">
                  <thead>
                     <tr class="text-primary">
                        <th>No.</th>
                        <th>ID Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi Kategori</th>
                        <th>#Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($result as $key => $value) : ?>
                        <tr>
                           <td><?= $key + 1 ?></td>
                           <td><?= ucfirst($value["id_kategori"]) ?></td>
                           <td><?= ucfirst($value["nama_kategori"]) ?></td>
                           <td><?= ucfirst($value["deskripsi_kategori"]) ?></td>
                           <td>
                              <a href="?page=pages/kategori/edit&id_kategori=<?= $value["id_kategori"] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <a onclick="return confirm('Yakinn?')" href="?page=pages/kategori/delete&id_kategori=<?= $value["id_kategori"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
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