<div class="bg-container">
	<div class="title">
		<img src="../assets/images/logos/nissan_logo.png" alt="nissan logo image" class="brand-logo">
		<div class="title-text">
			<h1>For a limited time only - Set-it-and-forget-it Marketing!</h1>
			<h2>Don't delay - sign up by February 29th!</h2>
		</div>
	</div>

	<img src="../assets/images/marketing-button.png" alt="button image" id="easyButton">

	<div class="subtitle">
		<h2>Certified collision shop marketing tool</h2>
	</div>

	<br>

	<ul>
		<li>Don’t miss the opportunity to leverage your Certification at a fraction of the cost.</li>
		<li>The average cost to email a shop’s contact list once is $400. For a limited 
  time, you can reach these customers <span class="emphasize">3 times in 6 months for only $550!</span></li>
		<li>Try the SMT now and get the word out about your shop at the local level.</li>
	</ul>
	
	<br>
	<br>
	<br>

	<p>Set-it-and-forget-it Marketing is the easy way to attract new customers to your shop. With the On-Demand Shop Marketing Tool, your shop has indirect access to the Nissan and Infiniti owner database, giving you a unique and efficient way to market locally. And with the ability to customize marketing templates, you make sure your Certified shop’s name is out there. Marketing creates awareness. Awareness creates customers. And customers create profits.</p>
	<br>
	<p class="padding-right">The On-Demand Shop Marketing Tool is your one-stop-shop for marketing. It’s always been easy and cost-effective. But when you take advantage of the new “Set-it-and-forget it Marketing” promotion, it’s even easier and more valuable. <span class="emphasize">Sign-up now through February 29th and reach your customers via email 3 times in 6 months for a one-time fee of only $550</span>. Promote YOUR shop as the validated Nissan area Certified shop during the collision season.  <span class="emphasize-b">Emails will be sent in March, May, and July 2016</span> leaving you to do what you do best, repair Nissan vehicles.</p>

	<br>
	<br>
	<br>
	<div class="signup-container cf">
		<div class="btm-text">
			<p>Sign-up now before this limited-time offer ends. It doesn't get any easier!</p>
			<p>Simply enter your CertifyMyShop.com user credentials to the right to log in <br>and choose the Marketing-On-Demand package that you want!</p>
		</div>
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
	</div>
</div>
