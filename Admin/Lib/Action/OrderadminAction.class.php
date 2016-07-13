<?php 
class OrderadminAction extends Action{
	 function index(){
		$order_goods=M('OrderGoods');
		if($_GET['order_state']){
			$sql="SELECT order_num FROM think_order WHERE order_state='".$_GET['order_state']."' ORDER BY trade_time DESC;";
		}
		else if($_GET['username']){
			$sql="SELECT order_num FROM think_order WHERE username='".$_GET['username']."' ORDER BY trade_time DESC;";
		}
		else if($this->_post('order_num')){
			$sql="SELECT order_num FROM think_order WHERE order_num='".$this->_post('order_num')."' ORDER BY trade_time DESC;";
		}
		else{
			$sql="SELECT order_num FROM think_order ORDER BY trade_time DESC;";
		}
		
		$sql_result=$order_goods->query($sql);
		$all_order=array();
		foreach ($sql_result as $hand){
		$list=array();
		$field=array("goods_num","goods_name","goods_pic");//购物车中商品所需要的字段
		$shopcar=M('Shopcar');
		//$order_goods_sql="SELECT *FROM think_order_goods  WHERE order_num='".$order_num."';";
		//dump($sql);
		$person_sql="SELECT *FROM think_order  WHERE order_num='".$hand['order_num']."';";
		$order_goods_sql="SELECT *FROM think_order_goods  WHERE order_num='".$hand['order_num']."';";
		$person_info=$order_goods->query($person_sql);
		$format=getdate($person_info[0]['trade_time']);
		$person_info[0]['trade_time']=$format['year'].'年'.$format['mon'].'月'.$format['mday'].'日  '.date("H:i",$person_info[0]['trade_time']);
		$order_info=$order_goods->query($order_goods_sql);
		$all_price=0;
		foreach($order_info as $info){
			$temp=A('Admin://File');
			$goods_num=$info['goods_num'];
			$data=$temp->output_look($goods_num,$field);
			$data[0]['count']=$info['number'];
			$data[0]['time_unit']=$info['time_unit'];
			$data[0]['discount']=$info['discount'];
			$data[0]['trans_fee']=$info['trans_fee'];
			$data[0]['state']=$info['state'];
			if($info['time_unit']==''){
				$data[0]['unit_price']=(float)$data[0]['sale_price']*(float)$info['number']+(float)$info['trans_fee']-(float)$info['discount'];
			}
			else if($info['time_unit']=='天'){
				$data[0]['unit_price']=(float)$data[0]['day_price']*(float)$info['number']+(float)$info['trans_fee']-(float)$info['discount'];
			}
			else if($info['time_unit']=='月'){
				$data[0]['unit_price']=(float)$data[0]['month_price']*(float)$info['number']+(float)$info['trans_fee']-(float)$info['discount'];
			}
			else {
				$data[0]['unit_price']=(float)$data[0]['hour_price']*(float)$info['number']+(float)$info['trans_fee']-(float)$info['discount'];
			}
			$data[0]['score']=(int)($data[0]['unit_price']/10);
			$all_price+=$data[0]['unit_price'];
			$list[]=$data[0];
		}
		$person_info[0]['all_price']=round($all_price,2);
		$all_order[]=array_merge($person_info,$list);
		}
		$this->assign('all_order',$all_order);
		$this->assign('all_person',$all_person);
		$this->display();
	}
	function change_state(){
		$order=M("Order");
		$order->execute("UPDATE think_order SET order_state='".$_POST['order_state']."' WHERE order_num='".$_POST['order_num']."';");
	}
	function delete_order(){
		$order=M("Order");
		$order->execute("DELETE FROM think_order_goods WHERE order_num='".$_POST['order_num']."';");
		$order->execute("DELETE FROM think_order WHERE order_num='".$_POST['order_num']."';");
		
	}
}
?>