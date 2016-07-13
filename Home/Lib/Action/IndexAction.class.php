<?php
class IndexAction extends Action {
    public function index(){
    	$shopcar=M('Shopcar');//删除购物车中匿名用户的保存记录
    	$stateSql="DELETE FROM think_shopcar WHERE ".time()."-add_time>7200 AND state='临时';";
    	$shopcar->execute($stateSql);
    	$goods=M("Goods");//猜你喜欢的商品查询和处理
    	$all_goods=$goods->query("SELECT *FROM think_goods ORDER BY shelf_time ASC;");
    	$all_goods1=$goods->query("SELECT *FROM think_goods ORDER BY shelf_time DESC;");
    	$deal_model=A("Deal");
    	$like_info=$deal_model->get_info($all_goods);
    	$like_info1=$deal_model->get_info($all_goods1);
    	$goods_count=count($like_info);
    	$goods_count1=count($like_info1);
    	$shopcar_handle=A("Shopcar");
    	$shopcar_list=$shopcar_handle->shopcar_other();
    	$this->assign('goods_count',$goods_count);
    	$this->assign('goods_count1',$goods_count1);
    	$this->assign('shopcar_list',$shopcar_list);
    	$this->assign('like_info',$like_info);
    	$this->assign('like_info1',$like_info1);
       $this->display();
    }
    public function home_head(){
    	$this->display();
    }
    public function home_head1(){
    	$this->display();
    }
    public function home_middle(){
    	$this->display();
    }
    public function goods_info(){
    	$temp=A('Admin://File');
    	$goods_num=$_GET['goods_num'];
    	$list=$temp->output_look($goods_num);
    	$shopcar_handle=A("Shopcar");
    	$shopcar_list=$shopcar_handle->shopcar_other();
    	$this->assign('shopcar_list',$shopcar_list);
    	$this->assign('list',$list);
    	//dump($list);
    	$this->display();
    }
    
}