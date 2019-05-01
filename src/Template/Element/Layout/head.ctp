<?php
$_title = !empty($pageTitle) ? $pageTitle : 'Chua Pho Bi';
$_keyword = !empty($pageKeyword) ? $pageKeyword : '';
$_description = !empty($pageDescription) ? htmlentities($pageDescription) : '';
$_image = !empty($pageImage) ? $pageImage : '';
?>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="SHORTCUT ICON" href="<?php echo $BASE_URL;?>/favicon.ico">
<title><?php echo $_title;?></title>
<meta name="description" content="<?php echo $_description;?>"/>
<meta name="keywords" content="<?php echo $_keyword;?>"/>
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $_title;?>" />
<meta property="og:image" content="<?php echo $_image;?>" />
<meta property="og:description" content="<?php echo $_description;?>" />
<meta property="og:url" content="<?php echo $current_url;?>" />
<meta property="og:site_name" content="<?php echo $_title;?>" />

<link rel='stylesheet' id='bootstrap-css'  href='<?php echo $BASE_URL;?>/css/bootstrap.min.css?ver=v3.3.4' type='text/css' media='' />
<link rel='stylesheet' id='owl.animate-css'  href='<?php echo $BASE_URL;?>/css/animate.min.css' type='text/css' media='' />
<link rel='stylesheet' id='roboto-condensed-css'  href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A300italic%2C400italic%2C700italic%2C400%2C700%2C300&#038;subset=latin%2Cvietnamese&#038;ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' type='text/css' media='' />

<link rel='stylesheet' id='style-css'  href='<?php echo $BASE_URL;?>/css/reset.css?<?php echo time();?>' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='<?php echo $BASE_URL;?>/css/style1.css?<?php echo time();?>' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='<?php echo $BASE_URL;?>/css/lich.css?<?php echo time();?>' type='text/css' media='all' />

<script>
    var baseUrl = '<?php echo $BASE_URL;?>';
</script>

<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/tooltip.js"></script>
<script type="text/javascript" src="<?php echo $BASE_URL;?>/js/amlich.js?<?php echo time();?>"></script>