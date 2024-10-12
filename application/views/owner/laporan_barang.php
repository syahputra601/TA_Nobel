<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Daftar Barang</title>
</head>
	<?php $this->load->view('tampilan/header_owner')?>

	<h1>List Laporan Barang</h1><br><br>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Kode Jenis</th>
				<th>Harga </th>
				<th>Stok</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1 ?>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $row['kodebarang']?></td>
					<td><?php echo $row['namabarang']?></td>
					<td><?php echo $row['kodejenis']?></td>
					<td><?php echo $row['harga']?></td>
					<td><?php echo $row['stok']?></td>
					
				
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
	<?php $this->load->view('tampilan/footer')?>
</html>