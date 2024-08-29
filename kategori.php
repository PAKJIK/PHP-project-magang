<?php
 
 include "koneksi.php";

    ?>
<h2>penjualan</h2>

<table border="1" style="border-collapse:collapse">
    <tr bgcolor="#eee">
        <th width="50">No</th>
        <th width="100">ID Produk</th>
        <th width="100">ID Kategori</th>
        <th width="150">Nama Kategori</th>
        <th width="120">Nama Produk</th>
        <th width="100">Deskripsi Produk</th>
        <th width="100">Harga Produk</th>
        <th width="100">Stock Produk</th>
    </tr>

<?php
include "koneksi.php";

$no=1;
$id_kategori = $_GET['id_kategori'];

$ambildata = mysqli_query($db, "SELECT * FROM kategori 
    JOIN produk ON kategori.id_kategori = produk.id_kategori 
    = '$id_kategori'
    ") or die(mysqli_error($db));

while ($tampil = mysqli_fetch_array($ambildata)) {
    echo "
    <tr>
    <td align='center'>$no</td>
    <td align='center'>$tampil[id_produk]</td>
    <td align='center'>$tampil[id_kategori]</td>
    <td align='center'>$tampil[nama_kategori]</td>
    <td align='center'>$tampil[nama_produk]</td>
    <td align='center'>$tampil[deskripsi_produk]</td>
    <td align='center'>$tampil[harga_produk]</td>
    <td align='center'>$tampil[stock_produk]</td>
    </tr>";
    $no++;
}


?>
</table>

