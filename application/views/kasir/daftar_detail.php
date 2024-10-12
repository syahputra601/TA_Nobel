<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title> List Customer </title>
</head>
	<?php $this->load->view('tampilan/header_kasir')?>
<body>

	<h1> List Customer </h1><br>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>No transaksi</th>
				<th>tanggal pemesanan</th>
				<th>nama customer</th>
				<th>alamat</th>
				<th>kode barang</th>
				<th>nama barang</th>
				<th>harga</th>
				<th>qty pesanan</th>
				<th>total</th>
				<th>grand total</th><td>
				<th>aksi</th>
			</tr>
		</thead>
		<tbody>

			<?php $no=1 ?>
			<?php if(!empty($record)):?>
			<?php foreach($record as $row):?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $row['notransaksi']?></td>
					<td><?php echo $row['tanggalpemesanan']?></td>
					<td><?php echo $row['namacustomer']?></td>
					<td><?php echo $row['alamat']?></td>
					<td><?php echo $row['kodebarang']?></td>
					<td><?php echo $row['namabarang']?></td>
					<td><?php echo $row['harga']?></td>
					<td><?php echo $row['qtypemesanan']?></td>
					<td><?php echo $row['total']?></td>
					<td><?php echo $row['grandtotal']?></td>
					<td><td> <a href="<?php echo base_url('kasir/delete_detail/'.$row['notransaksi']);?>"><button type="submit" class="btn btn-danger"><i class="icon-trash"></i>Delete </button></a>| <a href="<?php echo base_url('kasir/print_detail/'.$row['notransaksi']);?>"><button type="submit" class="btn btn-print"><i class="icon-edit"></i>Print </button></a></td>
				</tr>
				<?php endforeach;?>
			<?php endif;?>
		</tbody>
	</table>
</body>
<?php $this->load->view('tampilan/footer')?>
</html>