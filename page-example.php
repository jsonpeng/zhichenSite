<?php
$src_example=$_GET['cat'];

if($src_example==null){
    $src_example='pc端案例';
}else{
    $src_example=$_GET['cat'];
}
$start_tab=$src_example;
//echo '<h1> '.$src_example.'</h1>';
?>

<?php $tag_active_js=true;?>

<?php
/**
 * @package WordPress
Template Name:example
 * 描述：案例页面
 */
get_header();
?>


<div class="banner-index example">

     <?php template_navbar(false); ?>

    <div class="container about-content  wow fadeInUp">
        <h2>模板/案例</h2>
        <h3>展示公司案例，海量模板任您参考</h3>
    </div>

</div>


<div class="example-content">

  <div class="container">

        <div class="example-content-tab">
        <ul id="myTab" class="nav nav-tabs">
          <li class="dropdown" >
            <a href="/example#pc"  class="dropdown-toggle"  >
             PC端案例
            </a>
          </li>
          <li class="dropdown" >
              <a href="/example?cat=h5案例#h5" class="dropdown-toggle"  >
                  H5案例
              </a>
          </li>
        </ul>
          </div>

<?php if($src_example=='pc端案例'){?>
      <div class="example-content-tab-row  wow flipInX">
          <div class="row ">
             <a  href="#allproduct-pc" class="dropdown-toggle"  data-toggle="tab"><span>全部产品</span></a>
              <?php
              $tags=get_tags_by_cat_name('pc端案例');
              if(!empty($tags)) {
                  foreach ($tags as $tag) {
                      ?>
                      <a href="#<?php echo $tag->name;?>"  class="dropdown-toggle"  data-toggle="tab" ><span><?php echo $tag->name;?></span></a>
                  <?php }
              }?>
          </div>
        </div>

                            <?php }else if($src_example=='h5案例'){?>
    <div class="example-content-tab-row  wow flipInX">
        <div class="row ">
<!--            <button class="example-content-tab-row-button"><a  href="#allproduct-h5" class="example-content-all-button"  data-toggle="tab">全部产品</a></button>-->
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

                                                              <?php }else{?>

                                                                    <?php }?>

    </div>




  <div id="myTabContent" class="tab-content">

      <!--pc对应tab-->
         <div class="tab-pane fade" id="pc">
            <div class="container example-pc">

                 <div class="row">

<?php
$args_query = array(
    'cat' => get_category_id_byname('pc端案例'),
    'posts_per_page' => -1,//所有文章
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
);
query_posts($args_query);
while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-6 col-md-4 example-pc-img-padding wow fadeInUp">
      <div class="example-content-tab-row-imgandcontent">

      <div class="example-content-img">
      <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" width="300" height="199"></a>
      </div>

          <div class="example-content-tab-row-pc">
          <div class="example-content-pc-num">
          <h1><?php echo $post->ID;?></h1>
          </div>

          <div class="example-content-pc-num-fuhao">
          <img src="<?php website_static_file();?>images/h5_titile_icon.png">
          </div>

          <div class="example-content-pc-num-content">
          <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
          <img src="<?php website_static_file();?>images/pc_content_row.png" />
          </div>

          <div class="example-content-pc-add">
          <img src="<?php website_static_file();?>images/pc_add.png" />
        </div>

        </div>

        </div>

        </div>

<?php endwhile;?>

    </div>


</div>
  </div>
      <!--pc对应tab-->

      <!--h5对应tab-->
        <div class="tab-pane fade" id="h5">
            <div class="container h5-example-padding-bottom">


             <div class="row ">

<?php
$args_query = array(
    'cat' => get_category_id_byname('h5案例'),
    'posts_per_page' => -1,//所有文章
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
);
query_posts($args_query);
while ( have_posts() ) : the_post(); ?>

    <div class="col-sm-6 col-md-4 example-content-img-padding hidden-xs wow fadeInUp">
        <a class="example-content-tab-row-imgandcontent" href="<?php the_permalink();?>" target="_blank">
            <div class="example-content-img-h5">
                <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank">
                    <img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-h5-example'); echo $res[0]; ?>" />
                </a>

            </div>

        <div class="example-content-img-description">
            <div class="example-content-num">
            <h1><?php echo $post->ID;?></h1>
            </div>

            <div class="example-content-title">
                <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php echo the_title(); ?></a></h2>
                    <img src="<?php website_static_file();?>images/h5_titile_icon.png">
            </div>


            <div class="example-content-img-description-rightrow">
            <img src="<?php website_static_file();?>images/h5_titile_rightrow.png">
            </div>

            <div class="example-content-qr">
            <img src="<?php website_static_file();?>images/h5_baoming.png">
            </div>

        </div>

                </a>
                </div>


    <!-- 移动端-->
    <div class="col-sm-6 col-md-4 example-pc-img-padding visible-xs wow fadeInUp">
        <div class="example-content-tab-row-imgandcontent">

            <div class="example-content-img">
                <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><img src="<?php $res_mobile = get_the_excerpt(get_post_thumbnail_id($post->ID)); echo $res_mobile; ?>" width="300" height="199"></a>
            </div>

            <div class="example-content-tab-row-pc">
                <div class="example-content-pc-num">
                    <h1><?php echo $post->ID;?></h1>
                </div>

                <div class="example-content-h5-num-fuhao">
                    <img src="<?php website_static_file();?>images/h5_titile_icon.png">
                </div>

                <div class="example-content-pc-num-content">
                    <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
                    <img src="<?php website_static_file();?>images/pc_content_row.png" />
                </div>

                <div class="example-content-pc-add">
                    <img src="<?php website_static_file();?>images/pc_add.png" />
                </div>

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

        <!--所有pc产品-->
      <div class="tab-pane fade" id="allproduct-pc">
          <div class="container example-pc">
            <div class="row">
    <?php

             $tags=get_tags_by_cat_name('pc端案例');
             if(!empty($tags)) {
                 foreach ($tags as $tag) {
                                                $tag =  $tag->name; //标签名
                                                $args=array(
                                                    'tag' => $tag,
                                                    'showposts'=>-1,  //输出的文章数量
                                                    'caller_get_posts'=>1
                                                );
                                                $my_query = new WP_Query($args);
                                                if( $my_query->have_posts() ) {
                                                    while ($my_query->have_posts()) : $my_query->the_post();
                                                        ?>
                      <div class="col-sm-6 col-md-4 example-pc-img-padding wow fadeInUp">
                          <div class="example-content-tab-row-imgandcontent-pc">

                              <div class="example-content-img">
                                  <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank" ><img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" width="100%" height="199"></a>
                              </div>

                              <div class="example-content-tab-row-pc">
                                  <div class="example-content-pc-num">
                                      <h1><?php echo $post->ID;?></h1>
                                  </div>

                                  <div class="example-content-pc-num-fuhao">
                                      <img src="<?php website_static_file();?>images/h5_titile_icon.png">
                                  </div>

                                  <div class="example-content-pc-num-content">
                                      <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
                                      <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                  </div>

                                  <div class="example-content-pc-add">
                                      <img src="<?php website_static_file();?>images/pc_add.png" />
                                  </div>

                              </div>

                          </div>

                      </div>

                  <?php
                    endwhile;
                            }
                wp_reset_query();
                   ?>

<?php }
            }?>

             </div>
          </div>
      </div>
        <!-- 所有pc产品-->

        <!--所有h5产品-->
      <div class="tab-pane fade" id="allproduct-h5">
          <div class="container h5-example-padding-bottom">
                    <div class="row">
                  <?php
                  $args_query = array(
                      'cat' => get_category_id_byname('h5案例'),
                      'posts_per_page' => -1,//所有文章
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
    /* border-bottom: 3px solid #333; 
    /* margin: 0 auto; 
    /* overflow: hidden;">
                                      <h1><?php echo $post->ID;?></h1>
                                  </div>

                                  <div class="example-content-title">
                                      <h2 style="top: 0;
    position: absolute;color: black;"><?php echo the_title(); ?></h2>
                                      <img src="<?php website_static_file();?>images/h5_titile_icon.png" style="top: 165px;
    position: absolute;">
                                  </div>

                                  <div class="example-content-img-description-rightrow">
                                      <img src="<?php website_static_file();?>images/h5_titile_rightrow.png" >
                                  </div>

                                  <div class="example-content-qr">
                                      <img src="<?php website_static_file();?>images/h5_baoming.png">
                                  </div>

                              </div>

                          </a>

                      </div>


                      <!-- 移动端-->
                      <div class="col-sm-6 col-md-4 example-pc-img-padding visible-xs">
                          <div class="example-content-tab-row-imgandcontent-pc">

                              <div class="example-content-img">
                                  <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><img src="<?php $res_mobile = get_the_excerpt(get_post_thumbnail_id($post->ID)); echo $res_mobile; ?>" width="300" height="199"></a>
                              </div>

                              <div class="example-content-tab-row-pc">
                                  <div class="example-content-pc-num">
                                      <h1><?php echo $post->ID;?></h1>
                                  </div>

                                  <div class="example-content-pc-num-fuhao">
                                      <img src="<?php website_static_file();?>images/h5_titile_icon.png">
                                  </div>

                                  <div class="example-content-pc-num-content">
                                      <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
                                      <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                  </div>

                                  <div class="example-content-pc-add">
                                      <img src="<?php website_static_file();?>images/pc_add.png" />
                                  </div>

                              </div>

                          </div>

                      </div>
                      <!-- 移动端-->

                  <?php endwhile;?>

                        </div>
          </div>
      </div>
        <!-- 所有h5产品-->

      <!--pc子链接对应tab-->
 <?php
                          $tags_pc=get_tags_by_cat_name('pc端案例');
                          if(!empty($tags_pc)) {
                              foreach ($tags_pc as $tag_name) {
                                  ?>

      <div class="tab-pane fade" id="<?php echo $tag_name->name;?>">
          <div class="container example-pc">
                  <div class="row">
                  <?php
                  $tag =  $tag_name->name; //标签名
                  $args=array(
                      'tag' => $tag,
                      'showposts'=>-1,  //输出的文章数量
                      'caller_get_posts'=>1
                  );
                  $my_query = new WP_Query($args);
                  if( $my_query->have_posts() ) {
                      while ($my_query->have_posts()) : $my_query->the_post();
                          ?>
                          <div class="col-sm-6 col-md-4 example-pc-img-padding">
                              <div class="example-content-tab-row-imgandcontent-pc">

                                  <div class="example-content-img">
                                      <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" width="100%" height="199"></a>
                                  </div>

                                  <div class="example-content-tab-row-pc">
                                      <div class="example-content-pc-num">
                                          <h1><?php echo $post->ID;?></h1>
                                      </div>

                                      <div class="example-content-pc-num-fuhao">
                                          <img src="<?php website_static_file();?>images/h5_titile_icon.png">
                                      </div>

                                      <div class="example-content-pc-num-content">
                                          <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
                                          <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                      </div>

                                      <div class="example-content-pc-add">
                                          <img src="<?php website_static_file();?>images/pc_add.png" />
                                      </div>

                                  </div>

                              </div>

                          </div>
                          <?php
                      endwhile;
                  }
                  wp_reset_query();
                  ?>

                  </div>
          </div>
      </div>
<?php }}?>
      <!--pc子链接对应tab-->

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
                $tag =  $tag_name->name; //标签名
                $args=array(
                    'tag' => $tag,
                    'showposts'=>-1,  //输出的文章数量
                    'caller_get_posts'=>1
                );
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : $my_query->the_post();
                        ?>

                        <div class="col-sm-6 col-md-4 example-content-img-padding hidden-xs">
                            <a class="example-content-tab-row-imgandcontent-h5" href="<?php the_permalink();?>" target="_blank">
                                <div class="example-content-img-h5">
                                   <img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-h5-example'); echo $res[0]; ?>"  width="100%" height="380"/>
                                </div>

                                <div class="example-content-img-description">
                                    <div class="example-content-num" style=" width: 90px; 
    /* border-bottom: 3px solid #333; 
    /* margin: 0 auto; 
    /* overflow: hidden;">
                                        <h1><?php echo $post->ID;?></h1>
                                    </div>

                                    <div class="example-content-title">
                                        <h2 style="top:0;color: black;
    position: absolute;"><?php echo the_title(); ?></h2>
                                        <img src="<?php website_static_file();?>images/h5_titile_icon.png" style="top: 165px;
    position: absolute;">
                                    </div>

                                    <div class="example-content-img-description-rightrow">
                                        <img src="<?php website_static_file();?>images/h5_titile_rightrow.png" >
                                    </div>

                                    <div class="example-content-qr">
                                        <img src="<?php website_static_file();?>images/h5_baoming.png">
                                    </div>

                                </div>
                            </a>
                        </div>



                        <!-- 移动端-->
                        <div class="col-sm-6 col-md-4 example-pc-img-padding visible-xs ">
                            <div class="example-content-tab-row-imgandcontent-pc">

                                <div class="example-content-img">
                                    <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><img src="<?php $res_mobile = get_the_excerpt(get_post_thumbnail_id($post->ID)); echo $res_mobile; ?>" width="300" height="199"></a>
                                </div>

                                <div class="example-content-tab-row-pc">
                                    <div class="example-content-pc-num">
                                        <h1><?php echo $post->ID;?></h1>
                                    </div>

                                    <div class="example-content-pc-num-fuhao">
                                        <img src="<?php website_static_file();?>images/h5_titile_icon.png">
                                    </div>

                                    <div class="example-content-pc-num-content">
                                        <h2><a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank"><?php the_title(); ?></a></h2>
                                        <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                    </div>

                                    <div class="example-content-pc-add">
                                        <img src="<?php website_static_file();?>images/pc_add.png" />
                                    </div>

                                </div>

                            </div>

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