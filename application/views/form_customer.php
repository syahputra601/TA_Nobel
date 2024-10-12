<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<form action="<?=base_url('admin/tambah_customer/kirim');?>" method="POST">
	 <label>ID customer</label>
	 <input type="text" name="id"><br>
	 <label>nama customer</label>
	 <input type="text" name="nama"><br>
	 <label>alamat</label>
	 <input type="text" name="alamat"><br>
	 <label>email</label>
	 <input type="text" name="email"><br>
	 <label>no telp</label>
	 <input type="text" name="telp"><br>
	 <input type="submit" name="submit" value="tambah"><br>
	 <input type="reset" name="reset" value="clear"><br>
	 <a href="<?=base_url('admin/daftar_customer')?>"><input type="button" name="submit" value="back"></a>

</form>