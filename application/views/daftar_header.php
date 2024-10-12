<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>daftar header</title>
</head>
<body>

	<h1> daftar header </h1>
	<a href="<?=base_url('admin/tambah_header');?>"><input type="button" name="b1" value="tambah_header"></a>
	<a href="<?=base_url('user/logout');?>"><input type="button" name="b3" value="logout"></a>

	<table>
		<thead>
			<tr>
				<th>No transaksi</th>
				<th>tanggal pemesanan</th>
				<th>ID customer</th>
				<th>ID petugas </th>
				<th>kode barang</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $row['notransaksi']?></td>
					<td><?php echo $row['tanggalpemesanan']?></td>
					<td><?php echo $row['idcustomer']?></td>
					<td><?php echo $row['idpetugas']?></td>
					<td><?php echo $row['kodebarang']?></td>
					<td><a href="<?php echo base_url('admin/edit_header/'.$row['notransaksi']);?>">Edit</a> | <a href="<?php echo base_url('admin/delete_header/'.$row['notransaksi']);?>">Delete</a></td>
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
</body>
</html>