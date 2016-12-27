<?php
namespace Admin\Controller;

use Think\Controller;

class TestController extends Controller
{
    public function index()
    {
	   	//echo '这是试卷管理页面';
	   	$this->display('test/index');
    }
    
    // 加载试卷添加页面
	public function add(){
    	//echo '添加试卷';
		$this->display('test/add');
	}
	
	// 执行试卷添加操作
	public function insert(){
		//echo '试卷添加成功';
		if(2>1){
			$this->success('试卷添加成功','/thinkphp/admin/test/index');
		}else{
			$this->error('试卷添加失败');
		}
	}
	
	// 执行试卷删除操作
	public function del(){
		//echo '试卷删除成功';
		if(2>1){
			$this->success('试卷删除成功','/thinkphp/admin/test/index');
		}else{
			$this->error('试卷删除失败');
		}
	}
	
	// 加载试卷修改页面
	public function edit(){
		//echo '修改试卷';
		$this->display('test/edit');
	}
	
	// 执行修改试卷操作
	public function update(){
		//echo '修改试卷成功';
		if(2>1){
			$this->success('试卷修改成功','/thinkphp/admin/test/index');
		}else{
			$this->error('试卷修改失败');
		}
	}
}