<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        //echo '这是网站前台首页';
		$m = M('Test');
		$test = $m->limit(5)->select();
		$this->assign('test',$test);
		if(!empty(session('name'))){
			$this->assign('name',$_SESSION['name']);
			$this->display('index/index1');
		}else{
			$m = M('Test');
			$test = $m->limit(5)->select();
			$this->assign('test',$test);
			$this->display('index/index');
		}
    }
}