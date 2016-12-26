<?php
namespace Admin\Controller;

use Think\Controller;

class PlateController extends Controller
{
    public function index()
    {
	   	//echo '这是板块管理';
	   	$this->display('plate/index');
    }
    
    // 加载添加板块模板
	public function add(){
    	//echo '添加父板块或者子板块';
    	$this->display('plate/add');
	}
	
	// 执行添加板块操作
	public function insert(){
		//echo '添加板块成功';
		if(2>1){
			$this->success('板块添加成功',U('admin/plate/index'));
		}else{
			$this->error('板块添加失败');
		}
	}
	
	// 执行删除板块操作
	public function del(){
		//echo '删除板块成功';
		if(2>1){
			$this->success('板块删除成功',U('admin/plate/index'));
		}else{
			$this->error('板块删除失败');
		}
	}
	
	// 加载修改板块信息模板
	public function edit(){
		//echo '修改板块信息';
		$this->display('plate/edit');
	}
	
	// 执行修改板块信息操作
	public function update(){
		//echo '修改板块信息成功';
		if(2>1){
			$this->success('板块修改成功',U('admin/plate/index'));
		}else{
			$this->error('板块修改失败');
		}
	}
}