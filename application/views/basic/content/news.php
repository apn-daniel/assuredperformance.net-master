<style>
    .pull-left { float:left; }
    .width-49 { width:49%; }
    .clear { clear:both; }
    dl {
        width:50%;
        overflow: hidden;
        float:left;

    }
    dl dt img {
        /*margin-bottom:15px;*/
    }
    dl dd{
        margin-left:65px;
    }
    dl dd h3 {
        margin:0px;
    }
    dl a {
        color: #333333;
        font-size:12px;
    }
    dl a:hover, dl a:focus {
        color:#005DA4;
    }
    .year {
        overflow: hidden;
        margin-bottom:0px;
        border-bottom:1px solid #333;
    }
    .new_heading {
        color:#005DA4;
    }
    .gutter { padding: 10px; overflow: hidden;}
</style>
<div class="content2">
    <div id="news_header" >
        <img src="<?= base_url() ?>assets/images/news_heading.png" width="257" height="111"/>
    </div>
    <div id="news">
        <div class="leftcol">
            <?php foreach ( $news as $year => $_new ): ?>
            <div id="year<?php echo $year ?>" class="year">
                <h4 class="new_heading"><?php echo $year ?></h4>
                <?php if ( (int)$year === (int)date("Y",$featured["created"]) ): ?>
                    <table id="news_main">
                        <tr id="main_news">
                            <td colspan="2" class="imgleft">
                                <a href="<?php echo $featured['url'] ?>" target="_blank"><img src="<?= site_url($featured['thumb']) ?>" width="100" height="100"/></a>
                            </td>
                            <td colspan="2" class="infotext">
                                <span class="date"><?php echo date("M Y",$featured['created']) ?></span>
                                <h2><a href="<?php echo $featured['url'] ?>" target="_blank"><?php echo $featured['name'] ?></a></h2>
                                <p><?php echo htmlspecialchars($featured['description'],ENT_QUOTES) ?></p><br/>
                                <a target="_blank" href="<?php echo $featured['url'] ?>"><img src="<?= base_url() ?>assets/images/viewmore_btn.png" width="100" height="36"/></a>
                            </td>
                        </tr>
                    </table>
                <?php endif; ?>
                <?php foreach ( $_new as $i => $__new ): ?>
                    <?php
                        $img_url = site_url($__new['thumb']);
                        $url = $__new['url'];
                        $title = htmlspecialchars($__new['name']);
                        $published_date = date("M jS,Y",$__new['created']);
                    ?>
                    <dl>
                        <div class="gutter">
                        <dt>
                            <a href="<?php echo $url ?>" target="_blank">
                                <img src="<?php echo $img_url ?>" width="50" height="50" title="<?php echo url_title($title) ?>" class="pull-left"/>
                            </a>
                        </dt>
                        <dd>
                            <h3><a href="<?php echo $url ?>" target="_blank">
                                    <?php echo $title; ?>
                                </a>
                            </h3>
                            <span class="date2"><?php echo $published_date ?></span>
                        </dd>
                        </div>
                    </dl>
                <?php endforeach; ?>

            </div>
            <?php endforeach; ?>

        </div>
        <div class="ritecol">
            <h3>Archives</h3>
            <ul id="news_nav">
                <?php foreach ( array_keys($news) as $_year): ?>
                    <li><a href="#year<?php echo $_year ?>"><?php echo $_year ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <p id="back-top" style="display: block; position: fixed; bottom: 10px; right: 20px;display:none;">
            <a onclick="return scrollTopTop(this);" class="" href="javascript:;"><span class="icon-stack icon-2x">
              <i class="icon-sign-blank icon-stack-base" style="color:#666;"></i>
              <i class="icon-arrow-up icon-light"></i>
            </span></a>
        </p>
    </div>
</div>