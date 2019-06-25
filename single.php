<?php
/*
 * 用来判断案例和新闻模板的选择
 */
if ( in_category('pc端案例') ||  in_category('h5案例') || in_category('微信案例')) {
    include('single-example.php');
}
elseif ( in_category('pc端新闻') || in_category('技术分享') || in_category('公司新闻')) {
    include('single-news.php');
} else {
    include('single-example.php');
}
?>