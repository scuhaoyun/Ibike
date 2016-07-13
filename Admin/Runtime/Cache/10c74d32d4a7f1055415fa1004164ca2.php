<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Simpla Admin</title><!--                       CSS                       --><!-- Reset Stylesheet --><link rel="stylesheet" href="__CSS__/reset.css" type="text/css" media="screen" /><!-- Main Stylesheet --><link rel="stylesheet" href="__CSS__/style.css" type="text/css" media="screen" /><!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid --><link rel="stylesheet" href="__CSS__/invalid.css" type="text/css" media="screen" /><!--                       Javascripts                       --><script type="text/javascript" src="__JS__/jquery-1.3.2.min.js"></script><!-- jQuery Configuration --><script type="text/javascript" src="__JS__/simpla.jquery.configuration.js"></script><!-- Facebox jQuery Plugin --><script type="text/javascript" src="__JS__/facebox.js"></script><!-- jQuery WYSIWYG Plugin --><script type="text/javascript" src="__JS__/jquery.wysiwyg.js"></script><!-- jQuery Datepicker Plugin --><!--<script type="text/javascript" src="__JS__/jquery.datePicker.js"></script><script type="text/javascript" src="__JS__/jquery.date.js"></script>--></head><script type="text/javascript">$(document).ready(function(){
   $("#main-nav>li>ul>li>a").click(function(){
          $("#main-nav>li>ul>li>a[class='current']").removeClass();
         $(this).attr("class","current");
		 });
	$("#main-nav>li>a").click(function(){
          $("#main-nav>li>a[class='nav-top-item current']").attr("class","nav-top-item");
         $(this).attr("class","nav-top-item current");
		 });
	$("#body-wrapper").hover(function(){
	    $("#hide_left").show();
		},
		function(){
		$("#hide_left").hide();});
	$("#hide_left").click(function(){
	    window.parent.document.getElementById("myFrame").cols="0,*";
		window.top.frames['mainFrame'].$("#divQQbox").show();
		});
	//window.top.frames['leftFrame'].$("#body-wrapper").hide();});
	//测试用的
	$("#main-nav li ul li a").click(function(){
		var go_url="__APP__/Test/index";
		window.top.frames['mainFrame'].location = go_url;
		var header=$(this).parent().parent().parent().children(":first").text()+" >> "+$(this).text();
		Pause(this,500);//调用暂停函数      
           this.NextStep=function()  
           {     
                window.top.frames['mainFrame'].$(".content-box-header>h3").text(header);     
          }    
		
	});
	$(".order_state").click(function(){
		var go_url="__APP__/Orderadmin/index?order_state="+$(this).attr("name");
		window.top.frames['mainFrame'].location = go_url;
	});
	$("#jbxx").click(function(){
		var go_url="__APP__/Setting/index";
		window.top.frames['mainFrame'].location = go_url;
	});
	$("#goods_look").click(function(){
		var go_url="__APP__/File/output_goods";
		window.top.frames['mainFrame'].location = go_url;
	});
	$("#goods_upload").click(function(){
		var go_url="__APP__/Index/admin_right";
		window.top.frames['mainFrame'].location = go_url;
	});
	$("#user_info").click(function(){
		var go_url="__APP__/Useradmin/index";
		window.top.frames['mainFrame'].location = go_url;
	});
	$("#all_order").click(function(){
		var go_url="__APP__/Orderadmin/index";
		window.top.frames['mainFrame'].location = go_url;
	});
	
});
</script><body><div id="body-wrapper"><!-- Wrapper for the radial gradient background --><div id="sidebar" style="position:relative;"><div id="hide_left" style="position:absolute; top:0px; left:160px; cursor:pointer; display:none;" title="隐藏侧边栏"><img src="__IMAGE__/hide_left.png" /></div><div id="sidebar-wrapper"><!-- Sidebar with logo and menu --><h1 id="sidebar-title"><a href="#">Ibike Admin</a></h1><!-- Logo (221px wide) --><a href="#"><img id="logo" src="__IMAGE__/web_logo.png" alt="Ibike Admin logo" /></a><!-- Sidebar Profile links --><ul id="main-nav"><!-- Accordion Menu --><li><a href="#" class="nav-top-item current"><!-- Add the class "no-submenu" to menu items with no sub menu -->          系统设置</a><ul><li><a href="#" class="current" id="jbxx">基本信息</a></li><li><a href="#">网站模块管理</a></li><li><a href="#">社区信息设置</a></li><li><a href="#">分页显示设置</a></li><li><a href="#">活动安排设置</a></li></ul></li><li><a href="#" class="nav-top-item"><!-- Add the class "current" to current menu item -->          商品信息管理 </a><ul><li><a href="#" id="goods_look">商品查看</a></li><li><a href="#" id="goods_upload">商品上传</a></li><!-- Add class "current" to sub menu items also --><li><a href="#"> 最新上架商品管理 </a></li><li><a href="#"> 下架商品管理 </a></li><li><a href="#"> 无库存商品管理 </a></li><li><a href="#"> 优惠促销商品管理 </a></li></ul></li><li><a href="#" class="nav-top-item"> 用户管理 </a><ul><li><a href="#" id="user_info">用户信息管理</a></li><li><a href="#">用户权限管理</a></li></ul></li><li><a href="#" class="nav-top-item"> 订单管理 </a><ul><li><a href="#" id="all_order" name="未付款"> 全部订单 </a></li><li><a href="#" class="order_state" name="未付款"> 未付款订单 </a></li><li><a href="#" class="order_state" name="已付款"> 已付款订单 </a></li><li><a href="#" class="order_state" name="已发货"> 已发货订单 </a></li><li><a href="#" class="order_state" name="已确认收货"> 已确认收货订单 </a></li><li><a href="#" class="order_state" name="已评价"> 已评价订单 </a></li></ul></li><li><a href="#" class="nav-top-item"> 统计数据管理 </a><ul><li><a href="#" > 产品销售业绩情况 </a></li><li><a href="#" > 订单完成情况 </a></li><li><a href="#" > 定期网站数据情况 </a></li></ul></li><li><a href="#" class="nav-top-item"> 其他 </a><ul><li><a href="#" > 申请管理员账户 </a></li><li><a href="#" > 管理员权限管理 </a></li><li><a href="#" > 网站模块管理 </a></li><li><a href="#" > 站内信管理 </a></li><li><a href="#" > 本站公告 </a></li></ul></li></ul><!-- End #main-nav --><!-- End #messages --></div></div></div><script>function Pause(obj,iMinSecond)//暂停函数定义  
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