<div class="row">
    <div class="col-lg-9 col-sm-9 col-xs-12">
        <header class="entry-header">
            <div class="entry-meta">
                <h1 class="cat-links"><?php echo __('LABEL_SEARCH');?></h1>
            </div>
        </header>
        <section class="category-area">
            <div class="site-category">
                <div class="list_category">
                    <?php if (!empty($data)): ?>
                    <ul>
                        <?php foreach ($data as $p): ?>
                            <?php echo $this->element('Post/list', array('p' => $p));?>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php echo $this->Paginate->render($total, $limit); ?>
            </div>
        </section>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
        <?php echo $this->element('layout/notice'); ?>
        <?php echo $this->element('layout/calendar'); ?>
    </div>
</div>