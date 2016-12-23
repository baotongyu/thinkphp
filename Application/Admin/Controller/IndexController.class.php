<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
	   	//echo '这是网站后台首页';
		//加载一个登录模板
		if(!empty(session('name'))){
			$this->display('index/index');
		}else{
			$this->display('login/login');
		}
    }
}