$(document).ready(function(){
	$(".collapse").on({
	   show:function(e)  {  
		var caretClass = this.id.split("-")[0]+"-caret";        
		$("."+caretClass).removeClass("icon-caret-up").addClass("icon-caret-down");
	   },
	   hide:function(e) {
		var caretClass = this.id.split("-")[0]+"-caret";        
		$("."+caretClass).removeClass("icon-caret-down").addClass("icon-caret-up");
	   }
	});
	
	$("#frmID input, #frmID select").change(function(e){  
		var that = this;
		var field = that.name;
		$.ajax({
		   	type:"POST" ,
			url:baseURL+"survey/save",
			data:field+"="+$(that).val()+"&contactsID="+contactsID,
			dataType:"json",
			beforeSend:function(e) {
				if (isNaN(contactsID)) {
					alert("Error: The process cannot be done. Please refresh your current page and try again.");
					return false;
				}
			},
			success:function(e) {
				
			}
			
		});
	});
});