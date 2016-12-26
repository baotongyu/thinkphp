<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        echo '用户登录页面';
    }
    
    // 执行登录操作
	public function dologin(){
    	echo '登录成功';
	}
	
	// 加载用户注册页面
	public function register(){
		echo '用户注册页面';
	}
	
	// 执行注册操作
	public function doregister(){
		echo '注册成功';
	}
	
	// 执行用户退出操作
	public function login_out(){
		echo '退出成功';
	}
}