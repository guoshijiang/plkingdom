<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//登录跳到login.html
    public function login(){
    	$this->display();
    }
    //注册跳到register.html
    public function register(){
    	$this->display();
    }
}
