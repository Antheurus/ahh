<?php
include('koneksi.php');
$db = new database();
$data_dst = $db->tampil_dst();
?>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambah_dst.php">Tambah Data</a>
<table border="1">
	       <tr>
	       	  <th>NO</th>
	       	  <th>Nama Distributor</th>
	       	  <th>Alamat DIstributor</th>
	       	  <th>Telp Distributor</th>
	       	  <th>Action</th>
	       </tr>
	       <?php
	       $no = 1;
	       foreach($data_dst as $row){
	       	   ?>
	       	   <tr>
	       	   	  <td><?php echo $no++; ?></td>
	       	   	  <td><?php echo $row['nama_dst']; ?></td>
	       	   	  <td><?php echo $row['alamat_dst']; ?></td>
	       	   	  <td><?php echo $row['telp_dst']; ?></td>
	       	   	  <td>
	       	   	  	 <a href="update_dst.php?id=<?php echo $row['id_dst']; ?>">
	       	   	  	 Update</a>
	       	   	  	 <a href="proses_barang.php?action=delete_dst&id=
	       	   	  	 <?php echo $row ['id_dst']; ?>">Delete</a>
	       	   	  </td>
	       	   	</tr>
	       	   	<?php
	       	}
	       	?>
	   </table>
	</body>
</html>


