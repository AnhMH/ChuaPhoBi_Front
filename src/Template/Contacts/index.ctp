<div class="row">
    <div class="col-lg-9 col-sm-9 col-xs-12">
        <header class="entry-header">
            <div class="entry-meta">
                <h1 class="cat-links">
                    <?php echo __('LABEL_CONTACT'); ?>
                </h1>
            </div>
        </header>
        <?php echo $this->Flash->render(); ?>
        <div class="post-content">
            <div class="entry-content">
                <div role="form" class="wpcf7">
                    <form action="<?php echo $BASE_URL; ?>/lien-he" method="post">
                        <p><?php echo __('LABEL_CONTACT_NAME'); ?><br>
                            <span><input name="name" value="" type="text" required="required"></span> </p>
                        <p><?php echo __('LABEL_CONTACT_PHONE'); ?><br>
                            <span><input name="phone" value="" type="text" required="required"></span> </p>	
                        <p><?php echo __('LABEL_CONTACT_EMAIL'); ?> <br>
                            <span><input name="email" value="" type="email" required="required"></span> </p>
                        <p><?php echo __('LABEL_CONTACT_TITLE'); ?><br>
                            <span><input name="title" value="" type="text" required="required"></span> </p>
                        <p><?php echo __('LABEL_CONTACT_MESSAGE'); ?><br>
                            <span>
                                <textarea name="message" id="noi_dung" cols="40" rows="5" required="required"></textarea>
                            </span> 
                        </p>
                        <p style="padding:15px 0;">
                            <input type="hidden" name="act" value="gui" class="btn_gui">
                            <input type="submit" value="<?php echo __('LABEL_BTN_SEND');?>">
                            <input type="reset" value="<?php echo __('LABEL_BTN_RESET');?>">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
        <?php echo $this->element('Layout/notice'); ?>
        <?php echo $this->element('Layout/weblink'); ?>
        <?php echo $this->element('Layout/calendar'); ?>
    </div>
</div>
