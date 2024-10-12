<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('tampilan/header_admin')?>

	<form action="<?=base_url('admin/tambah_masuk/kirim');?>" method="POST" class="form-horizontal">
	 <div class="control-group">
	 	<label class="control-label">Kode Barang</label>
	 	<div class="control">
	 		<input type="text" name="kbarang" required="">
	 	</div>
	 </div>
	 <label class="control-label">Nama Barang</label>
	 <input type="text" name="nbarang" required=""><br><br>
	 <label class="control-label">Nama Supplier</label>
	 <input type="text" name="namasupplier" required=""><br><br>
	 <label class="control-label">Tanggal</label>
	 <input type="text" name="tg" required=""><br><br>
	 <label class="control-label">Harga</label>
	 <input type="text" name="hrg" required=""><br><br>
	 <label class="control-label">Stok</label>
	 <input type="text" name="stk" required=""><br><br>
	 <label class="control-label">Jumlah Masuk</label>
	 <input type="text" name="jmasuk" required=""><br><br>
	 <label class="control-label">Stok Akhir</label>
	 <input type="text" name="stokakhir" required=""><br><br>
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Save</button>

</form>
<?php $this->load->view('tampilan/footer')?>