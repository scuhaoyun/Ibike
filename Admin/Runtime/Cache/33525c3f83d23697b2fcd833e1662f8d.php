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
</script></body></html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title></head><link rel="stylesheet" href="__CSS__/reset.css" type="text/css" media="screen" /><!-- Main Stylesheet --><link rel="stylesheet" href="__CSS__/style_icon.css" type="text/css" media="screen" /><!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid --><link rel="stylesheet" href="__CSS__/invalid.css" type="text/css" media="screen" /><!--                       Javascripts                       --><script type="text/javascript" src="__JS__/jquery-1.8.0.min.js"></script><!-- jQuery Configuration --><script type="text/javascript" src="__JS__/simpla.jquery.configuration.js"></script><!-- Facebox jQuery Plugin --><script type="text/javascript" src="__JS__/facebox.js"></script><!-- jQuery WYSIWYG Plugin --><script type="text/javascript" src="__JS__/jquery.wysiwyg.js"></script><script src="__JS__/jquery.MultiFile.js" type="text/javascript" language="javascript"></script><!-- <script src="__JS__/jquery.js" type="text/javascript"></script>--><style type="text/css">body {
	background-color:#F0F0F0;
}
.content-box {
	width:96%;
	margin:0 auto;
}
.price_table {
	text-align:center;
	width:80%;h
}
td {
	text-align:left;
}
.rent_price {
	display:none;
}
.overlay {
	position:fixed;
	top:0;
	right:0;
	bottom:0;
	left:0;
	z-index:998;
	width:100%;
	height:100%;
	padding:0 20px 0 0;
	background:#f6f4f5;
	display:none;
}
.showbox {
	position:fixed;
	top:0;
	left:50%;
	z-index:9999;
	opacity:0;
	filter:alpha(opacity=0);
	margin-left:-80px;
}
*html .showbox, *html .overlay {
	position:absolute;
top:expression(eval(document.documentElement.scrollTop));
}
#AjaxLoading {
	border:1px solid #8CBEDA;
	color:#37a;
	font-size:12px;
	font-weight:bold;
}
#AjaxLoading div.loadingWord {
	width:250px;
	height:50px;
	line-height:50px;
	border:2px solid #D6E7F2;
	background:#fff;
}
#AjaxLoading img {
	margin:10px 15px;
	float:left;
	display:inline;
}
.trhide{
display:none;}
</style><script type="text/javascript">$(document).ready(function(){
   $("#radio1").click(function(){
   		$(".sale_price").show("slow");
		$(".rent_price").hide("slow");
        $("#goods_inventory").show("slow");
		});
	$("#radio2").click(function(){
   		$(".sale_price").hide("slow");
		$(".rent_price").show("slow");
        $("#goods_inventory").show("slow");
		});
	
	var h = $(document).height();
	$(".overlay").css({"height": "500px" });	
	$("#but_sub").click(function(){
		$(".overlay").css({'display':'block','opacity':'0.8'});
		$(".showbox").stop(true).animate({'margin-top':'300px','opacity':'1'},400);
		
	});
});
</script><body><!--<div id="right">--><div class="content-box"><!-- Start Content Box --><div class="content-box-header"><h3>商品上传</h3><div class="clear"></div></div><!-- End .content-box-header --><div class="content-box-content"><form enctype="multipart/form-data" action="__APP__/File/upload_goods/" class="P10" method="POST"><fieldset><p><label>请输入商品名称：</label><input class="text-input medium-input datepicker" type="text" id="medium-input" name="goods_name" style="width:350px;"/><span class="input-notification information png_bg">如：（美利达勇士系列TFS黑色铝合金变速山地车）</span></p><p><label>请输入商品类型：</label><input class="text-input small-input" type="text" id="small-input" name="goods_type"  value="山地车" style="width:350px;"/><span class="input-notification information png_bg">如：（山地车、公路车、护膝、护腕、头盔......）</span></p><p><label>请选择商品新旧程度：</label><select name="goods_new" class="small-input"><option value="全新">全新</option><option value="九成新">九成新</option><option value="八成新">八成新</option><option value="七成新">七成新</option><option value="六成新">六成新</option><option value="五成新">五成新</option><option value="四成新">四成新</option><option value="三成新">三成新</option><option value="二成新">二成新</option><option value="一成新">一成新</option></select><span class="input-notification information png_bg">商品的新旧程度是客观评价商品价值的依据，请慎重选择！</span></p><p><table class="price_table"><tr><td width="25%"><label>请输选择商品用途：</label></td><td><label>请填写商品价格和库存：</label></td></tr></table><table class="price_table"><tr><td width="25%"><input value="出售" type="radio" name="goods_service" id="radio1" checked="checked"/>            出售
            <input value="租赁" type="radio" name="goods_service" id="radio2" />            租赁 </td><td  class="sale_price">市场价格：
            <input class="text-input small-input" type="text" id="small-input1" name="market_price"  value="2800" style=" width:50px;"/></td><td  class="sale_price">实际售价：
            <input class="text-input small-input" type="text" id="small-input2" name="sale_price" value="2600" style=" width:50px;" /></td><td  class="rent_price">时租价格：
            <input class="text-input small-input" type="text" id="small-input3" name="hour_price" style=" width:50px;"/></td><td  class="rent_price">天租价格：
            <input class="text-input small-input" type="text" id="small-input4" name="day_price" style=" width:50px;"/></td><td  class="rent_price">月租价格：
            <input class="text-input small-input" type="text" id="small-input5" name="month_price" style=" width:50px;"/></td><td id="goods_inventory">库存：
            <input class="text-input small-input" type="text" id="small-input5" name="goods_inventory" style=" width:50px;"/></td></tr></table></p><p><label>请输入商品属性及属性值：<a href="#table_help" rel="modal"><img src="__IMAGE__/tablehelp.png" alt="表格辅助！" width="24" height="24"/></a></label><fieldset><textarea class="textarea" name="goods_para" cols="7" rows="5">颜色||黑色||材质||铝合金||车把||变速||车身||碳纤维||车轮||树胶||刹车||急刹||变速器||换挡||龙头||直把</textarea></fieldset></p><p><label>请输入商品大致描述：</label><textarea class="textarea" name="goods_desc" cols="79" rows="5">捷安特自行车在业界拥有良好的声誉，他们的自行车以高端享受而著名，是非常值得购买的！</textarea></p><p><table><tr><td><label>请选择该商品的描述图片：</label></td></tr><tr><td><input type="file" name="goods_pic[]" class="multi" accept="gif|jpg|png|jpeg" maxlength="12"/></td><td style="vertical-align:top; padding-top:5px;"><span class="input-notification information png_bg">支持gif|jpg|png|jpeg,支持多文件上传，图片上传顺序默认为图片的展示顺序,请上传尺寸为650*532的标准图片！</span></td></tr></table></p><p><table><tr><td><label>请选择该商品的描述图片：</label></td></tr><tr><td><input type="file" name="desc_pic[]" class="multi" accept="gif|jpg|png|jpeg" maxlength="12"/></td><td style="vertical-align:top; padding-top:5px;"><span class="input-notification information png_bg">支持gif|jpg|png|jpeg,支持多文件上传，图片上传顺序默认为图片的展示顺序，请上传尺寸为650*x的标准图片！</span></td></tr></table></p><p></p><input class="button" id="but_sub" type="submit" value="Submit" /></fieldset><div class="clear"></div></form></div><!-- End .content-box-content --></div></div><div id="table_help" style="display:none;"><table id="table1"><tbody><tr><td width="200px"><h4>商品参数</h4></td><td><h4>商品参数值</h4></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr><td><input type="text" /></td><td><input type="text" /></td></tr><tr id="tr13" class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="trhide"><td><input type="text" /></td><td><input type="text" /></td></tr><tr class="para_sure"><td width="200px"><p><input class="button" type="submit" value="确 定" /></p></td><td><a href="#jdhehf"><img src="__IMAGE__/plus.png" alt="增加一行" id="para_add" onClick="para_add()"/></a> &nbsp;&nbsp;&nbsp;<a href="#jdhehf"><img src="__IMAGE__/closelabel.png" alt="删除最后一行" id="para_out" onClick="para_out()"/></a></td></tr></tbody></table></div><div class="overlay"></div><div id="AjaxLoading" class="showbox"><div class="loadingWord"><img src="__IMAGE__/waiting.gif">正在写入数据库，请稍候...</div></div><script type="text/javascript" language="javascript">var row_count = 0;
function para_add()
{
   alert("dfadasf");
   $("#tr13").show();
   $("#table1 tr:last").show();
}
function para_out(){
 $("#table1 tr:last").hide();
}
</script></body></html>