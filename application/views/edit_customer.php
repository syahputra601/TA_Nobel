<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<form action="<?=base_url('admin/update_customer');?>" method="POST">
	 <label>ID customer</label>
	 <label><?php echo $record->idcustomer;?></label><br>
	 <label>nama customer</label>
	 <input type="text" name="nama" value="<?php echo $record->namacustomer;?>"><br>
	 <label>alamat</label>
	 <input type="text" name="alamat" value="<?php echo $record->alamat;?>"><br>
	 <label>email</label>
	 <input type="text" name="email" value="<?php echo $record->email;?>"><br>
	 <label>No telp</label>
	 <input type="text" name="notlp" value="<?php echo $record->notlp;?>"><br>
	 <input type="hidden" name="id" value="<?php echo $record->idcustomer;?>">
	 <input type="submit" name="submit" value="tambah"><br>
	 <a href="<?=base_url('admin/daftar_customer')?>"><input type="button" name="submit" value="back"></a>

</form>