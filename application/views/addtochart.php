
<div class="card">
  <div class="top-section">
    <img id="image-container" src="<?php echo base_url("assets/img/addtochart/jb_syari1.jpg"); ?>" alt="">
    <div class="nav">
      <img onclick="change_img(this)" src="<?php echo base_url("assets/img/addtochart/jb_syari1.jpg"); ?>" alt="">
      <img onclick="change_img(this)" src="<?php echo base_url("assets/img/addtochart/jb_syari1_putih.jpg"); ?>" alt="">
      <img onclick="change_img(this)" src="<?php echo base_url("assets/img/addtochart/jb_syari2_hijau.jpg"); ?>" alt="">
      <!--  <img src="jb_syari1_abu.png" alt="">
       <img src="jb_syari1_putih.jpg" alt="">
       <img src="jb_syari2_hijau.jpg" alt=""> -->
    </div>
    <div class="price">$80</div>
  </div>

  <div class="product-info">
    <div class="name">Jilbab Syari</div>
    <div class="dis">Nyaman dipakai di segala cuaca</div>
    <a class="btn" href="#">Add to Cart</a>
  </div>

</div> 


  <script type="text/javascript">
    var container = document.getElementById("image-container");
    function change_img(image) {
      $("#image-container").fadeOut(400,function(){
       $(this).src(image.src);
      }).fadeIn(400);
    }
  </script>


 <!--  <script>
    $(document).ready(function(){
      $("img").click(function(){
        $("#image-container").show(800);
      });
    });
  </script> -->


