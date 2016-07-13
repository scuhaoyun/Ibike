<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="__IMAGE__/ibike1.ico" mce_href="__IMAGE__/ibike1.ico" type="image/x-icon">
<link rel="Bookmark" href="__IMAGE__/ibike1.ico">
<script type="text/javascript" src="__JS__/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="__JS__/scrolltopcontrol.js"></script>
<script type="text/javascript" src="__JS__/ajax.js"></script>
</head>
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
/*#mobile_contact {
	position:absolute;
	top:120px;
	right:305px;
}
#phone_num {
	position:absolute;
	top:125px;
	right:153px;
}*/
a, img {
	border:0;
}
#contact_us{ width:260px;height:26px; display:inline; float:right;z-index:99999;background:url(__IMAGE__/contact.png) no-repeat;padding-top:3px; overflow:hidden; padding-left:35px; margin-top:4px; }
/* online */
/*#contact_us{ width:160px;height:26px;z-index:99999;background:url(__IMAGE__/contact.png) no-repeat;padding-top:3px; overflow:hidden; padding-left:35px; margin-top:4px; margin-left:1040px;}*/
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
<body style="overflow-x:auto;">
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
              <td><a href="__APP__/Index/goods_info?goods_num=<?php echo ($shopcar['goods_num']); ?>" style="font-size:12px;"><?php echo ($shopcar['goods_name']); ?></a></td>
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

/*document.write("<div class='QQbox' id='divQQbox' style='width:26px;' >");

document.write("<div class='Qlist' id='divOnline' onmouseout='hideMsgBox(event);' style='display : none;'>");

document.write("<div class='t'></div>");

document.write("<div class='infobox'>我们营业的时间<br>9:00-23:00</div>");

document.write("<div class='con'>");

document.write("<ul>");

document.write('<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=702575818&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1227037748:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></li>');

document.write('<li>客服热线:15901826010</li>');

document.write("</ul>");

document.write("</div>");

document.write("<div class='b'></div>");

document.write("</div>");

document.write("<div id='divMenu' onmouseover='OnlineOver();'></div>");

document.write("</div>");*/

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
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>四川大学自行车网</title>
<link rel="Shortcut Icon" href="__IMAGE__/ibike1.ico">
<link rel="Bookmark" href="__IMAGE__/ibike1.ico">
<script type="text/javascript" src="__JS__/jquery-1.3.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="__CSS__/slide.css" />
<LINK rel=stylesheet type=text/css href="__CSS__/img_lrtk.css">
<script type="text/javascript" src="__JS__/g.base.js"></script>

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
	outline:none;
}
#home_middle {
	width:1050px;
	height:auto;
	margin:0 auto;
}
#tab1 {
	width:146px;
	height:401px;
	margin:0 0;
	display:inline;
	float:left;
	text-indent:10px;
	position:relative;
	z-index:999999;
}
a,img{border:0;}
body{font-family:"宋体",Arial,Lucida,Verdana,Helvetica,sans-serif;font-size:12px;color:#333;line-height:150%;background:#fff;}
a:link,a:visited{color:#333;text-decoration:none;}
a:hover{color:#c00;text-decoration:none;}
a:active{color:#900;}
/* navsort */
.allsort .mt .extra,.allsort s,.allsort .close{background:url(__IMAGE__/nav-sort.gif) no-repeat;}
<!--.navsort{width:960px;height:50px;background-position:0 1px;background-repeat:repeat-x;margin:40px auto 0 auto;}-->
/*allsort*/
.allsort{float:left;width:138px;height:1px;background-position:0px -101px;position:relative;z-index:9;}
.allsort .mt{height:24px;padding:14px 12px 12px 16px;line-height:24px;cursor:pointer;overflow:hidden;}
.allsort .mt strong{float:left;font-size:14px;color:#630;}
.allsort .mt .extra{float:right;overflow:hidden;width:22px;height:23px;background-position:-214px -52px; text-align:center;}
.allsort .mc{position:absolute;top:0px;overflow:visible;width:138px;padding:0 3px 0;border:solid #C40000;border-width:1px 1px 1px;background:#FEF8EF;-moz-border-radius:0 0 5px 5px;-webkit-border-radius:0 0 5px 5px; z-index:1;}
.allsort .item{width:138px;height:32px;border-top:1px solid #FDE6D2;}
.allsort .fore{}
.allsort span{display:block;width:132px;position:relative;z-index:1;}
.allsort h3{font-size:14px;width:112px;height:30px;padding-left:12px;border:solid #FEF8EF;border-width:1px 0 1px 1px;background-position:-241px -57px;font-weight:normal;}
.allsort h3 a:link,.allsort h3 a:visited{display:block;height:30px;line-height:30px;color:#333;}
.allsort h3 a:hover,.allsort h3 a:active{color:#1B578A;}
.allsort s{display:block;position:absolute;top:10px;left:123px;width:13px;height:13px;background-position:-218px -106px;}
.allsort .item .i-mc{display:none;position:absolute;left:127px;top:0px;width:700px;border:1px solid #c30;background:#FFF9EF;overflow:hidden;}
.allsort .item dt{padding:3px 6px 0 0;font-weight:bold;}
.allsort .item dd{padding:3px 0 0;overflow:hidden;zoom:1;}
.allsort .subitem{float:left;width:464px;min-height:400px;padding:0 4px 0 8px;}
.allsort .subitem dl{border-top:1px solid #FFEFD7;padding:6px 0;overflow:hidden;zoom:1;}
.allsort .subitem .fore{border-top:none;}
.allsort .subitem dt{float:left;width:54px;line-height:22px;text-align:right;color:#c00;}
.allsort .subitem dd{float:left;width:402px;}
.allsort .subitem em{float:left;height:14px;margin:4px 0;line-height:14px;padding:0 8px;border-left:1px solid #ccc;font-style:normal;white-space:nowrap;}
.allsort .fr{background:#fff;width:194px;padding:0 15px 2010px 15px;margin-bottom:-2000px;float:right;}
.allsort .fr dl{padding-bottom:0;}
.allsort .mc .extra{padding:7px 8px;background:#FDF1DE;border-top:1px solid #FDE6D2; height:20px;}
.allsorthover{background-position:0 -50px;}
.allsorthover .mt .extra{background-position:-214px -75px;}
.allsorthover .mc{display:block;}
.allsort .hover span{z-index:13;width:160px;}
.allsort .hover h3{font-size:14px;border:solid #c30;border-width:1px 0 1px 1px;overflow:hidden;background:url(images/nav-sort.gif) #FFF9EF no-repeat -241px -57px;font-weight:bold;}
.allsort .hover s{display:none;}
.allsort .hover .i-mc{display:block;z-index:12;}
*html .allsort .item dd{padding-bottom:6px;}
*html .allsort .subitem{height:400px;}
.allsort .close{position:absolute;top:6px;left:674px;z-index:14;width:19px;height:19px;background-position:-216px -125px;cursor:pointer;}
#tab2 {
	width:900px;
	height:400px;
	margin:0 0;
	border:1px #CCCCCC solid;
	display:inline;
	float:left;
	z-index:-1;
}
h3 {
	background:url(__IMAGE__/div_tab_bg.png) repeat-x;
	height:29px;
	text-indent:5px;
	
}
li {
	list-style:none;
}
#tab3, #tab4, #tab5 {
	height:212px;
	margin:0 0;
	display:inline;
	border:1px #CCCCCC solid;
	margin-top:10px;
}
#tab3 {
	width:800px;
	float:left;
}
#tab4 {
	width:240px;
	float:right;
}
#tab5 {
	width:100%;
	float:left;
	text-indent:0px;
}
.goods {
	width:320px;
	height:270px;
	background-color:#EBEBEB;
}
.goods_img {
	width:320px;
}
.toggle_show {
	padding-left:10px;
	background:url(__IMAGE__/list_delete.png) no-repeat center left;
	vertical-align:middle;
}
#small_info li {
	list-style-image:url(__IMAGE__/list_image.png);
	margin-bottom:3px;
	margin-left:5px;
}
.tab5_featureContainer,.tab5_block{ width:1050px;}
#tab5_featureBox,#tab5_box{ width:210px;}
</style>
<script type="text/javascript">
$(document).ready(function(){
   /*$(".toggle_show").click(function(){
   		$(this).removeClass("toggle_show");
		$(this).addClass("toggle_hide");
		$(this).parent().next("ul").toggle();
   });*/
   $("#tab1 p a").click(function(){
		$(this).parent().next("ul").toggle();
   });
   
   
   $.fn.hoverForIE6=function(option){
		var s=$.extend({current:"hover",delay:10},option||{});
		$.each(this,function(){
			var timer1=null,timer2=null,flag=false;
			$(this).bind("mouseover",function(){
				if (flag){
					clearTimeout(timer2);
				}else{
					var _this=$(this);
					timer1=setTimeout(function(){
						_this.addClass(s.current);
						flag=true;
					},s.delay);
				}
			}).bind("mouseout",function(){
				if (flag){
					var _this=$(this);timer2=setTimeout(function(){
						_this.removeClass(s.current);
						flag=false;
					},s.delay);
				}else{
					clearTimeout(timer1);
				}
			})
		})
	}
	
	var goods_count=<?php echo ($goods_count); ?>;
	var count=0;
	$("#tab3_next").click(function(){
	    if(count<goods_count-4){$("#tab3_featureUL").animate({left:"-=200px"},"slow");
        count++;}
	});
	$("#tab3_prev").click(function(){
	    if(count>0){$("#tab3_featureUL").animate({left:"+=200px"},"slow");
         count--;}
	});
	$(".likeinfo").hover(function(){
	   if(count>0){$("#tab3_prev").show();}
	   if(count<goods_count-4){$("#tab3_next").show();}
	},
	function(){$("#tab3_next,#tab3_prev").hide();
	});
	
	var goods_count1=<?php echo ($goods_count); ?>;
	var count1=0;
	$("#tab5_next").click(function(){
	    if(count1<goods_count1-5){$("#tab5_featureUL").animate({left:"-=210px"},"slow");
        count1++;}
	});
	$("#tab5_prev").click(function(){
	    if(count1>0){$("#tab5_featureUL").animate({left:"+=210px"},"slow");
         count1--;}
	});
	$(".tab5_featureContainer").hover(function(){
	   if(count1>0){$("#tab5_prev").show();}
	   if(count1<goods_count-5){$("#tab5_next").show();}
	},
	function(){$("#tab5_next,#tab5_prev").hide();
	});

});
</script>
<body>
<div id="middle_main">
  <div id="home_middle">
    <div id="tab1" style="overflow:visible;">
      <div class='allsort'>
		
		<!--<div class='mt'><strong><a href="#">全部商品分类</a></strong><div class='extra'>&nbsp;</div></div>-->
		
		<div class='mc'>
        <div class='extra'><a href='__APP__/Search/condition'>随便看看</a></div>
			<div class='item fore' style="background-color:#FDF1DE;">
				<span><h3><a href="__APP__/Search/condition?goods_service=出售&">出售</a></h3><s></s></span>
				<div class='i-mc'>
					<div class='close' onClick="$(this).parent().parent().removeClass('hover')"></div>
					<div class='subitem'>
						<dl class='fore'>
							<dt>类型</dt>
							<dd>
								<em><a href='__APP__/Search/condition?goods_service=出售&goods_type=山地车&'>山地自行车</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&goods_type=公路车&'>公路自行车</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&goods_type=小轮车&'>城市小轮车</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&goods_type=休闲车&'>城市休闲车</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&goods_type=女款车&'>女款自行车</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_type=头盔&'>头盔</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_type=车架&'>车架</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_type=骑行装备&'>骑行装备</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>颜色</dt>
							<dd>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=黑色&'>黑色</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=白色&'>白色</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=红色&'>红色</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=蓝色&'>蓝色</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>材质</dt>
							<dd>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=碳纤维&'>碳纤维</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=塑料&'>塑料</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=铝合金&'>铝合金</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&search=钢铁&'>钢铁</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>价格</dt>
							<dd>
								<em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=0&sale_high_price=200&'>0-200</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=200&sale_high_price=400&'>200-400</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=400&sale_high_price=600&'>400-600</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=600&sale_high_price=800&'>600-800</a></em>
                                 <em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=800&sale_high_price=1000&'>800-1000</a></em>
                                 <em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=1000&sale_high_price=1500&'>1000-1500</a></em>
                                 <em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=1500&sale_high_price=2000&'>1500-2000</a></em>
                                 <em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=2000&sale_high_price=3000&'>2000-3000</a></em> 
                                 <em><a href='__APP__/Search/condition?goods_service=出售&sale_low_price=3000&'>3000以上</a></em>
                                 <em><a href='__APP__/Search/condition?goods_service=出售&'>全部</a></em>  
							</dd>
						</dl>
						<dl>
							<dt>厂家</dt>
							<dd>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=捷安特&'>捷安特</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=弛维&'>弛维</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=宝马&'>宝马</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&search=奔驰&'>奔驰</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>新旧</dt>
							<dd>
								<em><a href='__APP__/Search/condition?goods_service=出售&goods_new=全新&'>全新</a></em>
								<em><a href='__APP__/Search/condition?goods_service=出售&goods_new=九成新&'>九成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=八成新&'>八成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=七成新&'>七成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=六成新&'>六成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=五成新&'>五成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=四成新&'>四成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=三成新&'>三成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=二成新&'>二成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&goods_new=一成新&'>一成新</a></em>
                                <em><a href='__APP__/Search/condition?goods_service=出售&'>全部</a></em>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
            <div class='item' style="background-color:#FDF1DE;">
				<span><h3><a href="__APP__/Search/condition?goods_service=租赁"">租赁</a></h3><s></s></span>
				<div class='i-mc'>
					<div class='close' onClick="$(this).parent().parent().removeClass('hover')"></div>
					<div class='subitem'>
						<dl class='fore'>
							<dt>类型</dt>
							<dd>
								<em><a href='#'>山地自行车</a></em>
								<em><a href='#'>公路自行车</a></em>
								<em><a href='#'>城市小轮车</a></em>
								<em><a href='#'>城市休闲车</a></em>
								<em><a href='#'>女款自行车</a></em>
                                <em><a href='#'>碳纤维自行车</a></em>
                                <em><a href='#'>运动童车</a></em>
                                <em><a href='#'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>颜色</dt>
							<dd>
								<em><a href='#'>黑色</a></em>
								<em><a href='#'>白色</a></em>
								<em><a href='#'>红色</a></em>
								<em><a href='#'>蓝色</a></em>
								<em><a href='#'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>材质</dt>
							<dd>
								<em><a href='#'>碳纤维</a></em>
								<em><a href='#'>塑料</a></em>
								<em><a href='#'>铝合金</a></em>
                                <em><a href='#'>钢铁</a></em>
								<em><a href='#'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>价格</dt>
							<dd>
								<em><a href='#'>0-200</a></em>
								<em><a href='#'>200-400</a></em>
								<em><a href='#'>400-600</a></em>
                                <em><a href='#'>600-800</a></em>
                                 <em><a href='#'>800-1000</a></em>
                                 <em><a href='#'>1000-1500</a></em>
                                  <em><a href='#'>1500-2000</a></em>
                                 <em><a href='#'>2000-3000</a></em> 
                                 <em><a href='#'>3000以上</a></em>  
							</dd>
						</dl>
						<dl>
							<dt>厂家</dt>
							<dd>
								<em><a href='#'>捷安特</a></em>
								<em><a href='#'>弛维</a></em>
								<em><a href='#'>宝马</a></em>
								<em><a href='#'>奔驰</a></em>
								<em><a href='#'>全部</a></em>
							</dd>
						</dl>
						<dl>
							<dt>新旧</dt>
							<dd>
								<em><a href='#'>全新</a></em>
								<em><a href='#'>九成新</a></em>
                                <em><a href='#'>八成新</a></em>
                                <em><a href='#'>七成新</a></em>
                                <em><a href='#'>六成新</a></em>
                                <em><a href='#'>五成新</a></em>
                                <em><a href='#'>四成新</a></em>
                                <em><a href='#'>三成新</a></em>
                                <em><a href='#'>二成新</a></em>
                                <em><a href='#'>一成新</a></em>
							</dd>
						</dl>
					</div>
				</div>
			</div>
            
         
			<div class='extra' style="height:18px;"><a href='#'>零部件</a></div>
            <div class='extra' style="height:18px;"><a href='#'>骑车装备</a></div>
            <div class='extra' style="height:18px;"><a href='#'>自行车车架</a></div>
            <div class='extra' style="height:18px;"><a href='#'>租车流程</a></div>
            <div class='extra' style="height:18px;"><a href='#'>活动中心</a></div>
            <div class='extra' style="height:18px;"><a href='#'>车友社区</a></div>
            <div class='extra' style="height:18px;"><a href='#'>购物须知</a></div>
            <div class='extra' style="height:18px;"><a href='#'>消费保障</a></div>
			
			<div class='extra'><a href='__APP__/Search/condition'>全部商品</a></div>
		
		</div>
		
	</div>
      
      
      
    </div>
    <div id="tab2" class="container">
      <div class="box">
        <div id="slide"></div>
        <script type="text/javascript">$("#slide").jdSlide({width:900,height:400,pics:[{src:"__IMAGE__/56.jpg",href:"http://www.16sucai.com/daima/",alt:"",breviary:"#",type          :"img"},{src:"__IMAGE__/54.jpg",href:"http://www.16sucai.com/daima/",alt:"",breviary:"#",type:"img"},{src:"__IMAGE__/55.jpg",href:                  
		  "http://www.16sucai.com/daima/",alt:"",breviary:"#",type:"img"},{src:"__IMAGE__/53.jpg",href:"http://www.16sucai.com/daima/",alt:"",breviary:"#",type:"img"}]})   
          </script>
        slide end </div>
    </div>
    <div id="tab3">
      <h3 style="margin-top:3px;"><img src="__IMAGE__/tree.png" />猜您喜欢</h3>
      
       <DIV id="featureContainer" class="likeinfo">
      <DIV id="feature">
        <DIV id="block">
          <DIV id="botton-scroll">
            <UL class="featureUL" id="tab3_featureUL">
              <?php if(is_array($like_info)): foreach($like_info as $key=>$vo): ?><LI class="featureBox"  title="<?php echo ($vo['goods_name']); ?>">
                  <DIV class="box"> <A href="__APP__/Index/goods_info?goods_num=<?php echo ($vo['goods_num']); ?>">
                  <IMG src="__UPLOAD__/s_<?php echo ($vo['goods_pic'][0]); ?>" width="200" height="130"/> 
                  <div style=" height:16px;overflow:hidden; text-align:center; width:95%;"><?php echo ($vo['goods_name']); ?></div>
                  <div style="text-align:center;width:95%;"><?php echo ($vo['goods_service']); ?> <font color="#FF0033">售价:
                  <?php if($vo['sale_price']): ?>$<?php echo ($vo['sale_price']); ?>
                  <?php else: ?>$<?php echo ($vo['day_price']); ?>/天<?php endif; ?></font></div></A></DIV>
                </LI><?php endforeach; endif; ?>
            </UL>
          </DIV>
        </DIV>
        <A class="prev" id="tab3_prev" href="javascript:void();" style="display:none;">Previous</A><A class="next" id="tab3_next" href="javascript:void();" style="display:none;">Next</A> </DIV>
    </DIV>
    <DIV id="wrap"><SPAN id="load">LOADING...</SPAN></DIV>
      
    </div>
    <div id="tab4" style="overflow:hidden;">
      <h3 style="margin-top:3px;"><img src="__IMAGE__/tree.png" />小贴士</h3>
      <ul id="small_info" style="margin-left:20px; margin-top:5px;">
        <li><a href="#">夏天骑车注意六大危害 四大益处</a></li>
        <li><a href="#">四川大学自行车协会近期活动时间</a></li>
        <li><a href="#">自行车保养应当注意哪些方面</a></li>
        <li><a href="#">购车标准 如何区分是否是好车</a></li>
        <li><a href="#">租车须知 规则 注意事项</a></li>
        <li><a href="#">本站能免费预约试骑吗？</a></li>
        <li><a href="#">绿色达人 假期活动团队出行</a></li>
      </ul>
    </div>
    <div id="tab5">
      <h3 style="margin-top:3px;"><img src="__IMAGE__/tree.png" />最新推荐</h3>
      
       <DIV id="featureContainer" class="tab5_featureContainer" style=" width:1050px;">
      <DIV id="feature">
        <DIV id="block"  class="tab5_block" style="width:1050px;">
          <DIV id="botton-scroll">
            <UL class="featureUL" id="tab5_featureUL">
              <?php if(is_array($like_info1)): foreach($like_info1 as $key=>$vo1): ?><LI class="featureBox"  title="<?php echo ($vo1['goods_name']); ?>" id="tab5_featureBox">
                  <DIV class="box" id="tab5_box"> <A href="__APP__/Index/goods_info?goods_num=<?php echo ($vo1['goods_num']); ?>">
                  <IMG src="__UPLOAD__/s_<?php echo ($vo1['goods_pic'][0]); ?>" width="210" height="135"/> 
                  <div style="height:16px;overflow:hidden; text-align:center; width:95%;"><?php echo ($vo1['goods_name']); ?></div>
                  <div style="text-align:center;width:95%;"><?php echo ($vo1['goods_service']); ?> <font color="#FF0033">售价:
                  <?php if($vo1['sale_price']): ?>$<?php echo ($vo1['sale_price']); ?>
                  <?php else: ?>$<?php echo ($vo1['day_price']); ?>/天<?php endif; ?>
                  </font></div></A></DIV>
                </LI><?php endforeach; endif; ?>
            </UL>
          </DIV>
        </DIV>
        <A class="prev" id="tab5_prev" href="javascript:void();" style="display:none;">Previous</A><A class="next" id="tab5_next" href="javascript:void();" style="display:none;">Next</A> </DIV>
    </DIV>
    <DIV id="wrap"><SPAN id="load">LOADING...</SPAN></DIV>
    
    </div>
  </div>
  </div>
<script type="text/javascript"> 
$(".allsort").hoverForIE6({current:"allsorthover",delay:200});
$(".allsort .item").hoverForIE6({delay:150});
</script>
</body>
</html>
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