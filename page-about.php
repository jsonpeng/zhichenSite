<?php
$load_baidumap=true;
?>

<?php
/**
 * @package WordPress
Template Name:about
 * 描述：关于我们页面
 */
get_header();
?>


   <div class="banner-index about">
<div class="container">
        <?php template_navbar(false);?>
</div>
    <div class="container about-content  wow fadeInUp">
        <h1>武汉智琛佳源科技有限公司</h1>
        <p style="
    font-size: 18px;
    line-height: 40px;
">武汉智琛佳源科技有限公司致力于为客户提供专业软件定制开发与设计服务。主打品牌咨询策划方案、解决品牌线上活动推广、提供移动端解决方案。主要包含VI设计、网站以及互动游戏的独立开发与设计、微信公众号开发与运营、微商城设计与开发、H5/APP设计与开发。</p>
    </div>
</div>

<div class="container">
  <div class="row">
  <div class="about-communication  wow fadeInUp">
        <div class="col-sm-6 col-md-3 about-icon-padding">
        <img src="<?php website_static_file();?>images/about_icon_01.png">
            <h3>电话</h3>

               <h4><?php echo get_option('about-phone1'); ?></h4>
               <h4><?php echo get_option('about-phone2'); ?></h4>


        </div>
        <div class="col-sm-6 col-md-3 about-icon-padding">
            <img src="<?php website_static_file();?>images/about_icon_02.png">
            <h3>邮箱</h3>

               <h4><?php echo get_option('about-email1'); ?></h4>
               <h4><?php echo get_option('about-email2'); ?></h4>

        </div>
        <div class="col-sm-6 col-md-3 about-icon-padding">
           <img src="<?php website_static_file();?>images/about_icon_03.png">
            <h3>QQ</h3>

                <h4><?php echo get_option('about-qq1'); ?></h4>
                <h4><?php echo get_option('about-qq2'); ?></h4>

        </div>
        <div class="col-sm-6 col-md-3 about-icon-padding">
             <img src="<?php website_static_file();?>images/about_icon_04.png">
            <h3>微信</h3>

                <h4><?php echo get_option('about-wechat1'); ?></h4>
                <h4><?php echo get_option('about-wechat2'); ?></h4>

        </div>
        </div>
    </div>
</div>


<div class="container wow fadeInUp" style="margin-bottom:30px">
 <div id="OurBaiduMap"></div>
</div>


<?php
get_footer();
?>