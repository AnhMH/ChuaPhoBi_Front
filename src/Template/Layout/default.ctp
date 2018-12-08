
<!DOCTYPE HTML>
<html lang="vi-VN">
    <head>
        <?php echo $this->element('layout/head'); ?>
    </head>

    <body class="home blog">
        <div class="wrapper">
            <div id="header-wrapper">

                <?php echo $this->element('layout/header'); ?>

            </div>       
            <div id="main">
                <section class="slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-sm-9">
                                <div class="slider-posts-news">
                                    <marquee>chao mung ban den vs website</marquee>
                                </div>
                            </div>  
                            <div class="col-lg-3 col-sm-3">
                                <form method="get" id="searchform" action="tim-bai-viet.html">
                                    <input class="text-search" type="text" required="required" value="" name="tu_khoa" id="tim_bai_viet" placeholder="Từ khoá tìm kiếm">
                                    <input name="search" type="submit" id="buttom-search" class="buttom-search" value="">
                                </form>            </div> 
                        </div>
                    </div>
                </section>        
                <section class="main">
                    <div class="container">
                        <div class="row">
                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
                </section>


            </div>
            <?php echo $this->element('layout/footer'); ?>

        </div>


        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL;?>/js/common.js"></script>
    </body>
</html>