<?php 
$_setting = !empty($settings['settings']) ? $settings['settings'] : array();
$welcomeText = !empty($_setting['welcome_text']) ? $_setting['welcome_text'] : '';
$bgBody = !empty($_setting['bg_body']) ? $_setting['bg_body'] : $BASE_URL . '/images/bg_body2.jpg';
?>
<!DOCTYPE HTML>
<html lang="vi-VN">
    <head>
        <?php echo $this->element('Layout/head'); ?>
    </head>
    <body class="home archive">
        <div class="wrapper" style="background-image: url('<?php echo $bgBody;?>');">
            <div id="header-wrapper">
                <?php echo $this->element('Layout/header'); ?>
            </div>       
            <div id="main">
                <section class="slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-sm-9">
                                <div class="slider-posts-news">
                                    <marquee><?php echo $welcomeText; ?></marquee>
                                </div>
                            </div>  
                            <div class="col-lg-3 col-sm-3">
                                <form method="get" id="searchform" action="<?php echo $BASE_URL;?>/tim-kiem">
                                    <input class="text-search" type="text" required="required" value="" name="keyword" placeholder="<?php echo __('LABEL_SEARCH_PLACEHOLDER');?>">
                                    <input type="submit" class="buttom-search" value="">
                                </form>            
                            </div> 
                        </div>
                    </div>
                </section>        
                <section class="main">
                    <div class="container">
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </section>
            </div>
            <?php echo $this->element('Layout/footer'); ?>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery-ui.custom.min.js"></script>-->
        <script type="text/javascript" src="<?php echo $BASE_URL;?>/js/common.js?<?php echo time();?>"></script>
    </body>
</html>