<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<form action="<?=base_url('admin/tambah_header/kirim');?>" method="POST">
	 <label>No transaksi</label>
	 <input type="text" name="transaksi"><br>
	 <label>tanggal pemesanan</label>
	 <input type="text" name="pemesanan"><br>
	 <label>ID customer</label>
	 <input type="text" name="id"><br>
	 <label>ID petugas</label>
	 <input type="text" name="petugas"><br>
	 <label>kode barang</label>
	 <input type="text" name="kode"><br>
	 <input type="submit" name="submit" value="tambah"><br>
	 <input type="reset" name="reset" value="clear"><br>
	 <a href="<?=base_url('admin/daftar_header')?>"><input type="button" name="submit" value="back"></a>

</form>