<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('tampilan/header_admin')?>
	<form action="<?=base_url('admin/update_masuk');?>" method="POST" class="form-horizontal">
	 <div class="control-group">
	 <label class="control-label">Kode Barang</label>
	 <div class="control">
	 <input type="text" name="kbarang" value="<?php echo $record->kodebarang;?>" readonly>
	</div><br>
	 <label class="control-label">Nama Barang</label>
	 <input type="text" name="nbarang" required="" value="<?php echo $record->namabarang;?>"><br><br>
	 <label class="control-label">Nama Supplier</label>
	 <input type="text" name="namasupplier" required="" value="<?php echo $record->namasupplier;?>"><br><br>
	 <label class="control-label">Tanggal</label>
	 <input type="text" name="tg" required="" value="<?php echo $record->tanggal;?>"><br><br>
	 <label class="control-label">Harga</label>
	 <input type="text" name="hrg" required="" value="<?php echo $record->harga;?>"><br><br>
	 <label class="control-label">Stok</label>
	 <input type="text" name="stk" required="" value="<?php echo $record->stok;?>"><br><br>
	 <label class="control-label">Jumlah Masuk</label>
	 <input type="text" name="jmasuk" required="" value="<?php echo $record->jumlahmasuk;?>"><br><br>
	 <label class="control-label">Stok Akhir</label>
	 <input type="text" name="stokakhir" required="" value="<?php echo $record->stokakhir;?>"><br><br>
	 <input type="hidden" name="kbarang" value="<?php echo $record->kodebarang;?>">
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Update</button>

</form>
<?php $this->load->view('tampilan/footer')?>