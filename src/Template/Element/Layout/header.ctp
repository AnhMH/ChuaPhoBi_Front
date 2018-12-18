<?php
$_setting = !empty($settings['settings']) ? $settings['settings'] : array();
$webTitle = !empty($_setting['name']) ? $_setting['name'] : 'Chua Pho Bi';
$logo = !empty($_setting['logo']) ? $_setting['logo'] : $BASE_URL . '/images/logo.jpg';
$fb = !empty($_setting['facebook']) ? $_setting['facebook'] : '';
$ytb = !empty($_setting['youtube']) ? $_setting['youtube'] : '';
$bgHeader = !empty($_setting['bg_header']) ? $_setting['bg_header'] : $BASE_URL . '/images/bg_header2.jpg';
?>
<header id="header" class="header">
    <div class="logo-banner">
        <div class="wrapper-logo-banner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-container" style="background-image: url('<?php echo $bgHeader;?>');">
<!--                            <div class="logo">
                                <a title="<?php echo $webTitle; ?>" href="<?php echo $BASE_URL; ?>" rel="home">
                                    <img src="<?php echo $logo; ?>" alt="<?php echo $webTitle; ?>" style="height: 120px;">
                                </a>
                                <h1 class="site-title"><?php echo $webTitle; ?></h1>
                            </div>-->
                            <ul class="header-language">
                                <?php if (!empty($ytb)): ?>
                                <li id="header-ytb"><a href="<?php echo $ytb; ?>">Youtube</a></li>
                                <?php endif; ?>
                                <?php if (!empty($fb)): ?>
                                    <li id="header-fb"><a href="<?php echo $fb; ?>">Facebook</a></li>
                                <?php endif; ?>
                                <li <?php echo (!empty($lang) && $lang == 'vi') ? "class='active'" : ""; ?>><a href="?lang=vi">Tiếng Việt</a></li>
                                <li <?php echo (!empty($lang) && $lang == 'zh') ? "class='active'" : ""; ?>><a href="?lang=zh">中文</a></li>
                            </ul>
                        </div>
                    </div>
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
                            <a class="logo2" title="<?php echo $webTitle; ?>" href="<?php echo $BASE_URL; ?>" rel="home">
                                <img src="<?php echo $logo; ?>" alt="<?php echo $webTitle; ?>" style="padding-top:7px;">
                            </a>
                            <a href="<?php echo $BASE_URL; ?>" id="reload" title="refresh"><i class="fa fa-refresh"></i></a>
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