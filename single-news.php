

<?php
/*
 *描述：新闻子页面
 */
get_header();
?>

    <div class="banner-index news">
<div class="container">
        <?php template_navbar(false); ?>
</div>
        <div class="container about-content wow fadeInUp">
            <h2>新闻中心</h2>
        </div>

    </div>

<div class="container news-img-setting">
<?php while ( have_posts() ) : the_post(); ?>

    <div class="news-single-title wow fadeInUp">
    <h1><?php the_title();?></h1>
    </div>

    <hr />

    <div class="col-md-2 wow fadeInUp">
    <h4> 发布者:<?php the_author();?></h4>
    </div>

    <div class="col-md-2 wow fadeInUp">
    <h4> <?php the_time('Y-m-j');?></h4>
    </div>


    <div class="news-single-img wow fadeInUp">
        <img src="<?php $res = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'index-pc-example'); if ($res){echo $res[0]; } else {echo catch_first_image();}
 ?>" width="100%" />
    </div>

    <div class="news-single-title wow fadeInUp">
    <p><?php the_content();?>

    </p>
    </div>
    <?php
    $categories = get_the_category();
    $categoryIDS = array();
    foreach ($categories as $category) {
        array_push($categoryIDS, $category->term_id);
    }
    $categoryIDS = implode(",", $categoryIDS);
    ?>

    <div><?php if (get_previous_post($categoryIDS)) { previous_post_link('上一篇: %link','%title',true);} else { echo "上一篇:没有了，已经是最新新闻";} ?> </div>

    <div style="padding-bottom: 20px;padding-top: 20px;"><?php if (get_next_post($categoryIDS)) { next_post_link('下一篇: %link','%title',true);} else { echo "下一篇:没有了，已经是最后一篇新闻";} ?></div>

    <?php endwhile;?>
</div>

<?php
get_footer();
?>