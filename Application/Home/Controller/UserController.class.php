<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function index()
    {
        echo '这是用户个人中心';
		//$this->display('index/index');
    }
    
    // 加载修改个人信息模板
    public function edit(){
    	echo '修改个人信息';
	}
	
	// 执行修改操作
	public function update(){
    	echo '修改成功';
	}
}