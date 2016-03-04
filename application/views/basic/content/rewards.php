<script>
	$(document).ready(function() {
		var isSubmitted = <?php echo $success; ?>;
		if (isSubmitted == 1) { 
			$('.cr-body').css('display','none');
			$('.thank-you').css('display','block');
			$('#cr-apply > h1').html('Your application has been submitted!');
			$('#cr-apply > h2').html('');
			$('.rewards--app-form').css('height','295px');
		}
	});
	
	function validateForm() {
		var shopName = $("input[name='shopname']").val();
		var contactName = $("input[name='contactname']").val();
		var phone = $("input[name='phone']").val();

		if( (shopName == null || shopName == "") || 
			(contactName == null || contactName == "") ||
			(phone == null || phone == "") ){

			$('.missing-fields').fadeIn('fast');
			return false;
		}
		else {
			$('.missing-fields').fadeOut('fast');
		}
	}
</script>

<div class="bigContent">
	<div class="boxes boxes-form description-box--fullwidth">
		<div class="glass">
			<div class="bolt"></div>
		    <div id="cr-apply" class="dialog-box">

				<p class="missing-fields" style="display:none"><span class="underline--white">Shop Name</span>, <span class="underline--white">Primary Contact Name</span>, and <span class="underline--white">Shop Phone</span> are required fields.</p>

		        <h1>Application Form </h1>
		        <h2 class="border-bottom--blue font-weight-normal">100% Write Rebate Rewards Program &amp; Certified Rewards Rebate Program Application</h2>

		        <div class="cr-body">
		            <form name="rewardForm" method="post" action="" onsubmit="return validateForm()">
		                <table class="applicant-info">
		                    <tr>
		                        <td>
		                            <label>Shop Name (required)</label>
		                            <input name="shopname" type="text" required>

		                            <label>Address</label>
		                            <input name="address" type="text">
		                            <label>City</label>
		                            <input name="city" type="text">
		                            <label>State</label>
		                            <input name="state" type="text">
		                            <label>Zip</label>
		                            <input name="zip" type="number" min="00000" max="99999">
		                        </td>
		                        <td>
		                            <label>Primary Contact Name (required)</label>
		                            <input name="contactname" type="text" required>
		                            <label>Shop Phone (required)</label>
		                            <input name="phone" type="tel" required>
		                            <label>Shop Email</label>
		                            <input name="email" type="email">
		                            <label>Comments</label>
		                            <textarea name="comments" type="text" rows="5"></textarea>
		                        </td>
		                    </tr>               
		                </table>
		                <div class="applicant-qs border-bottom--blue-l">
		                	<div class="border-bottom--ltgray">
		                		<h2>Please select the OEM Certified Rewards Programs (Rebates) that you'd like to participate in.</h2>
		                		<p class="note-text-sm">Note: Program terms and conditions and qualifying parts purchase transactions vary by Manufacturer.  Participating shops must comply to the individual requirements of each OEM to receive the Rebate Rewards on its corresponding OEM parts.</p>
		                	</div>
		            
						 	<label class="display-block">
						 		<input name="gm" value="1" type="checkbox">
						 		GM (Certification not required)
					 		</label>
					 		<div class="gm-dropdown" style="display:none;">
					 			<p class="p--no-padding">Are you currently using OEConnection/Collision Link? <span class="font-size-sm msg-note">(Required)</span></p>
			                    <label>
			                        <input id="yes-OE" type="radio" value="1" name="oeconnection">
			                        Yes
			                    </label>
			                    <label class="margin-left-10">
			                        <input id="no-OE" type="radio" value="0" name="oeconnection">
			                        No
			                    </label>
			                    <p class="radio-no-msg p--no-padding" style="display:none;">
			                    	<span class="bold msg-note">Note:</span> Your information will be added to a wait list. Once GM opens the program to other software platforms, you will be automatically enrolled and notified.
		                    	</p>	
					 		</div>
							
		                    <label class="display-block">
		                    	<input name="nissan" value="1" type="checkbox">
		                    	Nissan
		                	</label>

		                    <label class="display-block"><input name="fca" value="1" type="checkbox"> FCA (Chrysler, Jeep, Dodge, Fiat)</label>

		                    <label class="display-block"><input type="checkbox" name="tba"> Others (to be announced)</label>

		                    <input name="others" class="" id="other-checkbox" type="checkbox">
		                    <label class="label-other-checkbox width-93" for="other-checkbox">Check here if you are <span class="bold">not</span> currently Certified and would like get your shops Certified by multiple OEMs. <span class="bold">Note:</span> If your shops meet the requirements, you are able to be Certified by Nissan, Ford, FCA (Chrysler, Jeep, Dodge, Fiat), Hyundai, and other OEMs as they are announced. Once you are Certified, you will automatically be eligible for the Certified Rebate Rewards Program.</label>
		                    <br><br>
		                </div>
		                <div class="do-you-agree">
		                    <input id="agree1" type="checkbox" name="agree1" checked>
		                    <label class="label-m-top" for="agree1">
		                        I am hereby applying for enrollment in the <span class="bold">100% Write Rebate Rewards Program</span class="bold"> and <span class="bold">Certified Reward Rebate Program</span> offered by several OEMs as indicated above, administered exclusively through Assured Performance.
		                    </label>
		                    <button class="btn-c btn-cr-submit" type="submit">Submit Application</button>
	                    </div>
		            </form>
		            <div class="notification-wrapper">
		            	<div class="notification">
		            		<p><span class="bold">No Dealer Impact:</span> You do not have to change dealers - the rebate comes directly from the OEM through the Co-Op. This program will not affect your current dealer discounts.</p>
		            	</div>
		            	<div class="notification">
							<p><span class="bold">Confidentiality Guarantee:</span> All information gathered and used in this program is totally confidential and only used by Assured Performance Co-Op to track the progress and success of the program.</p>
		            	</div>
		            	<div class="notification">
		            		<p><span class="bold">Program Required:</span> The third-party program administrator, Assured Performance, will provide you with DataManager and access to OECollision CollisionLink to automate your parts orders and submit them for payment.</p>
		            	</div>
		            	<div class="notification">
		            		<p class="small-font">* Rebates are paid on "Collision Repair Parts" only as defined by the OEM. All rewards will be received and processed through Assured Performance Co-Op. The net total rewards generated will be credited to your rewards account, less a 25% administration and processing fee. Rewards are disbursed upon request following six month and annual accrual dates, and according to Co-Op bylaws. The program terms may change at any time without notice.</p>
		            	</div>
		            </div>
		        </div>
		        <div id="thank-you" class="thank-you" style="display:none">
		            <p class="msg-ty">
		                Thank you for applying to our <span class="bold">100% Write Rebate Rewards Program</span class="bold"> &amp; <span class="bold">Certified Rewards Rebate Program</span>. An account manager will be in touch with you shortly. If you have any questions or concerns please contact us at (949) 221-0010.
		            </p>
		            <br>
		            <a href="http://www.assuredperformance.net/rewards" class="btn-c btn-float">Back to Certified Rewards</a>
		            <a href="http://www.assuredperformance.net" class="btn-c btn-float">Back Home</a>
		            <br>
		        </div>  
		    </div>
		    <div class="bolt-b"></div>
	    </div>
	</div> <!-- Application Form -->

	<div class="boxes boxes-390px description-box--halfwidth-wrapper">
		<div class="description-box--halfwidth">
			<div class="glass">
				<div class="bolt"></div>
				<img src="assets/images/oem_OEM-rebate-rewards.png" alt="100% WRITE" style="padding-bottom: 10px;">
				<hr>
				<p>As a Certified Collision Repair Provider, you are entitled to participate in several rebate reward benefit and incentive programs.  Are you earning rebates on your new OEM parts?  Apply today and begin earning 5% rebates according to the program rules. Apply using the form above - apply now!</p>
				<ul class="margin-left--1em">
					<li>GM 100% Write Rebate Rewards (5% OEM Parts Rebate)</li>
					<li>Nissan Certified Rewards (5% OEM Parts Rebate)</li>
					<li>FCA Certified Rewards (5% OEM Parts Rebate)</li>
					<li>Other OEMs to be announced in 2016</li>
				</ul>
				<div class="rewards-center rewards-center-alt">
					<img src="assets/images/oem_100-write-1.png" alt="100% write" class="oem-img">
					<img src="assets/images/oem_certifiedrewards.png" alt="certified rewards" class="oem-img">
				</div>
				<div class="bolt-b"></div>
			</div>
		</div>
		<div class="description-box--halfwidth">
			<div class="glass">
				<div class="bolt"></div>
				<img src="assets/images/title_enterprise.png" alt="ENTERPRISE RENT-A-CAR">
				<hr>
				<p>Founded in 1957, Enterprise Rent-A-Car is an internationally recognized brand with more than 6,500 neighborhood and airport locations in the United States, Canada, the U.K., Ireland, Germany, France and Spain, as well as franchise locations throughout the world.</p>
				<br><br><br>
				<div class="rewards-center rewards-center-alt">
					<img src="assets/images/logos/enterprise.jpg" alt="ENTERPRISE RENT-A-CAR">
				</div>
				<div class="bolt-b"></div>
			</div>
		</div>
	</div> <!-- Programs -->
</div>



	<!-- <div class="description-box cf">
		<div class="glass">
			<div class="bolt"></div>
			<img src="assets/images/title_performanceradiator.png" alt="PERFORMANCE RADIATOR">
			<hr>
			<div class="rewards-center">
				<img src="assets/images/logos/perfrad.png" alt="PERFORMANCE RADIATOR">
			</div>
			<p>Selling quality OE replacement radiators, condensers, mirrors, heaters, fans, and fuel tanks for your gas, diesel, or hybrid car or truck today. We serve installers, distributors, bodyshops, insurance companies, and do-it-yourselfers nationwide.</p>
			<div class="bolt-b"></div>
		</div>
	</div> 
	<div class="description-box cf">
		<div class="glass">
			<div class="bolt"></div>
			<img src="assets/images/title_alldata.png" alt="ALL DATA ESTIMATE INTEGRATION">
			<hr>
			<div class="rewards-center">
				<img src="assets/images/logos/alldata.png" alt="ALL DATA ESTIMATE INTEGRATION">
			</div>
			<p>Created by experts, for experts, ALLDATA is the leading provider of OEM service and repair information to the professional automotive service and collision industries. </p>
			<div class="bolt-b"></div>
		</div>
	</div> 
	<div class="boxes rewards">
		<div class="description-box cf">
			<div class="glass">
				<div class="bolt"></div>
				<img src="assets/images/title_hail360.png" alt="HAIL360">
				<hr>
				<div class="rewards-center">
					<img src="assets/images/logos/hail360.jpg" alt="HAIL360">
				</div>
				<p>Hail360 restores vehicles to 100% pre-loss condition. Our team guarantees 100% satisfaction when using Hail360 Catastrophe Services. We understand how to support hail losses, and we pledge to give the best hail damage repair experience possible in the industry.</p>
				<div class="bolt-b"></div>
			</div>
		</div>
		 <div class="description-box cf">
			<div class="glass">
				<div class="bolt"></div>
				<div class="bolt-b"></div>
			</div>
		</div>
	</div> -->	