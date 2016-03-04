
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
           <title>Assured Performance Network & Office Depot Team Up</title>    
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script>
                 google.load("jquery", "1");
                 google.load("jqueryui", "1");
            </script>            
            <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
           <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/office.css" />
  <!--           <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/common.css" />-->
            
            <script type="text/javascript">
                var baseURL = '<?= base_url() ?>';
            </script>

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
        <script type="text/javascript">
        <!--
            function MM_swapImgRestore() { //v3.0
                var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
            }
            function MM_preloadImages() { //v3.0
                var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
                var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
                if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
            }

            function MM_findObj(n, d) { //v4.01
                var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
                    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
                if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
                for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
                if(!x && d.getElementById) x=d.getElementById(n); return x;
            }

            function MM_swapImage() { //v3.0
                var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
                if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
            }
        //-->
        </script>
    </head>
    <body onload="MM_preloadImages('<?= base_url()?>resources/common/images/officedepot/bt_signup_hover.jpg')">
        <div id="wrapper">
            <div id="top_left"></div>
            <div id="top_right"></div>
            <div id="header_left"></div>
            <div id="header_right"></div>
            <div id="content">
                <div class="content_left"><!--BEGIN CONTENT LEFT-->
                    <h1>Assured Performance Network & Office Depot Have joined together to bring you a world of savings!</h1>
                    <p class="center_lg">5-10 % Off Retail + Rewards<br /><br />Plus over 30,000 discounted items!<br /><br />Easy sign up and ordering on our secure web site...<br /><br />Next Day Delivery Available!<br /><br />(free delivery on orders over $50.00)</p>
                    <div align="center"><a href="http://odams.officedepot.com/registrations/portal.php?a=48598904" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('bt_signup','','<?= base_url() ?>/resources/common/images/officedepot/bt_signup_hover.jpg',1)"><img src="<?= base_url() ?>/resources/common/images/officedepot/bt_signup_off.jpg" alt="Click To Sign Up With Vendor" name="bt_signup" width="493" height="67" border="0" id="bt_signup" /></a></div>
                </div><!--END CONTENT LEFT-->
                <div class="content_right"><!--BEGIN CONTENT RIGHT-->
                    <div class="right_content_split_left">
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Pens<br />
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Paper<br />
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Markers<br />
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Filing<br />
                    </div>
                    <div class="right_content_split_right">
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Furniture<br />
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Copy &amp; Print<br />
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Janitorial<br />
                        <img src="<?= base_url() ?>/resources/common/images/officedepot/bullet.gif" /> Kitchen Supplies<br />
                    </div>
                        <p class="clearall center" style="margin-left:-20px;"><em>. . . And More!</em></p>
                        <h2>See what Office Depot can do for your business.</h2>
                        <div align="center"><img src="<?= base_url() ?>/resources/common/images/officedepot/sprinter_truck.jpg" /></div>
                </div><!--END CONTENT RIGHT-->
            </div>
            <div id="footer"><img src="<?= base_url() ?>/resources/common/images/officedepot/bg_footer_002.jpg" style="margin-top:56px" usemap="#footer1" /><map name="footer1" ><area href="http://www.assuredperformance.net" target="_blank" alt="Assured Performance Network" title="Visit Assured Performance Network" shape="rect" coords="42,1,185,61" />
                    <area href="http://www.bodyshopbuying.com" target="_blank" alt="Body Shop Buying" title="Visit Body Shop Buying shape="rect" coords="477,1,763,68" />
                </map>
            </div>
        </div><!--END WRAPPER-->
    </body>
</html>
