<?php
$_setting = !empty($settings['settings']) ? $settings['settings'] : array();
$fb = !empty($_setting['facebook']) ? $_setting['facebook'] : '';
$tw = !empty($_setting['twitter']) ? $_setting['twitter'] : '';
$yt = !empty($_setting['youtube']) ? $_setting['youtube'] : '';
$gl = !empty($_setting['google_plus']) ? $_setting['google_plus'] : '';
$footerText = !empty($_setting['footer_text']) ? $_setting['footer_text'] : '';
$totalView = !empty($_setting['total_view']) ? $_setting['total_view'] : 0;
$totalVisit = !empty($_setting['total_visit']) ? $_setting['total_visit'] : 0;
?>
<div id="footer-wrapper">
    <div class="social_fo">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page_site">
                        <div class="contact">
                            <a href="<?php echo $BASE_URL;?>/lien-he" class="face"><i class="fa fa-envelope"></i> <?php echo __('LABEL_CONTACT');?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="social"><?php echo __('LABEL_CONTACT_US');?>
                        <?php if (!empty($fb)): ?>
                        <a target="_blank" href="<?php echo $fb;?>" class="icon_font face"><i class="fa fa-facebook-official"></i></a>
                        <?php endif; ?>
                        
                        <?php if (!empty($tw)): ?>
                        <a target="_blank" href="<?php echo $tw;?>" class="icon_font twitte"><i class="fa fa-twitter-square"></i></a>
                        <?php endif; ?>
                        
                        <?php if (!empty($yt)): ?>
                        <a target="_blank" href="<?php echo $yt; ?>" class="icon_font in"><i class="fa fa-youtube-square"></i></a>
                        <?php endif; ?>
                        
                        <?php if (!empty($gl)): ?>
                        <a target="_blank" href="<?php echo $gl; ?>" class="icon_font gogle"><i class="fa fa-google-plus-square"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="to_top">
                    <a href="#" class="scrollTo"><i class="fa fa-angle-double-up"></i></a>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="footer">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <div class="copy" style="font-size:10px;">
                            <?php echo $footerText; ?>
                        </div>
                        <div class="footer_number_view">
                            <p><?php echo __('LABEL_TOTAL_VIEW').' '.$totalView;?></p>
                            <p><?php echo __('LABEL_TOTAL_VISIT').' '.$totalVisit;?></p>
                        </div>
                        <!--<div class="logo-footer"><div class="hinhfooter"><a href="./" title="Phật học đời sống - tin tức Phật giáo - tin nhanh"> <img src="<?php echo $BASE_URL;?>/images/logo-tinh-thuong-viet.png" /> </a></div></div>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
