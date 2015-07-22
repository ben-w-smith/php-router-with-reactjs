<?php
$error = (isset($_GET['status']) ? true : false);
$pass = (isset($_GET['pass']) ? $_GET['pass'] : NULL);
?>

<div class="row">
	<form class="login col s10 offset-s1" action="/portfolio/auth" method="post">
		<div class="row">
			<div class="input-field col s12">
				<input id="auth" type="password" class="<?php echo ($error ? 'invalid' : 'validate'); ?>" name="auth" require="required" autofocus value="<?php echo ($error ? $pass : NULL); ?>">
				<label for="auth" data-error="Wrong pass." class="<?php echo ($error ? 'active' : ''); ?>">Type Password...</label>
				<button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
			</div>
		</div><!-- .row -->
	</form><!-- form.login -->
</div><!-- .row -->