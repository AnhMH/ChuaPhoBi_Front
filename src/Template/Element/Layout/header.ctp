<?php
$webTitle = !empty($settings['settings']['web_title']) ? $settings['settings']['web_title'] : 'Phật học đời sống - tin tức Phật giáo - tin nhanh';
?>
<header id="header" class="header">
    <div class="logo-banner">
        <div class="wrapper-logo-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="logo">
                            <a title="<?php echo $webTitle;?>" href="<?php echo $BASE_URL;?>" rel="home">
                                <img src="<?php echo $BASE_URL;?>/images/logo.gif" alt="<?php echo $webTitle;?>">
                            </a>
                            <h1 class="site-title"><?php echo $webTitle;?></h1>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-8 hidden-xs"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-main-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <sticknav>
                        <nav class="main-menu">
                            <ul id="menu-menu-chinh" class="menu">
                                <li class="close-menu">
                                    <a class="" href="#" title="Close">
                                        <i class="fa fa-times-circle"></i>
                                    </a>
                                </li>
                                <?php echo $this->element('Layout/cate_header'); ?>
                            </ul>
                        </nav>
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button type="button" class="navbar-toggle off-canvas-toggle" id="show-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo2" title="<?php echo $webTitle;?>" href="./" rel="home">
                                <img src="<?php echo $BASE_URL;?>/images/logo.gif" alt="<?php echo $webTitle;?>" style="padding-top:7px;">
                            </a>
                            <a href="<?php echo $BASE_URL;?>" id="reload" title="refresh"><i class="fa fa-refresh"></i></a>
                        </nav>
                    </sticknav>
                    <div id="off-canvas">
                        <div class="off-canvas-inner">
                            <ul id="menu-menu-chinh-1" class="menu">
                                <li class="close-menu">
                                    <a class="" href="#" title="Close">
                                        <i class="fa fa-times-circle"></i>
                                    </a>
                                </li>
                                <?php echo $this->element('Layout/cate_header'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>