<?php
get_header();
?>

    <div class="banner-index example-category">

        <?php  template_navbar(true);?>

                    <?php //echo z_taxonomy_image_url(); ?>
    </div>

       <?php
       $src=substr($_SERVER[QUERY_STRING], 3) ;
       // $cat=get_category($id);
       echo '<img src="'.newbase64_de($src).  '" width="100%" height="100%" />';

    ?>
    <!--结束中间内容-->

<?php
get_footer();
?>