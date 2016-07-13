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
</script></body></html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>无标题文档</title><script type="text/javascript" src="__JS__/ajax.js"></script></head><style type="text/css">.content-box {
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
#user_info_table{
 border-right:1px solid #DDDDDD;
	border-bottom:1px solid #DDDDDD;
}
#user_info_table td{
   border-left:1px solid #DDDDDD;
	border-top:1px solid #DDDDDD;}
.user_list_tr:hover{ background:#FFFBBC;}
.tr_click{ background:#FFFBBC;}
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
	
  $(":checkbox :last").click(function(){//全选，取消全选
	       if($(this).attr("checked")){
		   		$(":checkbox").attr({checked:"checked"});
				$(".user_list_tr").addClass("tr_click");
		   }
		   if(!$(this).attr("checked")){
		        $(":checkbox").attr({checked:false});
				$(".user_list_tr").removeClass("tr_click");
		   }
	  		
	  });
	  $(":checkbox :not(:last)").click(function(){
	       if(!$(this).attr("checked")){
	  			$(":checkbox :last").attr({checked:false});
				$(this).parent().parent().removeClass("tr_click");
			}
			else{
			$(this).parent().parent().addClass("tr_click");
			}
	  });
	  
	  $(".jrhmd").click(function(){
		 var ajax=Ajax();
		 var username=$(this).attr("name");
		ajax.post("__APP__/Useradmin/jrhmd", {username:username}, function(data){document.location.reload();});
	});
	
	$(".delete_user").click(function(){
		 var ajax1=Ajax();
		 var username=$(this).attr("name");
		ajax1.post("__APP__/Useradmin/delete_user", {username:username}, function(data){document.location.reload();});
	});
	
	 $("#all_jrhmd").click(function(){//删除选中的所有商品   
			$("input:checked").each(function(){
				var username=$(this).attr("name");
				 var ajax2=Ajax();
		        ajax2.post("__APP__/Useradmin/jrhmd", {username:username}, function(data){});
			});
			Pause(this,50);//调用暂停函数      
           this.NextStep=function()  
           {     
                document.location.reload();     
          }    
	});
	$("#all_delete_user").click(function(){//删除选中的所有商品
	      alert("您正在进行的操作将删除所有选中用户的所有信息，包括用户信息、订单信息、评论信息、购物车信息等，由于是测试阶段，所以不支持您的随意而为，请谅解！");   
			/*$("input:checked").each(function(){
				var username=$(this).attr("name");
				 var ajax3=Ajax();
		        ajax3.post("__APP__/Useradmin/delete_user", {username:username}, function(data){});
			});
			Pause(this,50);//调用暂停函数      
           this.NextStep=function()  
           {     
                document.location.reload();     
          }    */
	});
});
</script><body><!--<div id="right">--><div class="content-box"><!-- Start Content Box --><div class="content-box-header" style="position:relative;"><h3>用户管理</h3><div class="searchbox"><form enctype="multipart/form-data" action="__APP__/Useradmin/index"  method="POST"><input type="text" id="birds" name="username" class="stext" value=""><input class="btnimg" type="submit" value="" /></form></div><div class="clear"></div></div><div class="content-box-content"><?php if($user != null): ?><table cellspacing="0" id="user_info_table" cellpadding="0" style="text-align:center; vertical-align:middle;" ><tr id="goods_tr" style="background-color:#E8F2FF; height:38px; "><td width="2%"></td><td width="5%" style="border-left:none;">用户ID</td><td >用户名</td><td >密码</td><td width="8%" >用户权限</td><td width="6%" >用户积分</td><td width="14%">注册时间</td><td width="6%">登录次数</td><td width="17%">操作</td></tr><?php if(is_array($user)): foreach($user as $key=>$info): ?><tr style="height:40px;" class="user_list_tr"><td><input type="checkbox" name="<?php echo ($info['username']); ?>"></td><td><?php echo ($info['user_id']); ?></td><td><?php echo ($info['username']); ?></td><td><?php echo ($info['password']); ?></td><td><?php if($info['blacklist']=='否'): echo ($info['userability']); else: ?>黑名单用户<?php endif; ?></td><td><?php echo ($info['userscore']); ?></td><td><?php echo ($info['reg_time']); ?></td><td><?php echo ($info['login_times']); ?></td><td ><p><a href="__APP__/Orderadmin/index?username=<?php echo ($info['username']); ?>">【用户订单】</a><a href="__APP__/Useradmin/user_shopcar?username=<?php echo ($info['username']); ?>">【购物车】</a></p><p><a class="jrhmd" name="<?php echo ($info['username']); ?>" href="#"><?php if($info['blacklist']=='否'): ?>【加入黑名单】
     <?php else: ?>【移出黑名单】<?php endif; ?></a><a href="#" class="delete_user" name="<?php echo ($info['username']); ?>" style="color:#FBA60F;">【删除】</a></p></td></tr><?php endforeach; endif; ?></table><input type="checkbox" id="select_all">全选/反选&nbsp;&nbsp;&nbsp;&nbsp;选中项：<a id="all_jrhmd" href="#" style="color:#FBA60F;">【加入/移出黑名单】</a><a id="all_delete_user" href="#" style="color:#FBA60F;">【删除】</a><?php else: ?>没有你要查找的用户！<?php endif; ?></div><!-- End .content-box-content --></div><script>function Pause(obj,iMinSecond)//暂停函数定义  
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