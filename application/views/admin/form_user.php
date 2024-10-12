<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('tampilan/header_admin')?>

	<form action="<?=base_url('admin/tambah_user/kirim');?>" method="POST" class="form-horizontal">
	 <div class="control-group">
	 <label class="control-label">ID user</label><div class="control">
	 <input type="text" name="user" required="">
	 </div>
	 </div>
	 <label class="control-label">username</label>
	 <input type="text" name="username" required=""><br></br>
	 <label class="control-label">password</label>
	 <input type="text" name="password" required=""><br></br>
	 <label class="control-label">email</label>
	 <input type="text" name="email" required=""><br></br>
	 <label class="control-label">level</label>
	 <input type="text" name="level" required=""><br></br>
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Save</button>

</form>
<?php $this->load->view('tampilan/footer')?>