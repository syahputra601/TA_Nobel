<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>daftar user</title>
</head>
<?php $this->load->view('tampilan/header_admin')?>

<body>

	<h1> daftar user </h1><br>
	<a href="<?=base_url('admin/tambah_user');?>"><button type="submit" class="btn btn-primary"><i class="icon-plus"></i>Tambah User </button></a><br><br>

	<table class="table">
		<thead>
			<tr>
				<th>ID user</th>
				<th>Username</th>
				<th>password</th>
				<th>email</th>
				<th>level</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $row['iduser']?></td>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['password']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['level']?></td>
					<td><a href="<?php echo base_url('admin/edit_user/'.$row['iduser']);?>"><button type="submit" class="btn btn-primary"><i class="icon-edit"></i>Edit </button></a>| <a class="btn btn-danger" href="<?php echo base_url('admin/delete_user/'.$row['iduser']);?>" role="button" title="Delete" onclick='return confrim("Benar Data Barang Ingin Dihapus ?");'><span class="icon-trash"></span>Delete</a></td>
					
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
	<?php $this->load->view('tampilan/footer')?>
</body>
</html>