<style>
    #form1 table td{
        padding:5px;
    }
    #side2{
        width:300px;
        margin:10px auto;
    }
</style>

<div style="width:612px;margin:0px auto;text-align:center;">
    <h2 style="font-size:30px;">REPAIRERS ONLY RECEPTION</h2>
    <h4 class="marginBottom" style="color:#F00;"><?= $congratulations ?></h4>
    <img src="<?= base_url() ?>/resources/common/images/repairer.png" alt="repairer" />
    
    <div id="side2">
			<form id="form1" action="<?= current_url() ?>" method="post">
			<h4 class="marginBottom">REGISTER FOR WORKSHOP</h4>
				<table cellspacing="0" cellpadding="2" border="0">
				<tbody><tr>
					<td class="tblLeft">&nbsp;</td><td><b>(All Fields Required)</b><br><br></td>
				</tr>				
				<tr>
					<td class="tblLeft"><b>Shop Name:</b></td><td><input type="text" size="25" class="required" name="shopName"></td>
				</tr>
				<tr>
					<td class="tblLeft"><b>Phone Number:</b></td><td><input type="text" size="25" class="required" name="phoneNumber"></td>
				</tr>
				<tr>
					<td class="tblLeft"><b>Contact Name:</b></td><td><input type="text" size="25" class="required" name="contactName"></td>
				</tr>				
				<tr>
					<td class="tblLeft"><b>E-Mail:</b></td><td><input type="text" size="25" class="required email" name="email"></td>
				</tr>
				<tr>
					<td valign="top" class="tblLeft"><br>
          <b>Attendees:</b></td>
					<td><br>
          Please enter all attendees below.</td>
				</tr>				
				<tr>
					<td class="tblLeft">Name:</td><td><input type="text" id="attendeeName" size="25" name="attendeeName"></td>
				</tr>
				<tr>
					<td class="tblLeft">Title:</td><td><input type="text" id="attendeeTitle" size="25" name="attendeeTitle"></td>
				</tr>
				<tr>
					<td>&nbsp;</td><td>
					<input type="button" id="addAttendee" value="Add Attendee to List" name="addAttendee">
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>						
				<tr>
					<td valign="top" class="tblLeft"><b>Attendee List:</b></td>
					<td>
					<select name="attendeeList[]" id="attendeeList" style="width: 175px;" size="5" multiple="multiple"></select>
					<br>
					<input type="button" id="removeSelected" value="Remove Selected" name="button"></td>
				</tr>
				<tr>
					<td>&nbsp;</td><td style="padding-top: 15px;"><input type="submit" id="rsvp" value="Submit" name="submit">
					<button onClick="window.open('http://origin.library.constantcontact.com/download/get/file/1101166967527-866/sema-repairers-ticket.pdf');return false;">Print Ticket</button>
					</td>
				</tr>				
			</tbody>
                                </table>
		</form> 
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    //$("#form1").validate();
    
    $('#form1').submit(function() {
        if ($("#attendeeList option").length == 0) {
            alert("Please enter name and title of who is attending");
            return false;
        }
        
        var check = true;
        
        $('.required').each(function(){
           if($(this).val() == ''){
               alert('You have left a required field blank.');
               check = false
               return false;
           } 
        });
        
        return check;
    });
    
    $("#addAttendee").click(function() {
        var $name = $("#attendeeName");
        var $title = $("#attendeeTitle");
        if($name.val() != "" && $title.val() != "") {
            //$("select[name='attendeeList[]']").append(new Option($name.val(), $name.val() +"|"+ $title.val()));
            
            var toAdd = '<option>' + $name.val() +  " | " + $title.val() + '</option>';
            $("select[name='attendeeList[]']").append(toAdd);
            
            
            $name.val('');
            $title.val('');
        } else {
            alert("Please enter a name and title for attendee!");
        }
    });
    $("#removeSelected").click(function() {
        var $list = $("#attendeeList :selected").remove();    
    });    
    $("#rsvp").click(function() {
        $("#form1 select[@name='attendeeList[]'] option").attr("selected","selected");
    });
});
</script>