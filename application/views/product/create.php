
				<div class="container" style="margin-bottom: 20px ">

					<div class="wrap-create col-md-4 col-md-offset-6">


					<?php echo form_open_multipart('product/create'); ?>

					
					<label for="nama">Nama Produk</label>
					<input type="text" name="nama" class="form-control" placeholder="Masukkan nama" value="<?php echo set_value('nama'); ?>">
					<?php echo form_error('nama','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
					
					
					<label for="kategori">Kategori Produk</label>
						<div class="row">
						<div class="col-md-6">
				    	<div class="input-group">
				      		<span class="input-group-addon">
				        	<input type="radio" name="kategori" aria-label="..." value="Muslimah" <?php echo set_radio('kategori','muslimah');?> >
				     		</span>
				      		<input type="text" class="form-control" value="Muslimah">
				    	</div><!-- /input-group -->
				    	</div>
				 		<div class="col-md-6">
				    	<div class="input-group">
				      		<span class="input-group-addon">
				        	<input type="radio" name="kategori" aria-label="..." value="Muslim" <?php echo set_radio('kategori','muslim');?> >
				     		</span>
				      		<input type="text" class="form-control" aria-label="..." value="Muslim">
				    	</div>    	<!-- /input-group -->
				    	</div>
				  		
				  	</div>

				  	<?php echo form_error('kategori','<div class="error" style="color:red; font-style:italic">','</div>');?>
				    	<br>

					<label for="harga">Harga Produk</label>
					<div class="input-group">
					<span class="input-group-addon">Rp</span>
					<input type="text" name="harga" class="form-control" placeholder="Masukkan harga"><span class="input-group-addon" value="<?php echo set_value('harga'); ?>">.00</span>
					</div>
					<?php echo form_error('harga','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
					
					<label for="foto">Foto Produk</label>
					<input type="file" name="foto" class="form-control"><br>
					<!-- <input type="submit" name="submit" value="upload" class="btn btn-primary"><br> -->
					<?php //echo form_error('foto','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
					

					<label for="tag">Tag Produk</label>
					<input type="text" name="tag" class="form-control" placeholder="Masukkan Tag" value="<?php echo set_value('tag'); ?>"">
					<?php echo form_error('tag','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
					

					<input type="submit" name="submit" value="Simpan" class="btn btn-primary">


					<?php echo form_close(); ?>

				</div>
			</div>

