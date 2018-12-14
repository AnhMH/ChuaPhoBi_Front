<?php if (!empty($settings['notices'])): ?>
<?php
$_setting = !empty($settings['settings']) ? $settings['settings'] : array();
$bgNotice = !empty($_setting['bg_notice']) ? $_setting['bg_notice'] : $BASE_URL . '/images/bg_thongbao.jpg';
?>
<div class="notice" style="background-image: url('<?php echo $bgNotice;?>');">
    <h4><?php echo __('LABEL_NOTICE');?></h4>
    <p><strong><?php echo $settings['notices'][0]['name'];?></strong></p>
    <a href="<?php echo $BASE_URL.'/thong-bao/'.$settings['notices'][0]['url'];?>" title="<?php echo $settings['notices'][0]['name'];?>" style="color: #cc3300;"><?php echo __('LABEL_VIEW_DETAIL');?></a>

    <ul>
        <?php foreach ($settings['notices'] as $k => $nt): ?>
        <?php if ($k == 0) { continue; } ?>
        <li>
            <a href="<?php echo $BASE_URL.'/thong-bao/'.$nt['url']; ?>" title="<?php echo $nt['name']; ?>"><?php echo $nt['name']; ?></a>
        </li>
        <?php endforeach; ?>
        
    </ul>
</div>
<?php endif; ?>
