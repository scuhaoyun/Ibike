<?php
class LoginAction extends Action {
    public function index(){
       $this->display();
    }
    public function login_submit(){
        $user=M('User');
    	$conditon['username']=$this->_post("username");
	  	$conditon['password']=md5($this->_post("password"));
	  	$result=$user->where($conditon)->select();
    	if($result){
    		$sql="UPDATE think_user SET login_times=login_times+1 WHERE username='".$this->_post("username")."';";
			$user->execute($sql);
    		$shopcar=M('Shopcar');//更新购物车保存信息，将临时信息保存为用户信息
    		$oldusername=session_id();
    		$_SESSION['username']=$this->_post("username");
    		$newusername=$this->_post("username");
    		$shopcar->execute("create table temp as select *from think_shopcar;");//创建临时表来改变购物车中的信息
    		$update_sql="UPDATE think_shopcar SET username='".$newusername."',state='用户'  WHERE username='".$oldusername."' AND goods_num NOT IN (SELECT goods_num FROM temp WHERE username='".$newusername."'); ";
    		//dump($update_sql);
    		 $shopcar->execute($update_sql);
    		 $shopcar->execute("drop table temp;");
    		
    		
    		// dump($shopcar->execute($update_sql));
    		$this->display();
    	}
    	else {
    		$this->display("index");
    		echo '<script>alert("用户名或密码错误，请重新输入！");</script>';
    	}
    }
    public function reg_submit(){
    	$user=M('User');
    	$user->create();
    	$user->username=$this->_post("reg_username");
    	$user->password=md5($this->_post("reg_password"));
    	$user->reg_time=time();
    	if($user->add()){
    		$this->success("插入数据库成功！","__APP__/Login/index/");
    	}
    	else {
    		$this->error("写入数据库失败！");
    	}
    	
    }
    function login_exit(){
    	$_SESSION['username']=null;
    }
    
}