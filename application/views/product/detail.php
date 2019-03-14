<style>
      table tr {
            border: none;
      }

      .table>tbody>tr>td{
            border: none;
      }
</style>
<div class="container">

		<div class="col-md-8 col-md-offset-2">

                        <table class="table table wrap-detail" style="min-height: 500px;">



                              <tr>
                                    <td colspan="3" rowspan="3">
                                          <img id="image-container" style="width: 300px; height: 300px; margin-top: 20px" src="<?php echo base_url("assets/img/produk/".$product['foto_produk']); ?>" alt="">
                                    </td>
                                    <td><h2><?php echo $product['nama_produk']; ?></h2></td>

                              </tr>
                              <tr>
                                    <td><h2><?php echo "Rp. ". $product['harga_produk']; ?><h2></td>
                              </tr>
                              <tr>
                                    <td>
                                          <label><h2>Qty. </h2></label>
                                          <input type="text" name="qty" style="width: 30px">
                                    </td>

                              </tr>
                              <tr>
                                    <td><img style="width: 100px; height: 100px" onclick="change_img(this)" src="<?php echo base_url("assets/img/produk/".$product['foto_produk']); ?>" alt=""></td>
                                    <td><img style="width: 100px; height: 100px" onclick="change_img(this)" src="<?php echo base_url("assets/img/produk/jb_syari1_putih.jpg"); ?>" alt=""></td>
                                    <td><img style="width: 100px; height: 100px" onclick="change_img(this)" src="<?php echo base_url("assets/img/produk/jb_syari2_hijau.jpg"); ?>" alt=""></td>
                                    <td><a href="<?php echo site_url('auth/addToCart/'.$product['url']); ?>" class="btn btn-warning">Add to chart</a></td>
                              </tr>

                              

                        </table>
      
            <script type="text/javascript">
                var container = document.getElementById("image-container");
                function change_img(image) {
                  $("#image-container").fadeOut(400,function(){
                   $(this).attr('src',image.src);
                  }).fadeIn(400);
                }
            </script>	

		</div>
    </div>

</div>
  

	

