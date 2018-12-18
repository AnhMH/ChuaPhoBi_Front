<div class="row">
    <div class="col-lg-9 col-sm-9 col-xs-12">
        <?php if (!empty($data)): ?>
            <header class="entry-header">
                <h1 class="cat-links">
                    <?php echo $data['name']; ?>                                   
                </h1>
            </header>
            <div class="post-content">
                <div id="date_share" class="shareheard">
                    <div class="date">
                        <i class="fa fa-calendar"></i>
                        <span>Post: <?php echo date('d-m-Y', $data['created']);?></span>                                          
                        <span class="drash_share">-</span>
                        <i class="fa fa-user"></i> <a class="author" href="#">Admin</a>
                    </div>
                    <div id="block_share">
                        <a class="btn_facebook" rel="nofollow" href="javascript:;" title="Chia sẻ bài viết lên facebook"><i class="fa fa-facebook-official"></i></a>
                        <a class="btn_twitter" rel="nofollow" href="javascript:;" id="twitter" title="Chia sẻ bài viết lên twitter"><i class="fa fa-twitter-square"></i></a>
                        <a class="btn_google" rel="nofollow" href="javascript:;" title="Chia sẻ bài viết lên google+"><i class="fa fa-google-plus-square"></i></a>
                    </div>
                </div>
                <div class="entry-content">
                    <h2><strong><?php echo $data['description'];?></strong></h2>

                    <br>	
                    <ul>
                    </ul> 	
                    <br>	

                    <?php echo $data['content'];?>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
        <?php echo $this->element('Layout/notice'); ?>
        <?php echo $this->element('Layout/weblink'); ?>
        <?php echo $this->element('Layout/calendar'); ?>
    </div>
</div>