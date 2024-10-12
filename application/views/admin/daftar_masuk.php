<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Masuk Barang</title>
</head>
	<?php $this->load->view('tampilan/header_admin')?>

	<h1>List Masuk Barang</h1><br><br>
	<a href="<?=base_url('admin/tambah_masuk');?>"><button type="submit" class="btn btn-primary"><i class="icon-plus"></i>Tambah masuk barang</button></a><br><br>

	<table class="table">
		<thead>
			<tr>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Nama Supplier</th>
				<th>tanggal</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Jumlah Masuk</th>
				<th>Stok Akhir</th>
				<th >Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $row['kodebarang']?></td>
					<td><?php echo $row['namabarang']?></td>
					<td><?php echo $row['namasupplier']?></td>
					<td><?php echo $row['tanggal']?></td>
					<td><?php echo $row['harga']?></td>
					<td><?php echo $row['stok']?></td>
					<td><?php echo $row['jumlahmasuk']?></td>
					<td><?php echo $row['stokakhir']?></td>
					<td><a href="<?php echo base_url('admin/edit_masuk/'.$row['kodebarang']);?>"><button type="submit" class="btn btn-primary"><i class="icon-edit"></i>Edit </button></a>| <a class="btn btn-danger" href="<?php echo base_url('admin/delete_masuk/'.$row['kodebarang']);?>" role="button" title="Delete" onclick='return confrim("Benar Data Barang Ingin Dihapus ?");'><span class="icon-trash"></span>Delete</a></td>
				
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
	<?php $this->load->view('tampilan/footer')?>
</html>