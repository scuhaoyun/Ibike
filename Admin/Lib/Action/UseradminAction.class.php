<?php 
class UseradminAction extends Action{
	 function index(){
	 	$handle=M('User');
	 	if($_POST['username']){
	 		$sql="SELECT *FROM think_user WHERE username='".$_POST['username']."';";
	 	}
	 	else{
	 		$sql="SELECT *FROM think_user;";
	 	}
	 	$user=$handle->query($sql);
	 	foreach ($user as $i=>$info){
	 		$user[$i]['user_id']=100000+$i;
	 		$format=getdate($info['reg_time']);
	 		$user[$i]['reg_time']=$format['year'].'年'.$format['mon'].'月'.$format['mday'].'日  '.date("H:i",$info['reg_time']);
	 	}
		//dump($user);
		$this->assign('user',$user);
		//$this->assign('all_person',$all_person);
		$this->display();
	}
	
     function user_shopcar(){
		$goods=M('Goods');
		$list=array();
		$field=array("goods_num","goods_name","goods_pic");//购物车中商品所需要的字段
		$shopcar=M('Shopcar');
		if($_GET['username']){
			$username=$_GET['username'];
		}
		else if($_POST['username']){
			$username=$_POST['username'];
		}
		else{
			$username='';
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
	
	function jrhmd(){
		$handle=M('User');
		$result=$handle->query("SELECT blacklist FROM think_user WHERE username='".$_POST['username']."';");
		if($result[0]['blacklist']=='否'){
		    $sql="UPDATE think_user SET blacklist='是' WHERE username='".$_POST['username']."';";
		}
		else{
			$sql="UPDATE think_user SET blacklist='否' WHERE username='".$_POST['username']."';";
		}
		$handle->execute($sql);
	}
	
	function delete_user(){
		$handle=M('User');
		$sql="DELETE FROM think_user WHERE username='".$_POST['username']."';";
		$handle->execute($sql);
		$sql1="DELETE FROM think_order WHERE username='".$_POST['username']."';";
		$handle->execute($sql1);
		$sql2="DELETE FROM think_shopcar  WHERE username='".$_POST['username']."';";
		$handle->execute($sql2);
		$sql3="DELETE FROM think_user_order WHERE username='".$_POST['username']."';";
		$handle->execute($sql3);
	}
}
?>