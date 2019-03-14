
      <!-- bg carousel -->
      <div class="container">
      <div id="carousel-example-generic" class="carousel slide " data-ride="carousel" style="margin-top: 60px;">
        <!-- Indicators -->
        <ol class="carousel-indicators" >
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo base_url("assets/img/bg-1.jpg") ?>" alt="...">
           <!--  <div class="carousel-caption">
              
            </div> -->
          </div>
          <div class="item">
            <img src="<?php echo base_url("assets/img/bg-2.jpeg") ?>" alt="...">
            <!-- <div class="carousel-caption">
              ...
            </div> -->
          </div>
          <div class="item">
            <img src="<?php echo base_url("assets/img/bg-3.jpg") ?>" alt="...">
         <!--    <div class="carousel-caption">
              ...
            </div> -->
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
      <!-- akhir bg carousel -->

      <!-- Product -->

    <section  id="product">
      
		<div class="container">
			 <div class="product">
		      	<div class="row">
							<?php foreach ($product as $product_item) { ?>
								<div class="col-sm-3" style="margin-bottom: 20px">
  								<a href="<?php echo site_url ("product/detail/").$product_item['url']; ?>" class="thumbnail">
  						        <img src="<?php echo base_url("assets/img/produk/".$product_item['foto_produk']); ?>" alt="">
  						    </a>
  								<h5 class="product-name"><?php echo $product_item['nama_produk']; ?></h5>
  								<h6 class="price"><?php echo "Rp. ".$product_item['harga_produk']; ?></h6>
                  <button class="btn btn-warning" style="margin-left: 30% ">Add to chart</button>
                  <br>
								</div>
							<?php } ?>
				    </div>
        </div>
    </div>


    </section>
    <!-- akhir produk -->
    <div class="container">
      <hr>
    </div>
    <!-- About -->
    <section>
      <div class="container about">
        <div class="row">
          <div class="col-sm12">
            <h4>Fiki Hijab</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, quidem! Provident dolor nam nulla laborum modi ipsam, aspernatur dolore. Vero nisi ducimus voluptas, nesciunt repellat quis. Id provident, totam ea!

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quod atque, repellat perspiciatis dolorum officia quos modi adipisci expedita quaerat, blanditiis ipsa beatae quisquam perferendis saepe, illo vitae rem assumenda.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia fugit sit dolorum deleniti dolor, molestias laboriosam unde iste aut ut sint incidunt veritatis ex pariatur quos quaerat tempore repudiandae illum vitae eius impedit quis id voluptatem. Sit dicta possimus ipsa officiis minima suscipit, assumenda quos veritatis tempora earum consequuntur consequatur esse quibusdam eligendi reiciendis mollitia molestias odit numquam.</p>
          </div>
        </div>

      </div>
    </section>      
  
  