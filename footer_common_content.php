<!--常见问题-->
<div class="mt80 mb30 align-center wow fadeInUp">
    <h1>常见的问题</h1>
</div>

<div class="container" style="margin-bottom:30px;">
<div class="row">
<div class="col-md-6 wow fadeInUp">
    <?php
//获取自定义常见问题类型列表
    $args = array( 'post_type' => 'question', 'posts_per_page' => -1 );
    $loop = new WP_Query( $args );
	$times=0;
    while ( $loop->have_posts() ) : $loop->the_post();
	$times++;
    ?>
<?php endwhile;?>

 <?php
//获取自定义常见问题类型列表
    $args = array( 'post_type' => 'question', 'posts_per_page' => $times/2 ,'order' => 'ASC');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>

<div class="banner-index-question">
<hr  align="left" />

<div class="banner-index-question-content">

<h4 ><?php echo the_title();?></h4>
<div  id="accordion" >
<!--    style="float: left;width: 15%;display: inline;text-align: right;"-->


        
                <a  class="banner-index-question-icon-close"  href="#collapse<?php echo $post->ID;?>" id="#collapse<?php echo $post->ID;?>" data-toggle="collapse" data-parent="#accordion">
                </a>
          

    <div id="collapse<?php echo $post->ID;?>" class="panel-collapse collapse">
        <p class="panel-body"><?php echo the_content();?></p>
    </div>

    </div>


</div>

</div>


<?php endwhile;?>
</div>


<div class="col-md-6 wow fadeInUp">
    <?php
//获取自定义常见问题类型列表
    $args = array( 'post_type' => 'question', 'posts_per_page' => $times/2,'order' => 'DESC' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>


<div class="banner-index-question">
<hr  align="left" />

<div class="banner-index-question-content">

<h4 ><?php echo the_title();?></h4>
<div  id="accordion" >
<!--    style="float: left;width: 15%;display: inline;text-align: right;"-->
    

            <h4 >
                <a  class="banner-index-question-icon-close"  href="#collapse<?php echo $post->ID;?>" id="#collapse<?php echo $post->ID;?>" data-toggle="collapse" data-parent="#accordion">
                </a>
            </h4>

    <div id="collapse<?php echo $post->ID;?>" class="panel-collapse collapse">
        <p class="panel-body"><?php echo the_content();?></p>
    </div>

    </div>


</div>

</div>


<?php endwhile;?>
</div>
</div>
</div>
<!--常见问题-->

<!--怎样开始合作-->
<div class="communication ">
	<div class="container">
		<div class="row">

    <div class="col-md-4 col-lg-4  wow fadeInUp">
        <div class="communication_content">
            <h1 class="pc-left-other-center">怎样开始合作?</h1>
            <p>首先让我们建立起联系吧,请放心我们不会泄露您的信息，更不会骚扰您</p>
        </div>
    </div>
    <div class="col-md-7 col-sm-offset-3 col-md-offset-1 communication_icon hidden-xs wow fadeInUp">

        <a class="baner-index-content-button-communication" href="tencent://message/?Menu=yes&uin=653510&Site=80fans&Service=300&sigT=45a1e5847943b64c6ff3990f8a9e644d2b31356cb0b4ac6b24663a3c8dd0f8aa12a545b1714f9d45" target="_blank">QQ:653510</a>
        <a  class="baner-index-content-button-communication-wechat" href="">微信:18171390726 <img src="http://zcjy2.wiswebs.com/wp-content/themes/website/images/wechat-num.jpg"  /> </a>
       <a class="baner-index-content-button-communication" href="">电话:18171390726</a>


    </div>
	
	


	
	<div class="visible-xs" style="margin:0 auto;text-align:center">

        <a class="baner-index-content-button-communication" href="mqqwpa://im/chat?chat_type=wpa&uin=653510&version=1&src_type=web&web_src=bjhuli.com" target="_self">QQ:653510</a>
  <br>
        <a class="baner-index-content-button-communication" href="weixin://">微信:18171390726</a>
  <br>
       <a class="baner-index-content-button-communication" href="tel:18171390726">电话:18171390726</a>


		</div>
		</div>
	</div>
</div>

<!--怎样开始合作-->