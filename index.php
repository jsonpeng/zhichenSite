<?php
/*
 *描述：网站首页
 */
get_header();
?>

<?php $index=true;?>

    <div class="banner-index" >
	<div class="container" >
	 
      <?php  template_navbar(false);?>
	  
	  <div class="row banner-index-padding">

         <!--开始页首内容-->
	 
        <div class="col-sm-12 col-md-12  wow fadeInUp">
	 
           <h1  class="banner-index-h1">让我们帮助您拓展业务</h1>
	 
           <h2 style="font-size:24px;">您的客户&nbsp;您的服务&nbsp;我们的技术</h2>
	 
           <p  class="banner-p">武汉智琛佳源科技有限公司致力于为客户提供专业软件定制开发与设计服务。主要包含VI设计、营销推广、网站建设、微信公众号开发与运营、微信H5、APP、微信商城等产品的设计与开发</p>
 
			<a class="baner-index-content-button-padding" href="http://p.qiao.baidu.com/cps/chat?siteId=10660548&userId=23730125" target="_blank">免费咨询</a>
	 
       </div>
	 
	 
		</div>
	 
		<div class="row banner-index-row wow fadeInUp">
	 
	      <img src="http://zcjy2.wiswebs.com/wp-content/themes/website/images/banner-index-center-icon.jpg" >
	 
		</div>
  

        <!--结束页首内容-->
	</div>
    </div>


    <!--开始中间内容-->
      <!--我们能为您提供的服务-->
    <div class="container mt50 mb50 add-service ml15mr15-xs" >
        <div class="mb15 wow fadeInUp add-service-box" >
		<h4 class="add-service-xiantiao-left hidden-xs">&nbsp;</h4>
		<h4 class="add-service-xiantiao-right hidden-xs">&nbsp;</h4>
            <h1 class="add-service-title">我们能为您提供的服务</h1>
            <p class="p-content pt10" >我们根据每一个客户的需求进行量身定制，给您最合适的</p>
        </div>
    
        <div class="row mt30 mb30 mt0-sm-xs">
            <div class="col-sm-6 col-md-4 col-md-offset-1 wow fadeInUp">
				<h2 class="add-service-child-title mt0-sm-xs mt20-xs">01</h2>
                <h2 style="font-weight: 800;">网站建设</h2>
				<h2 class="hidden-sm hidden-xs">WEBSITE CONSTRUCTION</h2>
				<h2 class="visible-sm visible-xs">WEB DESIGN</h2>
                <p>我们可为您量身定制企业、电商、金融、教育、旅游、装修、等类型的展示型网站，并可根据客户
                    特殊需求额进行功能网站定制开发</p>
				<a href="/网站建设" class="add-service-button-black mt20" >GO<div class="add-service-button-black-right">></div></a>
            </div>
			
			<div class="col-md-1">
			</div>

            <div class="col-sm-6 col-md-4 col-md-offset-1 wow fadeInUp">
				<h2 class="add-service-child-title mt0-sm-mt30-xs mt50-xs">02</h2>
                <h2 style="font-weight: 800;">H5制作</h2>
				<h2>H5 PRODUCTION</h2>
                <p>产品展示,活动促销,总结报告等各类H5制作服务,提供丰富多样的功能:抽奖、微信红包、游戏、全景展示、海报制作、视频直播</p>
				<a href="/h5" class="add-service-button-black mt20" >GO<div class="add-service-button-black-right">></div></a>
            </div>
        </div>
    </div>
         <!--我们能为您提供的服务-->

    <!--- 值得信赖的技术合作伙伴-->
    <div class="banner-index-content-communication">
        <div class="container " >
            <div class="mt50 mb50 wow fadeInUp">
                <h1 class="mb20">值得信赖的技术合作伙伴</h1>
         
            <p class="p-content w100 wow fadeInUp">寻找一个靠谱的技术伙伴,是初创公司最头疼的事情之一。我们提供了一种近乎完美的选择:卓越的技术积累和行业经验、持久稳定的全方位服务、无需巨额薪资、无需股份汇报、不会随时跳槽。如你所知,我们的定位是"一个长期技术合伙人!"</p>

			<!--
    <div class="banner-index-content-service ">
            <div class="col-sm-6 col-md-4 wow fadeInUp">
                <img src="<?php website_static_file();?>images/web-design-1.jpg"  />
                <h4 >网站建设</h4>
                <p>我们可为您量身定制企业、电商、金融、教育、旅游、装修、等类型的展示型网站，并可根据客户
                    特殊需求额进行功能网站定制开发</p>
            </div>

            <div class="col-sm-6 col-md-4 wow fadeInUp">
                <img src="<?php website_static_file();?>images/web-design-2.jpg"  />
                <h4 >网站建设</h4>
                <p>我们可为您量身定制企业、电商、金融、教育、旅游、装修、等类型的展示型网站，并可根据客户
                    特殊需求额进行功能网站定制开发</p>
            </div>

            <div class="col-sm-6 col-md-4 wow fadeInUp">
                <img src="<?php website_static_file();?>images/web-design-3.jpg"  />
                <h4 >网站建设</h4>
                <p>我们可为您量身定制企业、电商、金融、教育、旅游、装修、等类型的展示型网站，并可根据客户
                    特殊需求额进行功能网站定制开发</p>
            </div>
     </div> -->
	 
	 
	    </div>
        </div>
    </div>
    <!--- 值得信赖的技术合作伙伴-->

    <!---我们的作品-->
    <div class="mt80 mb80 align-center wow fadeInUp">
        <h1>我们的作品</h1>
    </div>

	
	<div class="container-fluid">
<div class="row max-img-media">

        <?php
        $args_query = array(
        'cat' => get_category_id_byname('pc端案例'),
        'posts_per_page' => 8, // 文章数量
		//'order'=>'ASC',
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
        );
        query_posts($args_query);
        while ( have_posts() ) : the_post();
            ?>

    <div class="col-xs-12 col-sm-6 col-md-3 production-media wow fadeInUp" >

        <a class="banner-index-production-img-box" href="<?php the_permalink();?>"  target="_blank">
		
            <img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'first-pc-example'); echo $res[0]; ?>">
			
        <div class="baner-index-production-img-bg">
            <div class="production-bg">
                <div class="production-bg-real">
      <div style="background:url('http://zcjy2.wiswebs.com/wp-content/themes/website/images/img_bg_icon.png');width:75px;height:36px;margin:0 auto"> </div>
                </div>
            </div>
        </div>

        <div class="baner-index-production-img-wrap">
        <div class="production-content">
          <div class="production-content-real" >

              <p>——</p>
              <h4>SPECIAL　DESIGN</h4>
              <?php the_title();?>

        </div>
        </div>

    </div>

        </a>

</div>
                    <?php
                    endwhile;
                        ?>

    </div>
	</div>
    <!---我们的作品-->

    <!--服务流程-->
    <div class="mt80 mb80 align-center wow fadeInUp">
        <h1 class="mb30">服务流程</h1>
    </div>
    <div class="container">
        <div class="banner-index-content-service row" style="padding-top:0px;">
            <div class="col-xs-6 col-sm-3 col-md-3 wow fadeInUp" >
                <img src="<?php website_static_file();?>images/service_01.png"  />
                <h4 >需求分析</h4>
          <a class="banner-index-content-service-button">步骤一</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 wow fadeInUp">
                <img src="<?php website_static_file();?>images/service_02.png" />
                <h4 >视觉设计</h4>
                <a class="banner-index-content-service-button">步骤二</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 wow fadeInUp">
                <img src="<?php website_static_file();?>images/service_03.png"  />
                <h4>程序开发</h4>
                <a class="banner-index-content-service-button">步骤三</a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3 wow fadeInUp">
                <img src="<?php website_static_file();?>images/service_04.png"  />
                <h4 >项目验收</h4>
                  <a class="banner-index-content-service-button">步骤四</a>
            </div>
        </div>
    </div>
    <!--服务流程-->

<?php include "footer_common_content.php"?>

    <!--结束中间内容-->

<?php
get_footer();
?>