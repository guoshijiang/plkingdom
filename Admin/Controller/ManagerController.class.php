<?php
namespace Admin\Controller;
use Think\Controller;
//后台管理员控制器
class ManagerController extends Controller {
	//登录系统
    public function login(){
    	$this->display();
    }
}