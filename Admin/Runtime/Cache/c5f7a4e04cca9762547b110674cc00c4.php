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
</script></body></html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title></head><script type="text/javascript" src="__JS__/ajax.js"></script><style type="text/css">.content-box {
	width:96%;
	margin:0 auto;
}
.searchbox {
	background:url(__IMAGE__/search_order12.png) no-repeat;
	width:270px;
	height:34px;
	position:absolute;
	top:3px;
	right:20px;
}
.searchbox input {
	color:#999;
	font-size:13px;
	font-family:"宋体";
	width:230px;
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
	width:178px;
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
#order_info_table {
	width:100%;
	font-size:14px;
}
#order_info_table tr {
	height:30px;
	vertical-align:middle;
}
#goods_info_table {
	width:98%;
	height:auto;
	text-align:center;
	vertical-align:middle;
	margin:20px auto;
	font-size:14px;
	text-decoration:none;
	border-left:1px solid #DDDDDD;
	border-top:1px solid #DDDDDD;
}
#goods_tr td {
	border-bottom:1px solid #DDDDDD;
}
.td_left {
	text-align:right;
}
.goods_list_tr td {
	border-right:1px solid #DDDDDD;
	border-bottom:1px solid #DDDDDD;
}
.order_state_div,.order_delete_div{ width:80px; height:30px; display:inline; float:left; margin-left:10px; text-align:center; vertical-align:middle; cursor:pointer;}
</style><script type="text/javascript">$(document).ready(function(){
    var keywords = "请输入订单号！";

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
	
    $(".order_state_div").click(function(){
	   var order_num=$(this).attr("name");
	   var order_state=$(this).attr("title");
	   var ajax=Ajax();
	   ajax.post("__APP__/Orderadmin/change_state", {order_num:order_num,order_state:order_state}, function(data){document.location.reload();});
	});
   $(".order_delete_div").click(function(){
	   var order_num=$(this).attr("name");
	   var ajax1=Ajax();
	   ajax1.post("__APP__/Orderadmin/delete_order", {order_num:order_num}, function(data){document.location.reload();});
	});
});
</script><body><!--<div id="right">--><div class="content-box"><!-- Start Content Box --><div class="content-box-header" style="position:relative;"><h3>订单管理</h3><div class="searchbox"><form enctype="multipart/form-data" action="__APP__/Orderadmin/index"  method="POST"><input type="text" id="birds" name="order_num" class="stext" value=""><input class="btnimg" type="submit" value="" /></form></div><div class="clear"></div></div><div class="content-box-content"><?php if($all_order != null): if(is_array($all_order)): foreach($all_order as $key=>$goods): ?><div style="width:100%; height:30px; margin-top:10px; padding-left:30px;"><div class="order_state_div" title="未付款" name="<?php echo ($goods[0]['order_num']); ?>" style="background:#CCCC00;"><h3 style="margin-top:8px;">未付款</h3></div><div class="order_state_div" title="已付款" name="<?php echo ($goods[0]['order_num']); ?>" style="background:#66FFFF;" ><h3 style="margin-top:8px;">已付款</h3></div><div class="order_state_div" title="已发货" name="<?php echo ($goods[0]['order_num']); ?>" style="background:#FF9933;"><h3 style="margin-top:8px;">已发货</h3></div><div class="order_state_div" title="已确认收货" name="<?php echo ($goods[0]['order_num']); ?>" style="background:#3399CC; width:110px;"><h3 style="margin-top:8px;">已确认收货</h3></div><div class="order_state_div" title="已评价" name="<?php echo ($goods[0]['order_num']); ?>" style="background:#33CC00;"><h3 style="margin-top:8px;">已评价</h3></div><div class="order_delete_div" name="<?php echo ($goods[0]['order_num']); ?>" style="background:#DC504A;"><h3 style="margin-top:8px;">删除</h3></div></div><?php if($goods[0]['order_state']=='未付款'): ?><div class="order_info_main" style="width:100%; height:auto; border:#CCCC00 2px solid;"><div style="background:#CCCC00; width:100%; height:3px;"></div><?php elseif($goods[0]['order_state']=='已付款'): ?><div class="order_info_main" style="width:100%; height:auto; border:#66FFFF 2px solid;"><div style="background:#66FFFF; width:100%; height:3px;"></div><?php elseif($goods[0]['order_state']=='已发货'): ?><div class="order_info_main" style="width:100%; height:auto; border:#FF9933 2px solid;"><div style="background:#FF9933; width:100%; height:3px;"></div><?php elseif($goods[0]['order_state']=='已确认收货'): ?><div class="order_info_main" style="width:100%; height:auto; border:#3399CC 2px solid;"><div style="background:#3399CC; width:100%; height:3px;"></div><?php elseif($goods[0]['order_state']=='已评价'): ?><div class="order_info_main" style="width:100%; height:auto; border:#33CC00 2px solid;"><div style="background:#33CC00; width:100%; height:3px;"></div><?php else: ?><div class="order_info_main" style="width:100%; height:auto; border:#CCCC00 2px solid;"><div style="background:#CCCC00; width:100%; height:3px;"></div><?php endif; ?><!-- <?php switch($$goods[0]['order_state']): case "已付款": ?><div class="order_info_main" style="width:100%; height:auto; border:#CCCC00 2px solid;"><div style="background:#CCCC00; width:100%; height:3px;"></div><?php break; case "已付款": ?><div class="order_info_main" style="width:100%; height:auto; border:#66FFFF 2px solid;"><div style="background:#66FFFF; width:100%; height:3px;"></div><?php break; case "已发货": ?><div class="order_info_main" style="width:100%; height:auto; border:#FF9933 2px solid;"><div style="background:#FF9933; width:100%; height:3px;"></div><?php break; case "已确认收货": ?><div class="order_info_main" style="width:100%; height:auto; border:#3399CC 2px solid;"><div style="background:#3399CC; width:100%; height:3px;"></div><?php break; case "已评价": ?><div class="order_info_main" style="width:100%; height:auto; border:#33CC00 2px solid;"><div style="background:#33CC00; width:100%; height:3px;"></div><?php break; default: ?><div class="order_info_main" style="width:100%; height:auto; border:#CCCC00 2px solid;"><div style="background:#CCCC00; width:100%; height:3px;"></div><?php endswitch;?>--><table id="order_info_table"><tr><td class="td_left">订单号：</td><td style="width:86%;"><font color="#DC130F"><?php echo ($goods[0]['order_num']); ?></font></td></tr><tr><td class="td_left">当前订单状态：</td><td style="width:86%;"><font color="#DC130F"><?php echo ($goods[0]['order_state']); ?></font></td></tr><tr><td class="td_left">收货人信息：</td><td style="width:86%;"><?php echo ($goods[0]['customer_name']); ?>，<?php echo ($goods[0]['mobile']); ?>，<?php echo ($goods[0]['email']); ?>，<?php echo ($goods[0]['address']); ?>，  
              <?php echo ($goods[0]['postal_code']); ?></td></tr><tr><td class="td_left">买家留言：</td><td style="width:86%;"><?php echo ($goods[0]['note']); ?></td></tr><tr><td class="td_left">配送方式：</td><td style="width:86%;">快递，国内快递公司</td></tr><tr><td class="td_left">支付方式：</td><td style="width:86%;"><?php echo ($goods[0]['pay_way']); ?></td></tr><tr><td class="td_left">应付总金额：</td><td style="width:86%;"><font color="#DC130F"><?php echo ($goods[0]['all_price']); ?>元</font></td></tr><tr><td class="td_left">订单提交时间：</td><td style="width:86%;"><?php echo ($goods[0]['trade_time']); ?></td></tr></table><table cellspacing="0" id="goods_info_table" cellpadding="0" ><tr id="goods_tr" style="background-color:#E8F2FF; height:35px; "><td>宝贝</td><td>名称</td><td width="6%">服务</td><td width="8%" >状态</td><td width="11%" >单价（元）</td><td width="8%">数量/时间</td><td width="6%" >送积分</td><td width="8%">优惠</td><td width="11%">商品总价（元）</td><td style="border-right:1px solid #DDDDDD; width:6%;">运费</td></tr><?php if(is_array($goods)): foreach($goods as $i=>$info): if($i != 0): ?><tr style="height:80px;" class="goods_list_tr"><td><img height="70px" width="105px" src="__UPLOAD__/s_<?php echo ($info['goods_pic'][0]); ?>" /></td><td><a href="#"><?php echo ($info['goods_name']); ?></a></td><td><?php echo ($info['goods_service']); ?></td><td><?php echo ($info['state']); ?></td><td><?php if($info['time_unit']==''): echo ($info['sale_price']); else: ?><p><?php echo ($info['day_price']); ?>/天</p><p><?php echo ($info['hour_price']); ?>/小时</p><p><?php echo ($info['month_price']); ?>/月</p><?php endif; ?></td><td><?php echo ($info['count']); echo ($info['time_unit']); ?></td><td><?php echo ($info['score']); ?></td><td><?php echo ($info['discount']); ?></td><td><?php echo ($info['unit_price']); ?></td><td><?php echo ($info['trans_fee']); ?></td></tr><?php endif; endforeach; endif; ?></table><div id="sfk" style=" width:98%; margin:20px auto; text-align:right; vertical-align:middle;">实付款：<font color="#DC130F"><?php echo ($goods[0]['all_price']); ?>元</font></div></div><?php endforeach; endif; else: ?>没有您要查询的订单！<?php endif; ?></div><!-- End .content-box-content --></div></body></html>