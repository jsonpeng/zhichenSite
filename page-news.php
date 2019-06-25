<?php
// $src = substr($_SERVER[QUERY_STRING], 3);
$src=$_GET["cat"];
if( $start_tab ==false && $src ==null){
   $start_tab='公司新闻';
}else {
   $start_tab = $src;
}
 //  echo '<h1>'.$start_tab. '</h1>';
?>



<?php
/**
 * @package WordPress
Template Name:news
 * 描述：新闻页面
 */
get_header();
?>

<div class="banner-index news">

<?php template_navbar(false); ?>

    <div class="container about-content  wow fadeInUp">
        <h2>新闻中心</h2>
    </div>
</div>


<div class="example-content">

  <div class="container">
<div class="example-content-tab">
  <ul id="myTab" class="nav nav-tabs">
    <li class="dropdown" >
    <a href="/news#company"  class="dropdown-toggle"  >
     公司新闻
    </a>
  </li>
  <li class="dropdown" >
  <a href="/news?cat=技术分享#tec" class="dropdown-toggle" >
  技术分享
  </a>
  </li>

  </ul>
  </div>
  </div>

  <div id="myTabContent" class="tab-content">
  
  <div class="tab-pane fade" id="company">

      <div class="container">
      <?php
      $args_query = array(
         'category_name' => '公司新闻', 
          'posts_per_page' => 1,
		  'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
      );
      query_posts($args_query);
      while ( have_posts() ) : the_post(); ?>

	  
	  <div class="airticle-content-all">

	<div class="post">
	
	<div class="row">
	
	<div class="col-md-8">
         
              <h4><?php echo the_title();?></h4>

              <p> 发布者:<?php  the_author();?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo the_time('Y-m-j');?></p>
      
    <a class="visible-xs visible-sm" href="<?php the_permalink();?>">
          <img class="wow fadeInUp" src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>"  style="width:100%;text-align:center;"/>
	</a>

              <p> <?php  the_excerpt()?></p>  

          <a href="<?php the_permalink();?>">查看详情></a>


       
	
			
			
 <div id="navigation" align="center">     
 <!-- 页面导航-->  
      
<?php news_pagenavi(); ?>	   <!-- 此处可以是url，可以是action，要注意不是每种html都可以加，是跟当前网页有相同布局的才可以。另外一个重要的地方是page参数，这个一定要加在这里，它的作用是指出当前页面页码，没加载一次数据，page自动+1,我们可以从服务器用request拿到他然后进行后面的分页处理。-->  
    </div>

</div>


<div class="col-md-4 hidden-xs hidden-sm">	
                  <a href="<?php the_permalink();?>">
                      <img class="wow fadeInUp" src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" /></a></div>
					  
		<div class="col-md-12">	   <div class="news-airticle-sep"> <hr /></div> </div>		  
	</div>
	
	</div>
</div>


      <?php endwhile;?>
      
  </div>


  </div>




    <div class="tab-pane fade" id="tec">

 <div class="container">

<?php
$args_query = array(
     'category_name' => '技术分享', 
    'posts_per_page' => 1,
	'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
);
query_posts($args_query);
while ( have_posts() ) : the_post();
     ?>


<div class="airticle-content-all">

	<div class="post">
          <div class="news-airticle-title-tag">

              <h4><?php echo the_title();?></h4>

              <p> 发布者:<?php  the_author();?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo the_time('Y-m-j');?></p>
          </div>
          <div class="news-airticle-content">

              <p> <?php  the_excerpt()?></p>  <div class="news-airticle-img">
                  <a href="<?php the_permalink();?>">
                      <img class="wow fadeInUp" src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" /></a></div>
          </div>

          <a href="<?php the_permalink();?>">查看详情></a>


          <div class="news-airticle-sep"> <hr /></div>
		  	
			
			
 <div id="navigation" align="center">     
 <!-- 页面导航-->  
      
<?php news_pagenavi(); ?>	   <!-- 此处可以是url，可以是action，要注意不是每种html都可以加，是跟当前网页有相同布局的才可以。另外一个重要的地方是page参数，这个一定要加在这里，它的作用是指出当前页面页码，没加载一次数据，page自动+1,我们可以从服务器用request拿到他然后进行后面的分页处理。-->  
    </div>  
			
	</div>
	
</div>


<?php endwhile;?>
    

</div>
</div>

</div>

<?php

get_footer();
?>