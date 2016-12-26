<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        //echo '用户登录页面';
        $this->display('login/index');
    }
    
    // 执行登录操作
	public function dologin(){
    	if(2>1){
    		$this->success('用户登录成功',U('home/index/index'));
		}else{
    		$this->error('用户登录失败');
		}
	}
	
	// 加载用户注册页面
	public function register(){
		//echo '用户注册页面';
		$this->display('login/register');
	}
	
	// 执行注册操作
	public function doregister(){
		if(2>1){
			$this->success('用户注册成功',U('home/login/index'));
		}else{
			$this->error('用户注册失败');
		}
	}
	
	// 执行用户退出操作
	public function login_out(){
		echo '退出成功';
	}
}