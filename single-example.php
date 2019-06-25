<?php
/*
 *描述：案例子页面
 */
get_header();
?>

    <div class="banner-index example-category">
<div class="container">
        <?php  template_navbar(true);?>
</div>
    </div>

<div class="single-example" style="position:relative">
<?php while ( have_posts() ) : the_post(); ?>

    <?php the_content();?>
	
	<div  style="background-position: center;margin: auto; position: absolute;bottom:0;width: 100%; text-align:center;background-color: #000000; filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
    background-color:rgba(0,0,0,0.6);">
	<div class="container">
	<p style="    word-break: break-all;
    word-wrap: break-word;color:white;
    height: 100%;margin:0 auto;
    "><?php $seo_content=rwmb_meta( 'seo_text', 'type=textarea' ); echo  $seo_content;?> 
	</p>
	

	</div>
	</div>
	
<?php endwhile;?>
</div>


	<a href="<?php $online_link=rwmb_meta('online_link', 'type=text' ); echo  $online_link; ?>"  class="visible-xs" style="position: fixed; width: 40px; height: 40px; background: rgb(0, 0, 0); cursor: pointer; top: 150px; left: 20px; border-radius: 10px; display: block;" 
	>

	<img src="http://zcjy2.wiswebs.com/wp-content/themes/website/images/online-button.jpg"  alt="" />
	</a>

    <!--结束中间内容-->
<?php
get_footer();
?>