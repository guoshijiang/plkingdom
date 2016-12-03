<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>优鲜小猴头网站</title>
<meta charset="UTF-8">
<meta name=”viewport” content=”width=device-width,initial-scale=1”>
<link href="<?php echo C('CSS_URL');?>base.css" rel="stylesheet" type="text/css">
<link href="<?php echo C('CSS_URL');?>global.css" rel="stylesheet" type="text/css">
<link href="<?php echo C('CSS_URL');?>index1.css" rel="stylesheet" type="text/css">
<link href="<?php echo C('CSS_URL');?>bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo C('CSS_URL');?>css.css" rel="stylesheet" type="text/css">
<script src="<?php echo C('JS_URL');?>jquery.js"></script>
<script src="<?php echo C('JS_URL');?>bootstrap.min.js"></script>
<script src="<?php echo C('JS_URL');?>header.js"></script>
</head>
<body>
<!--顶部开始-->
	<div class="topnav">
		<div class="topnav_bd">
			<div class="topnav_left">	
			</div>
			<div class="topnav_right fr">
				<div>
					<span>您好，欢迎来到优鲜小猴头！[<a href="login.html">登录</a>] [<a href="register.html">免费注册</a>] </span>
					<span class="line">|</span>
					<span>我的订单</span>
					<span class="line">|</span>
					<span>客户服务</span>
				</div>
			</div>
		</div>
	</div>
<!--顶部结束-->

<!--logo和搜索框开始-->
<div class="logo">
	<!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
	<div class="row">
		<div class="col-md-4">
			<div class="fl">
				<a href="index.html"><img src="<?php echo C('IMG_URL');?>logo.png" alt="优先小猴头"></a>
			</div>
		</div>
		
		<!-- 头部搜索 start -->
	  <div class="col-md-3 search">
	    <div class="input-group">
	      <input type="text" class="form-control" placeholder="请输入您要查询的商品名称">
	      <span class="input-group-btn">
	        <button class="btn btn-default" type="button">点击搜索</button>
	      </span>
	    </div>
	  </div>
	</div>
	<!-- 头部搜索 end -->
</div>
<!--logo和搜索框结束-->

<!--导航条开始-->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">全部分类 <p class="caret"></p></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">葡萄</a></li>
            <li><a href="#">苹果</a></li>
            <li><a href="#">樱桃</a></li>
            <li class="divider"></li>
            <li><a href="#">海鲜</a></li>
            <li class="divider"></li>
            <li><a href="#">等待更新</a></li>
          </ul>
        </li>
        <li><a href="#">首页</a></li>
        <li><a href="#">海产品中心</a></li>
        <li><a href="#">水果市场</a></li>
        <li><a href="#">留言</a></li>
        <li><a href="#">上帝评论中心</a></li>
        <li><a href="#">小猴头简介</a></li>
        <li><a href="#">联系我们</a></li>
      </ul>
      
      
      
      <ul class="nav navbar-nav navbar-right">
        <li>
        	<div class="user fl">
					<dl>
						<dt>
							<em></em>
							<a href="">用户中心</a>
							<b></b>
						</dt>
						<dd>
							<div class="prompt">
								您好，请<a href="">登录</a>
							</div>
							<div class="uclist mt10">
								<ul class="list1 fl">
									<li><a href="">用户信息></a></li>
									<li><a href="">我的订单></a></li>
									<li><a href="">收货地址></a></li>
									<li><a href="">我的收藏></a></li>
								</ul>

								<ul class="fl">
									<li><a href="">我的留言></a></li>
									<li><a href="">我的红包></a></li>
									<li><a href="">我的评论></a></li>
									<li><a href="">资金管理></a></li>
								</ul>

							</div>
							<div style="clear:both;"></div>
							<div class="viewlist mt10">
							</div>
						</dd>
					</dl>
				</div>
        	
        </li>
        <li class="dropdown">
          <div class="cart fl">
						<dl>
							<dt>
								<a href="">购物车</a>
								<b></b>
							</dt>
							<dd>
								<div class="prompt">
									购物车中还没有商品，赶紧选购吧！
								</div>
							</dd>
						</dl>
				</div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--导航条结束-->

<!--轮播图开始-->
<div class="wrap" id="wrap">
    <div class="slide" id="slide">
        <ul id="lunbo">
            <li class="slidepic"><a href="#"><img src="<?php echo C('IMG_URL');?>slidepic1.png" alt=""/></a></li>
            <li class="slidepic"><a href="#"><img src="<?php echo C('IMG_URL');?>slidepic2.png" alt=""/></a></li>
            <li class="slidepic"><a href="#"><img src="<?php echo C('IMG_URL');?>slidepic3.png" alt=""/></a></li>
            <li class="slidepic"><a href="#"><img src="<?php echo C('IMG_URL');?>slidepic4.png" alt=""/></a></li>
            <li class="slidepic"><a href="#"><img src="<?php echo C('IMG_URL');?>slidepic5.png" alt=""/></a></li>
        </ul>
        <div class="arrow" id="arrow">
            <a href="javascript:;" class="prev"></a>
            <a href="javascript:;" class="next"></a>
        </div>
    </div>
</div>
<script src="<?php echo C('JS_URL');?>animate.js"></script>
<script src="<?php echo C('JS_URL');?>my2.js"></script>
<!--轮播图结束-->


<div class="container">
<!--产品专区开始-->
<div class="row">
  <div class="col-xs-3 col-md-3">
    <a href="#" class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan1.png" alt="">
    </a>
  </div>
 <div class="col-xs-3 col-md-3">
    <a href="#" class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="">
    </a>
  </div>
  <div class="col-xs-3 col-md-3">
    <a href="#" class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan3.png" alt="">
    </a>
  </div>
  <div class="col-xs-3 col-md-3">
    <a href="#" class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="">
    </a>
  </div>
</div>
<!--产品专区结束-->

<!--分区产品展示开始-->
<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-home">F1海产品</span>
</button>
<div class="row">
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhaun4.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
  
</div>


<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-home">F2水果</span>
</button>
<div class="row">
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
   <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo C('IMG_URL');?>zhuan2.png" alt="...">
      <div class="caption">
        <p><a href="#" class="btn btn-primary" role="button">23.00购买</a> <a href="#" class="btn btn-default" role="button">查看商品详情</a></p>
      </div>
    </div>
  </div>
  
</div>
<!--分区产品展示结束-->
<!--首页底部-->
等待模板，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，，
<!--首页底部-->


</div>
</body>
</html>