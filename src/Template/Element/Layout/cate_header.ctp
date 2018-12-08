<?php
$cates = !empty($settings['cates']) ? $settings['cates'] : array();
?>
<li class="menu-item"><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
<?php if (!empty($cates)): ?>
    <?php foreach ($cates as $c): ?>
        <?php if (empty($c['root_id'])): ?>
        <li class="menu-item <?php echo !empty($c['sub_cates']) ? 'menu-item-has-children' : '';?>">
            <a href="<?php echo $BASE_URL . '/danh-muc/' . $c['url']; ?>" title="<?php echo $c['name']; ?>"><?php echo $c['name']; ?></a>
            <?php if (!empty($c['sub_cates'])): ?>
                <ul class="sub-menu">
                    <?php foreach ($c['sub_cates'] as $sc): ?>
                        <li class="menu-item"><a href="<?php echo $BASE_URL . '/danh-muc/' . $sc['url']; ?>" title="<?php echo $sc['name']; ?>"><?php echo $sc['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<li class="menu-item"><a href="<?php echo $BASE_URL; ?>/lien-he">Liên hệ</a></li>
