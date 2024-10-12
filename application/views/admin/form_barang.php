<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('tampilan/header_admin')?>

	<form action="<?=base_url('admin/tambah_barang/kirim');?>" method="POST" class="form-horizontal">
	 <div class="control-group">
	 	<label class="control-label">Kode Barang</label>
	 	<div class="control">
	 		<input type="text" name="kode" required="">
	 	</div>
	 </div>
	 <label class="control-label">Nama Barang</label>
	 <input type="text" name="barang" required=""><br><br>
	 <label class="control-label">Kode Jenis</label>
	 <input type="text" name="jenis" required=""><br><br>
	 <label class="control-label">Harga</label>
	 <input type="text" name="harga" required=""><br><br>
	 <label class="control-label">Stok</label>
	 <input type="text" name="stok" required=""><br><br>
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Save</button>

</form>
<?php $this->load->view('tampilan/footer')?>