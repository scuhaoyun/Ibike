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
    		echo "<font color='green'>���û�������ע�ᣡ</font>";
    	}else{
    		echo "<font color='red'>���û����Ѵ��ڣ�</font>";
    	}
    }
    public function checkv(){
    	if($_SESSION['verify'] != md5($_POST['verify'])) {
    		echo "<font color='red' >��֤�����</font>";
    	}
    	else {
    		echo "<font color='green'>��֤����ȷ��</font>";
    	}
    }
 
    
}