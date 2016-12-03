<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
	//商品列表展示跳到showlist.html
    public function showlist(){
    	$this->display();
    }
    //商品详情页面跳到detail.html
    public function detail(){
    	$this->display();
    }
}