<?php 
class ShopcarAction  extends Action{
	public function index(){
		$goods=M('Goods');
		$list=array();
		$field=array("goods_num","goods_name","goods_pic");//购物车中商品所需要的字段
	    $shopcar=M('Shopcar');
		if($_SESSION['username']){
			$username=$_SESSION['username'];
		}
		else{
			$username=session_id();
		}
		$sql="SELECT *FROM think_shopcar WHERE username='".$username."';";
		//dump($sql);
		$shopcar_goods=$shopcar->query($sql);
		foreach($shopcar_goods as $info){
			$temp=A('Admin://File');
			$goods_num=$info['goods_num'];
			$data=$temp->output_look($goods_num,$field);
			$data[0]['count']=$info['number'];
			$data[0]['time_unit']=$info['time_unit'];
			$list[]=$data[0];	
		}
		//dump($list);
		$this->assign('list',$list);
		$this->display(); // 输出模板
	}
    function addIntoShopcar(){
    	$shopcar=M('Shopcar');
    	$shopcar->create();
		if($_SESSION['username']){
			$username=$_SESSION['username'];
			$state='用户';
		}
		else{
			$username=session_id();
			$state='临时';
		}
           $sql="SELECT *FROM think_shopcar WHERE username='".$username."' AND goods_num='".$_POST['goods_num']."';";
			$result=$shopcar->query($sql);
			if($result){
				$count_sql="UPDATE think_shopcar SET number=".$_POST['count'].",time_unit='".$_POST['time_unit']."'  WHERE username='".$username."' AND goods_num='".$_POST['goods_num']."';";
			    $shopcar->execute($count_sql);
			}
			else{
				$shopcar->goods_num=$_POST['goods_num'];
				$shopcar->username=$username;
				$shopcar->number=$_POST['count'];
				$shopcar->time_unit=$_POST['time_unit'];
				$shopcar->add_time=time();
				$shopcar->state=$state;
				$shopcar->add();
			}
    }
	 function goods_delete(){
	 	$shopcar=M('Shopcar');
	 	if($_SESSION['username']){
	 		$username=$_SESSION['username'];
	 	}
	 	else{
	 		$username=session_id();
	 	}
	 	$deleteSql="DELETE FROM think_shopcar WHERE username='".$username."' AND goods_num='".$_POST['goods_num']."';";
	 	$shopcar->execute($deleteSql);
	}
	
	function change_unit(){
		$shopcar=M('Shopcar');
		if($_SESSION['username']){
			$username=$_SESSION['username'];
		}
		else{
			$username=session_id();
		}
		$deleteSql="UPDATE  think_shopcar SET time_unit='".$_POST['now_select']."' WHERE username='".$username."' AND goods_num='".$_POST['goods_num']."';";
		$shopcar->execute($deleteSql);
	}
	
	function change_number(){
		$shopcar=M('Shopcar');
		if($_SESSION['username']){
			$username=$_SESSION['username'];
		}
		else{
			$username=session_id();
		}
		$deleteSql="UPDATE  think_shopcar SET number='".$_POST['goods_count']."' WHERE username='".$username."' AND goods_num='".$_POST['goods_num']."';";
		$shopcar->execute($deleteSql);
	}
	
	function state_deal(){
			$shopcar=M('Shopcar');
			$stateSql="UPDATE think_shopcar SET add_time=".time()." WHERE username='".session_id()."';";
			$shopcar->execute($stateSql);
			//dump($sql);
			
		}
	function shopcar_other(){//每页中购物车快捷栏中查出购物车中的商品
		$shopcar_goods=M('Goods');
		$shopcar_list=array();
		$shopcar_field=array("goods_num","goods_name","goods_pic");//购物车中商品所需要的字段
		$shopcar=M('Shopcar');
		if($_SESSION['username']){
			$username=$_SESSION['username'];
		}
		else{
			$username=session_id();
		}
		$shopcar_sql="SELECT *FROM think_shopcar WHERE username='".$username."';";
		//dump($sql);
		$shopcar_goods=$shopcar->query($shopcar_sql);
		foreach($shopcar_goods as $info){
			$temp=A('Admin://File');
			$goods_num=$info['goods_num'];
			$data=$temp->output_look($goods_num,$shopcar_field);
			$data[0]['count']=$info['number'];
			$data[0]['time_unit']=$info['time_unit'];
			$shopcar_list[]=$data[0];
		}
		return $shopcar_list;
	}
}?>