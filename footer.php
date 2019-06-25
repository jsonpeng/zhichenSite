<!--网页底部-->
<div class="website_footer1"></div>

<div class="website_footer2">
    <div class="container website_footer2-container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <p >关于我们</p>
                <ul >
                    <li><a href="http://wiswebs.com/%E9%A1%B9%E7%9B%AE%E5%BC%80%E5%8F%91%E6%B5%81%E7%A8%8B/" target="_blank" style="color:#888;">项目开发流程</a></li>
                    <li><a href="http://wiswebs.com/%E5%A2%83%E5%86%85%E7%BD%91%E7%AB%99%E5%A4%87%E6%A1%88%E6%B5%81%E7%A8%8B/" target="_blank" style="color:#888;">境内网站备案流程 </a></li>
                    <li><a href="http://wiswebs.com/%E6%99%BA%E7%90%9B%E4%BD%B3%E6%BA%90%E6%9C%8D%E5%8A%A1%E5%8D%8F%E8%AE%AE/" target="_blank" style="color:#888;">智琛佳源服务协议</a></li>
                    <li><a href="javascript::" style="color:#888;">2008-2017</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-3">
                <p>联系我们</p>
                <ul>
                    <li><a href="tel:<?php echo get_option('zcjy-phone'); ?>" target="_blank" style="color:#888;"><img src="<?php website_static_file();?>images/footer_icon_5.png">&nbsp;电话:<?php echo get_option('zcjy-phone'); ?></a></li>
                    <li class="hidden-xs"><a href="tencent://message/?Menu=yes&uin=<?php echo get_option('zcjy-qq'); ?>&Site=80fans&Service=300&sigT=45a1e5847943b64c6ff3990f8a9e644d2b31356cb0b4ac6b24663a3c8dd0f8aa12a545b1714f9d45" target="_blank" style="color:#888;"><img src="<?php website_static_file();?>images/footer_icon_6.png">&nbsp;QQ:<?php echo get_option('zcjy-qq'); ?></a></li>
					<li class="visible-xs"><a href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo get_option('zcjy-qq'); ?>&version=1&src_type=web&web_src=bjhuli.com" target="_blank" style="color:#888;"><img src="<?php website_static_file();?>images/footer_icon_6.png">&nbsp;QQ:<?php echo get_option('zcjy-qq'); ?></a></li>
                    <li><a href="mailto:<?php echo get_option('zcjy-email'); ?>" target="_blank" style="color:#888;"><img src="<?php website_static_file();?>images/footer_icon_7.png">&nbsp;邮箱:<?php echo get_option('zcjy-email'); ?></a></li>
                    <li><img src="<?php website_static_file();?>images/footer_icon_8.png">&nbsp;<?php echo get_option('zcjy-address'); ?></li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-3">
                <p class="back-top" onclick="backtotop()">返回顶部</p>

                <div class="website_footer2_wechat">
                <img src="<?php website_static_file();?>images/wechat-common-num.jpg" style="margin-top: 5px">
                 </div>
                <p class="footer-wechat">--微信公众号--</p>
            </div>
        </div>
    </div>
</div>
<!--网页底部-->

</body>



<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?cae83abdd327cf8c3a7cf66bbaf92549";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script type="text/javascript">
        //自动加载返回顶部插件
        $(document).ready(function () {
            $.goup({
                trigger: 100,
                bottomOffset: 150,
                locationOffset: 100,
                titleAsText: true
            });
        });

   function backtotop(){
      window.scrollTo(0,0);
   }

</script>


<?php if(is_tag_active($tag_active_js)){?>
<script type="text/javascript">
    /*
    案例tag点击高亮
    $(".row  .tag-active").click(function() {
        $(".row .tag-active").addClass("dropdown-toggle");
        $(".row .tag-active").removeClass("tag-active");
        $(this).addClass("dropdown-toggle");
        $(this).removeClass("tag-active");
    });
     */
    $(function () {
        $('.row a:eq(0)').tab('show');
        $('.row a:eq(0)').addClass("tag-active");
        $('.row a:eq(0)').removeClass("dropdown-toggle");
    });
    $(".row .dropdown-toggle").click(function(){
        //移除其他已经高亮的样式
        $(".row .tag-active").addClass("dropdown-toggle");
        $(".row .tag-active").removeClass("tag-active");
        //加入当前高亮
        $(this).addClass("tag-active");
        $(this).removeClass("dropdown-toggle");
    });
</script>
<?php }?>

<script type="text/javascript">
 $(function () {
	 $('.example-category .mynavbar .dropdown-menu').append('<li style="left: 48px;position:absolute;top: -12px;">'+'<img src="http://zcjy2.wiswebs.com/wp-content/themes/website/images/drop-arrow.png" style="width:auto;padding:0;margin:0;">'+'</li>');
 });
</script>

<?php if(is_index($index)){ ?>
<script type="text/javascript">
var toContent=$(".banner-index-question-icon-close").attr("id");
 $("#accordion a").click(function(){
	 if($(this).is('.banner-index-question-icon-close')){
		   $(this).addClass("banner-index-question-icon-open");
		   $(this).removeClass("banner-index-question-icon-close");
	 }else{
			$(this).addClass("banner-index-question-icon-close");
		   $(this).removeClass("banner-index-question-icon-open");
	 } 
 });
</script>
<?php }?>



<?php if(load_baidumap_script($load_baidumap)){?>
<!-- load BaiDuMap-->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=a0oGNccpI3jKzqLYSokp1r9m28sm5myU"></script>
    <script type="text/javascript">
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMarker();//向地图中添加marker
        }
        
       //创建地图函数：
		 function createMap(){
		  var map = new BMap.Map("OurBaiduMap");//在百度地图容器中创建一个地图
		  var point = new BMap.Point(114.428771,30.505644);//定义一个中心点坐标
		   var myGeo = new BMap.Geocoder();
			// 将地址解析结果显示在地图上,并调整地图视野
					map.centerAndZoom(point, 16);//设定地图的中心点和坐标并将地图显示在地图容器中
					map.addOverlay(new BMap.Marker(point));
					map.addControl(new BMap.NavigationControl());               // 添加平移缩放控件
					map.addControl(new BMap.ScaleControl());                    // 添加比例尺控件
					map.addControl(new BMap.OverviewMapControl());              //添加缩略地图控件
					map.enableScrollWheelZoom();                            //启用滚轮放大缩小
		  window.map = map;//将map变量存储在全局
		 }
        //地图事件设置函数：
        function setMapEvent(){
            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
            map.enableKeyboard();//启用键盘上下左右键移动地图
        }
        //地图控件添加函数：
        function addMapControl(){
            //向地图中添加缩放控件
            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
            map.addControl(ctrl_nav);
            //向地图中添加缩略图控件
            var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
            map.addControl(ctrl_ove);
            //向地图中添加比例尺控件
            var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            map.addControl(ctrl_sca);
        }
        //标注点数组
        var markerArr = [{title:"大数据",content:"我的备注",point:"118.758986|31.978442",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
        ];
        //创建marker
        function addMarker(){
            for(var i=0;i<markerArr.length;i++){
                var json = markerArr[i];
                var p0 = json.point.split("|")[0];
                var p1 = json.point.split("|")[1];
                var point = new BMap.Point(p0,p1);
                var iconImg = createIcon(json.icon);
                var marker = new BMap.Marker(point,{icon:iconImg});
                var iw = createInfoWindow(i);
                var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                marker.setLabel(label);
                map.addOverlay(marker);
                label.setStyle({
                    borderColor:"#808080",
                    color:"#333",
                    cursor:"pointer"
                });
                (function(){
                    var index = i;
                    var _iw = createInfoWindow(i);
                    var _marker = marker;
                    _marker.addEventListener("click",function(){
                        this.openInfoWindow(_iw);
                    });
                    _iw.addEventListener("open",function(){
                        _marker.getLabel().hide();
                    })
                    _iw.addEventListener("close",function(){
                        _marker.getLabel().show();
                    })
                    label.addEventListener("click",function(){
                        _marker.openInfoWindow(_iw);
                    })
                    if(!!json.isOpen){
                        label.hide();
                        _marker.openInfoWindow(_iw);
                    }
                })()
            }
        }
        //创建InfoWindow
        function createInfoWindow(i){
            var json = markerArr[i];
            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
            return iw;
        }
        //创建一个Icon
        function createIcon(json){
            var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
            return icon;
        }
        initMap();//创建和初始化地图
    </script>


<?php }?>




</html>
