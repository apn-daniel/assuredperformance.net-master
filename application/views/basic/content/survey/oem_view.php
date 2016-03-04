<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $title ?></title>
		<!-- custom css files -->   
		<?php if (isset($css)): ?>
			<?php if (is_array($css)): ?>
				<?php foreach ($css as $path): ?>
   				<link rel="stylesheet" type="text/css" href="<?= base_url() . $path ?>.css" />
				<?php endforeach; ?>
		  <?php else: ?>
				<link rel="stylesheet" type="text/css" href="<?= base_url() . $css ?>.css" />
			<?php endif; ?>
		<?php endif; ?>   
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
		                  
                        

                
    <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/ltIE8.css" />
    <![endif]-->
    
</head> 
<body>             
	<div id="container" class="container">
		<div class="row">                                   
			<div class="span12 offset2" id="wrapper">
				<div class="row">
					<div class="span8">
						<img title="header logo" src="<?= base_url()  ?>assets/images/header-logo.png" width="543" height="36"/>
					</div>   
					<div class="span4" id="brand-logo">
						<img title="assured performance logo" src="<?= base_url()  ?>assets/images/assuredperformance-logo.png" width="172" height="49"/>						
					</div>	 
					<div class="clear-fix"></div>
					<div class="span12" id="main-information">
						<div class="row">
							<div class="span12" id="header-info">
								<div class="gutter">
									<h4 class="nomarginall">*MISSING OEM WHOLESALE PARTS DEALER INFORMATION</h4>
								</div>	
							</div> <!-- end id#header-info -->
							  
							<div class="span12" id="header-description">
								<div class="row">
									<div class="span7 offset1">
										<p class="center red">
											Your Co-Op account is missing critical data as outlined below.  Please provide the main dealer you use for all of the applicable brands below. This information is essential for you to connect with your dealer and earn rebate rewards for various participating OEM’s as part of the 100% Write OE Parts Rebate Reward Program and other incentive programs. Fill in ALL brands in the spaces provided below.
										</p> 
										<p class="center">
											 <small><em>NOTE:  All of the information you supply is totally confidential and zealously guarded by your Co-Op Assured Performance. The information is only used in accordance with the programs offered to you as a Co-Op member with your permission and is never shared with 3rd parties.</em></small>
										</p>	
									</div>
									<div class="span4 center">
										<img title="front bumper logo" src="<?= base_url() ?>assets/images/front-bumper.png" width="199" height="150"/><Br/>
										<img title="100% write logo" src="<?= base_url() ?>assets/images/100write.png" width="225" height="46"/> 					
									</div>
								</div>	
							</div> <!-- end id#header-description -->
							 
							<div class="span12 center" id="brand-info"> 
								<div class="gutter">
									<h3 class="nomarginall">MAIN BRANDS</h3>
								</div>
							</div> <!-- end id#brand-info -->                                    
							   
							<div class="span12" id="oem-vendor">    
								<div class="gutter">                         
									<?= form_open(current_url(),array("id" => "frmID"),array("contactsID" => $contactsID))?>
							  		<div class="accordion" id="accordion">     
										<? if (!empty($mainbrand) && is_array($mainbrand)): ?>                 
											<? $i = 1; ?>
											<? foreach($mainbrand as $brand => $cont): ?>
												<div class="accordion-group">								
			 										<div class="accordion-heading">
			 											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?= $brand  ?>-container">
															<dl>
																<dt><img title="<?= $brand ?> logo" width="<?= $cont["logo"]["width"] ?>" height="<?= $cont["logo"]["height"] ?>" src="<?= $cont["logo"]["src"] ?>"/></dt>
																<dd><?= $cont["title"] ?>
																	<i class="<?= $brand ?>-caret pull-right icon-caret-<?= $i===1?'down':'up' ?>"></i>
																	
																</dd>
															</dl>
														</a>
			 										</div>
													<div id="<?= $brand  ?>-container" class="accordion-body collapse <?= $i===1?'in':null ?>">
														<div class="accordion-inner">
                     					<table>
																	<tr>
																		<td width="40%"><label for="<?= $brand ?>-input-name"><small>Dealership Name</small></label><input type="text" name="dealershipname[<?= $brand ?>]" value="" id="<?= $brand ?>-input-name" class="span5"></td>
																		<td width="35%"><label for="<?= $brand ?>-input-city"><small>City</small></label><input type="text" name="city[<?= $brand ?>]" value="" id="<?= $brand ?>-input-city" class="span4"></td>
																		<td width="15%"><label for="<?= $brand ?>-input-state"><small>State</small></label>
																			<?= stateDropdown("state[{$brand}]","",$brand."-input-state") ?></td>																																				
																	</tr>
															</table>
														</div>	
													</div>	
												</div>           
												<? $i++; ?>
											<? endforeach; ?>
										<? endif; ?>
									</div>                          
										<input type="button" value="SUBMIT" class="btn btn-primary pull-right" id="submitBtn" onclick="alert('Thank you for your submission. You can now close the page.');return false;"/>
										<div class="clear"></div>                                                              
										<p class="pull-right text text-success span6 invisible align-right">Thank you.</p>						  	
						    	<?= form_close(); ?>
								</div> 
							</div>  <!-- end id#oem-vendor -->

						</div>	
					</div> <!-- end id#main-information --> 
					<div class="span12 center" id="copyright">
						<small>&copy; <?= date("Y") ?> Assured Performance Network. All Rights Reserved.</small>
					</div>
				</div>	
			</div>	<!-- end id#wrapper -->  
			
			
		</div>	
	</div> <!-- end id#container --> 
	<script type="text/javascript">   
      var baseURL = '<?= base_url() ?>';
			var contactsID = <?= $contactsID ?>;
  </script>                    
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>             
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
</body>	
</html>
