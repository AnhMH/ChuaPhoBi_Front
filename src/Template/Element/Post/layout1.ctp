<?php foreach ($posts as $k => $c): ?>
    <?php
    $cate = !empty($settings['cates'][$k]) ? $settings['cates'][$k] : array();
    $cateName = !empty($cate['name']) ? $cate['name'] : '';
    $cateUrl = !empty($cate['url']) ? $cate['url'] : '';
    ?>
    <header class="entry-header">
        <div class="entry-meta">
            <h1 class="cat-links">
                <?php echo $cateName; ?>
            </h1>
        </div>
    </header>
    <section class="category-area">
        <div class="site-category">
            <div class="list_category">
                <ul class="feature-posts-cate">
                    <?php foreach ($c as $pk => $p): ?>
                        <?php if ($pk == 0): ?>
                            <li class="item-big">
                                <a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>">
                                    <img width="508" height="283" src="<?php echo $p['image']; ?>" class="attachment-thumb_508x283 wp-post-image" alt="<?php echo $p['name']; ?>">                                                
                                </a>
                                <h2><a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>"><?php echo $p['name']; ?></a></h2>
                                <p><?php echo $p['description']; ?></p>
                            </li>
                        <?php else: ?>
                            <li class="item-small">
                                <a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>">
                                    <img width="75" height="60" src="<?php echo $p['image']; ?>" class="attachment-thumb_75x60 wp-post-image" alt="<?php echo $p['name']; ?>"></a>
                                <h2><a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>" title="<?php echo $p['name']; ?>"><?php echo $p['name']; ?></a></h2>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>   
            </div>
        </div>
    </section>
<?php endforeach; ?>
