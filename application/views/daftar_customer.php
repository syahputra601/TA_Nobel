<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>daftar customer</title>
</head>
<body>

	<h1> daftar customer </h1>
	<a href="<?=base_url('admin/tambah_customer');?>"><input type="button" name="b1" value="tambah_customer"></a>
	<a href="<?=base_url('user/logout');?>"><input type="button" name="b3" value="logout"></a>

	<table>
		<thead>
			<tr>
				<th>ID customer</th>
				<th>nama customer</th>
				<th>alamat</th>
				<th>email</th>
				<th>no telp</th>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $row['idcustomer']?></td>
					<td><?php echo $row['namacustomer']?></td>
					<td><?php echo $row['alamat']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['notlp']?></td>
					<td><a href="<?php echo base_url('admin/edit_customer/'.$row['idcustomer']);?>">Edit</a> | <a href="<?php echo base_url('admin/delete_customer/'.$row['idcustomer']);?>">Delete</a></td>
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
</body>
</html>