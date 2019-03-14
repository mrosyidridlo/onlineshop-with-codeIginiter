<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
      
            	<table class="mytable table table-hover">
            		<!-- ?php echo "Rp. ".$product['harga_produk']; ?> -->
            		<tr>
      	      		<th>id</th>
      	      		<th>foto</th>
      	      		<th>nama</th>
      	      		<th>kategori</th>
      	      		<th>harga</th>
      	      		<th>tag</th>
      	      		<th colspan= 2>action</th>
            		</tr>
                              <?php foreach ($product as $product_item) { ?>
            		<tr>
            			<td><?php echo $product_item['id_produk']; ?></td>
            			<td><img style="width: 100px; height: 100px; border-radius: 100%" src="<?php echo base_url("assets/img/produk/".$product_item['foto_produk']); ?>" alt=""></td>
            			<td><?php echo $product_item['nama_produk']; ?></td>
            			<td><?php echo $product_item['kategori_produk']; ?></td>
            			<td><?php echo $product_item['harga_produk']; ?></td>
                              <td><?php echo $product_item['tag_produk']; ?></td>
                              <td><a href="<?php echo site_url('product/update/'.$product_item['id_produk']); ?>">Edit<i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                              <td><a href="<?php echo site_url('product/update/'.$product_item['id_produk']); ?>">Delete<i class="fa fa-trash" aria-hidden="true"></i></a></td>
            				
            			
            		</tr>

                              <?php } ?>

            	</table>
                 

		</div>
             <div class="col-md-3 col-md-offset-7">
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="active"><a href="<?php echo site_url('product/dashboard/1') ;?>">1</a></li>
                            <li><a href="<?php echo site_url('product/dashboard/2'); ?>">2</a></li>
                            <li><a href="<?php echo site_url('product/dashboard/3'); ?>">3</a></li>
                            <li><a href="<?php echo site_url('product/dashboard/3'); ?>">4</a></li>
                            <li><a href="<?php echo site_url('product/dashboard/3'); ?>">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                  </div>
    </div>
</div>
  

	

