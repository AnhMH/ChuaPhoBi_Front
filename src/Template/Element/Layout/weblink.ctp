<?php if (!empty($settings['web_link'])): ?>
<section class="category-area">
    <div class="item-cate md1"> 
        <div class="subcat">
            <div class="title_active">
                <!--<i class="fa fa-newspaper-o"></i>-->  
                <h2><a href="#"><?php echo __('LABEL_WEB_LINKS'); ?></a></h2>                
            </div>
        </div>
        <div class="list-posts web-links">
            <?php foreach ($settings['web_link'] as $v): ?>
            <a href="<?php echo $v['url']; ?>" title="<?php echo $v['name'];?>"><img src="<?php echo $v['image'];?>" width="50px" height="50px"/></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>