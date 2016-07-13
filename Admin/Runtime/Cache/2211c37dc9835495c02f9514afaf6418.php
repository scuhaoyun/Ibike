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
</script></body></html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title><script type="text/javascript" src="__JS__/payfor.js"></script><script type="text/javascript" src="__JS__/ajax.js"></script></head><style type="text/css">.content-box {
	width:96%;
	margin:0 auto;
}
.searchbox {
	background:url(__IMAGE__/search_user.png) no-repeat;
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
a {
	text-decoration:none;
}
#home_middle {
	width:1050px;
	height: auto;
	margin:0 auto;
	text-align:left;
}
#goods_look {
	width:520px;
	height:450px;
	display:inline;
	float:left;
}
ul li {
	list-style:none;
	float:left;
	margin:0;
}
img {
	border:none;
}
.p_number{width:100px;height:30px; display:block; vertical-align:top;}	
.p_number .f_l{float:left;}
.p_number .add_chose{width:105px;}
.p_number .add_chose a{float:left;margin:5px 0 0 0;display:block;width:15px;height:15px;line-height:99em;overflow:hidden;background:url(__IMAGE__/reduce-add.gif) no-repeat;}
.p_number .add_chose a.reduce{background-position:0 0;}
.p_number .add_chose a.reduce:hover{background-position:0 -16px;}
.p_number .add_chose a.add{background-position:-16px 0;}
.p_number .add_chose a.add:hover{background-position:-16px -16px;}
.p_number .add_chose .text{float:left;margin:0 5px;display:inline;border:solid 1px #ccc;padding:4px 3px 4px 8px;width:40px;line-height:18px;font-size:14px;color:#990000;font-weight:800;}
.p_number .buy{line-height:2em;}
.p_number .buy .total-font{font-family:Arial;font-size:26px;}
.jifen{margin-left:20px;color:#ACACAC; font-size:14px;}
.jifen b{margin:0 3px;}
#user_shopcar td{border-right:1px solid #fff;border-top:1px solid #CCCCCC; }
.goods_list_td{background:#FFFDEE;}
#total_item_0{ position:absolute; bottom:-43px; font-size:26px; color:#E35651;}
.content-box-content{ font-size:14px;}
</style><script type="text/javascript">$(document).ready(function(){
    var keywords = "请输入用户名！";

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
	
	$(".goods_del_but").click(function(){
		 var ajax=Ajax();
		 var goods_num=$(this).attr("name");
		ajax.post("__ROOT__/index.php/Shopcar/goods_delete", {goods_num:goods_num}, function(data){document.location.reload();});
	});
	
	$("#total_item_0").show();
	
	 $(".rent_unit_select").change(function(){ 
		 var change_item=$(this).attr("id");  
		 var item_id=$(this).attr("title");
		 $(change_item).text($(this).find('option:selected').attr("title"));
	     $(item_id).keyup();
		 
		  var goods_num=$(this).attr("name");
		  var now_select=$(this).find('option:selected').attr("value");
	      var ajax1=Ajax();
		ajax1.post("__ROOT__/index.php/Shopcar/change_unit", {goods_num:goods_num,now_select:now_select}, function(data){});
	  });
	  
	   $("input:text").change(function(){ 
		  var goods_num=$(this).attr("title");
		  var goods_count=$(this).attr("value");
	      var ajax2=Ajax();
		ajax2.post("__ROOT__/index.php/Shopcar/change_number", {goods_num:goods_num,goods_count:goods_count}, function(data){});
	  });
	  
	  $(".add,.reduce").click(function(){ 
	      var input_id=$(this).attr("title");
		  var goods_num=$(input_id).attr("title");
		  var goods_count=$(input_id).attr("value");
	      var ajax3=Ajax();
		ajax3.post("__ROOT__/index.php/Shopcar/change_number", {goods_num:goods_num,goods_count:goods_count}, function(data){});
	  });
	  
	 $(":checkbox :first").click(function(){//全选，取消全选
	       if($(this).attr("checked")){
		   		$(":checkbox").attr({checked:"checked"});
		   }
		   if(!$(this).attr("checked")){
		        $(":checkbox").attr({checked:false});
		   }
	  		
	  });
	  $(":checkbox :not(:first)").click(function(){
	       if(!$(this).attr("checked")){
	  			$(":checkbox :first").attr({checked:false});
			}
	  });
	  $("#delete_all_but").click(function(){//删除选中的所有商品
	       
			$("input:checked").each(function(){
				var del=$(this).attr("name");
				var goods_num=$(del).attr("name");
				 var ajax=Ajax();
		        ajax.post("__ROOT__/index.php/Shopcar/goods_delete", {goods_num:goods_num}, function(data){});
			});
			Pause(this,50);//调用暂停函数      
           this.NextStep=function()  
           {     
                document.location.reload();     
          }    

			//alert("您确定要删除所选中的所用商品吗？");
			//document.location.reload();
	});
});
</script><body><!--<div id="right">--><div class="content-box"><!-- Start Content Box --><div class="content-box-header" style="position:relative;"><h3>用户管理>>用户购物车</h3><div class="searchbox"><form enctype="multipart/form-data" action="__APP__/Useradmin/user_shopcar"  method="POST"><input type="text" id="birds" name="username" class="stext" value=""><input class="btnimg" type="submit" value="" /></form></div><div class="clear"></div></div><div class="content-box-content"><?php if($list != null): ?><table id="user_shopcar" cellspacing="0"  cellpadding="0" style="border:1px solid #CCCCCC; border-bottom:none;border-top:none; width:100%; height:auto; text-align:center; vertical-align:middle; position:relative;"><tr id="shopcarth" style="background-color:#F3F3F3; height:40px;"><td style="border-right:none;width:2%;"></td><td width="12%" ><input type="checkbox"  id="all_select"/>全选</td><td>商品</td><td width="10%" >服务类型</td><td width="11%" >单价</td><td width="10%" >返现/送积分</td><td width="7%">数量/时间</td><td width="15%">操作</td></tr><?php if(is_array($list)): foreach($list as $key=>$goods): ?><tr style="height:80px;" class="goods_list_td"><td class="goods_checkbox"><input type="checkbox" name="#goods_del_but<?php echo ($key); ?>"/></td><td><img height="80px" width="120px" src="__UPLOAD__/s_<?php echo ($goods['goods_pic'][0]); ?>" /></td><td><a href="#"><?php echo ($goods['goods_name']); ?></a></td><?php if($goods['time_unit']==''): ?><td>出售</td><td><label id="price_item_<?php echo ($key); ?>">$<?php echo ($goods['sale_price']); ?></label></td><?php elseif($goods['time_unit']=='天'): ?><td>出租</td><td><div id="price_item_<?php echo ($key); ?>" style=" width:auto; display:inline; float:left;">$<?php echo ($goods['day_price']); ?></div><div class="unit_select" style=" width:40px; height:25px; 		                 display:inline; float:left; margin-right:10px;"><select name="<?php echo ($goods['goods_num']); ?>" id="#price_item_<?php echo ($key); ?>" title="#qty_item_<?php echo ($key); ?>" class="rent_unit_select"><option title="$<?php echo ($goods['day_price']); ?>" value="天" selected="selected">/天</option><option title="$<?php echo ($goods['hour_price']); ?>" value="小时">/小时</option><option title="$<?php echo ($goods['month_price']); ?>" value="月" >/月</option></select></div></td><?php elseif($goods['time_unit']=='小时'): ?><td>出租</td><td><div id="price_item_<?php echo ($key); ?>" style=" width:auto; display:inline; float:left;">$<?php echo ($goods['hour_price']); ?></div><div class="unit_select" style=" width:40px; height:25px; 		                 display:inline; float:left; margin-right:10px;"><select name="<?php echo ($goods['goods_num']); ?>" id="#price_item_<?php echo ($key); ?>" title="#qty_item_<?php echo ($key); ?>" class="rent_unit_select"><option title="$<?php echo ($goods['day_price']); ?>" value="天" >/天</option><option title="$<?php echo ($goods['hour_price']); ?>" value="小时" selected="selected">/小时</option><option title="$<?php echo ($goods['month_price']); ?>" value="月" >/月</option></select></div></td><?php else: ?><td width="10%" >出租</td><td><div id="price_item_<?php echo ($key); ?>" style=" width:auto; display:inline; float:left;">$<?php echo ($goods['month_price']); ?></div><div class="unit_select" style=" width:40px; height:25px; 		                 display:inline; float:left; margin-right:10px;"><select name="<?php echo ($goods['goods_num']); ?>" id="#price_item_<?php echo ($key); ?>" title="#qty_item_<?php echo ($key); ?>" class="rent_unit_select"><option title="$<?php echo ($goods['day_price']); ?>" value="天" >/天</option><option title="$<?php echo ($goods['hour_price']); ?>" value="小时">/小时</option><option title="$<?php echo ($goods['month_price']); ?>" value="月" selected="selected">/月</option></select></div></td><?php endif; ?><!-- <?php if($goods['goods_service']=='出售'): ?><td><label id="price_item_<?php echo ($key); ?>">$<?php echo ($goods['sale_price']); ?></label></td><?php else: if($goods['time_unit']=='天'): ?><label id="price_item_<?php echo ($key); ?>">$<?php echo ($goods['day_price']); ?></label></td><?php elseif($goods['time_unit']=='小时'): ?><label id="price_item_<?php echo ($key); ?>">$<?php echo ($goods['hour_price']); ?></label></td><?php else: ?><label id="price_item_<?php echo ($key); ?>">$<?php echo ($goods['month_price']); ?></label></td><?php endif; endif; ?>--><td><span class="jifen"><b id="total_points">18</b></span></td><td><div class="p_number"><input type="text" name="goods_num_<?php echo ($key); ?>" value="<?php echo ($goods['goods_num']); ?>" id="goods_num_<?php echo ($key); ?>" style=" display:none;"/><div class="f_l add_chose"><a class="reduce" title="#qty_item_<?php echo ($key); ?>" onClick="setAmount.reduce('#qty_item_<?php echo ($key); ?>')" href="javascript:void(0)">-</a><input type="text" name="qty_item_<?php echo ($key); ?>" title="<?php echo ($goods['goods_num']); ?>" value="<?php echo ($goods['count']); ?>" id="qty_item_<?php echo ($key); ?>" onKeyUp="setAmount.modify('#qty_item_<?php echo ($key); ?>')" class="text" /><a class="add" title="#qty_item_<?php echo ($key); ?>" onClick="setAmount.add('#qty_item_<?php echo ($key); ?>')" href="javascript:void(0)">+</a></div><span class="total-font" id="total_item_<?php echo ($key); ?>" style=" display:none;"></span></td><td><a href="#djd" ><img src="__IMAGE__/delete.png" id="goods_del_but<?php echo ($key); ?>" class="goods_del_but" name="<?php echo ($goods['goods_num']); ?>"/></a></td></tr><?php endforeach; endif; ?></table><div style="height:70px; background:#F3F3F3;border:1px solid #CCCCCC; border-top:none; margin:0 auto;"><div style="width:800px; display:inline; float:left; margin-top:20px; padding-left:30px;"><a href="#"  id="delete_all_but" style="color:#000000;"><img src="__IMAGE__/cross.png"/>删除所选商品！</a></div><div style="width:200px; display:inline; float:right; margin-top:20px;">总计:
    
    </div></div><?php else: ?>没有该用户或该用户购物车内没有商品！<?php endif; ?></div><!-- End .content-box-content --></div><script>function Pause(obj,iMinSecond)//暂停函数定义  
{     
    if (window.eventList==null)   
        window.eventList=new Array();     
    var ind=-1;     
    for (var i=0;i<window.eventList.length;i++)  
    {      
        if (window.eventList[i]==null)   
        {       
            window.eventList[i]=obj;   
            ind=i;      
            break;     
        }   
    }       
    if (ind==-1)  
    {      
        ind=window.eventList.length;      
        window.eventList[ind]=obj;     
    }     
    setTimeout("GoOn(" + ind + ")",iMinSecond);    
}   
  
 function GoOn(ind)  
 {     
    var obj=window.eventList[ind];     
    window.eventList[ind]=null;     
    if (obj.NextStep)   
        obj.NextStep();     
    else obj();    
 }   

</script></body></html>