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

	<div class="am-g am-cf bg_fff">
	  <div class="am-container am-padding-0"> <a href="#"> <img src="/Public/Home/Picture/top_1_1200_500.jpg" class="g_img"> </a></div>
	  <div class="am-container am-padding-0"></div>
	</div>
	<style>
	.txtTip,.yyTit{width:848px; height:340px; letter-spacing:2px; text-align:center; background:url(/Public/Home/Images/yytip.jpg) no-repeat center 0; margin:0 auto; font: normal 32px/48px "微软雅黑"}
	.yyTit{height:175px; font-weight:bold; background:url(/Public/Home/Images/yytit.jpg) no-repeat center 0; margin-top:20px;}
	.txtTip span,.yyTit span{color:#520100; padding-top:222px; display:block}
	.yyTit span{padding-top:132px;}
	.txtTip em{color:#888; font-style:normal; display:none; padding-top:222px; color:#520100;}
	.infoForm{width:1200px;  background:#f2f2f2 url(/Public/Home/Images/yylp.jpg) left bottom no-repeat; height:133px;}
	.infoForm ul{clear:both; overflow:hidden; padding-top:25px; padding-left:145px;}
	.infoForm ul li{float:left; width:132px; margin:0 14px;}
	.infoForm ul li span{display:block; font-size:14px; height:24px; line-height:24px;}
	.infoForm ul li input,.infoForm ul li select{width:100%; text-indent:6px; height:36px; line-height:36px; border:1px solid #a9a9a9}
	.infoForm ul li .grayBtn{width:148px; height:36px; color:#fff; background:#999999; border:0 none; font-size:16px;}
	.yyLine{width:100%; height:6px; background:#ff9393; margin:10px 0;}
	.addressList li{background:#f2f2f2; padding:20px 20px 15px; margin-bottom:34px;}
	.addressList table tr td{vertical-align:top; padding:0 16px;}
	.addressList .addTxt{font-size:25px; color:#3b0908; width:254px;}
	.addressList li p{line-height:40px;}
	.mapbg{width:646px; height:378px; background:url(/Public/Home/Images/mapbg.jpg) no-repeat center 0;}
	.mt15{margin-top:15px;}
	.mt40{margin-top:30px;}
	</style>

	<div class="am-g am-cf bg_fff am-margin-vertical-sm">
	 
	  <div class="am-container am-text-center am-padding-xl">
	  <span class="am-container am-padding-0"><img src="/Public/Home/Picture/shop_list.jpg" border="0" usemap="#Map" class="g_img" /></span>
	    <map name="Map" id="Map">
	      <area shape="rect" coords="146,258,272,385" href="http://reservation.mmxn.com/" />
	      <area shape="rect" coords="330,258,461,394" href="http://reservation.mmxn.com/" />
	      <area shape="rect" coords="506,260,650,393" href="http://reservation.mmxn.com/" />
	      <area shape="rect" coords="701,260,828,389" href="http://reservation.mmxn.com/" />
	      <area shape="rect" coords="868,261,996,389" href="http://reservation.mmxn.com/" />
	    </map> 
	    
	    <div class="mendian">
	     <ul>
	       <li><a href="#" class="a1"></a></li>
	       <li><a href="#" class="a2"></a></li>
	       <li><a href="#" class="a3"></a></li>
	       <li><a href="#" class="a4"></a></li>
	       <li><a href="#" class="a5"></a></li>
	     </ul>
	  </div>
	    <div>
	     <img src="/Public/Home/Picture/nav_title_bg_f1.png" class="g_img"> 
	     </div>
	  </div>
	   
	</div>
	<div class="am-g am-cf bg_efefef" id="f1">
	  <div class="am-container am-text-center am-padding-sm bg_fff">
	    <div class="am-u-sm-12 am-u-md-12 am-padding-0">
	      <div class="am-u-sm-12 am-u-md-6 am-padding-0">
	        <div class="am-u-sm-6 am-u-md-6 am-padding-0">
	       
	       <a href='#' class='qview'><img src='/Public/Home/Picture/1462834132428797388.jpg' data-target='170' class='g_img pic_modal' width='285' height='282' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥1888元</span><del>原价:￥2266元</del></p>        
	        </div>
	        <div class="am-u-sm-6 am-u-md-6 am-padding-0"><a href='#' class='qview'><img src='/Public/Home/Picture/1462834436316162220.jpg' data-target='337' class='g_img pic_modal' width='285' height='282' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥1680元</span><del>原价:￥2016元</del></p></div>
	      </div>
	      <div class="am-u-sm-12 am-u-md-6 am-padding-0"><a href='#' class='qview'><img src='/Public/Home/Picture/1460594560791631535.jpg' data-target='334' class='g_img pic_modal' width='580' height='282' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥1580元</span><del>原价:￥1896元</del></p></div>
	    </div>
	    <div class="am-u-sm-12 am-u-md-12 am-padding-0">
	      <div class="am-u-sm-12 am-u-md-6 am-padding-0">
	        <div class="am-u-sm-6 am-u-md-6 am-padding-0"><a href='#' class='qview'><img src='/Public/Home/Picture/1462835011985155451.jpg' data-target='330' class='g_img pic_modal' width='285' height='574' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥1180元</span><del>原价:￥1416元</del></p></div>
	        <div class="am-u-sm-6 am-u-md-6 am-padding-0">
	          <div class="am-u-sm-12 am-u-md-12 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462835182319699480.jpg' data-target='158' class='g_img pic_modal' width='285' height='285' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥980元</span><del>原价:￥1176元</del></p> </div>
	          <div class="am-u-sm-12 am-u-md-12 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462835102685545953.jpg' data-target='175' class='g_img pic_modal' width='285' height='285' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥680元</span><del>原价:￥816元</del></p> </div>
	        </div>
	      </div>
	      <div class="am-u-sm-12 am-u-md-6 am-padding-0 mystyle1"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462835299443337702.jpg' data-target='331' class='g_img pic_modal' width='580' height='580' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div>
	    </div>
	  </div>
	</div>
	<div class="am-g am-cf bg_fff am-margin-vertical-sm">
	  <div class="am-container am-text-center am-padding-sm"> 
	  <img class="g_img" src="/Public/Home/Picture/nav_title_bg_f2.png">
	</div>
	</div>
	<div class="am-g am-cf bg_efefef" id="f1">
	  <div class="am-container am-text-center am-padding-sm bg_fff floor-2" style="padding-bottom:50px;">
	    <div class="am-u-sm-12 am-u-md-12 am-padding-0">
	      <div class="am-u-sm-12 am-u-md-6 am-padding-0 mystyle1"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462835446827641273.jpg' data-target='171' class='g_img pic_modal' width='580' height='797' border='0' /><div class='img01-b'></div> </div>
	      <div class="am-u-sm-12 am-u-md-6 am-padding-0">
	        <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462836064479536320.jpg' data-target='156' class='g_img pic_modal' width='285' height='285' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥1680元</span><del>原价:￥2016元</del></p> </div>
	        <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462836150870303335.jpg' data-target='174' class='g_img pic_modal' width='285' height='285' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥788元</span><del>原价:￥946元</del></p></div>
	        <div class="am-u-sm-12 am-u-md-12 am-padding-0 mystyle1"> <a href='5' class='qview'><img src='/Public/Home/Picture/1462835975297809278.jpg' data-target='155' class='g_img pic_modal' width='580' height='480' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="am-g am-cf bg_fff am-margin-vertical-sm">
	  <div class="am-container am-text-center am-padding-sm"> <img src="/Public/Home/Picture/nav_title_bg_f3.png" class="g_img"> </div>
	</div>
	<div class="am-g am-cf bg_efefef" id="f1">
	  <div class="am-container am-text-center am-padding-sm bg_fff" style="padding-bottom:25px;">
	    <div class="am-u-sm-12 am-u-md-5 am-padding-0">
	      <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462836715244060038.jpg' data-target='157' class='g_img pic_modal' width='236' height='318' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥788元</span><del>原价:￥946元</del></p> </div>
	      <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462836630835477774.jpg' data-target='159' class='g_img pic_modal' width='236' height='318' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥398元</span><del>原价:￥478元</del></p> </div>
	      <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462836419932918968.jpg' data-target='197' class='g_img pic_modal' width='236' height='288' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥788元</span><del>原价:￥946元</del></p> </div>
	      <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462836363007814465.jpg' data-target='165' class='g_img pic_modal' width='236' height='288' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥788元</span><del>原价:￥946元</del></p> </div>
	      <div class="am-u-sm-12 am-u-md-12 am-padding-0 mystyle1"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462836912945380290.jpg' data-target='172' class='g_img pic_modal' width='482' height='573' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></div>
	    </div>
	    <div class="am-u-sm-12 am-u-md-7 am-padding-0">
	      <div class="am-u-sm-12 am-u-md-12 am-padding-0 mystyle1" > <a href='#' class='qview'><img src='/Public/Home/Picture/1462836816195745096.jpg' data-target='245' class='g_img pic_modal' width='678' height='770' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></div>
	      <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462837077501380108.jpg' data-target='179' class='g_img pic_modal' width='334' height='350' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥268元</span><del>原价:￥322元</del></p> </div>
	      <div class="am-u-sm-6 am-u-md-6 am-padding-0"> <a href='#' class='qview'><img src='/Public/Home/Picture/1462837106242090436.jpg' data-target='182' class='g_img pic_modal' width='334' height='350' border='0' /><div class='img01-b'></div><div class='mark'><em>预约试衣</em><i>领取礼品</i></div></a><p><span>￥268元</span><del>原价:￥322元</del></p> </div>
	    </div>
	  </div>
	</div>
	<div class="am-g am-cf  am-margin-top-sm  bg_fff article_list" id="f1" style="display:none">
	  <div class="am-container am-padding-0">
	    <div class="am-u-sm-12 am-u-md-7 am-padding-sm">
	      <div class="am-panel am-panel-default">
	      
	        <div class="am-panel-hd title_article">
	        
	         <h2>名门新娘</h2>
	        <small><a href="#" style="padding:0px;">更多</a></small>
	        
	        </div>
	        <ul class="am-list am-list-static  am-text-left am-text-sm am-text-middle">
	        
	           <li><a href="article.php?id=32" style="padding:0px;" title="给所有今天心情不好的人"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>给所有今天心情不好的人</a> <span class="am-badge am-badge-danger am-radius">hots</span></li>
	  
	    <li><a href="article.php?id=74" style="padding:0px;" title="婚姻才是你对爱情所有的想象"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>婚姻才是你对爱情所有的想象</a> <span class="am-badge am-badge-danger am-radius">hots</span></li>
	  
	    <li><a href="article.php?id=73" style="padding:0px;" title="告诉你家孩子，不能选的伴侣"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>告诉你家孩子，不能选的伴侣</a> <span class="am-badge am-badge-danger am-radius">hots</span></li>
	  
	    <li><a href="article.php?id=34" style="padding:0px;" title="你还在为挑选婚礼上的歌曲纠结吗"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>你还在为挑选婚礼上的歌曲纠结吗</a> <span class="am-badge am-badge-danger am-radius">hots</span></li>
	  
	    <li><a href="article.php?id=30" style="padding:0px;" title="最好的感情，全靠时间慢慢调养！"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>最好的感情，全靠时间慢慢调养！</a> <span class="am-badge am-badge-danger am-radius">hots</span></li>
	  
	    <li><a href="article.php?id=29" style="padding:0px;" title="教你识别婚纱摄影中的陷阱"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>教你识别婚纱摄影中的陷阱</a> <span class="am-badge am-badge-danger am-radius">hots</span></li>
	  
	          
	        </ul>
	        
	        
	      </div>
	    </div>
	    
	    <div class="am-u-sm-12 am-u-md-5 am-padding-sm">
	      <div class="am-panel am-panel-default">
	      
	      <div class="am-panel-hd title_article">
	        
	         <h2>婚纱礼服</h2>
	        <small><a href="article_cat.php?id=12" style="padding:0px;">更多</a></small>
	        
	        </div>
	        <ul class="am-list am-list-static  am-text-left am-text-sm am-text-middle">
	        
	           <li><a href="article.php?id=56" style="padding:0px;" title="新人福利！盘点全球热门旅拍地注意事项！"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>新人福利！盘点全球热门旅拍地注意...</a> <span class="am-badge am-badge-success am-radius">news</span></li>
	  
	    <li><a href="article.php?id=55" style="padding:0px;" title="伴娘藏婚鞋最全攻略！"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>伴娘藏婚鞋最全攻略！</a> <span class="am-badge am-badge-success am-radius">news</span></li>
	  
	    <li><a href="article.php?id=54" style="padding:0px;" title="婚纱挑选入门守则"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>婚纱挑选入门守则</a> <span class="am-badge am-badge-success am-radius">news</span></li>
	  
	    <li><a href="article.php?id=52" style="padding:0px;" title="百年婚纱进化史"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>百年婚纱进化史</a> <span class="am-badge am-badge-success am-radius">news</span></li>
	  
	    <li><a href="article.php?id=51" style="padding:0px;" title="婚前如何快速瘦十斤"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>婚前如何快速瘦十斤</a> <span class="am-badge am-badge-success am-radius">news</span></li>
	  
	    <li><a href="article.php?id=33" style="padding:0px;" title="婚礼筹备时你应该知道的关于你自身的十大认知"><i class="am-icon-coffee cl_930125 am-margin-right-sm"></i>婚礼筹备时你应该知道的关于你自身...</a> <span class="am-badge am-badge-success am-radius">news</span></li>
	  
	          
	        </ul>
	        
	        
	      
	      
	        
	        
	      </div>
	    </div>
	    
	    
	  </div>
	</div>
	<div style="height:20px; clear:both; background:#fff"></div>
	<div class="line1">
	  <div class="title"><img src="/Public/Home/Picture/line2.png"/></div>
	  <div style="margin:15px 0px;">
	<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="1228" align="center">
	  <tr>
	   <td><img src="/Public/Home/Picture/ad_4_r1_c1.png" width="407" height="593"/></td>
	   <td><img src="/Public/Home/Picture/ad_4_r1_c2.png" width="413" height="593"/></td>
	   <td><img src="/Public/Home/Picture/ad_4_r1_c3.png" width="408" height="593"/></td>
	  </tr>
	</table>
	</div>
	  <div class="title"><img src="/Public/Home/Picture/line3.jpg"/></div>
	</div>
	<div class="line2">
	<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" width="1307" align="center">
	  <tr>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1307" height="1" border="0" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="1" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><img name="a5_r1_c1" src="/Public/Home/Picture/a-5_r1_c1.jpg" width="1307" height="336" border="0" id="a5_r1_c1" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="336" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><img name="a5_r2_c1" src="/Public/Home/Picture/a-5_r2_c1.jpg" width="1307" height="329" border="0" id="a5_r2_c1" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="329" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><img name="a5_r3_c1" src="/Public/Home/Picture/a-5_r3_c1.jpg" width="1307" height="438" border="0" id="a5_r3_c1" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="438" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><img name="a5_r4_c1" src="/Public/Home/Picture/a-5_r4_c1.jpg" width="1307" height="306" border="0" id="a5_r4_c1" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="306" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><img name="a5_r5_c1" src="/Public/Home/Picture/a-5_r5_c1.jpg" width="1307" height="262" border="0" id="a5_r5_c1" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="262" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><img name="a5_r6_c1" src="/Public/Home/Picture/a-5_r6_c1.jpg" width="1307" height="307" border="0" id="a5_r6_c1" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="307" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><img name="a5_r7_c1" src="/Public/Home/Picture/a-5_r7_c1.jpg" width="1307" height="307" border="0" id="a5_r7_c1" alt="" /></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="307" border="0" alt="" /></td>
	  </tr>
	  <tr>
	   <td><a href="yy.php"><img name="a5_r8_c1" src="/Public/Home/Picture/a-5_r8_c1.jpg" width="1307" height="197" border="0" id="a5_r8_c1" alt="" /></a></td>
	   <td><img src="/Public/Home/Picture/spacer.gif" width="1" height="197" border="0" alt="" /></td>
	  </tr>
	</table>
	</div>
	<div class="am-g am-cf am-margin-top-sm  bg_efefef">
	  <div class="am-container am-padding-xl am-text-center bg_ffffff">
	    <ul class="am-avg-md-5 am-avg-sm-5">
	      <li> <img class="b_img" src="/Public/Home/Picture/pic_1_200_90.jpg"></li>
	      <li> <img class="b_img" src="/Public/Home/Picture/pic_2_200_90.jpg"></li>
	      <li> <img class="b_img" src="/Public/Home/Picture/pic_3_200_90.jpg"></li>
	      <li> <img class="b_img" src="/Public/Home/Picture/pic_4_200_90.jpg"></li>
	      <li> <img class="b_img" src="/Public/Home/Picture/pic_5_200_90.jpg"></li>
	    </ul>
	  </div>
	</div>
	<style>
		.page_list .am-padding-sm{text-align:center;}
		.page_list h4{font-size:15px; color:#222; line-height:28px; margin-bottom:18px;}
		.page_list a:hover h4 {color:#f72e26;}
		.page_list p{color:#666}
	</style>
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?055c4ad45be338b80ddab1d09a7194d6";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
	<script src="/Public/Home/Scripts/amazeui.min.js"></script>
	<script src="/Public/Home/Scripts/layer.js"></script> 
	<script type="text/javascript">
	$(document).ready(function(e) {
		$('.pic_modal').on('click',function(){
			var id = $(this).data('target');
			var url = 'quick_view.php?id='+id+'&_'+ Math.random();
			var s_height,if_height, s_width ,if_width;
			if_height = s_height = (document.documentElement.clientHeight-30)/18*17 ;
			s_width = document.documentElement.clientWidth ;
			if_width = s_height;
			if(s_width < if_width){
				if_width = s_width
				if_height = s_width;
			}
			if(if_width > 630){
				if_height = if_height - 120;
			}else if(if_width > 550){
				if_height = if_height - 20;
			}else if(if_width > 300){
				if_height = if_height + 130;
			}else{
				if_height = if_height + 180;
			}
			if_width = 960;
			if_height = 720;
			
			layer.open({
				title :'产品预览',
				type: 2,
				shade: [0.5, '#339999'],
				shadeClose :false,
				move: false,
				area: [if_width +'px', if_height+'px'],
				fix: true, //不固定
				maxmin: false,
				content: [url, 'no'],
				
			});
		});
		
		$('.dropdown-toggle').on('click',function(){
			$(this).siblings('.dropdown-menu').toggle('fast');
		});
		
	});
	</script>
	<script language="javascript">
	<!--
	function validate(type)
	{
		var frm  = document.forms['theForm'];
		var contactor = frm.elements['contactor'] ? Utils.trim(frm.elements['contactor'].value) : '';
		var mobile = frm.elements['mobile'] ? Utils.trim(frm.elements['mobile'].value) : '';
		
		var msg = "";	
		
		if (mobile.length==0)
		{
			msg += "- 手机号不能为空" + '\n';
		}
		else if (mobile.length>0)
		{
		  if (!Utils.isMobile(mobile))
		  {
			msg += "- 您输入的手机号格式不正确" + '\n';
		  }
		}
		if (contactor.length==0)
		{
			msg += "- 联系人不能为空" + '\n';
		}
		
	  
		if (msg.length > 0)
		{
		  alert(msg);
		  return;
		}
		else
		{
		         
				var send_sms_btn =  'send_sms_btn';
				var tips_msg = '公司核名';
	            var data = $('#theForm').serialize()
				$.ajax({
					url:"booking.php?act=save",
					dataType:'json',
					type:"POST",
					data:data+'&type='+type,
					beforeSend:function() {  
				       $("#"+send_sms_btn).html("正在提交...").attr('disabled',true);
					},  
					complete:function(result) {  
					$("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
					},  
					success:function(result){
						
						if(result.err_no==0)
						{
						   alert(result.err_msg);	
					 	   $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
						   document.theForm.reset();
						   $('.close').trigger('click')
						   return;
						}
						else
						{
						   alert(result.err_msg);	
						   $("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
						   return;
						}
					},
					error:function(){
						$("#"+send_sms_btn).html(tips_msg).attr('disabled',false);
						alert("出错了,请刷新页面重试:(");
					}
				});
		  
		}
	}
	-->
	</script> 


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
<div class="am-g am-cf am-margin-0">
  <div class="am-container am-padding-sm ">
    <div class="am-u-sm-12 am-u-md-2 am-text-center"><p style="line-height:40px; font-size:20px; font-weight:700; color:#B9B9B9; "><img src="/Public/Home/Picture/400.png" style="vertical-align:middle; margin-top:-6px; ">4008297758</p></div>
    <div class="am-u-sm-12 am-u-md-7 am-text-center"><p class="am-text-sm"> 版权所有 2010-2014 名门新娘 名门新娘官方旗舰店<br> 并保留所有权利 ICP备案证书号：浙ICP备12016981号 </p></div>
    <div class="am-u-sm-12 am-u-md-3 am-text-center"><p> <span style="display:inline-block; vertical-align:bottom;"><wb:follow-button height="24" width="67" type="red_1" uid="2991975565"></wb:follow-button></span><img style="margin-left:20px;" src="/Public/Home/Picture/sm_83x30.png"> </p></div>
</div>
</div>
</body>
</html>