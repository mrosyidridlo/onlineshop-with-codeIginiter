<div class="container" style="margin-top: 80px; margin-bottom: 50px;">
<?php echo validation_errors(); ?>


<?php echo form_open('product/update/'.$product['id_produk']); ?>


	

	<label for="nama">Nama Produk</label>
	<input type="text" name="nama" class="form-control" placeholder="Masukkan nama" value="<?php echo $product['nama_produk'];?>"><br>
	
	<label for="kategori">Kategori Produk</label>
		<div class="row">
  		<div class="col-md-6">
      	<div class="input-group">
        		<span class="input-group-addon">
          	<input type="radio" name="kategori" value="option1" <?php echo set_radio('kategori','muslimah');?> <?php if($product['kategori_produk'] == 'Muslimah'){echo "checked";}?>>
       		</span>
        		<input type="text" class="form-control" value="Muslimah" disabled>
      	</div><!-- /input-group -->
    	</div>

   		<div class="col-md-6">
      	<div class="input-group">
        		<span class="input-group-addon">
          	<input type="radio" name="kategori" value="option2" <?php echo set_radio('kategori','muslim');?> 
            <?php if($product['kategori_produk'] == 'Muslim'){echo "checked";}?>>
       		</span>
        		<input type="text" class="form-control" value="Muslim" disabled>
      	</div>
      	<br><!-- /input-group -->
      </div>
  	 <br>
  	</div>

	

	<label for="harga">Harga Produk</label>
	<div class="input-group">
	<span class="input-group-addon">Rp</span>
	<input type="text" name="harga" class="form-control" placeholder="Masukkan harga" value="<?php echo $product['harga_produk'];?>"><span class="input-group-addon">.00</span>
	</div><br>
	
	
	
	<label for="foto">Foto Produk</label>
	<input type="text" name="foto" class="form-control" placeholder="Masukkan foto" value="<?php echo $product['foto_produk'];?>"><br>
	

	<label for="tag">Tag Produk</label>
	<input type="text" name="tag" class="form-control" placeholder="Masukkan Tag" value="<?php echo $product['tag_produk'];?>"><br>
	

	<input type="submit" name="submit" value="Simpan" class="btn btn-primary">


<?php echo form_close(); ?>

</div>