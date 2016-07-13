<?php
class AjaxAction extends Action {
    public function index(){
    }
 public function username(){
    	$info=M("User");
    	// $sql="SELECT *FROM think_teacher_login";
    	$conditon['username']=$this->_post("username");
    	$res=$info->where($conditon)->select();
    	//dump($info);
    	//$res=$info->query($sql);
    	if(!$res){
    		echo "<font color='green'>该用户名可以注册！</font>";
    	}else{
    		echo "<font color='red'>该用户名已存在！</font>";
    	}
    }
    public function checkv(){
    	if($_SESSION['verify'] != md5($_POST['verify'])) {
    		echo "<font color='red' >验证码错误！</font>";
    	}
    	else {
    		echo "<font color='green'>验证码正确！</font>";
    	}
    }
 
    
}