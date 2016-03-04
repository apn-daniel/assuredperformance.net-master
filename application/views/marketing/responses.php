<!DOCTYPE html>
<html lang="en">
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title><?= $title ?></title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
            <style>
				body {
					line-height: 1;
				}
				a{
				    text-decoration:none;
				}
				ol, ul {
					list-style: inside;
				}
				body{
				    font:11.5px Arial, Helvetica, sans-serif;
				    background:#ebebeb;
				}
				.wrapper{
				    width:1200px;
				    margin:0 auto;
				    background:#FFF;
				    color: #000;
				}
				.wrapper *{
				    -moz-box-sizing: border-box;
				         box-sizing: border-box;
				}
				.header{
				    width:1200px;
				    background:#00172f;
				    height:70px;
				    margin: 0px auto 10px auto;
				}
				.header-wrapper{
				    width:1100px;
				    height:70px;
				    margin:0px auto;
				}
				.logo{
				    float: right;
				    width: 225px;
				    height: 34px;
				    margin-top: 20px;
				}

				.nav{
				    position: relative;
				    float: left;
				}
				.nav li{
				    position: relative;
				    float: left;
				    list-style: none;
				    margin: 0;
				}
				.nav li:after{
				    content:"";
				    position: absolute;
				    top: 48%;
				    right: 0;
				    width: 2px;
				    height: 25%;
				    background: #fff;
				}
				.nav li:last-child:after{
				    background: transparent;
				}
				.nav li a {  
				    display: block;
				    color: #FFF;  
				    position: relative;  
				    z-index: 2;  
				    font-size: 16px;  
				    font-family: abbeyroad;
				    text-decoration: none;  
				    padding:35px 14px 0 14px;
				    text-align: center;
				    height: 35px;
				}
				.boxes{
				    color: #333;
				    width: 100%;
				    margin-top: -5px;
				}
            </style>
            <script>
             var baseURL = '<?= base_url() ?>';

                <?php if (isset($css)): ?>
					<?php if (is_array($css)): ?>
						<?php foreach ($css as $path): ?>
							CSS("<?= base_url() ?><?= $path ?>");
						<?php endforeach; ?>
					<?php else: ?>
						CSS("<?= base_url() ?><?= $path ?>");
					<?php endif; ?>
				<?php endif; ?>

				function CSS(css) {
					var l = document.createElement('link'); l.rel = 'stylesheet';
					l.href = css+".css";

					if ( window.addEventListener ) { 
						window.addEventListener( "load", insertCSS());
					} else if ( window.attachEvent ) { 
						window.attachEvent( "onload", insertCSS());
					} else if ( window.onLoad ) {
						window.onload = insertCSS();
					}

					function insertCSS() {
						var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
					}
				};
            </script>
            <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon.ico">               
        <!-- custom js files -->
            <?php if (isset($js)): ?>
                    <?php if (is_array($js)): ?>
                            <?php foreach ($js as $path): ?>
                                    <script type="text/javascript" src="<?= base_url() . $path ?>.js"></script>
                            <?php endforeach; ?>
                    <?php else: ?>
                    <script type="text/javascript" src="<?= base_url() . $js ?>.js"></script>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Add jQuery library -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<!-- Add fancyBox -->
		<link rel="stylesheet" href="assets/js/fancybox-v2.1.5/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="assets/js/fancybox-v2.1.5/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		<!-- custom js -->
		<script type="text/javascript" src="assets/js/cr/cr.js"></script>
		<!-- custom styles -->
		<link rel="stylesheet" href="assets/css/cr/cr.css">

        <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/ltIE8.css" />
        <![endif]-->
        
    </head>
        <body>
       		<div class="wrapper">
       		<!-- Romove everything above if header is added back -->
				<style>
					.bigger{
						font-size: 1.2em;
						font-weight: bold;
					}
					.submit-reg{
						min-width: 8em;
						padding: 0.7em;
						font-size: 1.2em;
						background: #237;
						color: #fff;
						border-radius: 2px;
						box-shadow: 0 4px 6px rgba(0,0,0,0.3);
						border: none;
					}

					.spacey{
						display: block;
						padding-top: 1em;
					}

					input[type=text]{
						width: 100%;
					}

					.holder{
						width: 40em;
						padding: 2em;
						margin: 0 auto;
						background: #fff;
						border-radius: 10px;
						box-shadow: 0 4px 8px rgba(0,0,0,0.2), 0 8px 12px rgba(0,0,0,0.2);
					}
				</style>
				<div class="contact">
					<div class="holder">
						<h1 class="title">Add/Register - <?=$regTitle?></h1>
						<hr>
						
						<img src="<?=base_url()?>assets/images/apcheck.png" style="float:left">
						<p style="float: left; width: 28em; font-size: 1.1em; padding: 0.5em 0 0 1em;"><?=$description?></p>
						<div style="clear:both"></div>
						<br><br>
						<?php if ($completed == 0) { ?>
						<p>
							<form action="" method="post">
								<input type="hidden" name="program" value="<?php echo $program; ?>">
								<label class="spacey">
									<p class="bigger">Shop Name:</p>
									<input type="text" name="shopname">
								</label>
								<label class="spacey">
									<p class="bigger">Contact Name:</p>
									<input type="text" name="contactname">
								</label>
								<label class="spacey">
									<p class="bigger">City:</p>
									<input type="text" name="city">
								</label>
								<label class="spacey">
									<p class="bigger">State:</p>
									<input type="text" name="state">
								</label>
								<label class="spacey">
									<p class="bigger">Contact Phone:</p>
									<input type="text" name="phone">
								</label>
								<label class="spacey">
									<p class="bigger">Please Add My Shop:</p>
									<input type="checkbox" value="1" name="addshop" checked>
								</label>
								<label class="spacey">
									<p class="bigger">Please call me for more information:</p>
									<input type="checkbox" value="1" name="callme">
								</label>
								<br><br>
								<input type="submit" class="submit-reg">
							</form>
						</p>
					</div>
					<?php } else {?> 
					<div class="title">
						<div class="title-text">
							<h1>Thank You</h1>
							<h2>We appreciate your business!</h2>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
