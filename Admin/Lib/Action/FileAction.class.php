<?php
class FileAction extends Action{
		function index(){
			$this->display();
		}
		function  upConfig(){
			import('Upload');//在thinkphp中的alias.php中定义的路径
			$upload=New UploadFile();
			$upload->maxSize='314572800';// 设置附件上传大小
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录,上传保存到什么地方？路径建议大家已主文件平级目或子目录来保存
			//$upload->maxSize='1000000';  //是指上传文件的大小，默认为-1,不限制上传文件大小bytes
			$upload->saveRule=uniqid;    //上传文件的文件名保存规则  time uniqid  com_create_guid  uniqid
			//$upload->autoCheck=false   ;  //是否自动检测附件
			$upload->uploadReplace=true;     //如果存在同名文件是否进行覆盖
			$upload->allowExts=array('jpg','jpeg','png','gif');     //准许上传的文件后缀
			$upload->allowTypes=array('image/png','image/jpg','image/pjpeg','image/gif','image/jpeg');  //检测mime类型
			$upload->thumb=true;   //是否开启图片文件缩略
			$upload->thumbMaxWidth='330,500';  //以字串格式来传，如果你希望有多个，那就在此处，用,分格，写上多个最大宽
			$upload->thumbMaxHeight='220,330';	//最大高度
			$upload->thumbPrefix='s_,m_';//缩略图文件前缀
			//$upload->thumbSuffix='_s,_m';  //文件后缀
			//$upload->thumbPath='' ;  // 如果留空直接上传至
			//$upload->thumbFile   在数据库当中也存一个文件名即可
			$upload->thumbRemoveOrigin=0;  //如果生成缩略图，是否删除原图
			//$upload->autoSub   是否使用子目录进行保存上传文件
			//$upload->subType=''   子目录创创方式默认为hash 也可以设为date
			//$upload->dateFormat  子目录方式date的指定日期格式
			//$upload->hashLevle

			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}
			else {
				$info =  $upload->getUploadFileInfo();
				return $info;
		  }
		}
		function upload_goods(){
			//提取图片信息
			$img_info=$this->upConfig();
			$goods_len=count($_FILES['goods_pic']['name']);
			$all_len=count($img_info);
			if($_FILES['goods_pic']['name'][0]){
			       $goods_savename=$img_info[0]['savename'];
					$desc_savename=$img_info[$goods_len]['savename'];
			}
			else{
				$goods_savename='';
				$desc_savename=$img_info[0]['savename'];
			}
			for($i=1;$i<$goods_len;$i++){
				$goods_savename=$goods_savename."||".$img_info[$i]['savename'];
			}
			for($j=$goods_len+1;$j<$all_len;$j++){
				$desc_savename=$desc_savename."||".$img_info[$j]['savename'];
			}
			$goods_num=strtoupper(uniqid());
			//写入think_goods数据表
			$goods=M('Goods');
			$goods->create();
			$goods->goods_num=$goods_num;
			$goods->shelf_time=time();
			$goods->goods_state='有货';
			$goods->goods_pic=$goods_savename;
			$goods->desc_pic=$desc_savename;
			$goods->add();
			//写入think_sale_goods数据表
			if($_POST['goods_service']=='出售'){
				$sale_goods=M('SaleGoods');
				$sale_goods->create();
				$sale_goods->goods_num=$goods_num;
				$sale_goods->add();
			}
			//写入think_rent_goods数据表
			else{
				$rent_goods=M('RentGoods');
				$rent_goods->create();
				$rent_goods->goods_num=$goods_num;
				$rent_goods->add();
			}
			$all_goods=$this->output_look($goods_num);
			$this->assign('info',$all_goods);
				
			$this->display();
			
		}
		public function output_look($goods_num,$field){//根据商品号和要查询的字段查询
			$goods=M("Goods");
			if($field){
				$fieldPara="goods_service";
				foreach ($field as $goods_field){
					$fieldPara.=",".$goods_field;
				}
				$sql="SELECT ".$fieldPara." FROM think_goods WHERE goods_num='".$goods_num."';";
			}
			else{
				$sql="SELECT *FROM think_goods WHERE goods_num='".$goods_num."';";
			}
			$all_goods=$goods->query($sql);
			foreach ($all_goods as $key=>$info){
				if($all_goods[$key]['goods_pic']){
					$all_goods[$key]['goods_pic']=explode('||',$all_goods[$key]['goods_pic']);
				}
				if($all_goods[$key]['desc_pic']){
					$all_goods[$key]['desc_pic']=explode('||',$all_goods[$key]['desc_pic']);
				}
				if($all_goods[$key]['goods_para']){
					$all_goods[$key]['goods_para']=explode('||',$all_goods[$key]['goods_para']);
				}
				if($all_goods[$key]['shelf_time']){
					$format=getdate($all_goods[$key]['shelf_time']);
			        $all_goods[$key]['shelf_time']=$format['year'].'年'.$format['mon'].'月'.$format['mday'].'日  '.date("H:i",$all_goods[$key]['shelf_time']);
				}
			if($all_goods[$key]['goods_service']=='出售'){//提取出售商品价格
					$sale=M('SaleGoods');
					$sale_price=$sale->query("SELECT *FROM think_sale_goods WHERE goods_num='".$all_goods[$key][goods_num]."';");
					$all_goods[$key]['sale_price']=$sale_price[0]['sale_price'];
					$all_goods[$key]['market_price']=$sale_price[0]['market_price'];
				}
				else {//提取出租商品价格
					$rent=M('RentGoods');
					$rent_price=$rent->query("SELECT *FROM think_rent_goods WHERE goods_num='".$all_goods[$key][goods_num]."';");
					$all_goods[$key]['hour_price']=$rent_price[0]['hour_price'];
					$all_goods[$key]['day_price']=$rent_price[0]['day_price'];
					$all_goods[$key]['month_price']=$rent_price[0]['month_price'];
				}
			}	
			return $all_goods;
		}
		function output_goods(){
			import("Page");
			$goods=M("Goods");
			$_SESSION['admin_search']=true;
			if($this->output_look($this->_post('search'))){
				$all_goods=$this->output_look($this->_post('search'));
			}
			else{
				$search=A('Home://Search');
				$all_goods=$search->word_search_result();
			}
			$page= new Page(count($all_goods),1,r);// 实例化分页类 传入总记录数和每页显示的记录数
			$show= $page->show();// 分页显示输出
			$info=array_slice($all_goods,$page->firstRow,$page->listRows,true);
			$this->assign('info',$info);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display();
			//dump($all_goods);
		}
		
		function delete_goods(){
			$delete=$this->output_look($_POST['goods_num']);
			$handle=M();
			$handle->execute("DELETE FROM think_goods WHERE goods_num='".$delete[0]['goods_num']."';");
			$handle->execute("DELETE FROM think_sale_goods WHERE goods_num='".$delete[0]['goods_num']."';");
			$handle->execute("DELETE FROM think_rent_goods WHERE goods_num='".$delete[0]['goods_num']."';");
			$handle->execute("DELETE FROM think_shopcar WHERE goods_num='".$delete[0]['goods_num']."';");
			$handle->execute("DELETE FROM think_order_goods WHERE goods_num='".$delete[0]['goods_num']."';");
			foreach ($delete[0]['goods_pic'] as $key=>$goods_pic){
				unlink('./Public/Uploads/'.$goods_pic);
				unlink('./Public/Uploads/s_'.$goods_pic);
				unlink('./Public/Uploads/m_'.$goods_pic);
			}
			foreach ($delete[0]['desc_pic'] as $key=>$desc_pic){
				unlink('./Public/Uploads/'.$desc_pic);
				unlink('./Public/Uploads/s_'.$desc_pic);
				unlink('./Public/Uploads/m_'.$desc_pic);
			}
		}
		
function change_state(){
		$order=M("Goods");
		$order->execute("UPDATE think_goods SET goods_state='".$_POST['goods_state']."' WHERE goods_num='".$_POST['goods_num']."';");
	}
		
		
		
		
		
		function checkOk(){
			if($_SESSION['verify'] != md5($_POST['verify'])) {
				$this->error('验证码错误！');
			}
			else {
				if(empty($_FILES)){
					$this->error("必须选择上传文件！");
				}
			}
		}
		function insertDb(){
			// $photo=M('photo');
			//$photo->create();
			// $photo->photo=$info[0]["savename"];
			//$photo->add();
			
			$this->success('上传成功！');
		}
		
}
?>