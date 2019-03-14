<div class="container" style="margin-top: 80px; margin-bottom: 50px;">


<?php echo form_open('user/register'); ?>

<form>
  
  <label for="username">Nama Lengkap/Username</label>
  <input type="text" name="username" class="form-control" placeholder="Masukkan Nama Anda/Username" value="<?php echo set_value('nama'); ?>">
  <?php echo form_error('username','<div class="error" style="color:red; font-style:italic">','</div>');?><br>


  <label for="email">Email</label>
  <input type="email" name="email" class="form-control" placeholder="Masukkan Email" value="<?php echo set_value('email'); ?>">
  <?php echo form_error('email','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
  
  
  <label for="password">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="<?php echo set_value('password'); ?>">
  <?php echo form_error('password','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
  

  <label for="telepon">No. Telepon</label>
  <input type="text" name="telepon" class="form-control" placeholder="Masukkan Telepon" value="<?php echo set_value('telepon'); ?>"">
  <?php echo form_error('telepon','<div class="error" style="color:red; font-style:italic">','</div>');?><br>

  
  <label for="alamat">Alamat</label>
  <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" value="<?php echo set_value('alamat'); ?>"">
  <?php echo form_error('alamat','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
  

  <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
</form>

<?php echo form_close(); ?>

</div>