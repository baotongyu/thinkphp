<?php
namespace Admin\Controller;

use Think\Controller;

class TestController extends Controller
{
    public function index()
    {
	   	echo '这是试卷管理页面';
    }
    
    // 加载试卷添加页面
	public function add(){
    	echo '添加试卷';
	}
	
	// 执行试卷添加操作
	public function insert(){
		echo '试卷添加成功';
	}
	
	// 执行试卷删除操作
	public function del(){
		echo '试卷删除成功';
	}
	
	// 加载试卷修改页面
	public function edit(){
		echo '修改试卷';
	}
	
	// 执行修改试卷操作
	public function update(){
		echo '修改试卷成功';
	}
}