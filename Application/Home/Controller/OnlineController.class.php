<?php
namespace Home\Controller;

use Think\Controller;

class OnlineController extends Controller
{
    public function index()
    {
        //echo '这是在线测试';
		$this->display('online/index');
    }
}