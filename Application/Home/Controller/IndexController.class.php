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
		$this->display('index/index');
    }
}