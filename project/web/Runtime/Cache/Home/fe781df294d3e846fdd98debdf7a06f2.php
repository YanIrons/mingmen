<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- bootstrap所需头文件 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="名门新娘婚纱礼服,婚纱礼服,晚礼服,小礼服,礼服旗袍,韩式婚纱,上海婚纱礼服,深圳婚纱礼服,福州婚纱礼服,杭州婚纱礼服店,厦门婚纱礼服馆" />
<meta name="Description" content="一站式婚纱礼服商城，婚纱礼服，晚礼服，旗袍，小礼服等一站式购物，可线下试穿购买，深圳，杭州，福州，厦门，上海等均有实体店铺！" />
<title>名门·新娘商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="/Public/Home/Content/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|名门新娘婚纱礼服官方商城 - O2O婚纱领导品牌" href="feed.php" />
<link href="/Public/Home/Content/css.css" rel="stylesheet" type="text/css" />
<!-- 加的 -->
 <link href="/Public/Home/dist/css/bootstrap.min.css" rel="stylesheet">

 <script src="/Public/Home/dist/js/jquery-1.11.3.min.js"></script>

 <script src="/Public/Home/dist/js/bootstrap.min.js"></script>

<script src="/Public/Home/dist/js/holder.js"></script>

<!--jsQQ聊天-->
<link href="/Public/Home/jqq/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Home/jqq/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/Public/Home/jqq/js/lrtk.js"></script>
<!--js轮播-->
<link href="/Public/Home/jlb/css/style.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="/Public/Home/jlb/css/skitter.css" media="all" rel="stylesheet" />

<script type="text/javascript" src="/Public/Home/jlb/js/jquery-1.6.4.min.js" ></script>
<script type="text/javascript" src="/Public/Home/jlb/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/Public/Home/jlb/js/jquery.skitter.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$(document).ready(function() {
		$(".box_skitter_large").skitter({
			animation: "random",
			interval: 3000,
			numbers: false, 
			numbers_align: "right", 
			hideTools: true,
			controls: false,
			focus: false,
			focus_position: true,
			width_label:'340px', 
			enable_navigation_keys: true,   
			progressbar: false
		});
	});				  
					 
});
</script>


</head>
<body class="am-with-topbar-fixed-top">
<script type="text/javascript" src="/Public/Home/Scripts/jquery-1.9.1.min.js"></script><script type="text/javascript" src="/Public/Home/Scripts/jquery.json.js"></script><script type="text/javascript" src="/Public/Home/Scripts/transport_jquery.js"></script><script type="text/javascript" src="/Public/Home/Scripts/utils.js"></script> 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script> 
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#index#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>


<div class="container-fluid ">

    <ul class="nav nav-tabs importent">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span>&nbsp;&nbsp;商品页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>&nbsp;&nbsp;购物车</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;&nbsp;客户评论</a></li>
            <li><a href="#"></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>&nbsp;&nbsp;社区 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"></a></li>
                <li><a href="#">游戏吧</a></li>
                <li><a href="#">潮流动态</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">开心一刻</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">反馈信息</a></li>
              </ul>
            </li>
          </ul>
 <!--          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> -->
          <ul class="nav navbar-nav navbar-right">
            <li style="margin-right:10px;"><a href="#">登录</a></li>
            <li style="margin-right:10px;"><a href="#">注册</a></li>
            <li style="margin-right:10px;"><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;我的订单</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;关于我们 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo U('Home/Job/index');?>">招聘管理</a></li>
                <!-- <li><a href="#">婚庆推荐</a></li> -->
               
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo U('Home/Recommend/index');?>">优秀婚庆推荐</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;用户 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">登录</a></li>
                <li><a href="#">注册</a></li>
                <li><a href="#">个人中心</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="./Admin/Index/index">后台入口</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<div class="am-g am-cf bg_efefef">
  <div class="am-container am-text-center am-padding-xl"> <img src="/Public/Home/Picture/top_logo.png"> 
  </div>
</div>
<!--<script type="text/javascript" src="/Public/Home/Scripts/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="/Public/Home/Scripts/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/Home/Content/jquery.fancybox-1.3.4.css" media="screen" /> 
<script language="javascript">
$(document).ready(function(){
	
	$(".qview").fancybox();
	
});	
</script>-->

<!-- QQ实时聊天代码 开始 -->
<div class="main-im">
	<div id="open_im" class="open-im">&nbsp;</div>  
	<div class="im_main" id="im_main">
		<div id="close_im" class="close-im"><a href="javascript:void(0);" title="点击关闭">&nbsp;</a></div>
		<a href="http://wpa.qq.com/msgrd?v=3&uin=44671053&site=qq&menu=yes" target="_blank" class="im-qq qq-a" title="在线QQ客服">
			<div class="qq-container"></div>
			<div class="qq-hover-c"><img class="img-qq" src="/Public/Home/jqq/images/qq.png"></div>
			<span> QQ在线咨询</span>
		</a>
		<div class="im-tel">
			<div>售前咨询热线</div>
			<div class="tel-num">400-123-45678</div>
			<div>售后咨询热线</div>
			<div class="tel-num">010-12345678</div>
		</div>
		<div class="im-footer" style="position:relative">
			<div class="weixing-container">
				<div class="weixing-show">
					<div class="weixing-txt">微信扫一扫<br>更多精彩活动</div>
					<img class="weixing-ma" src="/Public/Home/jqq/images/weixing-ma.jpg">
					<div class="weixing-sanjiao"></div>
					<div class="weixing-sanjiao-big"></div>
				</div>
			</div>
			<div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>
<!-- 代码 结束 -->

	<div style="margin-left:10%;width:20%;" >
        <h3 style=" line-height:35px; float:left;">招聘岗位详情介绍</h3> 
    </div>
    <div style="clear:both"><hr></div>
	<div class="container">
        <p><?php echo htmlspecialchars_decode($res); ?> </p>
    </div>
	
	<div class="container">
        <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
        	<thead>
        	<tr role="row">
        		<th>招聘职位</th>
        		<th>招聘人数</th>
        		<th>人事处联系电话</th>
        		<th>人事处联系邮箱</th>
        		<th>工作地点</th>
        		<th>岗位招聘创建时间</th>
        	</tr>
        	</thead>
        	<tbody>
        	<tr class="gradeA odd" role="row">
        		<td><?php echo ($info["work"]); ?></td>
        		<td><?php echo ($info["personnum"]); ?></td>
        		<td><?php echo ($info["job_phone"]); ?></td>
        		<td><?php echo ($info["job_email"]); ?></td>
        		<td><?php echo ($info["job_address"]); ?></td>
        		<td><?php echo ($info["jtime"]); ?></td>
        	</tr>
            </tbody>
        </table>
        <!-- $id=<?php echo ($info["id"]); ?>; -->
        <a href="<?php echo U('Home/Job/resume',array('id'=>$info['id']));?>" class="btn btn-default" type="button" style="margin-top:5px;">投递简历</a>
    </div>  


<div class="am-g am-cf am-margin-top-sm  bg_d4d2d3">
  <div class="am-container am-padding am-text-left bg_d4d2d3 page_list">
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=6">
            <h4>厦门实体店</h4>
            <p style="margin-bottom:12px;">地址：厦门市思明区厦禾路820号帝豪大厦2901室</p>
            <p>电话：0592-3300517</p>
            <p>QQ群：325104579</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=4">
        <h4>杭州实体店</h4>
        <p style="margin-bottom:12px;">地址：杭州市下城区文晖路42号现代置业大厦西楼10楼1003室</p>
        <p>电话：0571-87173525</p>
        <p>QQ群：85497724</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=3">
        <h4>上海实体店</h4>
        <p style="margin-bottom:12px;">地址：徐汇区石龙路569号1号楼304室</p>
        <p>电话：021-51506021</p>
        <p>QQ群：368612346</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=2">
        <h4>深圳实体店</h4>
        <p style="margin-bottom:12px;">地址：福田区车公庙深南大道6025号英龙大厦11楼11-12室</p>
        <p>电话：0755-33983228</p>
        <p>QQ群：162289364</p>
        </a>
    </div>
    <div class="am-u-sm-6 am-u-md-2 am-padding-sm ">
        <a href="http://www.mmxn.com/topic.php?topic_id=5">
        <h4>福州实体店</h4>
        <p style="margin-bottom:12px;">地址：东二环泰禾广场7号楼1520-1523（靠近二化）</p>
        <p>电话：0591-87581700</p>
        <p>QQ群：338577915</p>
        </a>
    </div>
    
 
    
    <div class="am-u-sm-6 am-u-md-2   am-padding-sm  am-text-center">
      <p class="text-center"><img src="/Public/Home/Picture/code.jpg"></p>
      <p class="text-center">扫一扫</p>
      <p class="text-center">更多精彩活动</p>
    </div>
    <div class="am-cf am-margin-bottom am-show-sm-only bg_fff"></div>
  </div>
</div>
<div class="am-g am-cf am-margin-0  foot_bg">
  <div class="page_foot  am-text-center ">
   <ul>
	<li><a href="category.php?id=690"  target="_blank" >精品婚纱</a></li>
	<li>|</li>
	<li><a href="article.php?id=2"  target="_blank" >隐私保护</a></li>
	<li>|</li>
	<li><a href="article.php?id=3"  target="_blank" >咨询热点</a></li>
	<li>|</li>
	<li><a href="article_cat.php?id=3"  target="_blank" >实体店预约</a></li>
	<li>|</li>
	<li><a href="wholesale.php" >批发方案</a></li>
	<li>|</li>
	<li><a href="myship.php" >配送方式</a></li>
	<li>|</li>
	<li><a href="article_cat.php?id=5"  target="_blank" >新手上路 </a></li>
   </ul>
  </div>
</div>
<div class="am-g am-cf am-margin-0" style="background-color:#d4d2d3;">
  <div class="am-container am-padding-sm ">
    <div class="am-u-sm-12 am-u-md-2 am-text-center"><p style="line-height:40px; font-size:20px; font-weight:700; color:#B9B9B9; "><img src="/Public/Home/Picture/400.png" style="vertical-align:middle; margin-top:-6px; ">4008297758</p></div>
    <div class="am-u-sm-12 am-u-md-7 am-text-center"><p class="am-text-sm"> 版权所有 2010-2014 名门新娘 名门新娘官方旗舰店<br> 并保留所有权利 ICP备案证书号：浙ICP备12016981号 </p></div>
    <div class="am-u-sm-12 am-u-md-3 am-text-center"><p> <span style="display:inline-block; vertical-align:bottom;"><wb:follow-button height="24" width="67" type="red_1" uid="2991975565"></wb:follow-button></span><img style="margin-left:20px;" src="/Public/Home/Picture/sm_83x30.png"> </p></div>
	</div>
</div>
</body>
</html>