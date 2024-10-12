<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('tampilan/header_kasir')?>

	<form action="<?=base_url('kasir/update_detail');?>" method="POST" Class="form-horizontal">
	 <div class="control-group">
	 <label class="control-label">no transaksi</label>
	 <div class="control">
	 <input type="text" name="barang" value="<?php echo $record->notransaksi;?>" readonly>
	</div><br>
	 <label class="control-label">nama customer</label>
	 <input type="text" name="nama" required="" value="<?php echo $record->namacustomer;?>"><br>
	 <label class="control-label">alamat</label>
	 <input type="text" name="alamat" required="" value="<?php echo $record->alamat;?>"><br>
	 <label class="control-label">kode barang</label>
	 <input type="text" name="jenis" required="" value="<?php echo $record->kodebarang;?>"><br>
	 <label class="control-label">nama barang</label>
	 <input type="text" name="barang" required="" value="<?php echo $record->namabarang;?>"><br>
	 <label class="control-label">harga</label>
	 <input type="text" name="harga" required="" value="<?php echo $record->harga;?>"><br>
	 <label class="control-label">qty pemesanan</label>
	 <input type="text" name="stok" required="" value="<?php echo $record->qtypemesanan;?>"><br>
	 <label class="control-label">total</label>
	 <input type="text" name="total" required="" value="<?php echo $record->total;?>"><br>
	 <label class="control-label">grand total</label>
	 <input type="text" name="grand" required="" value="<?php echo $record->grandtotal;?>"><br>
	 <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Update</button>

</form>
<?php $this->load->view('tampilan/footer')?>