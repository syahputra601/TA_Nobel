<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>daftar barang</title>
</head>
	<?php $this->load->view('tampilan/header')?>

	<h1>List Barang</h1><br><br>
	
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
				
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
	<?php $this->load->view('tampilan/footer')?>
</html>