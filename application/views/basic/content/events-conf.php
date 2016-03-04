<body>
	<div class="conf-container">
		<nav class="conf-header navbar" id="home">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#conf-menu" aria-expanded="false">
						<span class="oj">MENU</span>
					</button>
					<a href="http://www.assuredperformance.net"><img src="assets/images/conf-apnlogo.png" alt="Certified Assured Performance"></a>
				</div>
				<div class="collapse navbar-collapse" id="conf-menu">
					<ul class="nav navbar-nav conf-navbar">
						<li><a href="#home">Home</a></li>
						<li><a href="#schedule">Schedule</a></li>
						<li><a href="#speakers">Speakers</a></li>
						<li><a href="#pricing">Pricing</a></li>
						<li><a href="#important">Important Information</a></li>
						<li><a href="#faq">FAQ</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav> <!-- Navbar -->
		
		<div class="conf-hero container-fluid">		
			<div class="hero-text">
				<h1>OEM Certified collision care provider conference</h1>
				<h2>hosted by Nissan</h2>
				<h3>April 10 - 13, 2016 </h3>
				<h3>Begins 5PM CT Sunday April 10</h3>
				<h3 class="hotel-info">Renaissance Nashville Hotel&nbsp;&nbsp;|&nbsp;&nbsp;611 Commerce St.&nbsp;&nbsp;|&nbsp;&nbsp;Nashville, TN 37203</h3>
				<h3 class="hotel-info-sm">
					Renaissance Hotel Nashville
					<br>
					611 Commerce St.
					<br>
					Nashville, TN 37203
				</h3>
			</div>
			
			
				<div class="hero-btn-wrapper" style="margin-right:800px; position:relative; top:150.1px; margin-top: -35px">
					<a class="grad-oj btn-conf btn-margin-r" href="https://certifymyshop.com/conference/registration" target="_blank">Register for event</a>
				</div> 
				<div class="hero-btn-wrapper">
					<a class="grad-oj btn-conf btn-margin-r" href="https://aws.passkey.com/event/14370229/owner/684/home" target="_blank">Book Your Room</a>
			    </div>
			<div class="high-demand">
				<!--<h3 class="alert-text">Due to a high-demand in registration, all Renaissance Nashville rooms are SOLD OUT for the Assured Performance event days, April 10 – 13, 2016.</h3>-->
				
				<h3><b><u>FOR A LIMITED TIME:</u></b> Registration to this event will be continued for those interested in attending at General Pricing. Access to all scheduled activities will be included with registration.</h3>
				<br>
				<p>Alternate hotels within walking distance to event, (last chance to register!): <a href="http://bitly.com/hotels-nashville">http://bitly.com/hotels-nashville</a></p>
			</div>
			<img src="assets/images/conf-gen-price.png" alt="early adopter special">
		</div> <!-- Section:  Hero -->
		
		<!-- Schedule -->
		<?php echo $this->load->view('basic/content/events-conf-schedule',NULL,TRUE)?>

		<!-- Speakers -->
		<?php echo $this->load->view('basic/content/events-conf-speakers',NULL,TRUE)?>

		<!-- Pricing -->
		<?php echo $this->load->view('basic/content/events-conf-pricing',NULL,TRUE)?>

		<!-- Important Information -->
		<?php echo $this->load->view('basic/content/events-conf-important',NULL,TRUE)?>

		<!-- FAQ -->
		<?php echo $this->load->view('basic/content/events-conf-faq',NULL,TRUE)?>

		<!-- Contact -->
		<?php echo $this->load->view('basic/content/events-conf-contact',NULL,TRUE)?>

		<div class="btn-to-top-container">
			<div class="btn-to-top-wrapper">
				<a href="#home">
					<button class="btn-to-top" >
						<i class="fa fa-chevron-up fa-1x"></i>
						<p>Top</p>
					</button>
				</a>
			</div>	
		</div>			
	</div>	<!-- conf-container -->
</body>
</html>


