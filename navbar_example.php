
<!--开始页首导航-->
<div class="banner-index-title">
    <nav class="navbar mynavbar" role="navigation">
        <div class="container-fluid">
		
            <div class="navbar-header">
                <div class="navbar-brand">
                    <a href="/" ><img  class="" src="<?php website_static_file();?>images/logo_blue.png" /> </a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

			<div class="pull-right pull-right-setting">
            <!--开始菜单管理定制-->
            <?php website_navbar_setting();?>
            <!--开始菜单管理定制-->
			</div>
			
			
		
			
        </div>
    </nav>
</div>
<!--结束页首导航-->
