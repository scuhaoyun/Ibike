<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title><link rel="stylesheet" href="__CSS__/admin_top.css" type="text/css" media="screen" /><script type="text/javascript" src="__JS__/jquery-1.8.0.min.js"></script><script type="text/javascript" src="__JS__/simpla.jquery.configuration.js"></script><script type="text/javascript" src="__JS__/jquery.wysiwyg.js"></script><script type="text/javascript" src="__JS__/facebox.js"></script><script type="text/javascript" src="__JS__/scrolltopcontrol.js"></script><script type="text/javascript" src="__JS__/ajax.js"></script><script type="text/javascript">$(document).ready(function(){
   $("#amplify").click(function(){
   $(".close").show("slow");
   		$(".close").parent().show("slow");
		});
		
	if(window.parent.document.getElementById("myFrame").cols=='230,*'){
	   $("#divQQbox").hide(); 
	}
	 $("#divQQbox").click(function(){
	    window.parent.document.getElementById("myFrame").cols='230,*';
		$("#divQQbox").hide();
	 });
});
</script><style type="text/css">#notification {
	z-index:100;
	 -moz-border-radius: 0px;
     -webkit-border-radius: 0px;
	border-radius: 0px;
}
#body-wrapper{
 width:100%;}
#middleframe {
	position:relative;
	margin-top:15px;
	margin-left:15px;
	background-color:#F0F0F0;
	z-index:12;
}
#amplify {
	position:absolute;
	top:0px;
	right:0px;
}
.QQbox{left:0px;position:absolute;top:245px;width:170px;z-index:999999;}
</style></head><body><div class="notification attention png_bg" id="notification"><a href="#" class="close"><img src="__IMAGE__/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a><div> 你好！这是你第<?php echo ($_SESSION['login_times']); ?>次登录！ <a href="#" title="Edit your profile"><?php echo ($_SESSION['admin_username']); ?></a>, 你有 <a href="#messages" rel="modal" title="3 Messages">3 封邮件</a>  &nbsp;&nbsp;<a href="#dfj" onclick="login_exit()">【注销】</a><br /></div></div><div class="QQbox" id="divQQbox" style="width:20px; height:60px; cursor:pointer;" title="显示左侧栏！"><img src="__IMAGE__/show_left.png" /></div><img id="amplify" src="__IMAGE__/back_alt.png"/><table><tr><td><div id="middleframe"><ul class="shortcut-buttons-set"><li><a class="shortcut-button" href="__APP__/Setting/index"><span><img src="__IMAGE__/icons/computer_process.png" alt="icon" /><br />        系统设置 </span></a></li><li><a class="shortcut-button" href="__APP__/Index/admin_right/"><span><img src="__IMAGE__/icons/goods_add.png" alt="icon" /><br />        商品上传 </span></a></li><li><a class="shortcut-button" href="__APP__/Orderadmin/index/"><span><img src="__IMAGE__/icons/order_admin.png" alt="icon" /><br />        订单管理 </span></a></li><li><a class="shortcut-button" href="__APP__/Useradmin/index/"><span><img src="__IMAGE__/icons/users_edit.png" alt="icon" /><br />        用户管理 </span></a></li><li><a class="shortcut-button" href="__APP__/File/output_goods/"><span><img src="__IMAGE__/icons/database_lock.png" alt="icon" /><br />        商品管理 </span></a></li><!-- <li style="width:280px; overflow:hidden;"><iframe src="http://www.thinkpage.cn/weather/weather.aspx?uid=&cid=101010100&l=zh-CHS&p=CMA&a=1&u=C&s=31&m=0&x=1&d=0&fc=&bgc=&bc=&ti=1&in=1&li=2&ct=iframe" frameborder="0" scrolling="no" width="300" height="80" allowTransparency="true"></iframe></li>--></ul></div></td></tr></table><div id="messages" style="display: none"><!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  --><h3>3 Messages</h3><p><strong>17th May 2009</strong> by Admin<br />    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small></p><p><strong>2nd May 2009</strong> by Jane Doe<br />    Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small></p><p><strong>25th April 2009</strong> by Admin<br />    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small></p><form action="#" method="post"><h4>New Message</h4><fieldset><textarea class="textarea" name="textfield" cols="79" rows="5"></textarea></fieldset><fieldset><select name="dropdown" class="small-input"><option value="option1">Send to...</option><option value="option2">Everyone</option><option value="option3">Admin</option><option value="option4">Jane Doe</option></select><input class="button" type="submit" value="Send" /></fieldset></form></div><script type="text/javascript">function login_exit(){
        var ajax1=Ajax();
		ajax1.post("__APP__/Index/login_exit", {}, function(data){ window.top.location="__APP__/Index/index";});
		
}
var tips;
var theTop = 245/*这是默认高度,越大越往下*/;
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
</script></body></html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title></head><style type="text/css">.content-box {
	width:96%;
	margin:0 auto;
}
</style><script type="text/javascript">$(document).ready(function(){
  
});
</script><body><!--<div id="right">--><div class="content-box"><!-- Start Content Box --><div class="content-box-header"><h3></h3><div class="clear"></div></div><div class="content-box-content"> 该模块功能正在建设中，敬请期待...
  </div><!-- End .content-box-content --></div></body></html>