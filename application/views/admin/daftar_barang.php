<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>daftar barang</title>
</head>
	<?php $this->load->view('tampilan/header_admin')?>

	<h1>List Barang</h1><br><br>
	<a href="<?=base_url('admin/tambah_barang');?>"><button type="submit" class="btn btn-primary"><i class="icon-plus"></i>Tambah Barang </button></a><br><br>

	<table class="table">
		<thead>
			<tr>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Kode Jenis</th>
				<th>Harga </th>
				<th>Stok</th>
				<th >Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $row['kodebarang']?></td>
					<td><?php echo $row['namabarang']?></td>
					<td><?php echo $row['kodejenis']?></td>
					<td><?php echo $row['harga']?></td>
					<td><?php echo $row['stok']?></td>
					<td><a href="<?php echo base_url('admin/edit_barang/'.$row['kodebarang']);?>"><button type="submit" class="btn btn-primary"><i class="icon-edit"></i>Edit </button></a>| <a class="btn btn-danger" href="<?php echo base_url('admin/delete_barang/'.$row['kodebarang']);?>" role="button" title="Delete" onclick='return confrim("Benar Data Barang Ingin Dihapus ?");'><span class="icon-trash"></span>Delete</a></td>
				
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
	<?php $this->load->view('tampilan/footer')?>
</html>