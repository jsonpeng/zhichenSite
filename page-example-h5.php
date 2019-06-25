<?php
$start_tab='h5案例';
?>

<?php $tag_active_js=true;?>

<?php
/**
 * @package WordPress
Template Name:example-h5
 * 描述：案例h5页面
 */
get_header();
?>


<div class="banner-index example">

<div class="container">
     <?php template_navbar(false); ?>
</div>
    <div class="container about-content  wow fadeInUp">
        <h2>精彩案例</h2>
        <h3>展示公司案例，海量作品任您参考</h3>
    </div>

</div>


<div class="example-content">

  <div class="container">

        <div class="example-content-tab">
        <ul id="myTab" class="nav nav-tabs">
          <li class="dropdown" >
            <a href="/pc端案例#pc"  class="dropdown-toggle"  >
             PC端案例
            </a>
          </li>
          <li class="dropdown" >
              <a href="/h5案例#h5" class="dropdown-toggle"  >
                  H5案例
              </a>
          </li>
        </ul>
          </div>


    <div class="example-content-tab-row  wow flipInX" style="display:none;">
        <div class="row ">
            <a  href="#allproduct-h5" class="dropdown-toggle"  data-toggle="tab"><span>全部产品</span></a>
            <?php
            $tags=get_tags_by_cat_name('h5案例');
            if(!empty($tags)) {
                foreach ($tags as $tag) {
                    ?>
                    <a href="#<?php echo $tag->name;?>"  class="dropdown-toggle"  data-toggle="tab" ><span><?php echo $tag->name;?></span></a>

                                    <?php }
                                }?>
        </div>
    </div>





    </div>




  <div id="myTabContent" class="tab-content">

      <!--h5对应tab-->
      <div class="tab-pane fade" id="h5">
          <div class="container h5-example-padding-bottom">
              <div class="row">
                  <?php
                  $args_query = array(
                      'cat' => get_category_id_byname('h5案例'),
                      'posts_per_page' => -1,//所有文章
					    'order' => 'ASC',
                      'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
                  );
                  query_posts($args_query);
                  while ( have_posts() ) : the_post(); ?>

                      <div class="col-sm-6 col-md-4 example-content-img-padding hidden-xs  wow fadeInUp">

                          <a class="example-content-tab-row-imgandcontent-h5" href="<?php the_permalink();?>" target="_blank">

                              <div class="example-content-img-h5">
                                  <img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-h5-example'); echo $res[0]; ?>"  width="100%" height="380"/>
                              </div>

                              <div class="example-content-img-description">
                                  <div class="example-content-num" style=" width: 90px;
     margin: 0 auto;
     overflow: hidden;">
                                      <h1><?php echo $post->ID;?></h1>
                                  </div>

                                  <div class="example-content-title">
                                      <h2 style="top: 0;
    position: absolute;color: black;"><?php echo the_title(); ?></h2>
                                      <img src="<?php website_static_file();?>images/h5_titile_icon.png" style="top: 165px;
    position: absolute;">
                                  </div>

                                      <img class="example-content-img-description-rightrow" src="<?php website_static_file();?>images/h5_titile_rightrow.png" >
                                
                                      <img class="example-content-qr" src="<?php website_static_file();?>images/h5_baoming.png">
                              
                              </div>

                          </a>

                      </div>


                      <!-- 移动端-->
                      <div class="col-sm-6 col-md-4 example-pc-img-padding visible-xs">
                          <div class="example-content-tab-row-imgandcontent-pc">

                              <div class="example-content-img">
                                  <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><img src="<?php $res_mobile = get_the_excerpt(get_post_thumbnail_id($post->ID)); echo $res_mobile; ?>" width="100%" height="auto"></a>
                              </div>

                              <div class="example-content-tab-row-pc">
                                  <div class="example-content-pc-num">
                                      <h1><?php echo $post->ID;?></h1>
                                  </div>

                                
                                      <img class="example-content-pc-num-fuhao" src="<?php website_static_file();?>images/h5_titile_icon.png">
                             

                                  <div class="example-content-pc-num-content">
                                      <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
                                      <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                  </div>

                                 
                                      <img  class="example-content-pc-add" src="<?php website_static_file();?>images/pc_add.png" />
                                  

                              </div>

                          </div>

                      </div>
                      <!-- 移动端-->

                  <?php endwhile;?>

              </div>
          </div>
      </div>
      <!--h5对应tab-->





      <!-- 指定标签链接对应内容-->

      <!--所有h5产品-->
      <div class="tab-pane fade" id="allproduct-h5">
          <div class="container h5-example-padding-bottom">
              <div class="row">
                  <?php
				  $h5_index=0;
                  $args_query = array(
                      'cat' => get_category_id_byname('h5案例'),
                      'posts_per_page' => -1,//所有文章
					    'order' => 'ASC',
                      'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
                  );
                  query_posts($args_query);
                  while ( have_posts() ) : the_post();    $h5_index++;
				   ?>
                
                      <div class="col-sm-6 col-md-4 example-content-img-padding hidden-xs  wow fadeInUp">

                          <a class="example-content-tab-row-imgandcontent-h5" href="<?php the_permalink();?>" target="_blank">

                              <div class="example-content-img-h5" style="height:380px;overflow:hidden;">
                                  <img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-h5-example'); echo $res[0]; ?>"  width="100%" />
                              </div>

                              <div class="example-content-img-description">
                                  <div class="example-content-num" style=" width: 90px;
     margin: 0 auto;
     overflow: hidden;">
                                      <h1><?php echo $h5_index;?></h1>
                                  </div>

                                  <div class="example-content-title">
                                      <h2 style="top: 0;
    position: absolute;color: black;"><?php echo the_title(); ?></h2>
                                      <img src="<?php website_static_file();?>images/h5_titile_icon.png" style="top: 165px;
    position: absolute;">
                                  </div>

                                 
                                      <img class="example-content-img-description-rightrow" src="<?php website_static_file();?>images/h5_titile_rightrow.png" >
                                 
	<?php $images = rwmb_meta( 'erweima', 'size=YOURSIZE' ); // Since 4.8.0
$images = rwmb_meta( 'erweima', 'type=plupload_image&size=YOURSIZE' ); if ( !empty( $images ) ) {
    foreach ( $images as $images_mobile_url ) {?>
                                 
                                      <img class="example-content-qr" src="<?php echo esc_url($images_mobile_url['url']); ?>" style="width:100px;">
                                 
<?php }} ?>
                              </div>

                          </a>

                      </div>


                      <!-- 移动端-->
                      <div class="col-sm-6 col-md-4 example-pc-img-padding visible-xs">
                          <a class="example-content-tab-row-imgandcontent-pc" href="<?php the_permalink();?>" target="_blank">

                              <div class="example-content-img">
	<?php $images = rwmb_meta( 'mobile_img', 'size=YOURSIZE' ); // Since 4.8.0
$images = rwmb_meta( 'mobile_img', 'type=plupload_image&size=YOURSIZE' ); if ( !empty( $images ) ) {
    foreach ( $images as $images_mobile_url ) {?>
                             <img src="<?php  echo esc_url($images_mobile_url['url']); ?>" width="100%" height="auto">
                             <?php }}?> 
							  
							  </div>

                              <div class="example-content-tab-row-pc">
                                  <div class="example-content-pc-num">
                                      <h1 style="color:black;"><?php echo  $h5_index;?></h1>
                                  </div>
								  
                                      <img class="example-content-pc-num-fuhao"  src="<?php website_static_file();?>images/h5_titile_icon.png">
                               
                                  <div class="example-content-pc-num-content">
                                      <h2 style="color:black;"><?php the_title(); ?></h2>
                                      <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                  </div>
                                      <img class="example-content-pc-add" src="<?php website_static_file();?>images/pc_add.png" />
                              </div>

                          </a>

                      </div>
                      <!-- 移动端-->

                  <?php endwhile;?>

              </div>
          </div>
      </div>
      <!-- 所有h5产品-->

      <!--h5子链接对应tab-->
      <?php
      $tags_h5=get_tags_by_cat_name('h5案例');
      if(!empty($tags_h5)) {
          foreach ($tags_h5 as $tag_name) {
              ?>
              <div class="tab-pane fade" id="<?php echo $tag_name->name;?>">
                  <div class="container h5-example-padding-bottom">
                      <div class="row">
                          <?php
						  $h5_index_tag=0;
                          $tag =  $tag_name->name; //标签名
                          $args=array(
                              'tag' => $tag,
                              'showposts'=>-1,  //输出的文章数量
                              'order' => 'ASC',
                          );
                          $my_query = new WP_Query($args);
                          if( $my_query->have_posts() ) {
                              while ($my_query->have_posts()) : $my_query->the_post();$h5_index_tag++;
                                  ?>

                                        <div class="col-sm-6 col-md-4 example-content-img-padding hidden-xs  wow fadeInUp">

                          <a class="example-content-tab-row-imgandcontent-h5" href="<?php the_permalink();?>" target="_blank">

                              <div class="example-content-img-h5" style="height:380px;overflow:hidden;">
                                  <img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-h5-example'); echo $res[0]; ?>"  width="100%" height="100%"/>
                              </div>

                              <div class="example-content-img-description">
                                  <div class="example-content-num" style=" width: 90px;
     margin: 0 auto;
     overflow: hidden;">
                                      <h1><?php echo $h5_index_tag;?></h1>
                                  </div>

                                  <div class="example-content-title">
                                      <h2 style="top: 0;
    position: absolute;color: black;"><?php echo the_title(); ?></h2>
                                      <img src="<?php website_static_file();?>images/h5_titile_icon.png" style="top: 165px;
    position: absolute;">
                                  </div>

                              
                             <img  class="example-content-img-description-rightrow" src="<?php website_static_file();?>images/h5_titile_rightrow.png" >
                             
	<?php $images = rwmb_meta( 'erweima', 'size=YOURSIZE' ); // Since 4.8.0
$images = rwmb_meta( 'erweima', 'type=plupload_image&size=YOURSIZE' ); if ( !empty( $images ) ) {
    foreach ( $images as $images_mobile_url ) {?>
                               
                                      <img  class="example-content-qr" src="<?php echo esc_url($images_mobile_url['url']); ?>" style="width:100px;">
                                 
<?php }} ?>
                              </div>

                          </a>

                      </div>



                                 


 <!-- 移动端-->
                      <div class="col-sm-6 col-md-4 example-pc-img-padding visible-xs">
                          <a class="example-content-tab-row-imgandcontent-pc" href="<?php the_permalink();?>" target="_blank">

                           
	<?php $images = rwmb_meta( 'mobile_img', 'size=YOURSIZE' ); // Since 4.8.0
$images = rwmb_meta( 'mobile_img', 'type=plupload_image&size=YOURSIZE' ); if ( !empty( $images ) ) {
    foreach ( $images as $images_mobile_url ) {?>
                             <img class="example-content-img" src="<?php  echo esc_url($images_mobile_url['url']); ?>" width="100%" height="100%">
                             <?php }}?> 
							  
							

                              <div class="example-content-tab-row-pc">
                                  <div class="example-content-pc-num">
                                      <h1 style="color:black;"><?php echo  $h5_index_tag;?></h1>
                                  </div>

                          
                                      <img class="example-content-pc-num-fuhao" src="<?php website_static_file();?>images/h5_titile_icon.png">
                               

                                  <div class="example-content-pc-num-content">
                                      <h2 style="color:black;"><?php the_title(); ?></h2>
                                      <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                  </div>

                               
                                      <img class="example-content-pc-add" src="<?php website_static_file();?>images/pc_add.png" />
                             
                              </div>

                          </a>

                      </div>
                      <!-- 移动端-->								 
								  
								  
								  

                                  <?php
                              endwhile;
                          }
                          wp_reset_query();
                          ?>
                      </div>
                  </div>
              </div>
          <?php }}?>
      <!--h5子链接对应tab-->


    <!-- 指定标签对应内容-->
  </div>
</div>



<?php
get_footer();
?>