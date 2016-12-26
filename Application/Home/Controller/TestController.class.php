<?php
namespace Home\Controller;

use Think\Controller;

class TestController extends Controller
{
    public function index()
    {
        echo '这是考试页面';
    }
    
    // 执行考试提交操作
	public function submit(){
    	echo '提交成功';
	}
}