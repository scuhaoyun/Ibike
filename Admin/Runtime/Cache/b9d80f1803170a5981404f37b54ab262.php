<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title></head><link rel="stylesheet" href="__CSS__/reset.css" type="text/css" media="screen" /><link rel="stylesheet" href="__CSS__/style_icon.css" type="text/css" media="screen" /><link rel="stylesheet" href="__CSS__/invalid.css" type="text/css" media="screen" /><LINK rel=stylesheet type=text/css href="__CSS__/lrtk.css"><!--<script type="text/javascript" src="__JS__/jquery-1.3.2.min.js"></script><script type="text/javascript" src="__JS__/scrolltopcontrol.js"></script>--><SCRIPT type=text/javascript src="__JS__/jquery.js"></SCRIPT><SCRIPT type=text/javascript charset=utf-8 src="__JS__/hyscroll.js"></SCRIPT><!-- jQuery Configuration --><script type="text/javascript" src="__JS__/simpla.jquery.configuration.js"></script><!-- Facebox jQuery Plugin --><script type="text/javascript" src="__JS__/facebox1.js"></script><!-- jQuery WYSIWYG Plugin --><script type="text/javascript" src="__JS__/jquery.wysiwyg.js"></script><script src="__JS__/jquery.MultiFile.js" type="text/javascript" language="javascript"></script><script src="__JS__/main.js" type="text/javascript" language="javascript"></script><script type="text/javascript" src="__JS__/ajax.js"></script><style type="text/css">body {
	background-color:#F0F0F0;
	font-family:Arial, Helvetica, sans-serif;
}
.content-box {
	width:965px;
	margin:0 auto;
}
#notification {
	z-index:100;
}
#body-wrapper {
	width:100%;
}
#middleframe {
	position:relative;
	margin-top:15px;
	margin-left:30px;
	background-color:#F0F0F0;
	z-index:12;
}
#amplify {
	position:absolute;
	top:0px;
	right:0px;
}
.button {
	margin-right:30px;
	text-align:center;
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
#goods_table,#para_table{
	border:solid 1px #cad9ea;
	border-collapse:collapse;
	table-layout:fixed;
	margin:0 auto;
	width:100%;
}
#goods_table th,#goods_table td  td {
	border:1px solid #cad9ea;
}
#goods_para {
	background:url(__IMAGE__/table_bg.png) repeat-x;
	height:38px;
	vertical-align:middle;
}
.td_left {
	height:34px;
	width:15%;
	text-align:center;
	background-color:#F3FAFF;
}
.td_right{
text-indent:10px;}
#desc_table td{
border:none;}
.QQbox{left:0px;position:absolute;top:245px;width:170px;z-index:999999;}
#notification {
	z-index:100;
	 -moz-border-radius: 0px;
     -webkit-border-radius: 0px;
	border-radius: 0px;
}
a:hover{ text-decoration:none;}
.current{ color:#F4B227;}
</style><script type="text/javascript">$(document).ready(function(){
   $("#amplify").click(function(){
        $(".close").show("slow");
   		$(".close").parent().show("slow");
		$(".content-box-header h3").click();
		
		});
		
		var h = $(document).height();
	$(".overlay").css({"height": "500px" });	
	$("#del_but").click(function(){
	    alert("fadsf");
		$(".overlay").css({'display':'block','opacity':'0.8'});
		$(".showbox").stop(true).animate({'margin-top':'300px','opacity':'1'},400);
		    setTimeout(function(){
			
			$(".showbox").stop(true).animate({'margin-top':'250px','opacity':'0'},800);
			
			$(".overlay").css({'display':'none','opacity':'0'});
			
		},1600);
	});
	if(window.parent.document.getElementById("myFrame").cols=='230,*'){
	   $("#divQQbox").hide(); 
	}
	 $("#divQQbox").click(function(){
	    window.parent.document.getElementById("myFrame").cols='230,*';
		$("#divQQbox").hide();
	 });
	 $(".goods_state").click(function(){
	   var goods_num=$(this).attr("name");
	   var goods_state=$(this).attr("title");
	   var ajax=Ajax();
	   ajax.post("__APP__/File/change_state", {goods_num:goods_num,goods_state:goods_state}, function(data){alert("操作成功！");document.location.reload();});
	});
   $(".delete_goods").click(function(){
	   var goods_num=$(this).attr("name");
	   var ajax1=Ajax();
	   ajax1.post("__APP__/File/delete_goods", {goods_num:goods_num}, function(data){alert("操作成功！");document.location.reload();});
	});
});
</script><body><div class="notification attention png_bg" id="notification"><a href="#" class="close"><img src="__IMAGE__/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a><div> 你好！这是你第<?php echo ($_SESSION['login_times']); ?>次登录！ <a href="#" title="Edit your profile" style="font-family:Arial, Helvetica, sans-serif; color:green; font-size:12px;"><?php echo ($_SESSION['admin_username']); ?></a>, 你有 <a href="#messages" rel="modal" title="3 Messages" style="font-family:Arial, Helvetica, sans-serif; color:green; font-size:12px;">3 封邮件</a>  &nbsp;&nbsp;<a href="#dfj" onclick="login_exit()" style="font-family:Arial, Helvetica, sans-serif; color:green; font-size:12px;">【注销】</a><br /></div></div><div class="QQbox" id="divQQbox" style="width:20px; height:60px; cursor:pointer;" title="显示左侧栏！"><img src="__IMAGE__/show_left.png" /></div><img id="amplify" src="__IMAGE__/back_alt.png"/><table><tr><td><div id="middleframe"><ul class="shortcut-buttons-set"><li><a class="shortcut-button" href="__APP__/Setting/index"><span><img src="__IMAGE__/icons/computer_process.png" alt="icon" /><br />        系统设置 </span></a></li><li><a class="shortcut-button" href="__APP__/Index/admin_right/"><span><img src="__IMAGE__/icons/goods_add.png" alt="icon" /><br />        商品上传 </span></a></li><li><a class="shortcut-button" href="__APP__/Orderadmin/index/"><span><img src="__IMAGE__/icons/order_admin.png" alt="icon" /><br />        订单管理 </span></a></li><li><a class="shortcut-button" href="__APP__/Useradmin/index/"><span><img src="__IMAGE__/icons/users_edit.png" alt="icon" /><br />        用户管理 </span></a></li><li><a class="shortcut-button" href="__APP__/File/output_goods/"><span><img src="__IMAGE__/icons/database_lock.png" alt="icon" /><br />        商品库管理 </span></a></li><!-- <li style="width:280px; overflow:hidden;"><iframe src="http://www.thinkpage.cn/weather/weather.aspx?uid=&cid=101010100&l=zh-CHS&p=CMA&a=1&u=C&s=31&m=0&x=1&d=0&fc=&bgc=&bc=&ti=1&in=1&li=2&ct=iframe" frameborder="0" scrolling="no" width="300" height="80" allowTransparency="true"></iframe></li>--></ul></div></td></tr></table><div id="messages" style="display: none"><!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  --><h3>3 Messages</h3><p><strong>17th May 2009</strong> by Admin<br />    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small></p><p><strong>2nd May 2009</strong> by Jane Doe<br />    Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small></p><p><strong>25th April 2009</strong> by Admin<br />    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. <small><a href="#" class="remove-link" title="Remove message">Remove</a></small></p><form action="#" method="post"><h4>New Message</h4><fieldset><textarea class="textarea" name="textfield" cols="79" rows="5"></textarea></fieldset><fieldset><select name="dropdown" class="small-input"><option value="option1">Send to...</option><option value="option2">Everyone</option><option value="option3">Admin</option><option value="option4">Jane Doe</option></select><input class="button" type="submit" value="Send" /></fieldset></form></div><!--<div id="right">--><div class="content-box"><!-- Start Content Box --><div class="content-box-header"><h3><?php echo ($info[0]['goods_num']); ?>|<?php echo ($info[0]['goods_name']); ?></h3><h5 style="display:block; float:right; margin-top:10px; margin-right:10px;">上架时间：<?php echo ($info[0]['shelf_time']); ?></h5><div class="clear"></div></div><!-- End .content-box-header --><div class="content-box-content"><?php if($info != null): ?><DIV id="featureContainer"><DIV id="feature"><DIV id="block"><DIV id="botton-scroll"><UL class="featureUL"><?php if(is_array($info[0]['goods_pic'])): foreach($info[0]['goods_pic'] as $key=>$vo): ?><LI class="featureBox"><DIV class="box"><A href="#images<?php echo ($key); ?>" rel="modal" class="modal_images"><IMG src="__UPLOAD__/s_<?php echo ($vo); ?>" width='260' height='165'/></A></DIV><div id="images<?php echo ($key); ?>" style="display: none"><IMG src="__UPLOAD__/<?php echo ($vo); ?>"</div></LI><?php endforeach; endif; ?></UL></DIV></DIV><A class="prev" href="javascript:void();">Previous</A><A class="next" href="javascript:void();">Next</A></DIV></DIV><DIV id="wrap"><SPAN id="load">LOADING...</SPAN></DIV><table cellspacing="0" cellpadding="0" id="goods_table"><!-- <thead><th><p><?php echo ($info[0]['goods_desc']); ?></p></th></thead>--><tr><td id="goods_para"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;相关信息</h4></td></tr><td><table id="para_table" frame="void"><tr><td class="td_left"><p style="font-size:14px;">产品号码</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_num']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">产品名称</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_name']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">产品描述</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_desc']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">产品类型</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_type']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">新旧程度</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_new']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">服务类型</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_service']); ?></p></td></tr><?php if($info[0]['goods_service']=='出售'): ?><tr><td class="td_left"><p style="font-size:14px;">实卖价格</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['sale_price']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">市场价格</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['market_price']); ?></p></td></tr><?php else: ?><tr><td class="td_left"><p style="font-size:14px;">时租价格</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['hour_price']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">日租价格</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['day_price']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">月租价格</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['month_price']); ?></p></td></tr><?php endif; ?><tr><td class="td_left"><p style="font-size:14px;">商品状态</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_state']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">产品库存</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['goods_inventory']); ?></p></td></tr><tr><td class="td_left"><p style="font-size:14px;">上架时间</p></td><td class="td_right"><p style="font-size:14px;"><?php echo ($info[0]['shelf_time']); ?></p></td></tr></table></td><tr><td id="goods_para"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配置参数</h4></td></tr><tr><td><table id="para_table" cellspacing="0" cellpadding="0" frame="void"><?php if(is_array($info[0]['goods_para'])): foreach($info[0]['goods_para'] as $key=>$para): if(!($key%2)): ?><tr><td class="td_left"><p style="font-size:14px;"><?php echo ($para); ?></p></td><?php else: ?><td class="td_right"><p style="font-size:14px;"><?php echo ($para); ?></p></td></tr><?php endif; endforeach; endif; ?></table></td></tr><tr><td id="goods_para"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;细节描述</h4></td></tr><!-- <tr><td><table id="desc_table" cellspacing="0">--><?php if(is_array($info[0]['desc_pic'])): foreach($info[0]['desc_pic'] as $key=>$pic): ?><tr><td class="desc_td" style="border:none; text-align:center;"><img src="__UPLOAD__/<?php echo ($pic); ?>" /></td></tr><?php endforeach; endif; ?><!--</table></td></tr>--></table><p><a href="#" style="margin-right:10px;" class="goods_state" title="有货" name="<?php echo ($data['goods_num']); ?>"><img src="__IMAGE__/goods_shelf.png" /></a><a href="#" style="margin-right:10px;"><img src="__IMAGE__/refresh.png" /></a><a href="#"  style="margin-right:10px;" class="goods_state" title="下架" name="<?php echo ($data['goods_num']); ?>"><img src="__IMAGE__/unshelf.png" /></a><a  style="margin-right:10px;" href="#" class="delete_goods" name="<?php echo ($data['goods_num']); ?>"><img src="__IMAGE__/delete.png" /></a></p></p></DIV></DIV><?php else: ?>没有符合您条件的商品！<?php endif; ?></div><!-- End .content-box-content --></div><div class="overlay"></div><div id="AjaxLoading" class="showbox"><div class="loadingWord"><img src="__IMAGE__/waiting.gif">正在操作您的请求，请稍候...</div></div><script type="text/javascript">$(function() {
$("#botton-scroll").jCarouselLite({
btnNext: ".next",
btnPrev: ".prev"
});
});

$(function () {
$('#top-menu li').hover(
function () {$('ul', this).slideDown(200);}, 
function () {$('ul', this).slideUp(200);
});
});

$(function () {
$(".click").click(function(){
$("#panel").slideToggle("slow");
$(this).toggleClass("active"); return false;
}); 
});

$(function () {
$('.fade').hover(
function() {$(this).fadeTo("slow", 0.5);},
function() {$(this).fadeTo("slow", 5);
});
});
</script><script type="text/javascript">var w = 240; 
var h = 59; 
var str = ""; 
var obj = document.getElementById("divStayTopLeft"); 
if (obj)str = obj.innerHTML; 
if( typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat'){ 
document.writeln('<DIV  style="z-index:9;right:0;bottom:80px;height:'+h+'px;width:'+w+'px;overflow:hidden;POSITION:fixed;_position:absolute; _margin-top:expression(document.documentElement.clientHeight-this.style.pixelHeight+document.documentElement.scrollTop);">'); 
} 
else { 
document.writeln('<DIV  style="z-index:9;right:0;bottom:80px;height:'+h+'px;width:'+w+'px;overflow:hidden;POSITION:fixed;*position:absolute; *top:expression(eval(document.body.scrollTop)+eval(document.body.clientHeight)-this.style.pixelHeight);">'); 
} 
document.writeln('<div style="clear:both;margin:auto;height:80px;font-size:14px;overflow:hidden;font-weight:bold;text-align:right;"><a href="javascript:scroll(0,0)" hidefocus="true"><img src="__IMAGE__/topback.gif" alt="回到顶部" style="border: 0px;" /></div> '); 
document.write('<div style="clear:both;margin:auto;overflow:hidden;text-align:left;">'+str+'</div>'); 
document.writeln('</DIV>'); 
 
</script></body></html>