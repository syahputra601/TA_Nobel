<title> Tambah Customer </title>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	
	<?php $this->load->view('tampilan/header_kasir')?>

	<?php if (isset($pesan)) {?>
	<div class="alert alert-block" role="alert">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<h4>Peringatan</h4>
		<?php echo $pesan ?>
	</div>
	<?php }?>

	<form action="<?=base_url('kasir/tambah_detail/kirim');?>" method="POST" class="form-horizontal">
	 <label class="control-label">No transaksi</label>
	 <input type="text" name="no" required="" ><br><br>
	 <label class="control-label">tanggal pemesanan</label>
	 <input type="text" value="<?php echo date('d-m-Y') ?>" name="tanggal" required="" readonly><br><br>
	 <label class="control-label">nama customer</label>
	 <input type="text" name="nama" required="" ><br><br>
	 <label class="control-label">alamat</label>
	 <input type="text" name="alamat" required="" ><br><br>
	 <label class="control-label">kode barang</label>
	 <input type="text" name="kode" required="" ><br><br>
	 <label class="control-label">nama barang</label>
	 <input type="text" name="barang" required="numeric" type="number" ><br><br>
	 <label class="control-label">harga</label>
	 <input type="text" name="harga" required=""><br><br>
	 <label class="control-label">qty pemesanan</label>
	 <input type="text" name="qty" required="" ><br><br>
	 <label class="control-label">total</label>
	 <input type="text" name="total" required="" ><br><br>
	 <label class="control-label">grand total</label>
	 <input type="text" name="grand" required="" ><br><br>
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Save</button>

</form>
<?php $this->load->view('tampilan/footer')?>