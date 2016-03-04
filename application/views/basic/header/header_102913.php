<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title><?= $title ?></title>    
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script>
                 google.load("jquery", "1");
                 google.load("jqueryui", "1");
            </script>            
            <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/header.css" />
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/common.css" />
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/js/fancybox/jquery.fancybox-1.3.4.css" />
            <script type="text/javascript" src="<?= base_url() ?>resources/common/js/jwplayer/jwplayer.js"></script>
            <script type="text/javascript" src="<?= base_url() ?>resources/common/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>   
            
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
                    
        <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>resources/common/css/ltIE8.css" />
        <![endif]-->
        
    </head>
        <body>
            <div id="maind">
                <div id="header">
                    <div id="header-wrapper">
                         <ul id="nav">
                                <li>
                                    <a class="<?= $active[0] ?>" href="<?= base_url() ?>">HOME</a>
                                </li>
                                <li>
                                    <a class="<?= $active[1] ?>" href="<?= base_url() ?>write">100%&nbsp;WRITE</a>
                                </li>
                                <li>
                                    <a class="<?= $active[2] ?>" href="<?= base_url() ?>certification">CERTIFICATION</a>
                                </li>
                                <li>
                                    <a class="<?= $active[3] ?>" href="<?= base_url() ?>rebate">REBATE OPPORTUNITIES</a>
                                </li>
                                <!-- <li>
                                    <a class="<?= $active[4] ?>" href="<?= base_url() ?>gmcard">GM BUSINESS CARD</a>
                                </li>                                                                                       -->
                                <li>
                                    <a class="<?= $active[5] ?>" href="<?= base_url() ?>consumer">CONSUMER ADVOCACY</a>
                                </li>
                                <li>
                                    <a class="<?= $active[6] ?>" href="<?= base_url() ?>news">IN THE NEWS</a>
                                </li>
                                <li>
                                    <a id="membersOnly" target="_blank" href="http://www.assuredperformance.net/members">MEMBERS ONLY</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
<!--wrapper start-->
            <div id="wrapper"> 