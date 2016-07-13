<?php
class DealAction extends Action {
    public function index(){
       $this->display();
    }
    public function get_info($all_goods){//根据所用查询结果二维数组，分离出图片和属性等
    	foreach ($all_goods as $key=>$info){
    		$all_goods[$key]['goods_pic']=explode('||',$all_goods[$key]['goods_pic']);
    		$all_goods[$key]['desc_pic']=explode('||',$all_goods[$key]['desc_pic']);
    		$all_goods[$key]['goods_para']=explode('||',$all_goods[$key]['goods_para']);
    		$format=getdate($all_goods[$key]['shelf_time']);
    		$all_goods[$key]['shelf_time']=$format['year'].'年'.$format['mon'].'月'.$format['mday'].'日  '.date("H:i",$all_goods[$key]['shelf_time']);
    		if($all_goods[$key]['goods_service']=='出售'){//提取出卖商品价格
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
    
}