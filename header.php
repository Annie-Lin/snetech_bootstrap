<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 根據當前頁面顯示網頁標題 -->
<title> <?php if ( is_home ( ) ) {
        bloginfo ( 'name' ) ; echo " - " ; bloginfo ( 'description' ) ; 
    } elseif ( is_category ( ) ) {
        single_cat_title ( ) ; echo " - " ; bloginfo ( 'name' ) ; 
    } elseif ( is_single ( ) || is_page ( ) ) {
        single_post_title ( ) ; 
    } elseif ( is_search ( ) ) { 
        echo "搜索結果" ; echo " - " ; bloginfo ( 'name' ) ; 
    } elseif ( is_404 ( ) ) { 
        echo '頁面未找到!' ; 
    } else {
        wp_title ( '' , true ) ; 
    } ?> </title>
<!-- Stylesheets -->
<link rel="stylesheet" href=" <?php bloginfo ( 'stylesheet_url' ) ; ?> " type="text/css" media="screen" />

<!-- 讓插件等可以正常運行 -->
<?php wp_head ( ) ; ?>
</head>
<!-- 提高程序運行效率 -->
<?php flush(); ?>
<body>
<div class="nav_menu_container">
    <!-- Text Logo -->
    <h3 id="logo"><a href="<?php echo get_option('home'); ?>"> <?php bloginfo ( 'name' ) ; ?> LOGO </a></h3><!-- Navigation Menu -->
    <!-- 把在控制台→外觀→選單中所設定的選單叫出來 -->
    <?php wp_nav_menu (); ?>
</div>
<div id="wrapper">
    
	
	