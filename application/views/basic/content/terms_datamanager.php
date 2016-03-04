<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0"/>
		<title><?= $title ?></title>
		<style>
			body,html{
				border: 0;
				margin: 0;
				padding: 0;
			}
			body{
				line-height: 1em;
				font-family: Arial, Helvetica, sans-serif;
			}
			.cf {*zoom: 1}
			.cf:before, .cf:after {
				content: " ";
				display: table;
			}
			.cf:after {clear: both}
			.terms .wrapper{
				max-width:1200px;
				width: 100%;
				margin:0 auto;
				background:#FFF;
				color: #000;
			}
			.terms .nav-spacer{
				width: 100%;
				height: 70px;
			}
			.terms .fixed{
				position: fixed;
				width: 100%;
				top: 0;
				z-index: 20;
			}
			.terms .header{
				max-width: 1200px;
				width: 100%;
				background: #00172f;
				margin: 0px auto;
				box-shadow: 0 5px 15px -2px rgba(0,0,0,0.4), 0 5px 5px -2px rgba(0,0,0,0.2);
			}
			.terms .header-wrapper{
				max-width: 1100px;
				width: 100%;
				min-height: 70px;
				margin: 0px auto;
			}
			.terms .logo{
				float: right;
				width: 225px;
				height: 34px;
				margin-top: 20px;
			}
			@media(max-width: 40em) {
				.terms .logo {
					float: initial;
					margin: 10px auto;
				}
				.terms .nav-spacer{
					height: 120px;
				}
			}

			.terms .nav{
				position: relative;
				float: left;
				margin: 0;
				padding: 0;
			}
			.terms .nav li{
				position: relative;
				float: left;
				list-style: none;
				margin: 0;
			}
			.terms .nav li a {  
				display: block;
				color: #FFF;  
				position: relative;  
				z-index: 2;  
				font-size: 16px;
				text-decoration: none;  
				padding:35px 20px 0 20px;
				text-align: center;
				height: 35px;
			}
			.terms .tri-back{
				display: inline-block;
				height: 0;
				width: 0;
				border-style: solid;
				border-color: transparent;
				border-top-width:		0.4em;
				border-bottom-width:	0.4em;
				border-right-width: 	0.5em;
				border-right-color: #fff;
			}

			#agreement{
				position: relative;
				max-width: 700px;
				margin: 60px auto;
				font-size: 1em;
				font-family: "helvetica neue", helvetica, arial, sans serif;
			}

			#agreement p, #agreement ul, #agreement ol, #agreement li, #agreement h3{
				margin: 0;
				padding: 0;
				border: 0;
			}

			#agreement>p{
				font-size: 0.85em;
				line-height: 2em;
				padding-left: 1.5em;
				padding-bottom: 2em;
			}

			#agreement h3{
				font-size: 1.8em;
				color: #333;
				margin-top: 5px;
				margin-bottom: 10px;
			}

			#agreement #agreement-header{
				color: #005da4;
				font-size: 1.7em;
				line-height: 1em;
				margin-left: 0.6em;
			}

			#agreement ol.main, ol{
				list-style-type: decimal;
				list-style-position: inside;
				padding-left: 0.9em;
				font-size: 1.4em;
				line-height: 1em;
				list-style-type: none;
			}
			#agreement ol.main p{
				font-family: arial, helvetica, sans serif;
				font-size: 0.6em;
				margin-bottom: 0.7em;
			}
			#agreement ol ol{
				font-size: 0.6em;
				font-family: arial, helvetica, sans serif;
				margin: 0.9em 0 1.5em 4em;
				line-height: inherit;
			}
			#agreement ol.smallest{
				font-size: 1em;
				margin: 0.4em 0 0.7em 2em;
			}

			#agreement .list-num{
				position: absolute;
				right: 100%;
				margin-right: 0.2em;
				font-weight: bold;
			}
			#agreement li{
				position: relative;
				margin-bottom: 0.5em;
			}

			#agreement .updated{
				position: absolute;
				right: 0;
				top: -3em;
				font-size: 0.8em;
				color: #ddd;
			}
		</style>
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon.ico">
	</head>
	<body>
		<div class="terms">
			<? if(isset($back_text) && isset($return_url)): ?>
				<div class="fixed">
					<div class="header">
						<div class="header-wrapper cf">
							<div class="logo"><a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/images/apn_logo.png?2" width="225" height="34"/></a></div>
							<ul class="nav">
								<li>
									<a href="<?= $return_url ?>"><span class="tri-back"></span> <?= $back_text ?></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="nav-spacer"></div>
			<? endif; ?>
			<div class="wrapper">
				<div id="agreement">
					<div class="updated">Last Updated: July - 14 - 2015</div>
					<h3 id="agreement-header">Data Privacy Statement</h3><br/>
					<p>Assured Performance zealously guards your data and defends your rights of ownership and privacy. All of your data remains in your account and it is processed by you as part of the Assured Performance rebate or reporting process much like an electronic means of submitting a receipt or box top to prove you purchased a specific product in order to earn a rebate or KPI reporting needed to participate in any of the OE Certification programs. Your data always remains yours and is not used, sold, shared with any third-party entity, or exported without your expressed approval.</p>
					<p>Assured Performance Collision Care recognizes your inherent shop data ownership rights and will zealously protect the security of the data you have agreed to provide to us under the terms of the Certification-Recognition programs administered by Assured Performance. We will never sell or share your data with any third party, and we work hard to ensure that your data is safe, secure, and accessible by only you. All personal information submitted remains totally confidential.</p>
					<p>Throughout the Certification-Recognition process, your personal information remains private, privileged, and protected. Any personal information you submit, including user names, passwords, contact names, addresses, phone numbers, email addresses, are treated as confidential material. No third party may capture, data-mine, or use this data in any way without your specific authorization. Your personal information is not shared with any unauthorized third party. Further, any personal information is available for your use only and not shared with outside entities including the wholesale parts dealership or vehicle manufacturer.</p>
					<p>As part of our Certification-Recognition programs' continuous improvement process and to ensure that you are fulfilling your obligations to the participating vehicle manufacturers, you are required to report certain estimate, repair order, and customer satisfaction information. Assured Performance, as the administrator of these programs, utilizes a proprietary application program called dataMANAGER to process your estimate data for this purpose. Assured Performance also provides you with dataSAFE to ensure your data is safeguarded in your dataBANK account which is only accessible by you and only with your explicit consent.</p>
					<p>To this end, you authorize Assured Performance and/or our designated agent to install software and data connector software for process estimate and repair order data in conjunction with the submission and proof of purchase requirements for rebates and reporting requirement for the various Certification-Recognition programs administrated by Assured Performance for participating vehicle manufacturers for purposes described under the Certification-Recognition program rules. To the extent permitted by applicable law, you authorize Assured Performance through dataMANAGER to process this data and compile aggregated regional, national, or other specific statistical information for your use and benchmarking comparison and reporting.</p>
					<p>This data is intended to improve communication and to monitor and track your performance metrics. For benchmarking, only aggregate data and analytical information is available and does not reveal any shop's specific information or performance metrics to others.</p>
					<p>Our network and data warehouse is protected with state-of-the-art hardware and software, utilizing redundant data storage and software firewalls. Our security experts keep our software and firmware up-to-date as they stay abreast of current bug fixes, exploits and upgrades. We require validated user access via SSL (Secure Socket Layer) protocols to ensure only authorized users have access and that the data is protected while in transmit. Our architecture helps guarantee that your information is encapsulated and inaccessible to anyone, but you.</p>
				</div>
			</div>
		</div>
	</body>
</html>