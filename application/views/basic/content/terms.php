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
				padding-left: 1.5em;
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
				padding-left: 0em;
				padding-bottom: 2em;
				margin-left: -1.5em;
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
				margin-left: -0.6em;
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
					<div class="updated">Last Updated: December - 2015</div>
					<h3 id="agreement-header">Assured Performance Terms and Conditions</h3><br/>
					<p>The following general “Terms and Conditions” cover several optional programs offered through Assured Performance.  Each section only applies to you if you elect to enroll and participate in a particular program such as Certification-Recognition, Certified Rewards and Co-Op Rebates, etc.</p>
					<ol id="number" class="main decimal">
						<li class="marbottom10"><div class="list-num">1.0.</div>"Certification-Recognition" Terms and Conditions
							<p>Only upon your election to enroll and participate in Assured Performance Certification-Recognition program, you agree to the Certification-Recognition terms and conditions and associated end user agreement:</p>
							<ol>
								<li><div class="list-num">1.1.</div>A deposit for Certification is required.</li>
								<li><div class="list-num">1.2.</div>Certification enrollment is not transferable to other applicants.</li>
								<li><div class="list-num">1.3.</div>Certification cancellations must be made in writing to: Assured Performance Network, 24422 Avenida De La Carlota, Ste 490, Laguna Hills, CA 92653, or by email to: <a href="mailto:finance@assuredperformance.net">finance@assuredperformance.net</a>.</li>
								<li><div class="list-num">1.4.</div>The certification fee is refundable (less administrative fee) if official cancelation is complete and the refund request is received prior to the on-site inspection.</li>
								<li><div class="list-num">1.5.</div>No refund will be issued after the on-site inspection has been completed.</li>
								<li><div class="list-num">1.6.</div>Certification is required annually and will be automatically renewed upon expiration unless shop notifies Assured Performance 30 days in advance.</li>
								<li><div class="list-num">1.7.</div>Some OEM Certifications or Recognitions made available through this program may require a dealership sponsor from an authorized dealer to be eligible to participate in their program and/or utilize any marketing or training programs.</li>
								<li><div class="list-num">1.8.</div>Official recognitions or Certifications by any name provided as an integral part of the Assured Performance program may carry additional fees, requirements, and/or obligations. Each is an elective that you may select or choose to opt-out of at your discretion.</li>
								<li><div class="list-num">1.9.</div>These Terms and conditions are subject to change without notice.</li>
							</ol>
						</li>
						<li class="marbottom10"><div class="list-num">2.0.</div>Certification & Recognition Signage
							<ol>
								<li><div class="list-num">2.1.</div>Automaker Certification and Recognition signage is reserved for building interior use only. Placement of any signage outside of your collision repair facility or in outward facing window displays is strictly prohibited.</li>
								<li><div class="list-num">2.2.</div>Assured Performance Certification signage may be used on your property's interior or exterior in accordance with the terms and conditions of your certification.</li>
								<li><div class="list-num">2.3.</div>Certification is based upon annual renewals and inspections. Failure to renew your certification by your expiration date will require you to discontinue use of any Certified/Recognized signage and/or logos until your Certification is fully reinstated.</li>
								<li><div class="list-num">2.4.</div>Upon expiration, you agree to discontinue any and all display or use within your sales, marketing and promotions and return all signage and any materials provided to Assured Performance via prepaid shipment.</li>
							</ol>
						</li>
						<li class="marbottom10"><div class="list-num">3.0.</div>Marketing Materials
							<ol>
								<li><div class="list-num">3.1.</div>You are granted limited rights to incorporate your certification status into your marketing and promotions as long as your business is in good standing and currently certified.</li>
								<li><div class="list-num">3.2.</div>Use of any Assured Performance or automaker logos in any marketing web presence or promotions requires prior written consent from all applicable manufacturers and Assured Performance Network. (Contact your Account Manager for details on this approval process.)</li>
								<li><div class="list-num">3.3.</div>Once Certified, Certification logos for Assured Performance and participating OEMs will be available through your account on <a href="http://certifymyshop.com/">www.certifymyshop.com</a>. Each program logo will have separate terms and conditions.</li>
								<li><div class="list-num">3.4.</div>Custom orders are final upon approval and not eligible for returns or refunds.</li>
								<li><div class="list-num">3.5.</div>Participating shops are solely responsible for review and approval of all marketing material orders before submission.</li>
								<li><div class="list-num">3.6.</div>Variations in color or binding are not considered manufacturing defects and do not qualify for replacement product.</li>
								<li><div class="list-num">3.7.</div>Non-personalized products that are in their original, new, unopened and unused condition may be returned within 30 days. (Contact your Account Manager to replace the product, or to return the product with a refund of the purchase price.)</li>
								<li><div class="list-num">3.8.</div>Return shipping costs associated with any return due to defective or damaged merchandise is reimbursable.</li>
							</ol>
						</li>
						<li class="marbottom10"><div class="list-num">4.0</div>"Co-op Participation" Terms and Conditions
							<p>Your acceptance of Assured Performance Co-Op terms and conditions is a pre-requisite to allowing your business to earn rebate-rewards provided by the participating OEM Auto Manufacturers, outlined below:
								<br>
								Only upon your election to enroll and participate in Assured Performance Co-Op, you agree to the Co-Op terms and conditions and associated end user agreement. Acceptance of the terms and conditions of this agreement is illustrated by your e-signature and is a pre-requisite to allowing your business to earn the rebate rewards provided by the participating OE Manufacturers.
								<br>
								You agree to abide by the organization's Co-Op Bylaws and Standards of Practice. As such, you understand that if your membership is terminated as a result of disciplinary action by Assured Performance's board of directors, you will not be eligible to be reinstated or reapply for membership or Certification, and you forfeit all accrued rebate rewards. Upon your election to participate in the optional Co-op, the following terms and conditions apply. Repair Provider agrees to:
							</p>
							<ol>
								<li><div class="list-num">4.1.</div>Officially enroll in the Assured Performance Network Co-Op and comply with the Co-Op bylaws and Assured Performance Terms and Conditions.</li>
								<li><div class="list-num">4.2.</div>The Co-Op enables participating business to earn and receive rebates under the 100% Write Rebate Rewards Program, Certified Rewards program and other rebate programs offered from various vendors.</li>
								<li><div class="list-num">4.3.</div>There is no enrollment fee to participate in the Co-Op beyond the administration hold-back fee from rebates generated and earned.</li>
								<li><div class="list-num">4.4.</div>Shops must maintain their eligibility requirements at all times which may include Certified status and other such criteria.</li>
								<li><div class="list-num">4.5.</div>An administrative fee of up to a maximum of 25% of the transactions will be assessed and deducted from any rebate reward earned to cover the cost of administration and processing.</li>
								<li><div class="list-num">4.6.</div>Rebate rewards will be disbursed upon written request after six month maturation and only 2 times each year.</li>
								<li><div class="list-num">4.7.</div>For some rebate program eligibility, certification-recognition must be completed and all requirements met within one year (12 months) from enrollment.</li>
								<li><div class="list-num">4.8.</div>Wherein Certification is required to participate, rebates may be earned, but not disbursed, until full certification is achieved.</li>
								<li><div class="list-num">4.9.</div>Wherein Certification is required to participate, you must maintain your Certified status to earn and retain your accumulated rebates.  Failure to maintain your Certified status for longer than a 30-day renewal grace period will result in forfeiture of all rebates calculated following the shops’ de-certification date.</li>
								<li><div class="list-num">4.10.</div>You may also be required to use a specific electronic parts ordering software or auditing program to submit and process transactions in order to earn rebates and provide the "Certificate of Authenticity" to repair customers as applicable. You hereby acknowledge that all data submitted and totals used, reflect the total amount charged to the customer and it reflects all repair work performed and parts installed. Alterations, double invoicing, supplemental billing or transactions, and any other action that may distort the intended rebate-reward is strictly forbidden. Violations will result in loss of all rebate-reward and termination of your participation in Assured Performance Cooperative (Co-Op).</li>
								<li><div class="list-num">4.11.</div>Rebate-rewards transactions will be recorded in your Assured Performance Co-Op Member Reward Account and may be audited at any time. Disbursement of earned rebate-rewards is in accordance with the Bylaws of the Co-op and in compliance based on you being a member in good standing.</li>
								<li><div class="list-num">4.12.</div>You acknowledge and understand that all rewards will be received and processed through the Assured Performance Network Co-Op. The agreement for rebate-rewards is between Assured Performance Network and the participating OEM. Your agreement is strictly between your business and Assured Performance Cooperative (Co-Op). The net total rewards generated will be credited to your rewards account less the administration and processing fee (25% of the total rewards, which is approximately 1.25% of total).</li>
								<li><div class="list-num">4.13.</div>Rewards will not become available for withdrawal for six (6) months from the origination date or (6) months from a previous request. Only funds which have reached maturation (be at least 6 months old), have been approved by the vendor and/or provider and where Assured Performance Network has received payment, hereby known as accrued rewards, will be available for disbursement or use. The origination date is defined as the date of the first recorded transaction with any Assured Performance Network approved vendor and/or provider.</li>
								<li><div class="list-num">4.14.</div>These Terms and Conditions are subject to change without notice.</li>
							</ol>
						</li>
						<li class="marbottom10"><div class="list-num">5.0.</div>Non-Compliance
							<ol>
								<li><div class="list-num">5.1.</div>Any shop found to be in non-compliance will be notified in writing and given 90-days to become compliant. If still non-compliant at the end of the 90 day period, the business will be de-certified, ineligible for program benefits, forfeit all rebate revenue calculated effective the date of the initial non-compliance status, and must return any signage immediately.</li>
								<li><div class="list-num">5.2.</div>Assured Performance reserves the right to adapt certification requirements and establish new requirements as appropriate to accommodate the development of new technologies by our OE partners. To renew your certification status, you will be required to bring your shop up to date on any new requirements within the compliance period provided and/or upon renewal.</li>
								<li><div class="list-num">5.3.</div>Failure to maintain your compliance may result in termination and cancellation and loss of any certification-recognition benefits, rebate rewards, and the rights to market/advertise or promote your status including all signage and use of the logos and program name/s.<li>
							</ol>
						</li>
						<li class="marbottom10"><div class="list-num">6.0.</div>Upon Cancellation or Termination
							<p>Assured Performance has an automatic shut-off and rewards harvest process to any rebates that require Certification-Recognition for eligibility. <b>IMMEDIATELY UPON CANCELLATION OR TERMINATION</b> and upon <b>90 DAYS</b> failure to renew. If the shop is contacted and decline to renew, they are automatically cancelled and lose their rewards, <b>NO EXCEPTIONS.</b></p>
						</li>
						<li class="marbottom10"><div class="list-num">7.0.</div>Data Collection and Privacy
							<ol>
								<li><div class="list-num">7.1.</div>Assured Performance Collision Care recognizes your inherent shop data ownership rights and will zealously protect the security of the data you have agreed to provide to us under the terms of the Certification-Recognition programs administered by Assured Performance.  We will never sell or share your data with any third party, and we work hard to ensure that your data is safe, secure, and accessible by only you. All personal information submitted remains totally confidential.</li>
								<li><div class="list-num">7.2.</div>Throughout the Certification-Recognition process, your personal information remains private, privileged, and protected. Any personal information you submit, including user names, passwords, contact names, addresses, phone numbers, email addresses, are treated as confidential material. No third party may capture, data-mine, or use this data in any way without your specific authorization. Your personal information is not shared with any unauthorized third party. Further, any personal information is available for your use only and not shared with outside entities including the wholesale parts dealership or vehicle manufacturer.</li>
								<li><div class="list-num">7.3.</div>As part of our Certification-Recognition programs' and any participation you may elect for rebates and other benefits, you are required to report certain key performance indicators and estimate, repair order, and customer satisfaction data.  Assured Performance, as the administrator of these programs will supply you with special software to process your repair order and estimate data (EMS) automatically for you, but may utilize a third party services to update and/or install the dataMANAGER application. To this end, while the data remains your and your data privacy is maintained, you are authorizing Assured Performance and/or our designated agent to install the specific software and data connector software (dataMANAGER) for managing and processing your estimate and repair order data for reporting to Assured Performance and the participating vehicle manufacturers for purposes described under the Certification-Recognition program rules.</li>
								<li><div class="list-num">7.4.</div>As part of the services Assured Performance offers Members and Certified shops, by your election and decision to participate in a specific data management service, your data will be maintained in your dataSAFE account and safeguarded in a cloud-based data warehouse allowing you to maintain possession of your historical data. Further, you may elect to use an additional data management service (dataIQ) to process, analyze, generate reports, view KPI benchmarks, and utilize your data in other forms as you choose. You will have exclusive access to your data, but only your data.  Your data will not be accessible by any other entities or shared with any other third-party entities without your direct and explicit consent (e-signature).</li>
								<li><div class="list-num">7.5.</div>To the extent permitted by applicable law, you authorize Assured Performance and/or our designated agent to use this data to compile aggregated regional, national, or other specific statistical information. This data is intended to improve, monitor, and track your performance metrics.  It is presented only in aggregate and does not reveal your specific shop's information or performance metrics to others.</li>
								<li><div class="list-num">7.6.</div>Our network is protected with state-of-the-art hardware and software, utilizing redundant hardware and software firewalls. Our security experts keep our software and firmware up-to-date as they stay abreast of current bug fixes, exploits and upgrades. We require validated user access via SSL (Secure Socket Layer) protocols to ensure only authorized users have access and that the data is protected while in transmit. Our architecture helps guarantee that your information is encapsulated and inaccessible to anyone but you.</li>
							</ol>
						</li>
						<li class="marbottom10"><div class="list-num">8.0</div>Electronic Signature
							<ol>
								<li>By signing with the electronic signature below, you acknowledge reading, understanding, and agreeing to the terms above and agree to pay the fees as described in accordance with the payment terms on your official invoice. Program enrollment, utilization of the services, receiving rebates, and processing transactions imply further acknowledgment and agreement to the terms and conditions as outlined in this document.</li>
							</ol>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</body>
</html>