<?php
namespace Admin\Controller;

use Think\Controller;

class ResultController extends Controller
{
    public function index()
    {
	   	//echo '这是查看成绩单页面';
		$this->display('result/index');
    }
}