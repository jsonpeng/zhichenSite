<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php website_title(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta name="description" content="<?php website_des(); ?>"/>
    <meta name="keywords" content="<?php website_keywords();?>" />




    <?php
    website_header_static_file();
    ?>

 <?php  if(is_start_tab_select($start_tab)=='公司新闻'){?>
<!-- 加载无限滚动分页-->
 
	<?php
     $company_times=0;
      $args_query = array(
		  'category_name' => '公司新闻', 
          'posts_per_page' => -1,
          'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
      );
      query_posts($args_query);
      while ( have_posts() ) : the_post();   $company_times++;?>
	 
	  <?php endwhile;?>
<script src="http://zcjy2.wiswebs.com/wp-content/themes/website/js/jquery.infinitescroll.min.js"></script>

<script type="text/javascript">
                
          $(document).ready(function (){  
  $(".airticle-content-all").infinitescroll({  
   loading: {
                    img: "<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif",
                    msgText: "加载中...",
                    finishedMsg: "已加载所有新闻..."
                },
        navSelector: "#navigation",      //页面分页元素--本页的导航，意思就是一个可以触发ajax函数的模块  
        nextSelector: "#navigation a",  //下一页的导航  
        itemSelector: ".post " ,             //此处我用了类选择器，选择的是你要加载的那一个块（每次载入的数据放的地方）        
        animate: true,                          //加载时候时候需要动画，默认是false  
        maxPage: <?php echo ceil($company_times/12);?>,                            //最大的页数，也就是滚动多少次停。这个页码必须得要你从数据库里面拿    
		extraScrollPx : 30,
		bufferPx: 20,
    });  
});
               
              
</script>
 <?php }?>

 
 
 
 
 <?php  if(is_start_tab_select($start_tab)=='技术分享'){?>
<!-- 加载无限滚动分页  -->
 
	<?php
     $tec_times=0;
      $args_query = array(
		  'category_name' => '技术分享', 
          'posts_per_page' => -1,
          'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
      );
      query_posts($args_query);
      while ( have_posts() ) : the_post();   $tec_times++;?>
	 
	  <?php endwhile;?>
<script src="http://zcjy2.wiswebs.com/wp-content/themes/website/js/jquery.infinitescroll.min.js"></script>

<script type="text/javascript">
                
          $(document).ready(function (){  
  $(".airticle-content-all").infinitescroll({  
   loading: {
                    img: "<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif",
                    msgText: "加载中...",
                    finishedMsg: "已加载所有新闻..."
                },
        navSelector: "#navigation",      //页面分页元素--本页的导航，意思就是一个可以触发ajax函数的模块  
        nextSelector: "#navigation a",  //下一页的导航  
        itemSelector: ".post " ,             //此处我用了类选择器，选择的是你要加载的那一个块（每次载入的数据放的地方）        
        animate: true,                          //加载时候时候需要动画，默认是false  
        maxPage: <?php echo ceil($tec_times/12);?>,                            //最大的页数，也就是滚动多少次停。这个页码必须得要你从数据库里面拿    
		extraScrollPx : 30,		
    });  
});
               
              
</script>
 <?php }?>
 
 

    <?php  if(is_start_tab_select($start_tab)=='公司新闻' || is_start_tab_select($start_tab)=='pc端案例'){?>
    <script>
        $(function () {
           $('#myTab li:eq(0) a').tab('show');
            $('html,body').animate({scrollTop: '0px'}, 500);
        });
    </script>

<?php }else if(is_start_tab_select($start_tab)=='h5案例' || is_start_tab_select($start_tab)=='技术分享'){?>
    <script>
        $(function () {
            $('#myTab li:eq(1) a').tab('show');
            $('html,body').animate({scrollTop: '0px'}, 500);
        });
    </script>
    <?php }else if(is_start_tab_select($start_tab)=='微信新闻' || is_start_tab_select($start_tab)=='微信案例'){?>
    <script>
        $(function () {
            $('#myTab li:eq(2) a').tab('show');
            $('html,body').animate({scrollTop: '0px'}, 500);
        });
    </script>
<?php }?>



</head>
<body >