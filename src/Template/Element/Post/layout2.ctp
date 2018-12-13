<?php foreach ($posts as $k => $c): ?>
    <?php
    $cate = !empty($settings['cates'][$k]) ? $settings['cates'][$k] : array();
    $cateName = !empty($cate['name']) ? $cate['name'] : '';
    $cateUrl = !empty($cate['url']) ? $cate['url'] : '';
    $subCates = !empty($cate['sub_cates']) ? $cate['sub_cates'] : '';
    ?>
    <section class="category-area">
        <div class="item-cate md1"> 
            <div class="subcat">
                <div class="title_active">
                    <!--<i class="fa fa-newspaper-o"></i>-->  
                    <h2><a href="<?php echo $BASE_URL . '/danh-muc/' . $cateUrl; ?>" title="<?php echo $cateName; ?>"><?php echo $cateName; ?></a></h2>                
                </div>
                <?php if (!empty($subCates)): ?>
                    <ul>
                        <?php foreach ($subCates as $sc): ?>
                            <li><a href="<?php echo $BASE_URL . '/danh-muc/' . $sc['url']; ?>" title="<?php echo $sc['name']; ?>"><?php echo $sc['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul> 
                <?php endif; ?>
            </div>
            <div class="list-posts">
                <ul>
                    <?php foreach ($c as $pk => $p): ?>
                    <?php if (!empty($limit) && $pk == $limit) { break; } ?>
                        <?php if ($pk == 0): ?> 
                            <li class="first">
                                <a class="bold" href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>"><?php echo $p['name']; ?></a>
                                <a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>">
                                    <img width="170" height="122" src="<?php echo $p['image']; ?>" class="attachment-thumb_170x122 wp-post-image" alt="<?php echo $p['name']; ?>">                        
                                </a>
                                <p><?php echo $p['description']; ?></p>
                            </li>
                        <?php else: ?> 
                            <li>
                                <a class="bold" href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>"><?php echo $p['name']; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
<?php endforeach; ?>
