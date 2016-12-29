<?php
namespace Home\Controller;

use Think\Controller;

class ListController extends Controller
{
    public function index()
    {
        //echo '按类型展示页';
		$m = M('Test');
		$test = $m->select();
		$this->assign('test',$test);
		$this->display('list/index');
    }
}