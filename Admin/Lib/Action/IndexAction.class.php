<?php 
class IndexAction extends Action{
	public function index(){
		$this->display();
	}
	public function main(){
		$user=M('User');
		$conditon['username']=$this->_post("username");
		$conditon['password']=md5($this->_post("password"));
		$result=$user->where($conditon)->select();
		if($result[0]['userability']=='管理员' || $result[0]['userability']=='超级管理员'){
			$sql="UPDATE think_user SET login_times=login_times+1 WHERE username='".$this->_post("username")."';";
			$user->execute($sql);
			$_SESSION['login_times']=$result[0]['login_times']+1;
			$_SESSION['admin_username']=$this->_post("username");
			$this->display();
		}
		else {
			$this->display("index");
			echo '<script>alert("用户名或密码错误，请重新输入！");</script>';
		}
	}
	public function admin_top(){
		if($_SESSION['admin_username']){
		   $this->display();
		}
		else{
			$this->display("index");
		}
	}
	public function admin_left(){
		$this->display();
	}
	public function admin_right(){
		$this->display();
	}
function login_exit(){
    	$_SESSION['admin_username']=null;
    }
}
?>