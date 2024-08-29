<?php
$sql = "SELECT * FROM produk JOIN kategori ON  produk.id_kategori=kategori.id_kategori ORDER BY nama_produk ASC";
$result = $db->query($sql);
?>

<h3 class="page-heading mb-4">Produk</h3>

<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <div class="d-flex justify-content-start">
               <h5 class="card-title mb-4">List Data produk</h5>
               <p class="ml-3">
                  <a href="?page=pages/produk/create" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah produk</a>
               </p>
            </div>
            <div class="table-responsive">
               <table class="table center-aligned-table">
                  <thead>
                     <tr class="text-primary">
                        <th>No.</th>
                        <th>Nama kategori</th>
                        <th>Image</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi Produk</th>
                        <th>harga Produk</th>
                        <th>stock Produk</th>
                        <th>#Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($result as $key => $value) : ?>
                        <tr>
                           <td><?= $key + 1 ?></td>
                           <td><?= ucfirst($value["nama_kategori"]) ?></td>
                           <td>
                              <?php if($value['image'] == null) : ?>
                                 <i>No image</i>
                              <?php else: ?>
                                 <img src="uploads/<?= $value['image'] ?>" alt="" width="50" height="50">
                              <?php endif ?>
                           </td>
                           <td><?= ucfirst($value["nama_produk"]) ?></td>
                           <td><?= ucfirst($value["deskripsi_produk"]) ?></td>
                           <td><?= ucfirst($value["harga_produk"]) ?></td>
                           <td><?= ucfirst($value["stock_produk"]) ?></td>
                           <td>
                              <a href="?page=pages/produk/edit&id_produk=<?= $value["id_produk"] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                              <a onclick="return confirm('Yakinn?')" href="?page=pages/produk/delete&id_produk=<?= $value["id_produk"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
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