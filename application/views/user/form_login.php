<div class="container" style="margin-top: 80px; margin-bottom: 50px;">


<?php echo form_open('user/login'); ?>

<form>
  
  <label for="username">Username/Email</label>
  <input type="text" name="username" class="form-control" placeholder="Masukkan Username/Email" value="<?php echo set_value('username'); ?>">
  <?php echo form_error('username','<div class="error" style="color:red; font-style:italic">','</div>');?><br>

  <label for="password">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Masukkan Password" value="<?php echo set_value('password'); ?>">
  <?php echo form_error('password','<div class="error" style="color:red; font-style:italic">','</div>');?><br>
  
  
  <input type="submit" name="submit" value="Login" class="btn btn-primary">
</form>

<?php echo form_close(); ?>

</div>