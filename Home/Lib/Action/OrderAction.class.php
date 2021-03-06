<?php 
class OrderAction  extends Action{
	public function index(){
		//dump($_POST);
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
		$this->display();
	}
	
	function my_order(){
		$order_goods=M('OrderGoods');
		$sql="SELECT order_num FROM think_order  WHERE username='".$_SESSION['username']."';";
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
		$order_info=$order_goods->query($order_goods_sql);
		$format=getdate($person_info[0]['trade_time']);
		$person_info[0]['trade_time']=$format['year'].'年'.$format['mon'].'月'.$format['mday'].'日  '.date("H:i",$person_info[0]['trade_time']);
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
		//$all_person=$all_order[0];
		//$goods= array_splice($output,1);
		
		/*foreach ($all_order as $one_order){
			$all_person[]=$one_order[0];
			array_splice($all_order[$key],1);
		}*/
		//dump($all_person);
		//dump($all_order);
		$this->assign('all_order',$all_order);
		$this->assign('all_person',$all_person);
		$this->display();
	}
   
	function order_output(){
		$output=$this->order_deal($_POST);
		$person=$output[0];
		$goods= array_splice($output,1);
		//dump($person);
		//dump($goods);
		$this->assign('person',$person);
		$this->assign('goods',$goods);
		$this->display();
	}
	function order_deal($post_info){
	   $format=getdate(time());//产生订单号
		$order_num="SCU".$format['year'].$format['mon'].$format['mday'].$format['hours'].$format['minutes'].$format['seconds'].rand(0,100);
		$shopcar=M('Shopcar');
		$sql="SELECT *FROM think_shopcar WHERE username='".$_SESSION['username']."';";
		//dump($sql);
		$shopcar_goods=$shopcar->query($sql);
		if($shopcar_goods){
			$order_goods=M('OrderGoods');
			foreach ($shopcar_goods as $info){//将购物车中的信息写入think_order_goods表
				$order_goods->create();
				$order_goods->goods_num=$info['goods_num'];
				$order_goods->order_num=$order_num;
				$order_goods->number=$info['number'];
				$order_goods->time_unit=$info['time_unit'];
				$order_goods->add();
			}
			$order_handle=M('Order');//将提交上来的订单信息写入think_order表
			$order_handle->create();
			$order_handle->order_num=$order_num;
			$order_handle->username=$_SESSION['username'];
			$order_handle->customer_name=$post_info['customer_name'];
			$order_handle->address=$post_info['s_province'].$post_info['s_city'].$post_info['s_county'].$post_info['street_address'];
			$order_handle->mobile=$post_info['mobile'];
			$order_handle->email=$post_info['email'];
			$order_handle->postal_code=$post_info['postal_code'];
			$order_handle->trade_time=time();
			$order_handle->note=$post_info['note'];
			$order_handle->add();
			$shopcar->execute("DELETE FROM think_shopcar WHERE username='".$_SESSION['username']."';");
			
			$order_goods=M('OrderGoods');
			$list=array();
			$field=array("goods_num","goods_name","goods_pic");//购物车中商品所需要的字段
			$shopcar=M('Shopcar');
			//$order_goods_sql="SELECT *FROM think_order_goods  WHERE order_num='".$order_num."';";
			//dump($sql);
			$person_sql="SELECT *FROM think_order  WHERE order_num='".$order_num."';";
			$order_goods_sql="SELECT *FROM think_order_goods  WHERE order_num='".$order_num."';";
			$person_info=$order_goods->query($person_sql);
			$order_info=$order_goods->query($order_goods_sql);
			$format=getdate($person_info[0]['trade_time']);
			$person_info[0]['trade_time']=$format['year'].'年'.$format['mon'].'月'.$format['mday'].'日  '.date("H:i",$person_info[0]['trade_time']);
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
			return array_merge($person_info,$list);
		}
	}
	
}?>