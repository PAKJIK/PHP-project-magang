<?php
$sql = "SELECT * FROM barang JOIN kategori_barang ON  barang.id_kategori_barang=kategori_barang.id_kategori_barang ORDER BY nama_barang ASC";
$result = $db->query($sql);
?>

<h3 class="page-heading mb-4">barang</h3>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <div class="d-flex justify-content-start">
               <h5 class="card-title mb-4">List Data barang</h5>
               <p class="ml-3">
                  <a href="?page=pages/barang/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah barang</a>
               </p>
            </div>
            <div class="table-responsive">
               <table class="table center-aligned-table">
                  <thead>
                     <tr class="text-primary">
                        <th>No.</th>
                        <th>ID Barang</th>
                        <th>nama Kategori</th>
                        <th>Deskripsi Barang</th>
                        <th>harga barang</th>
                        <th>stock barang</th>
                        <th>#Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($result as $key => $value) : ?>
                        <tr>
                           <td><?= $key + 1 ?></td>
                           <td><?= ucfirst($value["id_barang"]) ?></td>
                           <td><?= ucfirst($value["nama_kategori_barang"]) ?></td>
                           <td><?= ucfirst($value["deskripsi_barang"]) ?></td>
                           <td><?= ucfirst($value["harga_barang"]) ?></td>
                           <td><?= ucfirst($value["stock_barang"]) ?></td>
                           <td>
                              <a href="?page=pages/barang/edit&id_barang=<?= $value["id_barang"] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <a onclick="return confirm('Yakinn?')" href="?page=pages/barang/delete&id_barang=<?= $value["id_barang"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
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