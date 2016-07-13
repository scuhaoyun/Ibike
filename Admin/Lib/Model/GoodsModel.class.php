<?php 
class GoodsModel extends Model{
	public function get_one($goods_num){//选择出特定商品号的商品
		return $this->query('SELECT *FORM think_goods WHERE goods_num='.$goods_num.';' );	
	}
	public function out_str($str){//分离出商品图片和描述
		return explode('||',$str);
	}
	public function time_switch($timestamp){//时间转换
		$info=getdate($timestamp);
		return $info['year'].'年'.$info['mon'].'月'.$info['mday'].'日     '.$info['hours'].''.$info['minutes'];
	}
}


?>