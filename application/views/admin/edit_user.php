<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('tampilan/header_admin')?>
	<form action="<?=base_url('admin/update_user');?>" method="POST" class="form-horizontal">
	 <div class="control-group">
	 <label class="control-label">ID user</label>
	 <div class="control">
	 	<input type="text" name="iduser" value="<?php echo $record->iduser;?>" readonly>
	</div><br>
	 <label class="control-label">username</label>
	 <input type="text" name="username"  required="" value="<?php echo $record->username;?>"><br><br>
	 <label class="control-label">password</label>
	 <input type="text" name="password" required="" value="<?php echo $record->password;?>"><br><br>
	 <label class="control-label">email</label>
	 <input type="text" name="email" required="" value="<?php echo $record->email;?>"><br><br>
	 <label class="control-label">level</label>
	 <input type="text" name="level" required="" value="<?php echo $record->level;?>"><br><br>
	 <input type="hidden" name="user" value="<?php echo $record->iduser;?>">
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Update</button>
	 

</form>
<?php $this->load->view('tampilan/footer')?>