<?php
namespace Admin\Controller;

use Think\Controller;

class QuestionsController extends Controller
{
    public function index()
    {
	   	//echo '这是试题管理';
	   	$this->display('questions/index');
    }
    
    // 加载添加试题模板
	public function add(){
    	//echo '添加试题';
    	$this->display('questions/add');
	}
	
	// 执行添加板块操作
	public function insert(){
		//echo '添加试题成功';
		if(2>1){
			$this->success('试题添加成功',U('admin/questions/index'));
		}else{
			$this->error('试题添加失败');
		}
	}
	
	// 执行删除板块操作
	public function del(){
		//echo '删除试题成功';
		if(2>1){
			$this->success('试题删除成功',U('admin/questions/index'));
		}else{
			$this->error('试题删除失败');
		}
	}
	
	// 加载修改板块信息模板
	public function edit(){
		//echo '修改试题信息';
		$this->display('questions/edit');
	}
	
	// 执行修改板块信息操作
	public function update(){
		//echo '修改试题信息成功';
		if(2>1){
			$this->success('试题修改成功',U('admin/questions/index'));
		}else{
			$this->error('试题修改失败');
		}
	}
}