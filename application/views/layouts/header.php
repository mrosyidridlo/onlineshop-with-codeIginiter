<nav>
	<li><a href="register">Register</a></li>

	<?php if(isset($_SESSION['logged_in'])){ ?>	
	
		<li><a href="logout">Logout</a></li>

	<?php } else { ?>

		<li><a href="login">Login</a></li>

	<?php } ?>
</nav>
<br>