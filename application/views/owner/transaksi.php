<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title> Laporan Transaksi </title>
</head>
	<?php $this->load->view('tampilan/header_owner')?>
<body>

	<h1> Laporan Tansaksi </h1><br>

	<table class="table">
		<thead>
			<tr>
				<th>No transaksi</th>
				<th>tanggal pemesanan</th>
				<th>nama customer</th>
				<th>alamat</th>
				<th>kode barang</th>
				<th>nama barang</th>
				<th>harga</th>
				<th>qty pesanan</th>
				<th>total</th>
				<th>grand total</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $row['notransaksi']?></td>
					<td><?php echo $row['tanggalpemesanan']?></td>
					<td><?php echo $row['namacustomer']?></td>
					<td><?php echo $row['kodebarang']?></td>
					<td><?php echo $row['namabarang']?></td>
					<td><?php echo $row['harga']?></td>
					<td><?php echo $row['qtypemesanan']?></td>
					<td><?php echo $row['total']?></td>
					<td><?php echo $row['grandtotal']?></td>
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
</body>
<?php $this->load->view('tampilan/footer')?>
</html>