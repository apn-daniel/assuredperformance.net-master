<div class="loginbox">
	<?php if ( $this->input->get('show_error') ): ?>
	    <div style='color:red;margin-bottom:5px;'>Invalid username/password</div>
    <?php endif ?>
<?php echo form_open($url) ?>
	<label for="username">Username</label>
	<input id="username" type="text" name='username' required>
	<br>
	<label for="password">Password</label>
	<input id="password" type="password" name='password' required>
	<br>
	<button>Login</button>
	<input type="hidden" name="success" value="<?php echo $success ?>" id="success">
	<input type="hidden" name="failure" value="<?php echo $failure ?>" id="failure">			
<?php echo form_close(); ?>
</div>