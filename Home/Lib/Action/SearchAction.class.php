<?php 
class SearchAction extends  Action{
	public function index(){//分页输出
		import("Page");
		$temp=M("Goods");
		$all_goods=$this->word_search_result();
		$page= new Page(count($all_goods),15,r);// 实例化分页类 传入总记录数和每页显示的记录数
		$show= $page->show();// 分页显示输出
		$list=array_slice($all_goods,$page->firstRow,$page->listRows,true);
		$shopcar_handle=A("Shopcar");
		$shopcar_list=$shopcar_handle->shopcar_other();
		$this->assign('shopcar_list',$shopcar_list);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	public function word_search_result(){
		header("Content-type: text/html; charset=utf-8");
		require  './Public/Plugin/pscws23/pscws2.class.php';
		if($_POST['search']){
			$_SESSION['search']=$_POST['search'];
			$_SESSION['search_is']=true;
		}
		$orgstr=iconv('utf-8','gbk',$_SESSION['search']);
		$pscws=new PSCWS2("./Public/Plugin/pscws23/dict/dict.xdb");
		$segstr=$pscws->segment($orgstr);//切割字符串
		$segstr=array_unique($segstr);//去掉字符中中的重复项
		$utfstr=array();
		foreach ($segstr as $vo){//将搜索字符串转换为UTF-8编码
			$utfstr[]=iconv('gbk','utf-8',$vo);
		}
		$goods=M('Goods');//查询出商品名
		$data=$goods->query('SELECT *FROM think_goods ORDER BY shelf_time;');
	
		foreach ($data as $key=>$info){//将收索出的商品字符串格式化
			$data[$key]['goods_pic']=explode('||',$data[$key]['goods_pic']);
			$data[$key]['desc_pic']=explode('||',$data[$key]['desc_pic']);
			$data[$key]['goods_para']=explode('||',$data[$key]['goods_para']);
			$format=getdate($data[$key]['shelf_time']);
			$data[$key]['shelf_time']=$format['year'].'年'.$format['mon'].'月'.$format['mday'].'日  '.date("H:i",$data[$key]['shelf_time']);
			if($data[$key]['goods_service']=='出售'){//提取出售商品价格
				$sale=M('SaleGoods');
				$sale_price=$sale->query("SELECT *FROM think_sale_goods WHERE goods_num='".$data[$key][goods_num]."';");
				$data[$key]['sale_price']=$sale_price[0]['sale_price'];
				$data[$key]['market_price']=$sale_price[0]['market_price'];
			}
			else {//提取出租商品价格
				$rent=M('RentGoods');
				$rent_price=$rent->query("SELECT *FROM think_rent_goods WHERE goods_num='".$data[$key][goods_num]."';");
				$data[$key]['hour_price']=$rent_price[0]['hour_price'];
				$data[$key]['day_price']=$rent_price[0]['day_price'];
				$data[$key]['month_price']=$rent_price[0]['month_price'];
			}
			}	
		$len=count($data);
		$rank=array();//定义输出顺序排列参考数组
		$test=array();
		for ($k=0;$k<$len;$k++){
			$rank[$k]=0;
		}
		
		for($i=0;$i<$len;$i++){//根据字符串匹配的次数在rank数组中体现
			for($j=0;$j<count($utfstr);$j++){
				$rank[$i]+=substr_count($data[$i]['goods_name'],$utfstr[$j]);
			}
		}
		if(!$_SESSION['admin_search']){
		for($i=0;$i<$len;$i++){//将搜索结果中的关键字变成红色
			for($j=0;$j<count($utfstr);$j++){
				$data[$i]['goods_name']=str_replace($utfstr[$j],'<font color="red">'.$utfstr[$j].'</font>',$data[$i]['goods_name']);
			}
		}
		}
		for($i=0;$i<$len;$i++){//按参考数组将收索结果排序
			for($j=$i+1;$j<$len;$j++){
				if($rank[$i]<$rank[$j]){
					$temp1=$rank[$i];
					$rank[$i]=$rank[$j];
					$rank[$j]=$temp1;
					$tem=$data[$i];
					$data[$i]=$data[$j];
					$data[$j]=$tem;
				}
					
			}
		}
		if($_POST['search'] || $_GET['search'] || $_SESSION['search_is']){
			for($i=0;$i<$len;$i++){//输出结果
				if($rank[$i]==0){
					array_splice($data,$i);
				}
		}
		
		}
		return $data;
	}
	 function condition(){
		import("Page");
		$temp=M("Goods");
		if($_GET['search']){
			$_SESSION['search']=$_GET['search'];
		}
		else{
			$_SESSION['search']='';
		}
		$all_goods=$this->word_search_result();
		$count=count($all_goods);
		$temp=array();
		$goods=array();
		for ($k=0;$k<$count;$k++){
			$temp[$k]=1;
		}
		foreach ($all_goods as $key=>$info){
			if($_GET['goods_service']){
				if($info['goods_service']!=$_GET['goods_service']){
					$temp[$key]=0;
				}
			}
			if($_GET['goods_type']){
				if($info['goods_type']!=$_GET['goods_type']){
					$temp[$key]=0;
				}
			}
			if($_GET['sale_low_price']){
				if($info['sale_price']<$_GET['sale_low_price']){
					$temp[$key]=0;
				}
			}
			if($_GET['sale_high_price']){
				if($info['sale_price']>$_GET['sale_high_price']){
					$temp[$key]=0;
				}
			}
			if($_GET['goods_new']){
				if($info['goods_new']>$_GET['goods_new']){
					$temp[$key]=0;
				}
			}
		}
		foreach ($all_goods as $i=>$out){
			if($temp[$i]!=0){
				$goods[]=$out;
			}
		}
		/*else{dump($_GET['goods_service']);
		dump($info['goods_service']);
		dump($all_goods);
		}
		}*/
		//dump($all_goods);
		$page= new Page(count($goods),15,r);// 实例化分页类 传入总记录数和每页显示的记录数
		$show= $page->show();// 分页显示输出
		$list=array_slice($goods,$page->firstRow,$page->listRows,true);
		$shopcar_handle=A("Shopcar");
		$shopcar_list=$shopcar_handle->shopcar_other();
		$this->assign('shopcar_list',$shopcar_list);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
}?>