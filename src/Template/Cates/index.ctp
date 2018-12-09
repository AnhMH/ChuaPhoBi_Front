<div class="row">
    <div class="col-lg-9 col-sm-9 col-xs-12">
        <header class="entry-header">
            <div class="entry-meta">
                <h1 class="cat-links"><?php echo !empty($param['cate_name']) ? $param['cate_name'] : '';?></h1>
            </div>
        </header>
        <section class="category-area">
            <div class="site-category">
                <div class="list_category">
                    <?php if (!empty($data)): ?>
                    <ul>
                        <?php foreach ($data as $p): ?>
                        <li>
                            <h3>
                                <a href="<?php echo $BASE_URL.'/bai-viet/'.$p['url'];?>" title="<?php echo $p['name'];?>"><?php echo $p['name'];?></a>
                            </h3>
                            <div class="com_share">
                                <i class="fa fa-calendar"></i> <?php echo date('d-m-Y', $p['created']);?><i class="fa fa-user"></i> <a class="author" href="#">Admin</a>
                            </div>
                            <a href="<?php echo $BASE_URL.'/bai-viet/'.$p['url'];?>" title="<?php echo $p['name'];?>">
                                <img width="170" height="122" src="<?php echo $p['image'];?>" class="attachment-thumb_170x122 wp-post-image" alt="<?php echo $p['name'];?>">                                            
                            </a>
                            <div class="info-post"><?php echo $p['description'];?></div>
                            <div class="dong-su-kien"></div> 
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php echo $this->Paginate->render($total, $limit); ?>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">

    </div>
</div>