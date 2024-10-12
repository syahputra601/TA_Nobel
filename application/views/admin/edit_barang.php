<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('tampilan/header_admin')?>
	<form action="<?=base_url('admin/update_barang');?>" method="POST" class="form-horizontal">
	 <div class="control-group">
	 <label class="control-label">kode barang</label>
	 <div class="control">
	 <input type="text" name="barang" value="<?php echo $record->kodebarang;?>" readonly>
	</div><br>
	 <label class="control-label">nama barang</label>
	 <input type="text" name="barang" required="" value="<?php echo $record->namabarang;?>"><br><br>
	 <label class="control-label">kode jenis</label>
	 <input type="text" name="jenis" required="" value="<?php echo $record->kodejenis;?>"><br><br>
	 <label class="control-label">harga</label>
	 <input type="text" name="harga" required="" value="<?php echo $record->harga;?>"><br><br>
	 <label class="control-label">stok</label>
	 <input type="text" name="stok" required="" value="<?php echo $record->stok;?>"><br><br>
	 <input type="hidden" name="kode" value="<?php echo $record->kodebarang;?>">
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Update</button>

</form>
<?php $this->load->view('tampilan/footer')?>