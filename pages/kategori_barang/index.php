<?php
$sql = "SELECT * FROM kategori_barang ORDER BY nama_kategori_barang ASC";
$result = $db->query($sql);
?>

<h3 class="page-heading mb-4">kategori barang</h3>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <div class="d-flex justify-content-start">
               <h5 class="card-title mb-4">List Data kategori barang</h5>
               <p class="ml-3">
                  <a href="?page=pages/kategori_barang/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah barang</a>
               </p>
            </div>
            <div class="table-responsive">
               <table class="table center-aligned-table">
                  <thead>
                     <tr class="text-primary">
                        <th>No.</th>
                        <th>ID Kategori Barang</th>
                        <th>Nama Kategori Barang</th>
                        <th>Deskripsi Kategori Barang</th>
                        <th>#Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($result as $key => $value) : ?>
                        <tr>
                           <td><?= $key + 1 ?></td>
                           <td><?= ucfirst($value["id_kategori_barang"]) ?></td>
                           <td><?= ucfirst($value["nama_kategori_barang"]) ?></td>
                           <td><?= ucfirst($value["deskripsi_kategori_barang"]) ?></td>
                           <td>
                              <a href="?page=pages/kategori_barang/edit&id_kategori_barang=<?= $value["id_kategori_barang"] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <a onclick="return confirm('Yakinn?')" href="?page=pages/kategori_barang/delete&id_kategori_barang=<?= $value["id_kategori_barang"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
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