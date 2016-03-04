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
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-54861221-4', 'auto');
                ga('send', 'pageview');

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
	        <!-- fb like button -->
			<div id="fb-root"></div>
			<script>
				  (function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		  	</script>

            <div>
                <div class="header">
                    <div class="header-wrapper">
                         <ul class="nav">
                                <li>
                                    <a class="<?= @$active[0] ?>" href="<?= base_url() ?>">HOME</a>
                                </li>
                                <li>
                                    <a class="<?= @$active[2] ?>" href="http://certifymyshop.com" target="_blank" onclick="window.open('http://certifymyshop.com','newwindow', 'width=1280, height=800,resizable=1,scrollbars=1'); return false;">CERTIFY MY SHOP</a>
                                </li>
                                <li>
                                    <a class="<?= @$active[1] ?>" href="<?= base_url() ?>rewards">CERTIFIED REWARDS</a>
                                </li>
                                <!-- <li>
                                    <a class="<?= @$active[4] ?>" href="<?= base_url() ?>gmcard">GM BUSINESS CARD</a>
                                </li>                                                                                       -->
                                <li>
                                    <a class="<?= @$active[5] ?>" href="http://www.assuredperformancecare.com" target="_blank" onclick="window.open('http://www.assuredperformancecare.com','newwindow', 'width=1280, height=800,resizable=1,scrollbars=1'); return false;">CONSUMER ADVOCACY</a>
                                </li>
                                <li>
                                    <a class="<?= @$active[6] ?>" href="<?= base_url() ?>news">NEWS</a>
                                </li>
                                <li>
                                    <a id="membersOnly" target="_blank" href="http://www.assuredperformance.net/members" onclick="window.open('http://www.assuredperformance.net/members','newwindow', 'width=1280, height=800,resizable=1,scrollbars=1'); return false;">MEMBERS ONLY</a>
                                </li>
                                <li>
                                	<a href="http://www.assuredperformance.net/DataManager">DATA MANAGEMENT</a>
                                </li>
                                <li>
                                    <a class="<?= @$active[7] ?>" href="<?= base_url() ?>contact">CONTACT</a>
                                </li>
                            </ul>
                            <div class="logo"><a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/apn_logo.png?2" width="225" height="34"/></a></div>
                        </div>
                </div>
            </div>
<!--wrapper start-->
            <div class="wrapper">