<?php

   $start_tab='技术分享';

?>



<?php
/**
 * @package WordPress
Template Name:news-tec
 * 描述：技术分享新闻页面
 */
get_header();
?>

<div class="banner-index news">
<div class="container">
<?php template_navbar(false); ?>
</div>
    <div class="container about-content  wow fadeInUp">
        <h2>新闻中心</h2>
    </div>
</div>


<div class="example-content">

  <div class="container">
<div class="example-content-tab">
  <ul id="myTab" class="nav nav-tabs">
    <li class="dropdown" >
    <a href="/公司新闻#company"  class="dropdown-toggle"  >
     公司新闻
    </a>
  </li>
  <li class="dropdown" >
  <a href="/技术分享#tec" class="dropdown-toggle" >
  技术分享
  </a>
  </li>

  </ul>
  </div>
  </div>

  <div id="myTabContent" class="tab-content">
  

    <div class="tab-pane fade" id="tec">

 <div class="container">
<div class="airticle-content-all">
<?php
$args_query = array(
   'category_name' => '技术分享', 
    'posts_per_page' => 12,
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
);
query_posts($args_query);
while ( have_posts() ) : the_post();
     ?>





	<div class="post">
        

	<div class="row">
	
	<div class="col-md-8">
         
              <h4 class="news-all-title"><?php echo the_title();?></h4>

              <p class="news-all-time"> 发布者:<?php  the_author();?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo the_time('Y-m-j');?></p>
      
    <a class="visible-xs visible-sm" href="<?php the_permalink();?>">
          <img class="wow fadeInUp" src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); if ($res){echo $res[0]; } else {echo catch_first_image();}
 ?>"  style="width:100%;text-align:center;"/>
	</a>

              <p> <?php  the_excerpt()?></p>  

          <a href="<?php the_permalink();?>">查看详情></a>


        
	 <div id="navigation" align="center">     
 <!-- 页面导航-->  
      
<?php next_posts_link(''); ?>	  
    </div>
			


</div>


<div class="col-md-4 hidden-xs hidden-sm">	
                  <a href="<?php the_permalink();?>">
                      <img class="wow fadeInUp" src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example');  if ($res){echo $res[0]; } else {echo catch_first_image();}
 ?>"  style="width:100%;text-align:center;" /></a>
</div>

<div class="col-md-12">	   <div class="news-airticle-sep"> <hr /></div> </div>	

	</div>		
			
	</div>
	
	
	



<?php endwhile;?>
    </div>

</div>
</div>

</div>

<?php

get_footer();
?>