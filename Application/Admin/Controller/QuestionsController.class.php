<?php
namespace Admin\Controller;

use Think\Controller;

class QuestionsController extends Controller
{
    public function index()
    {
	   	echo '这是试题管理';
    }
    
    // 加载添加试题模板
	public function add(){
    	echo '添加试题';
	}
	
	// 执行添加板块操作
	public function insert(){
		echo '添加试题成功';
	}
	
	// 执行删除板块操作
	public function del(){
		echo '删除试题成功';
	}
	
	// 加载修改板块信息模板
	public function edit(){
		echo '修改试题信息';
	}
	
	// 执行修改板块信息操作
	public function update(){
		echo '修改试题信息成功';
	}
}