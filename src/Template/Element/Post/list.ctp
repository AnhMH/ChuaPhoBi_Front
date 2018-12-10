<li>
    <h3>
        <a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>"><?php echo $p['name']; ?></a>
    </h3>
    <div class="com_share">
        <i class="fa fa-calendar"></i> <?php echo date('d-m-Y', $p['created']); ?><i class="fa fa-user"></i> <a class="author" href="#">Admin</a>
    </div>
    <a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>">
        <img width="170" height="122" src="<?php echo $p['image']; ?>" class="attachment-thumb_170x122 wp-post-image" alt="<?php echo $p['name']; ?>">                                            
    </a>
    <div class="info-post"><?php echo $p['description']; ?></div>
    <div class="dong-su-kien"></div> 
</li>
