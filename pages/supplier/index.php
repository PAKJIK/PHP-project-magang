<?php
$sql = "SELECT * FROM supplier ORDER BY nama_supplier ASC";
$result = $db->query($sql);
?>

<h3 class="page-heading mb-4">supplier</h3>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <div class="d-flex justify-content-start">
               <h5 class="card-title mb-4">List Data supplier</h5>
               <p class="ml-3">
                  <a href="?page=pages/supplier/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah supplier</a>
               </p>
            </div>
            <div class="table-responsive">
               <table class="table center-aligned-table">
                  <thead>
                     <tr class="text-primary">
                        <th>No.</th>
                        <th>ID Supplier</th>
                        <th>Nama supplier</th>
                        <th>no telp</th>
                        <th>Alamat</th>
                        <th>#Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($result as $key => $value) : ?>
                        <tr>
                           </td>
                           <td><?= $key + 1 ?></td>
                           <td><?= ucfirst($value["id_supplier"]) ?></td>
                           <td><?= ucfirst($value["nama_supplier"]) ?></td>
                           <td><?= ucfirst($value["no_telp"]) ?></td>
                           <td><?= ucfirst($value["alamat"]) ?></td>
                           <td>
                              <a href="?page=pages/supplier/edit&id_supplier=<?= $value["id_supplier"] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <a onclick="return confirm('Yakinn?')" href="?page=pages/supplier/delete&id_supplier=<?= $value["id_supplier"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
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