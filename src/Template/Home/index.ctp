<?php 
$posts = !empty($data['posts']) ? $data['posts'] : array();
?>
<div class="row">
    <div class="col-lg-9 col-sm-9 col-xs-12">
        <?php if (!empty($posts[1])): ?>
            <?php echo $this->element('Post/layout1', array('posts' => $posts[1])); ?>
        <?php endif; ?>
        
        <?php if (!empty($posts[2])): ?>
            <?php echo $this->element('Post/layout2', array('posts' => $posts[2])); ?>
        <?php endif; ?>
    </div>
    <div class="col-lg-3 col-sm-3 col-xs-12">
        <?php echo $this->element('Layout/notice'); ?>
        <?php if (!empty($posts[3])): ?>
            <?php echo $this->element('Post/layout2', array('posts' => $posts[3])); ?>
        <?php endif; ?>
        <?php echo $this->element('Layout/calendar'); ?>
    </div>
</div>