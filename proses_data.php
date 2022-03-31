<?php
include "koneksi.php";
$database = new database();

$action = $_GET['action'];
/*if($action=='add'){

    $database->tambah_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
    header('location:tampil_data.php');
}
else if($action == 'edit'){
    
    $database->update_data($_POST['nama_barang'],$_POST['stok'],
    $_POST['harga_beli'],$_POST['harga_jual'],$_POST['id_data']);
}
else if($action == 'delete'){
    $database->delete_data($_POST['id_barang']);
}
*/
if($action=='add_dst'){
 $database -> tambah_dst( $_POST['nama_dst'],$_POST['alamat_dst'],$_POST['telp_dst']);
 header('location:tampil_dst.php');
}




?>