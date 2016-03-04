<div style="display:none;">
    <div id="video" style="width:auto;height:auto;padding-bottom:10px;">
        <div id="overview" style="margin-bottom:15px;"><div id="mediaplayer"></div></div>
        <div id="youtube" style="display:none;text-align:center;margin-bottom:15px;"></div>
        <span style="color:#fff;padding-left:5px;font-size:12px;">Switch Video:<br/></span>
        <a href="#" id="toggleChrysler" style="color:#fff;padding-left:5px;font-size:13px;font-weight:bold;text-decoration:underline;">Chrysler's Doug Craig details their new Recognized Certified Collision Repair Facility Program</a>
        <a href="#" id="toggleOverview" style="display:none;color:#fff;padding-left:5px;font-size:13px;font-weight:bold;text-decoration:underline;">Program Overview Video</a>
        <script type="text/javascript">
		$(document).ready(function(){
			$('#toggleChrysler').click(function(){
				jwplayer().stop(); 
				$('#youtube').html('<iframe width="560" height="315" id="youtubevideo" src="http://www.youtube.com/embed/OZO1LwwsiWg?autoplay=1" frameborder="0" allowfullscreen></iframe>');
				$('#overview').hide();
				$('#toggleChrysler').hide();
				$('#youtube').show();
				$('#toggleOverview').show();
			});
			$('#toggleOverview').click(function(){
				jwplayer().play();
				$('#youtube').html('');
				$('#overview').show();
				$('#toggleChrysler').show();
				$('#youtube').hide();
				$('#toggleOverview').hide();
			});
		});
		</script>
    </div>
</div>

<div class="content">
    <div id="clogo">
        <img src="<?= base_url() ?>resources/common/images/APNlogo.png"/>
        <h2>ASSURED PERFORMANCE CERTIFICATION</h2>
        <p>Certified Once. Recognized by Many.</p>
        <a class="yellowBtn btn" target="_blank" href="http://www.certifymyshop.com">Enroll Now</a>
        <a id="videoLink" class="greyBtn btn" href="#video">Play Video</a>
        <a id="inline" class="yellowBtn btn fancy" href="#galleria-holder">&nbsp;Brochure</a>
    </div>
    <img id="puzzle" src="<?= base_url() ?>resources/common/images/puzzle.png"/>
</div>
<img id="collage" src="<?= base_url() ?>resources/common/images/certCollage.jpg" alt="collage" />
<div style="display:none;">
	<div id="galleria-holder">
		<div id="galleria">
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/1.jpg" data-title="Page 1" />
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/2.jpg" data-title="Page 2" />
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/3.jpg" data-title="Page 3" />
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/4.jpg" data-title="Page 4" />
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/5.jpg" data-title="Page 5" />
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/6.jpg" data-title="Page 6" />
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/7.jpg" data-title="Page 7" />
			<img src="<?=base_url(); ?>resources/common/images/certificationBrochure/8.jpg" data-title="Page 8" />
		</div>
		<a href="<?=base_url(); ?>resources/common/images/certificationBrochure/certification-brochure.pdf" target="_blank" class="download">Download Brochure</a>
	</div>
</div>
<script type="text/javascript">
if (Galleria) { console.log('Galleria works'); }

$(document).ready(function(){
	$("a.fancy").fancybox({
		onComplete : function(){
			Galleria.loadTheme('<?= base_url(); ?>resources/common/js/galleria/themes/classic/galleria.classic.min.js');
			Galleria.run('#galleria');
			$('#galleria').galleria({
				width: 800,
				height: 600
			});
		}
	});
});
</script>