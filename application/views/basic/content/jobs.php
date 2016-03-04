<style>
 
    .gutter { padding: 10px; overflow: hidden;}
    .clear {clear: both; }
    .hr-line { margin-top: 40px; margin-top:40px;}
    .title{ color: blue; font-size:1.5em; font-weight: bold; text-decoration:underline; cursor:pointer;}
    .desc { display:none;  margin: 10px auto 20px 10px;}
</style>
<div class="gutter">

    <div id="about" >
    
    <?php  echo $about[0]->about; ?>
    
    </div>
    <div class="clear"></div>
  	<hr class="hr-line" >
    <div id="jobs">
    	<h4>Current Open Opportunities</h4>
    	<br/>
    	<?php  foreach($jobs as $job){ ?>
    		<h5 class="title" onClick="javascript:showDiv(<?= $job['id']?>); return false;"><?php echo $job['jobTitle']?></h5>
    		<div id="desc-<?= $job['id']?>" class="desc" >
    				<?php echo $job['jobDesc']; ?>
    		</div>
			<div class="clear"></div>
			<br/><br/>
    	<?php } //end of foreach?>
    </div>
    
    
</div>
<div class="clear"></div>
<div style="display:block; width:100%; margin:20px auto 20px auto; font-size:1.2em; font-weight:bold;">
    <center><em>Contact Lisa Rouland by Phone: 949-221-0010 ext. 235 <br/>
     or by email: <a href="emailto:lisa.roulund@assuredperformance.net">lisa.roulund@assuredperformance.net</a></em></center>
    </div> 
    <br/>
    
<script type="text/javascript">

	function showDiv(id){
		var div = 'desc-' + id;
		var e = document.getElementById(div);
	       if(e.style.display == 'block'){
	          e.style.display = 'none';
	       } else{
	          e.style.display = 'block';
	       }
	}	

</script>