    <script type="text/javascript">
    $(document).ready(function(){
    	$('#dealer_name').focus();
    	$('#addRow').click(function(){
        	$('#referralBox > form > table').append('<tr><td><label for="shop_name_1">Body Shop</label><br><input name="shop_name[]" id="shop_name_1"></td><td><label for="contact_name_1">Shop Contact</label><br><input name="contact_name[]" id="contact_name_1"></td><td><label for="shop_phone_1">Phone Number</label><br><input name="shop_phone[]" id="shop_phone_1"></td></tr>');
        });
    });
    </script>
    <div id="referralBox">
    	<h2>Refer a Shop</h2>
    	<?php if($this->session->userdata('flash:new:flash')): ?><?=$this->session->userdata('flash:new:flash'); ?><?php endif; ?>
    	<p>Enter your body shop referrals below. Click the add button at the bottom of the form if you have additional shops to submit. You may enter as many shops as you desire. <br/><b style="font-weight:bold;color:red;">Please note that each field is required for each shop. A shop referral missing any information will not be processed.</b></p><br/>
    	<p>Alternatively, you may send your list of shop referrals to <a href="mailto:csrs@assuredperformance.net?Subject=<?=rawurlencode('Dealer Shop Referrals '.date('n/d g:i a')); ?>" target="_blank">csrs@assuredperformance.net</a>.</p><br/>
        <?=form_open(current_url(), array('id' => 'referral')); ?>
        		<label for="dealer_code">Dealer Name:<em style="color:red;">*</em> </label><input name="dealer_name" id="dealer_name" />
        		<label for="dealer_code">Dealer Code: </label><input name="dealer_code" id="dealer_code" />
        		<table>
        		<?php foreach(range(1, 10) as $row): ?>
        			<tr>
        				<td><label for="shop_name_<?=$row; ?>">Body Shop<em style="color:red;">*</em></label><br/><input name="shop_name[]" id="shop_name_<?=$row; ?>" /></td>
        				<td><label for="contact_name_<?=$row; ?>">Shop Contact<em style="color:red;">*</em></label><br/><input name="contact_name[]" id="contact_name_<?=$row; ?>" /></td>
        				<td><label for="shop_phone_<?=$row; ?>">Phone Number<em style="color:red;">*</em></label><br/><input name="shop_phone[]" id="shop_phone_<?=$row; ?>" /></td>
        			</tr>
	        	<?php endforeach; ?>
	        	</table><br/>
	        <input type="button" name="addRow" id="addRow" value="Add Another Row">
        	<?=form_submit('submit', 'Submit'); ?>
        <?=form_close(); ?>
    </div>