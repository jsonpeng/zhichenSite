![company-logo](http://zcjy2.wiswebs.com/wp-content/themes/website/images/logo-min.png)

# 智琛佳源网站主题改版 #
--------------------
一个wordpress主题通过`php+html+css`编写为新的网站改版,可通过进入wordpress的`wp-admin`进入后台在主题中切换

## 下载代码 ##
--------------------  
* `git clone https://git.oschina.net/zcjy/website.git`  
* `ssh:git@git.oschina.net:zcjy/website.git` 


## 使用代码 / 部署上线 ##
> 前置条件:   
* `linux`服务器  
* 配置安装好php环境及mysql数据库
* 配置安装好git
* zip/tar.gz格式的`wordpress`安装包([点击下载](https://cn.wordpress.org/wordpress-4.7.4-zh_CN.zip))  

**使用**：  

    cd /你的静态目录/
如果是`zip格式`的wordpress安装包,使用  
    
    unzip 安装包名
接下来
    
    cd wordpress/wp-content/themes/
    git clone https://git.oschina.net/zcjy/website.git
  
此时主题目录和wordpress已经成功安装,接下来需要配置`nginx`服务器,将`你的自定义`.conf放置到指定nginx指定的目录，使用命令  
    
    mv 你的自定义.conf  /etc/nginx/conf.d/
接下来指定域名绑定到指定IP(服务器提供商提供的链接绑定)，其中conf的大致格式为  

    server{
	listen 80;
	#listen [::]:80 ipv6only=on default_server;
	server_name zcjy2.wiswebs.com（指定域名）;
        set $root_path '/var/www/website/zhichen'(你的wordpress安装目录);
	root $root_path;
	 
	index index.php;

	location / {
		try_files $uri $uri/ /index.php?$query_string;
	}
	#try_files $uri $uri/ @rewrite;

	#location @rewrite {
	#		rewrite ^/(.*)$ /index.php?_url=/$1;
	#}

	location ~ \.php {
			fastcgi_pass 127.0.0.1:9000;
			fastcgi_index /index.php;

			include /etc/nginx/fastcgi_params;

			fastcgi_split_path_info       ^(.+\.php)(/.+)$;
			fastcgi_param PATH_INFO       $fastcgi_path_info;
			fastcgi_param PATH_TRANSLATED $document_root$fastcgi_path_info;
			fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
	}

	location ~* ^/(css|img|js|flv|swf|download)/(.+)$ {
			root $root_path;
	}

	location ~ /\.ht {
			deny all;
	}
        }

    

## 网站预览 ##
![company-logo](http://zcjy2.wiswebs.com/wp-content/themes/website/images/index.png)
>**网站主页:**[http://zcjy2.wiswebs.com](http://zcjy2.wiswebs.com)  

>**网站后台:**[http://zcjy2.wiswebs.com/wp-admin](http://zcjy2.wiswebs.com/wp-admin)(后台账号root,密码root)


## 网站菜单结构 ##
--------------------  
![菜单](http://zcjy2.wiswebs.com/wp-content/themes/website/images/caidan.png)


## 代码结构 ##
网站所有静态文件
* [css](http://git.oschina.net/zcjy/website/blob/master/css)
* [images](http://git.oschina.net/zcjy/website/blob/master/images)  
* [js](http://git.oschina.net/zcjy/website/blob/master/js)  

网站公有部分
* 头部 [header.php](http://git.oschina.net/zcjy/website/blob/master/header.php)
* 导航栏
 * 公共导航栏[navbar_common.php](http://git.oschina.net/zcjy/website/blob/master/navbar_common.php)  
 * 案例导航栏[navbar_example.php](http://git.oschina.net/zcjy/website/blob/master/navbar_example.php)
* 尾部 [footer.php](http://git.oschina.net/zcjy/website/blob/master/footer.php)


首页 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [index.php](http://git.oschina.net/zcjy/website/blob/master/index.php)

服务项目页面 [page-service.php](http://git.oschina.net/zcjy/website/blob/master/page-service.php)

&nbsp;&nbsp;&nbsp;&nbsp;--网站建设页面&nbsp;[page-service.php](http://git.oschina.net/zcjy/website/blob/master/page-service.php)  

&nbsp;&nbsp;&nbsp;&nbsp;--H5页面&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[page-h5.php](http://git.oschina.net/zcjy/website/blob/master/page-h5.php)  


精彩案例页面&nbsp;[page-example.php](http://git.oschina.net/zcjy/website/blob/master/page-example.php)  

&nbsp;&nbsp;&nbsp;&nbsp;--pc端案例&nbsp;[page-example-pc.php](http://git.oschina.net/zcjy/website/blob/master/page-example-pc.php)  

&nbsp;&nbsp;&nbsp;&nbsp;--H5案例&nbsp;&nbsp;&nbsp;[page-example-h5.php](http://git.oschina.net/zcjy/website/blob/master/page-example-h5.php)        
             
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--pc端及H5案例子页面模板 [single.php](http://git.oschina.net/zcjy/website/blob/master/single.php)(判断模板类型是否是案例或者新闻)  
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-案例子页面[single-example.php](http://git.oschina.net/zcjy/website/blob/master/single-example.php)(显示)

关于我们页面&nbsp;[page-about.php](http://git.oschina.net/zcjy/website/blob/master/page-about.php)  

新闻中心页面&nbsp;[page-news.php](http://git.oschina.net/zcjy/website/blob/master/page-news.php)  

&nbsp;&nbsp;&nbsp;&nbsp;--新闻子页面&nbsp;[single.php](http://git.oschina.net/zcjy/website/blob/master/single.php)(判断模板类型是否是案例或者新闻)   
  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-新闻页面&nbsp;[single-news.php](http://git.oschina.net/zcjy/website/blob/master/single-news.php)(显示)  


##  特别注意 ##
* 网页中除案例数字以为统一字体使用`微软雅黑`

* 网页正文中所有标题下的描述文字字体以及导航文字大小为`16px` 并且需要居中

* 小p的描述文字颜色统一为`#999` 

* 移动端字体描述宽度尽量使用`100%`  

* 文字换行避免使用`br`