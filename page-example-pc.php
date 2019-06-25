<?php
$start_tab='pc端案例';?>

<?php $tag_active_js=true;?>

<?php
/**
 * @package WordPress
Template Name:example-pc
 * 描述：案例pc页面
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


            <div class="example-content-tab-row  wow flipInX" style="display:none;">>
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





        </div>




        <div id="myTabContent" class="tab-content">



            <!--pc对应tab-->
            <div class="tab-pane fade" id="pc">
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
                                     'order' => 'ASC',
                                );
                                $my_query = new WP_Query($args);
                                if( $my_query->have_posts() ) {
                                    while ($my_query->have_posts()) : $my_query->the_post();
                                        ?>
                                        <div class="col-sm-6 col-md-4 example-pc-img-padding wow fadeInUp">
                                            <div class="example-content-tab-row-imgandcontent-pc">

                                                <div class="example-content-img">
                                                    <a class="example-content-img-link" href="<?php the_permalink();?>" target="_blank" ><img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" width="100%" height="100%"></a>
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
            <!--pc对应tab-->



            <!-- 指定标签链接对应内容-->

            <!--所有pc产品-->
            <div class="tab-pane fade" id="allproduct-pc">
                <div class="container example-pc">
                    <div class="row">
                        <?php
                        $pc_index=0;
                        $tags=get_tags_by_cat_name('pc端案例');
                        if(!empty($tags)) {
                            foreach ($tags as $tag) {
                                $tag =  $tag->name; //标签名
                                $args=array(
                                    'tag' => $tag,
                                    'showposts'=>-1,  //输出的文章数量
                                 'order' => 'date',
                                );
                                $my_query = new WP_Query($args);
                                if( $my_query->have_posts() ) {
                                    while ($my_query->have_posts()) : $my_query->the_post();
									$pc_index++;
                                        ?>
                                        <a class="col-sm-6 col-md-4 example-pc-img-padding wow fadeInUp" href="<?php the_permalink();?>" target="_blank" >
                                            <div class="example-content-tab-row-imgandcontent-pc">

                                           
                                            <img class="example-content-img" src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" width="100%" height="100%">
                                            

                                                <div class="example-content-tab-row-pc">
                                                    <div class="example-content-pc-num">
                                                        <h1 style="color:black;"><?php echo $pc_index;?></h1>
                                                    </div>

                                               
                                                  <img class="example-content-pc-num-fuhao" src="<?php website_static_file();?>images/h5_titile_icon.png">
                                            

                                                    <div class="example-content-pc-num-content">
                                                        <h2 style="color:black;"><?php the_title(); ?></h2>
                                                        <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                                    </div>

                                             
                                                        <img class="example-content-pc-add" src="<?php website_static_file();?>images/pc_add.png" />
                                                  

                                                </div>

                                            </div>

                                        </a>

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
								$pc_index=0;
                                $tag =  $tag_name->name; //标签名
                                $args=array(
                                    'tag' => $tag,
                                    'showposts'=>-1,  //输出的文章数量
                                     'order' => 'date',
                                );
                                $my_query = new WP_Query($args);
                                if( $my_query->have_posts() ) {
                                    while ($my_query->have_posts()) : $my_query->the_post();
									$pc_index++;
                                        ?>
                          <a class="col-sm-6 col-md-4 example-pc-img-padding wow fadeInUp" href="<?php the_permalink();?>" target="_blank" >
                                            <div class="example-content-tab-row-imgandcontent-pc">

                                           
                                            <img class="example-content-img" src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); echo $res[0]; ?>" width="100%" height="100%">
                                            

                                                <div class="example-content-tab-row-pc">
                                                    <div class="example-content-pc-num">
                                                        <h1 style="color:black;"><?php echo $pc_index;?></h1>
                                                    </div>

                                               
                                                  <img class="example-content-pc-num-fuhao" src="<?php website_static_file();?>images/h5_titile_icon.png">
                                            

                                                    <div class="example-content-pc-num-content">
                                                        <h2 style="color:black;"><?php the_title(); ?></h2>
                                                        <img src="<?php website_static_file();?>images/pc_content_row.png" />
                                                    </div>

                                             
                                                        <img class="example-content-pc-add" src="<?php website_static_file();?>images/pc_add.png" />
                                                  

                                                </div>

                                            </div>

                                        </a>

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

            <!-- 指定标签对应内容-->

        </div>
    </div>



<?php
get_footer();
?>