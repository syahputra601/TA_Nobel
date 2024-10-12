<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<form action="<?=base_url('admin/update_header');?>" method="POST">
	 <label>No transaksi</label>
	 <label><?php echo $record->notransaksi;?></label><br>
	 <label>tanggal pemesanan</label>
	 <input type="text" name="pemesanan" value="<?php echo $record->tanggalpemesanan;?>"><br>
	 <label>ID customer</label>
	 <input type="text" name="id" value="<?php echo $record->idcustomer;?>"><br>
	 <label>ID petugas</label>
	 <input type="text" name="petugas" value="<?php echo $record->idpetugas;?>"><br>
	 <label>kode barang</label>
	 <input type="text" name="transaksi" value="<?php echo $record->notransaksi;?>"><br>
	 <input type="hidden" name="transaksi" value="<?php echo $record->notransaksi;?>">
	 <input type="submit" name="submit" value="tambah"><br>
	 <a href="<?=base_url('admin/daftar_header')?>"><input type="button" name="submit" value="back"></a>

</form>