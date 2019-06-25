<?php
/*
 * 注册自定义菜单
 */
register_nav_menus(array('header-menu' => __( 'website-Menu' ),));

/*
 * 移除li不必要的class
 */
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

/*
解决图片上传过大问题
*/
add_filter( 'wp_image_editors', 'change_graphic_lib' );
function change_graphic_lib($array) {
return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

/*
 * 网站标题
 */
function website_title(){
    echo '武汉网站建设|武汉网站设计|武汉网站制作|武汉做网站|微信H5页面制作开发公司';
}

/*
 * 网站关键字
 */
function website_keywords(){
echo 'H5制作,h5页面开发制作公司,微信H5页面制作,武汉做网站,武汉网站制作,h5制作公司,武汉网站设计,武汉网站建设';
}

function website_des(){
echo '武汉智琛佳源科技有限公司【电话:181-7139-0726】致力于为客户提供专业软件定制与网站建设制作与设计服务,主打品牌咨询策划方案、解决品牌线上活动推广、提供移动端解决方案.';
}

/*
 * 网站导入依赖静态文件
 */
function website_header_static_file(){
    echo  '<link rel="shortcut icon" type="image/x-icon" href="wp-content/themes/website/images/logo-min.png">
            <link rel="stylesheet" type="text/css" href="wp-content/themes/website/css/all.min.css">  
            <link rel="stylesheet" type="text/css" href="wp-content/themes/website/css/style.css">
            <link rel="stylesheet" type="text/css" href="wp-content/themes/website/css/res.css">
            <link rel="stylesheet" type="text/css" href="wp-content/themes/website/css/font-icon.min.css">
            <!--[if lt IE 9]>
              <script src="wp-content/themes/website/js/html5-fit.min.js"></script>
              <script src="wp-content/themes/website/js/html5-res.min.js"></script>
            <![endif]-->
 
            <script src="wp-content/themes/website/js/jquery.min.js"></script>
           <script src="wp-content/themes/website/js/all.min.js"></script>
           <script src="wp-content/themes/website/js/jquery.goup.min.js"></script>
           <script src="wp-content/themes/website/js/ie-lt.min.js"> </script>';

    $uarowser=$_SERVER['HTTP_USER_AGENT'];
    if(!strstr($uarowser, 'MSIE 5') && !strstr($uarowser, 'MSIE 6') && !strstr($uarowser, 'MSIE 7') && !strstr($uarowser, 'MSIE 8')){
        echo '  <link rel="stylesheet" type="text/css" href="wp-content/themes/website/css/animate.css">
                 <script  src="wp-content/themes/website/js/wow.min.js"></script>
                 <script  type="text/javascript">
                    wow = new WOW(
                        {
                            animateClass: \'animated\',
                            offset:       100,
                            callback:     function(box) {
                                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                            }
                        }
                    );
                    wow.init();
                </script>';

    }
}


//选取文字第一张图片或者是随机挑选一张
function catch_first_image() {
    global $post, $posts;$first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){
        $random = mt_rand(1, 35);
        echo get_bloginfo ( 'stylesheet_directory' );
        echo '/images/random/'.$random.'.jpg';
    }
    return $first_img;
};

/*
 * 网站静态文件前缀
 */
function website_static_file(){
    echo 'wp-content/themes/website/';
}

/*
 * 网站导航菜单参数设置
 *
 */
function website_navbar_setting(){
 wp_nav_menu(
    array('theme_location'  => '',//指定显示的导航名，如果没有设置，则显示第一个
'container'       =>'div', //最外层容器标签名
'container_class' => 'collapse navbar-collapse', //最外层容器class名
'container_id'    => 'example-navbar-collapse',//最外层容器id值
'menu_class'      => 'nav navbar-nav', //ul标签class
'echo'            => true,//是否打印，默认是true，如果想将导航的代码作为赋值使用，可设置为false
'fallback_cb'     => 'wp_page_menu',//备用的导航菜单函数，用于没有在后台设置导航时调用
'before'          => '',//显示在导航a标签之前
'after'           => '',//显示在导航a标签之后
'link_before'     => '',//显示在导航链接名之后
'link_after'      => '',//显示在导航链接名之前
'depth'           => 2,////显示的菜单层数，默认0，0是显示所有层
'walker'          => new wp_bootstrap_navwalker())//调用一个对象定义显示导航菜单
);
    /*展开之后html代码
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li ><a href="/index">首页</a></li>
                            <li><a href="/service">服务项目</a></li>
                            <li><a href="/example"> 精彩案例</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">h5</a></li>
                                </ul>
                            </li>
                            <li><a href="/about">关于我们</a></li>
                            <li><a href="/news">新闻中心</a></li>
                            <li><a href="#">联系我们</a></li>
                        </ul>
                    </div>
    */
}

/*
 * 加载导航菜单
 */
function template_navbar($isexample){
    if($isexample) {
        include "navbar_example.php";
    }else{
        include "navbar_common.php";
    }
}

/*
 * bootstrap 自定义nav设置
 */
class wp_bootstrap_navwalker extends Walker_Nav_Menu {

    /**
     * @see Walker::start_lvl()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param int $current_page Menu item ID.
     * @param object $args
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /**
         * Dividers, Headers or Disabled
         * =============================
         * Determine whether the item is a Divider, Header, Disabled or regular
         * menu item. To prevent errors we use the strcasecmp() function to so a
         * comparison that is not case sensitive. The strcasecmp() function returns
         * a 0 if the strings are equal.
         */
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
        } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
            $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
        } else {

            $class_names = $value = '';

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

            if ( $args->has_children )
                $class_names .= ' dropdown';

            if ( in_array( 'current-menu-item', $classes ) )
                $class_names .= ' active';

            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            $atts = array();
            $atts['title']  = ! empty( $item->title )   ? $item->title  : '';
            $atts['target'] = ! empty( $item->target )  ? $item->target : '';
            $atts['rel']    = ! empty( $item->xfn )     ? $item->xfn    : '';

            // If item has_children add atts to a.
            if ( $args->has_children && $depth === 0 ) {
                $atts['href']           = '#';
                $atts['data-toggle']    = 'dropdown';
                $atts['class']          = 'dropdown-toggle';
                $atts['aria-haspopup']  = 'true';
            } else {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
            }

            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $item_output = $args->before;

            /*
             * Glyphicons
             * ===========
             * Since the the menu item is NOT a Divider or Header we check the see
             * if there is a value in the attr_title property. If the attr_title
             * property is NOT null we apply it as the class name for the glyphicon.
             */
            if ( ! empty( $item->attr_title ) )
                $item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
            else
                $item_output .= '<a'. $attributes .'>';

            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @see Walker::start_el()
     * @since 2.5.0
     *
     * @param object $element Data object
     * @param array $children_elements List of elements to continue traversing.
     * @param int $max_depth Max depth to traverse.
     * @param int $depth Depth of current element.
     * @param array $args
     * @param string $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
            $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    /**
     * Menu Fallback
     * =============
     * If this function is assigned to the wp_nav_menu's fallback_cb variable
     * and a manu has not been assigned to the theme location in the WordPress
     * menu manager the function with display nothing to a non-logged in user,
     * and will add a link to the WordPress menu manager if logged in as an admin.
     *
     * @param array $args passed from the wp_nav_menu function.
     *
     */
    public static function fallback( $args ) {
        if ( current_user_can( 'manage_options' ) ) {

            extract( $args );

            $fb_output = null;

            if ( $container ) {
                $fb_output = '<' . $container;

                if ( $container_id )
                    $fb_output .= ' id="' . $container_id . '"';

                if ( $container_class )
                    $fb_output .= ' class="' . $container_class . '"';

                $fb_output .= '>';
            }

            $fb_output .= '<ul';

            if ( $menu_id )
                $fb_output .= ' id="' . $menu_id . '"';

            if ( $menu_class )
                $fb_output .= ' class="' . $menu_class . '"';

            $fb_output .= '>';
            $fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
            $fb_output .= '</ul>';

            if ( $container )
                $fb_output .= '</' . $container . '>';

            echo $fb_output;
        }
    }
}

/*
 *添加特色图片 即文章略缩图
 */
add_theme_support( 'post-thumbnails' );

/*
 * 自定义设置文章略缩图的大小
 */
add_image_size( 'first-pc-example', 479, 257, true ); 	//首页pcd端案例略缩图
add_image_size( 'index-pc-example', 368, 199, true );	//案例pc端案例略缩图
add_image_size( 'index-h5-example', 219, 395, true );	//案例H5案例略缩图

/*
 * 根据分类名获取分类id
 */
function get_category_id_byname($cat){
    $cat_ID = get_cat_ID($cat);
    return $cat_ID;
    //第二种方式
    // $cat=get_category_by_slug('wordpress'); //获取分类别名为 wordpress 的分类数据
    // $cat_links=get_category_link($cat->term_id); // 通过$cat数组里面的分类id获取分类链接
}

/*
 * 获取子分类列表
 */
function getchild($id)
{
    $result = explode('/',get_category_children($id));
    $childs = array();
    foreach($result as $i)
    {
        if(!empty($i))$childs[] = get_category($i);
    }
    return $childs;
}

/*
 * 设置是否加载常见问题 鼠标悬停js
 */
$index=false;
function is_index($index){
    global $index;
    return $index;
}

/*
 * 设置是否加载tag高亮选择js
 */
$tag_active_js=false;
function is_tag_active($tag_active_js){
    global $tag_active_js;
    return $tag_active_js;
}



/*
 * 文章摘要前30个字符
 */
function sub_airticle_content($str){
    $content= mb_substr($str,0,30,'utf-8');
    return $content;
}

/*
 * 控制摘要字数*/
function new_excerpt_length($length) {
    return 120;
}
add_filter("excerpt_length", "new_excerpt_length");


/*
 * 更改摘要末尾的默认显示样式:
 */
function new_excerpt_more($excerpt) {
    return ' &hellip;' ;
}

add_filter("excerpt_more", "new_excerpt_more");

//加密url
function newbase64_en($str){
    $str = str_replace('/','@',str_replace('+','-',base64_encode($str)));
    return $str;
}

//解密url
function newbase64_de($str){
    $encode_arr = array('UTF-8','ASCII','GBK','GB2312','BIG5','JIS','eucjp-win','sjis-win','EUC-JP');
    $str = base64_decode(str_replace('@','/',str_replace('-','+',$str)));
    $encoded = mb_detect_encoding($str, $encode_arr);
    $str = iconv($encoded,"utf-8",$str);
    return $str;
}


//根据分类id获取所属分类标签
function get_tags_by_cat_id($args) {
    global $wpdb;
    $tags = $wpdb->get_results
    ("
		SELECT DISTINCT terms2.term_id as tag_id, terms2.name as tag_name
		FROM
			$wpdb->posts as p1
			LEFT JOIN $wpdb->term_relationships as r1 ON p1.ID = r1.object_ID
			LEFT JOIN $wpdb->term_taxonomy as t1 ON r1.term_taxonomy_id = t1.term_taxonomy_id
			LEFT JOIN $wpdb->terms as terms1 ON t1.term_id = terms1.term_id,

			$wpdb->posts as p2
			LEFT JOIN $wpdb->term_relationships as r2 ON p2.ID = r2.object_ID
			LEFT JOIN $wpdb->term_taxonomy as t2 ON r2.term_taxonomy_id = t2.term_taxonomy_id
			LEFT JOIN $wpdb->terms as terms2 ON t2.term_id = terms2.term_id
		WHERE
			t1.taxonomy = 'category' AND p1.post_status = 'publish' AND terms1.term_id IN (".$args['categories'].") AND
			t2.taxonomy = 'post_tag' AND p2.post_status = 'publish'
			AND p1.ID = p2.ID
		ORDER by tag_name
	");
    $count = 0;

    if($tags) {
        foreach ($tags as $tag) {
            $mytag[$count] = get_term_by('id', $tag->tag_id, 'post_tag');
            $count++;
        }
    }
    else {
        $mytag = NULL;
    }

    return $mytag;
}




//根据分类名获取所属分类标签
function get_tags_by_cat_name($cat_name) {
    global $wpdb;
    $args=get_cat_ID($cat_name);
    $tags = $wpdb->get_results
    ("
		SELECT DISTINCT terms2.term_id as tag_id, terms2.name as tag_name
		FROM
			$wpdb->posts as p1
			LEFT JOIN $wpdb->term_relationships as r1 ON p1.ID = r1.object_ID
			LEFT JOIN $wpdb->term_taxonomy as t1 ON r1.term_taxonomy_id = t1.term_taxonomy_id
			LEFT JOIN $wpdb->terms as terms1 ON t1.term_id = terms1.term_id,

			$wpdb->posts as p2
			LEFT JOIN $wpdb->term_relationships as r2 ON p2.ID = r2.object_ID
			LEFT JOIN $wpdb->term_taxonomy as t2 ON r2.term_taxonomy_id = t2.term_taxonomy_id
			LEFT JOIN $wpdb->terms as terms2 ON t2.term_id = terms2.term_id
		WHERE
			t1.taxonomy = 'category' AND p1.post_status = 'publish' AND terms1.term_id IN (".$args.") AND
			t2.taxonomy = 'post_tag' AND p2.post_status = 'publish'
			AND p1.ID = p2.ID
		ORDER by tag_name
	");
    $count = 0;

    if($tags) {
        foreach ($tags as $tag) {
            $mytag[$count] = get_term_by('id', $tag->tag_id, 'post_tag');
            $count++;
        }
    }
    else {
        $mytag = NULL;
    }

    return $mytag;
}


/*
 * 设置是否加载选择tabjs
 */
$start_tab=false;
function is_start_tab_select($start_tab){
    global $start_tab;
    return $start_tab;

}


/*
 * 设置是否加载百度地图js
 */
$load_baidumap=false;
function load_baidumap_script($load_baidumap){
    global $load_baidumap;
    return $load_baidumap;
}

/**
 * 新闻分页自定义函数
 * @Param int $range            数字分页的宽度
 * @Return string|empty        输出分页的HTML代码
 */
/*
function news_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if( $max_page >1 ) {
        echo "<div class='news-fenye'>";
        if( !$paged ){
            $paged = 1;
        }
        if( $paged != 1 ) {
            echo "<a href='".get_pagenum_link(1) ."' class='extend' title='跳转到首页'>首页</a>";
        }
        previous_posts_link('上一页');
        if ( $max_page >$range ) {
            if( $paged <$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= ($max_page -ceil(($range/2)))){
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";
                    if($i==$paged)echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
                for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                    echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }
        }else{
            for($i = 1;$i <= $max_page;$i++){
                echo "<a href='".get_pagenum_link($i) ."'";
                if($i==$paged)echo " class='current'";echo ">$i</a>";
            }
        }
        next_posts_link('下一页');
        if($paged != $max_page){
            echo "<a href='".get_pagenum_link($max_page) ."' class='extend' title='跳转到最后一页'>尾页</a>";
        }
        echo '<span>共['.$max_page.']页</span>';
        echo "</div>\n";
    }
}
*/

function news_pagenavi( $range = 4 ) {
    global $paged,$wp_query;
    if ( !$max_page ) {
        $max_page = $wp_query->max_num_pages;
    }
    if( $max_page >1 ) {
        // echo "<div class='news-fenye'>";
        if( !$paged ){
            $paged = 1;
        }
        if( $paged != 1 ) {
            //  echo "<a href='".get_pagenum_link(1) ."' class='extend' title='跳转到首页'>首页</a>";
        }
        // previous_posts_link('上一页');
        if ( $max_page >$range ) {
            if( $paged <$range ) {
                for( $i = 1; $i <= ($range +1); $i++ ) {
                    //  echo "<a href='".get_pagenum_link($i) ."'";
                    // if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= ($max_page -ceil(($range/2)))){
                for($i = $max_page -$range;$i <= $max_page;$i++){
                    // echo "<a href='".get_pagenum_link($i) ."'";
                    // if($i==$paged)echo " class='current'";echo ">$i</a>";
                }
            }elseif($paged >= $range &&$paged <($max_page -ceil(($range/2)))){
                for($i = ($paged -ceil($range/2));$i <= ($paged +ceil(($range/2)));$i++){
                    // echo "<a href='".get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";
                }
            }
        }else{
            for($i = 1;$i <= $max_page;$i++){
                //  echo "<a href='".get_pagenum_link($i) ."'";
                //if($i==$paged)echo " class='current'";echo ">$i</a>";
            }
        }
        next_posts_link('');//下一页
        if($paged != $max_page){
            //    echo "<a href='".get_pagenum_link($max_page) ."' class='extend' title='跳转到最后一页'>尾页</a>";
        }
        // echo '<span>共['.$max_page.']页</span>';
        // echo "</div>\n";
    }
}
/*
 * 判断ie是否加载动画文件
function varified_ie_animation(){
    wp_enqueue_style( 'animate-css', get_theme_file_uri( 'css/animate.css' ) );
    if ($is_IE) {
        wp_style_add_data( 'animate-css', 'conditional', 'gt IE 9' );
    }
}
add_action( 'wp_enqueue_scripts', 'varified_ie_animation' );
 */

/*
 * 添加常见问题自定义添加
 */
add_action('init', 'website_question');
function website_question()
{
    $labels = array(
        'name' => '常见的问题',
        'singular_name' => '常见的问题',
        'add_new' => '添加问题',
        'add_new_item' => '新增一个常见的问题',
        'edit_item' => '编辑问题',
        'new_item' => '新的问题',
        'all_items'   =>  '所有问题' ,
        'view_item' => '查看问题',
        'search_items' => '搜索问题',
        'not_found' => 'not_found',
        'not_found_in_trash' => 'not_found_in_trash',
        'parent_item_colon' => '',
        'menu_name' => '常见的问题'
    );
    $args = array(
        'labels' => $labels,
        'description' => '展示问题',
        'public' => true,
        'menu_position' => 5,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        //'taxonomies'=> array('category','post_tag'),
        'supports' => array('title', 'editor', 'author')
    );
    register_post_type('question', $args);
    }




//添加页面制作费用自定义添加
add_action('init', 'website_function_mode');
function website_function_mode()
{
    $labels = array(
        'name' => '页面制作费用列表',
        'singular_name' => '页面制作费用列表',
        'add_new' => '添加页面制作费用例子',
        'add_new_item' => '新增页面制作费用例子',
        'edit_item' => '编辑页面制作费用例子',
        'new_item' => '新的页面制作费用例子',
        'all_items'   =>  '所有页面制作费用例子' ,
        'view_item' => '查看页面制作费用例子',
        'search_items' => '搜索功能呢模块例子',
        'not_found' => 'not_found',
        'not_found_in_trash' => 'not_found_in_trash',
        'parent_item_colon' => '',
        'menu_name' => '页面制作费用'
    );
    $args = array(
        'labels' => $labels,
        'description' => '展示页面制作费用',
        'public' => true,
        'menu_position' => 5,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        //'taxonomies'=> array('category','post_tag'),
        'supports' => array('title', 'editor', 'author')
    );
    register_post_type('function_mode', $args);
}


/*
 * 添加功能定制自定义添加
  */
add_action('init', 'website_dev_cost');
function website_dev_cost()
{
    $labels = array(
        'name' => '功能定制',
        'singular_name' => '功能定制',
        'add_new' => '添加功能定制例子',
        'add_new_item' => '新增功能定制例子',
        'edit_item' => '编辑功能定制例子',
        'new_item' => '新的功能定制例子',
        'all_items'   =>  '所有功能定制例子' ,
        'view_item' => '查看功能定制例子',
        'search_items' => '搜索功能定制例子',
        'not_found' => 'not_found',
        'not_found_in_trash' => 'not_found_in_trash',
        'parent_item_colon' => '',
        'menu_name' => '功能定制'
    );
    $args = array(
        'labels' => $labels,
        'description' => '展示功能定制例子',
        'public' => true,
        'menu_position' => 5,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        //'taxonomies'=> array('category','post_tag'),
        'supports' => array('title', 'editor', 'author')
    );
    register_post_type('dev_cost', $args);
}

//添加服务器硬件及其他费用自定义添加
add_action('init', 'website_custom_service');
function website_custom_service()
{
    $labels = array(
        'name' => '服务器硬件及其他费用列表',
        'singular_name' => '服务器硬件及其他费用列表',
        'add_new' => '添加服务器硬件及其他费用例子',
        'add_new_item' => '新增服务器硬件及其他费用例子',
        'edit_item' => '编辑服务器硬件及其他费用例子',
        'new_item' => '新的服务器硬件及其他费用例子',
        'all_items'   =>  '所有服务器硬件及其他费用例子' ,
        'view_item' => '查看服务器硬件及其他费用例子',
        'search_items' => '搜索服务器硬件及其他费用例子',
        'not_found' => 'not_found',
        'not_found_in_trash' => 'not_found_in_trash',
        'parent_item_colon' => '',
        'menu_name' => '服务器硬件及其他费用'
    );
    $args = array(
        'labels' => $labels,
        'description' => '展示服务器硬件及其他费用',
        'public' => true,
        'menu_position' => 5,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        //'taxonomies'=> array('category','post_tag'),
        'supports' => array('title', 'editor', 'author')
    );
    register_post_type('custom_service', $args);
}



//文章添加自定义字段 MetaBox 

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( '扩展添加字段', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
          array(
				'name'             => __( '移动端略缩图', 'textdomain' ),
				'id'               => "mobile_img",
				'type'             => 'plupload_image',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 1,
				// Display the "Uploaded 1files" status
				'max_status'       => true,
			),

			     array(
				'name'             => __( '二维码', 'textdomain' ),
				'id'               => "erweima",
				'type'             => 'plupload_image',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 1,
				// Display the "Uploaded 1/2 files" status
				'max_status'       => true,
			),
            array(
                'id'      => 'online_link',
                'name'    => __( '在线预览链接', 'textdomain' ),
                'type'    => 'text',
            ),
    
            array(
                'id'   => 'seo_text',
                'name' => __( 'SEO索引文本', 'textdomain' ),
                'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}




//添加自定义网站前端文本编辑
add_action('admin_menu', 'options_admin_menu');


function options_admin_menu(){
	add_submenu_page( 'options-general.php','网站信息设置', '网站信息设置', 'administrator', 'custom-setting', 'customSetting' );
}




function customSetting(){ ?>
	<div class="wrap">
	<h2>网站页尾信息设置</h2>
	<?php
	if ($_POST['update_options']=='true') {//若提交了表单，则保存变量
		update_option('zcjy-qq', $_POST['zcjy-qq']);
		update_option('zcjy-phone', $_POST['zcjy-phone']);
		update_option('zcjy-address', $_POST['zcjy-address']);
		update_option('zcjy-email', $_POST['zcjy-email']);
		update_option('zcjy-shejishi-intro', $_POST['zcjy-shejishi-intro']);
		update_option('zcjy-baidu', $_POST['zcjy-baidu']);
		//若值为空，则删除这行数据
		if( empty($_POST['zcjy-qq']) ) delete_option('zcjy-qq' );
		if( empty($_POST['zcjy-phone']) ) delete_option('zcjy-phone' );
		if( empty($_POST['zcjy-address']) ) delete_option('zcjy-address' );
		if( empty($_POST['zcjy-email']) ) delete_option('zcjy-email' );
		if( empty($_POST['zcjy-shejishi-intro']) ) delete_option('zcjy-shejishi-intro' );
		if( empty($_POST['zcjy-baidu']) ) delete_option('zcjy-baidu' );
		
		
		update_option('about-phone1', $_POST['about-phone1']);
		update_option('about-phone2', $_POST['about-phone2']);
		update_option('about-email1', $_POST['about-email1']);
		update_option('about-email2', $_POST['about-email2']);
		update_option('about-qq1', $_POST['about-qq1']);
		update_option('about-qq2', $_POST['about-qq2']);
		update_option('about-wechat1', $_POST['about-wechat1']);
		update_option('about-wechat2', $_POST['about-wechat2']);
	
	
	
		if( empty($_POST['about-phone1']) ) delete_option('about-phone1' );
		if( empty($_POST['about-phone2']) ) delete_option('about-phone2' );
		if( empty($_POST['about-email1']) ) delete_option('about-email1' );
		if( empty($_POST['about-email2']) ) delete_option('about-email2' );
	    if( empty($_POST['about-qq1']) ) delete_option('about-qq1' );
		if( empty($_POST['about-qq2']) ) delete_option('about-qq2' );
		if( empty($_POST['about-wechat1']) ) delete_option('about-wechat1' );
		if( empty($_POST['about-wechat2']) ) delete_option('about-wechat2' );


		echo '<div id="message" class="updated below-h2"><p>保存成功！</p></div>';//保存完毕显示文字提示
	}
	//下面开始界面表单
	?>
	<form method="POST" action="">
		<input type="hidden" name="update_options" value="true" />
		<table class="form-table">
		
		
			<tr>
				<th scope="row">联系电话:</th>
				<td><input type="text" name="zcjy-phone" id="zcjy-phone" style="width: 100%;" value="<?php echo get_option('zcjy-phone'); ?>" /></td>
			</tr>
			
			<tr>
				<th scope="row">联系QQ:</th>
				<td><input type="text" name="zcjy-qq" id="zcjy-phone" style="width: 100%;" value="<?php echo get_option('zcjy-qq'); ?>" /></td>
			</tr>
		
			<tr>
				<th scope="row">公司地址:</th>
				<td><input type="text" name="zcjy-address" id="zcjy-address" style="width: 100%;" value="<?php echo get_option('zcjy-address'); ?>" /></td>
			</tr>
			<tr>
				<th scope="row">信息接收邮箱:</th>
				<td><input type="text" name="zcjy-email" id="zcjy-email" style="width: 100%;" value="<?php echo get_option('zcjy-email'); ?>" /></td>
			</tr>
		<tr>
			<th scope="row"><h2>关于我们信息设置</h2></th>
		</tr>
			<tr>
				<th scope="row">联系电话:</th>
				<td><input type="text" name="about-phone1" id="about-phone1" style="width: 100%;" value="<?php echo get_option('about-phone1'); ?>" /></td>
				<td><input type="text" name="about-phone2" id="about-phone2" style="width: 100%;" value="<?php echo get_option('about-phone2'); ?>" /></td>
			</tr>
				<tr>
				<th scope="row">联系邮箱:</th>
				<td><input type="text" name="about-email1" id="about-email1" style="width: 100%;" value="<?php echo get_option('about-email1'); ?>" /></td>
				<td><input type="text" name="about-email2" id="about-email2" style="width: 100%;" value="<?php echo get_option('about-email2'); ?>" /></td>
			</tr>
			<tr>
				<th scope="row">联系QQ:</th>
				<td><input type="text" name="about-qq1" id="about-qq1" style="about-qq1" value="<?php echo get_option('about-qq1'); ?>" /></td>
				<td><input type="text" name="about-qq2" id="about-qq1" style="about-qq2" value="<?php echo get_option('about-qq2'); ?>" /></td>
			</tr>
		
			<tr>
				<th scope="row">联系微信:</th>
				<td><input type="text" name="about-wechat1" id="about-wechat1" style="width: 100%;" value="<?php echo get_option('about-wechat1'); ?>" /></td>
				<td><input type="text" name="about-wechat2" id="about-wechat2" style="width: 100%;" value="<?php echo get_option('about-wechat2'); ?>" /></td>
			</tr>
		
		</table>
		<p><input type="submit" class="button-primary" name="admin_options" value="保存"/></p>
	</form>
	</div>
	<?php
	add_action('admin_menu', 'customSetting');
}




