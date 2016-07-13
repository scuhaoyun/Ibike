<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script type="text/javascript" src="__JS__/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="__JS__/scrolltopcontrol.js"></script>
<script type="text/javascript" src="__JS__/ajax.js"></script>
<style type="text/css">
* {
	margin:0px;
	padding:0px;
	outline:none;
}
a {
	text-decoration:none;
	outline:none;
}
#home_top a {
	color:green;
}
#home_top {
	width:1366px;
	height:30px;
	background-color:#F7F7F7;
	border:1px #CCCCCC solid;
	vertical-align:middle;
	position:relative;
}
#home_top_left, #home_top_right {
	width:45%;
	text-indent:50px;
	vertical-align:middle;
	margin-top:6px;
	font-size:14px;
	display:inline-block;
}
#home_top_right {
	position:absolute;
	top:2px;
	right:-20px;
}
#home_top_middle {
	width:1366px;
	position:relative;
	display:block;
	height:90px;
}
#weather {
	position:absolute;
	top:2px;
	right:10px;
}
#home_middle_left {
	margin-left:120px;
	vertical-align:middle;
	width:60%;
	display:inline-block;
	float:left;
}
#home_top_nav {
	width:1366px;
	height:35px;
	background:url(__IMAGE__/home_nav.png) repeat-x;
	z-index:1;
	overflow:hidden;
}
#home_top_bottom {
	width:1366px;
	height:auto;
	
}
#nav_main {
	width:850px;
	margin-left:170px;
	font-size:18px;
	display:inline;
	height:35px;
	margin-bottom:0px;
}
#nav_main li a {
	text-decoration:none;
	color: #fff;
	display:block;
	text-transform:capitalize;
	padding:8px 20px;
	height:19px;
	font-size:18px;
}
.current_tab {
	font-size:20px;
	background:url(__IMAGE__/nav_B.gif) repeat-x;
}
#nav_main li a:hover {
	color:#fff;
	background:url(__IMAGE__/nav_B.gif) repeat-x;
}
#nav_main li {
	list-style:none;
	float:left;
	height:35px;
	vertical-align:middle;
}
a, img {
	border:0;
}
#contact_us{ width:260px;height:26px; display:inline; float:right;z-index:99999;background:url(__IMAGE__/contact.png) no-repeat;padding-top:3px; overflow:hidden; padding-left:35px; margin-top:4px; }
.QQbox {
	left:3px;
	position:absolute;
	top:145px;
	width:170px;
	z-index:999999;
}
.QQbox .press {
	border:medium none;
	cursor:pointer;
	height:136px;
	left:0;
	position:absolute;
	width:26px;
	z-index:999999;
}
.QQbox .Qlist {
	left:0;
	width:170px;
	z-index:999999;
}
.QQbox .Qlist .b {
	float:left;
	font-size:1px;
	height:6px;
	width:170px;
}
.QQbox .Qlist .infobox {
	background:#BDC5CB;
	color:#000000;
	font-weight:800;
	line-height:14px;
	padding:5px;
	text-align:center;
	z-index:999999;
}
.QQbox .Qlist .t, .QQbox .Qlist .b, #divMenu {
	background:url(__IMAGE__/online.png) no-repeat;
}
.QQbox .Qlist .t {
	background-position:-26px top;
	height:34px;
}
.QQbox .Qlist .b {
	background-position:-26px -68px;
	height:9px;
	overflow:hidden;
}
.QQbox .Qlist .con {
	border:1px solid #ccc;
	border-top:none;
	border-bottom:none;
	padding:10px 0;
	width:168px;
	background:#fff;
}
.QQbox .Qlist .con ul li {
	padding:5px 5px 0 15px;
}
#divMenu {
	background-position:0 0;
	width:26px;
	height:136px;
	cursor:pointer;
}
#divQQbox {
	z-index:9999;
}
.searchbox {
	background:url(__IMAGE__/searchbg.png) no-repeat;
	width:400px;
	height:46px;
	position:absolute;
	top:35px;
	left:490px;
}
.searchbox input {
	color:#999;
	font-size:13px;
	font-family:"宋体";
	width:360px;
	margin:7px 0 0 8px;
	float:left;
	display:inline-block;
	border:0;
	background:none;
	padding:2px 0 2px 16px;
	height:16px;
	line-height:1.4;
}
.searchbox input.focus_text {
	color:#333;
	background:#fff;
	width:308px;
	padding-left:0;
}
.searchbox input.blur_text {
	color:#999;
}
.searchbox .btnimg {
	border:0;
	background:none;
	cursor:pointer;
	margin:0;
	padding:0;
	width:82px;
	line-height:999em;
	height:34px;
	overflow:hidden;
	float:right;
}
#my_shopcar {
	width:176px;
	height:31px;
	display:inline-block;
	float:right;
	margin-top:35px;
	margin-right:130px;
	position:relative;
	z-index:99999;
}
#shopcar_img {
	width:176px;
	height:31px;
	position:absolute;
	top:0px;
	right:0px;
	z-index:99999;
	border:1px solid #CCCCCC;
}
#shopcar_goods {
	width:350px;
	height:auto;
	max-height:500px;
	overflow:hidden;
	position:absolute;
	top:31px;
	right:0px;
	border:1px solid #CCCCCC;
	z-index:99998;
	background:#fff;
	display:none;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	
	var keywords = "请输入搜索条件";

    $("#birds").val(keywords).bind("focus",function(){
		if (this.value == keywords){
			this.value = "";
			this.className = "focus_text"
		}
	}).bind("blur", function(){
		if (this.value == "") {
			this.value = keywords;
			this.className = "blur_text"
		}
	});
	$("#my_shopcar").hover(
	     function(){
		    $("#shopcar_img").css("border-bottom","none");
		    $("#shopcar_image").attr("src","__IMAGE__/shopcar2.png");
		    $("#shopcar_goods").show("middle");
			
			
		 }, 
		 function(){
			$("#shopcar_image").attr("src","__IMAGE__/shopcar3.png");
			$("#shopcar_img").css("border-bottom","1px solid #CCCCCC");
			$("#shopcar_goods").hide("middle");
		 });
		 $("#go_pay").hover(function(){$(this).attr("src","__IMAGE__/go_pay1.png");},function(){$(this).attr("src","__IMAGE__/go_pay.png");});
		 
		 $(".goods_del_but").click(function(){
		 var ajax=Ajax();
		 var goods_num=$(this).attr("name");
		ajax.post("__APP__/Shopcar/goods_delete", {goods_num:goods_num}, function(data){document.location.reload();});
	});
	
});
</script>
<body>
<div id="home_top">
  <div id="home_top_left">您好，欢迎光临四川大学自行车网！
    <?php if($_SESSION['username']): ?><font color="green"><?php echo ($_SESSION['username']); ?>&nbsp;&nbsp;&nbsp;<a href="#dfj" onclick="login_exit()">[注销]</a>&nbsp;&nbsp;&nbsp;</font>
      <?php else: ?>
      <a href="__APP__/Login/index">[登录]</a>|<a href="__APP__/Login/index">[注册]</a>&nbsp;&nbsp;&nbsp;<?php endif; ?>
    <a href="__APP__/Order/my_order">我的订单</a>&nbsp;&nbsp;&nbsp;<a href="#df" onClick="addfavorite()" title="网址">收藏本站</a></div>
  <div id="home_top_right"><a href="#">网站导航</a>&nbsp;&nbsp;&nbsp;<a href="#">帮助中心</a>&nbsp;&nbsp;&nbsp;<a href="#">为您推荐</a></div>
  <span id="weather">
  <IFRAME style="MARGIN-TOP: 1px" height=22 marginHeight=0 src="http://tianqi.xixik.com/cframe/10" frameBorder=0 width=300 allowTransparency name=weather_inc marginWidth=0 scrolling=no></IFRAME>
  </span> </div>
  </div>
<div id="home_top_middle">
  <div id="home_middle_left"><img src="__IMAGE__/home_top_logo.jpg" />
    <div class="searchbox">
      <form enctype="multipart/form-data" action="__APP__/Search/index"  method="POST">
        <input type="text" id="birds" name="search" class="stext" value="">
        <input class="btnimg" type="submit" value="" />
      </form>
    </div>
    <!--<img src="__IMAGE__/search_test.png" /><img style="position:absolute; right:180px;" src="__IMAGE__/shopcar.png" /></div>-->
  </div>
  <div id="my_shopcar">
    <div id="shopcar_img"><a href="__APP__/Shopcar/index/"><img id="shopcar_image" src="__IMAGE__/shopcar3.png" /></a></div>
    <div id="shopcar_goods">
      <?php if(!$shopcar_list): ?><div style="width:80%; height:40px; text-align:center; vertical-align:middle; margin:20px auto;">
          <h4 style="font-size:14px;">您的购物车中还没有商品！</h4>
          <h4 style="font-size:14px;">赶快再去逛逛吧！</h4>
        </div>
        <?php else: ?>
        <table cellspacing="0"  cellpadding="0" style="width:100%; height:auto; text-align:center; vertical-align:middle; margin-top:5px;">
          <?php if(is_array($shopcar_list)): foreach($shopcar_list as $key=>$shopcar): ?><tr style="height:70px;" class="goods_list_td">
              <td><img height="60px" width="95px" src="__UPLOAD__/s_<?php echo ($shopcar['goods_pic'][0]); ?>" style=" padding-left:10px;"/></td>
              <td><a href="__APP__/Index/test?goods_num=<?php echo ($shopcar['goods_num']); ?>" style="font-size:12px;"><?php echo ($shopcar['goods_name']); ?></a></td>
              <td width="21%"><font color="#FF0000" style="font-size:13px;">
                <?php if($shopcar['time_unit']==''): ?>$<?php echo ($shopcar['sale_price']); ?>
                  <?php else: ?>
                   <p>$<?php echo ($shopcar['day_price']); ?>/天</p>
                   <p>$<?php echo ($shopcar['month_price']); ?>/月</p>
                   <p>$<?php echo ($shopcar['hour_price']); ?>/小时</p><?php endif; ?>
                </font></td>
              <td width="13%"><p><font color="#FBAE03" style="font-size:13px;">x<?php echo ($shopcar['count']); echo ($shopcar['time_unit']); ?></font></p>
              <p><a href="#df" style="font-size:13px; color:#FF0000;" class="goods_del_but" name="<?php echo ($shopcar['goods_num']); ?>">删除</a></p></td>
            </tr><?php endforeach; endif; ?>
        </table>
        <a href="__APP__/Shopcar/index/"><img style="float:right; margin:15px 15px;" id="go_pay" src="__IMAGE__/go_pay.png" /></a><?php endif; ?>
    </div>
  </div>
</div>

<div id="home_top_bottom">
  <div id="home_top_nav">
  <div id="home_nav_clear" style="width:170px; height:35px; display:inline; float:left;"></div>
    <ul id="nav_main">
      <li><a class="current_tab" href="index.html" title="home" target="_parent">首页</a></li>
      <li><a href="zuchequ.html" title="zuchequ" target="_parent">租车区</a></li>
      <li><a href="maichequ.html" title="maichequ" target="_parent">买车区</a></li>
      <li><a href="qiyoujulebu.html" title="qiyoujulebu" target="_parent">骑游俱乐部</a></li>
      <li><a href="luntan.html" title="luntan" target="_parent">论坛</a></li>
      <li><a href="gerenguanli.html" title="gerenguanli" target="_parent">个人管理</a></li>
      <li><a href="lianxiwomen.html" title="lianxiwomen" target="_parent">联系我们</a></li>
    </ul>
    <div id="contact_us"><!--<img width="32" id="mobile_contact" src="__IMAGE__/contact.png" />-->
    <a href="#" style="color:#FFFFFF; font-size:20px;">0857-5787457454</a>
    </div>
  </div>
</div>
 
  <div class="QQbox" id="divQQbox" style="width:26px;">
      <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display:none;">
        <div class="t"></div>
        <div class="infobox">我们营业的时间<br />
          9:00-23:00</div>
        <div class="con">
          <ul>
            <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=702575818&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:702575818:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></li>
            <div><font size="-1">客服热线:139808343020</font></div>
          </ul>
        </div>
        <div class="b"></div>
      </div>
      <div id="divMenu" onmouseover="OnlineOver();"></div>
    </div>
    <!--QQbox end-->

<script type="text/javascript">
var tips;

var theTop = 100/*这是默认高度,越大越往下*/;

var old = theTop;

function initFloatTips() {

	tips = document.getElementById('divQQbox');

	moveTips();

};

function moveTips() {

	var tt = 50;

	if (window.innerHeight) {

		pos = window.pageYOffset

	}

	else if (document.documentElement && document.documentElement.scrollTop) {

		pos = document.documentElement.scrollTop

	}

	else if (document.body) {

		pos = document.body.scrollTop;

	}

	pos = pos - tips.offsetTop + theTop;

	pos = tips.offsetTop + pos / 10;

	if (pos < theTop) pos = theTop;

	if (pos != old) {

		tips.style.top = pos + "px";

		tt = 10;

		//alert(tips.style.top);

	}

	old = pos;

	setTimeout(moveTips, tt);

}

initFloatTips();

function OnlineOver() {

	document.getElementById("divMenu").style.display = "none";

	document.getElementById("divOnline").style.display = "block";

	document.getElementById("divQQbox").style.width = "145px";

}

function OnlineOut() {

	

	document.getElementById("divMenu").style.display = "block";

	document.getElementById("divOnline").style.display = "none";

}

if (typeof (HTMLElement) != "undefined")    //给firefox定义contains()方法，ie下不起作用

{

	HTMLElement.prototype.contains = function(obj) {

		while (obj != null && typeof (obj.tagName) != "undefind") { //通过循环对比来判断是不是obj的父元素

			if (obj == this) return true;

			obj = obj.parentNode;

		}

		return false;

	};

}

function hideMsgBox(theEvent) { //theEvent用来传入事件，Firefox的方式

	if (theEvent) {

		var browser = navigator.userAgent; //取得浏览器属性

		if (browser.indexOf("Firefox") > 0) { //如果是Firefox

			if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素

				return; //结束函式

			}

		}

		if (browser.indexOf("MSIE") > 0) { //如果是IE

			if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素

				return; //结束函式

			}

		}

	}

	/*要执行的操作*/

	document.getElementById("divMenu").style.display = "block";

	document.getElementById("divOnline").style.display = "none";

	document.getElementById("divQQbox").style.width = "26px";

}
function login_exit(){
        var ajax1=Ajax();
		ajax1.post("__APP__/Login/login_exit", {}, function(data){});
		alert("注销成功！");
		 location.reload();
}
function addfavorite()
{
   if (document.all)
   {
      window.external.addFavorite('__APP__/','四川大学自行车网');
   }
   else if (window.sidebar)
   {
      window.sidebar.addPanel('四川大学自行车网', '__APP__/', "");
	  alert("收藏成功！");
   }
} 

</script>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商品信息</title>
</head>
<style type="text/css">
* {
	margin:0px;
	padding:0px;
}
#middle_main {
	background-color:#fff;
	width:1366px;
	height:auto;

}
a {
	text-decoration:none;
	color:#000000;
}
#home_middle {
	width:1008px;
	height:auto;
	margin:0 auto;
}
.goods_img_div {
	width:330px;
	height:320px;
	background-color:#EBEBEB;
	border:#636363 3px solid;
	display:inline;
	float:left;
	position:relative;
}
.goods_img_div:hover{
border:#FF0000 3px solid;}
.goods_name {
	width:90%;
	height:40px;
	margin:0 auto;
}
.goods_sale_price,.day_price {
	width:90%;
	height:20px;
	margin:0 auto;
}
.goods_market_price{
	width:90%;
	height:15px;
	margin-top:-8px;
	text-align:right;
}
#page_list {
	width:1008px;
	height:50px;
	margin-top:30px;
	display:inline;
	float:left;
}
#page_input{ height:20px;line-height:20px; background-color:#FFFFE0;border:1px solid #CCCCCC;}
#page_go{ background:#009933; border:1px solid #006600;}
</style>
<body>
<?php if($list!=null): ?><div id="middle_main">
  <div id="home_middle">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><div class="goods_img_div">
      <a href="__APP__/Index/goods_info?goods_num=<?php echo ($data1['goods_num']); ?>"> <img src="__UPLOAD__/s_<?php echo ($data1['goods_pic'][0]); ?>" /></a>
        <div class="goods_name"> <a href="__APP__/Index/goods_info?goods_num=<?php echo ($data1['goods_num']); ?>"> <?php echo ($data1['goods_name']); ?></a> </div>
        <?php if($data1['goods_service']=='出售'): ?><div class="goods_sale_price"> 售价:<font color="red" size="+2">$<?php echo ($data1['sale_price']); ?></font> </div>
        <div class="goods_market_price"> 市场价:<font color="red" style="text-decoration:line-through;">$<?php echo ($data1['market_price']); ?></font> </div>
        <?php else: ?>
         <div class="day_price"> 售价:<font color="red" size="+2">$<?php echo ($data1['day_price']); ?></font><font color="red">/天</font> </div>
        <!--<div class="hour_price" style="width:48%; height:15px; display:inline; float:left;"><font color="red">$<?php echo ($data1['hour_price']); ?>/小时</font> </div>-->
        <div class="hour_month_price" style="width:100%; height:15px; display:inline; float:right; text-align:right; margin:4px 10px 4px 0px;">
        <font color="red">$<?php echo ($data1['hour_price']); ?>/小时 $<?php echo ($data1['month_price']); ?>/月</font> </div><?php endif; ?>
        <div class="ping_fen" style="margin-top:12px; margin-left:18px;"><font color="#FBA60F">★★★★★|评分5.0</font>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">已有0人评价</a></div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <div id="page_list">
      <div align="center" id="page"><?php echo ($page); ?></div>
    </div>
  </div>
</div>
</div>
<?php else: ?><div style="width:1000px; height:140px; margin:0 auto;"><p style="margin-top:20px;">亲，没找到符合您条件的商品，您在看看吧！</p></div><?php endif; ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="__JS__/ajax.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function(){
  self.setInterval(  function(){
	     var ajax=Ajax();
		ajax.post("__APP__/Shopcar/state_deal", {}, function(data){});
	 }
	,100000);	
  });
</script>
<style type="text/css">
#home_foot_middle {
	width:1366px;
	height:auto;
}
.foot_ullist {
	width:145px;
	height:165px;
	display:inline;
	float:left;
	margin-top:10px;
	overflow:hidden;
}
#foot_fwbz {
	margin-left:185px;
}
#foot_all_row {
	width:1366px;
	height:38px;
	text-align:left;
	vertical-align:middle;
	text-align:center;
	overflow:hidden;
	background:#5C831D;
	color:#fff;
}
#foot_all_row a {
	font-size:13px;
	color:#fff;
	text-decoration:none;
}
#foot_bottom_row {
	width:100%;
	height:60px;
	text-align:center;
	vertical-align:middle;
	overflow:hidden;
	font-size:13px;
	color:#938D94;
}
.foot_head_span {
	vertical-align:middle;
	font-size:13px;
	height:23px;
	color:#938D94;
	padding-left:28px;
	padding-top:7px;
	width:60px;
	margin-left:15px;
}
.foot_ullist ul {
	text-align:left;
	margin-top:0px;
	margin-left:30px;
}
.foot_ullist ul li {
	list-style:none;
	margin-bottom:3px;
	float:none;
}
.foot_ullist ul li a {
	font-size:13px;
	color:#979298;
	text-decoration:none;
}
.foot_ullist ul li a:hover{color:#c00;text-decoration:none;}
</style>
<body>
<div id="home_footer" style=" width:1366px; height:265px;margin:0 auto; overflow:hidden; ">
  <div id="home_foot_middle">
    <div id="foot_fwbz" class="foot_ullist">
   <!-- <img src="__IMAGE__/shopensure.png"/> -->
    <div class="foot_head_span" style="background:url(__IMAGE__/shopensure.png) no-repeat;">服务保障</div>
      <ul>
        <li><a href="#">正品保证</a></li>
        <li><a href="#">7天无条件退货</a></li>
        <li><a href="#">退货免运费</a></li>
        <li><a href="#">7x12小时客户服务</a></li>
        <li><a href="#">关于我们</a></li>
        <li><a href="#">联系我们</a></li>
      </ul>
    </div>
    <div id="foot_gwzn" class="foot_ullist">
    <div class="foot_head_span" style="background:url(__IMAGE__/gouwzn.png) no-repeat;">购物指南</div>
      <ul>
        <li><a href="#">导购演示</a></li>
        <li><a href="#">订单操作</a></li>
        <li><a href="#">会员注册</a></li>
        <li><a href="#">账户管理</a></li>
        <li><a href="#">收货样品</a></li>
      </ul>
      </div>
    <div id="foot_psfs" class="foot_ullist">
    <div class="foot_head_span" style="background:url(__IMAGE__/peisfs.png) no-repeat;">配送方式</div>
      <ul>
        <li><a href="#">全场免运费</a></li>
        <li><a href="#">配送范围</a></li>
        <li><a href="#">退货免运费</a></li>
        <li><a href="#">验货与签收</a></li>
      </ul>
      </div>
    <div id="foot_shfw" class="foot_ullist">
    <div class="foot_head_span" style="background:url(__IMAGE__/shouhfw.png) no-repeat;">售后服务</div>
      <ul>
        <li><a href="#">退货政策</a></li>
        <li><a href="#">退货流程</a></li>
        <li><a href="#">退款方式和时效</a></li>
      </ul>
      </div>
    <div id="foot_tsfw" class="foot_ullist">
    <div class="foot_head_span" style="background:url(__IMAGE__/huiysq.png) no-repeat;">会员社区</div>
      <ul>
        <li><a href="#">晒单规则</a></li>
        <li><a href="#">会员积分</a></li>
        <li><a href="#">会员等级</a></li>
        <li><a href="#">优惠券使用</a></li>
        <li><a href="#">本站论坛</a></li>
      </ul>
      </div>
    <div id="foot_pslc" class="foot_ullist">
    <div class="foot_head_span" style="background:url(__IMAGE__/tesfw.png) no-repeat;">特色服务</div>
      <ul>
        <li><a href="#">节能补贴</a></li>
        <li><a href="#">保外维修</a></li>
        <li><a href="#">电话订购</a></li>
        <li><a href="#">安装说明</a></li>
        <li><a href="#">放心选购</a></li>
      </ul>
      </div>
    <div id="foot_hysq" class="foot_ullist">
    <div class="foot_head_span" style="background:url(__IMAGE__/huodsx.png) no-repeat;">活动事项</div>
      <ul>
        <li><a href="#">本站活动</a></li>
        <li><a href="#">社团活动</a></li>
        <li><a href="#">活动规则</a></li>
        <li><a href="#">活动时间</a></li>
        <li><a href="#">活动方式</a></li>
        <li><a href="#">活动内容</a></li>
      </ul>
      </div>
  </div>
  
  <div id="foot_all_row">
    <div style="margin-top:8px;"> <a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">About us</a> | <a href="#">Investor Relations</a> | <a href="#">隐私条款</a> | <a href="#">友情链接</a> | <a href="#">人才招聘</a> | <a href="#">销售联盟</a> | <a href="#">用户体验提升计划</a> | <a href="#">用户社区</a> | <a href="#">网站地图</a> </div>
  </div>
  
  <div id="foot_bottom_row">
    <div style="margin-top:7px;"><font style="font-family:Arial, Helvetica, sans-serif;">Copyright © 2013-2015 ibike.com，All Rights Reserved</font> 粤ICP备08114786号-1 许可证：粤B2-20080329 使用本网站即表示接受用户协议。</div>
    <div>版权所有 四川大学自行车网</div>
  </div>
</div>
</body>
</html>
</body>
</html>