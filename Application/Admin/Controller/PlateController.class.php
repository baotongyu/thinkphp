<?php
namespace Admin\Controller;

use Think\Controller;

class PlateController extends Controller
{
    public function index()
    {
	   	//echo '这是板块管理';
		$m = M('Plate');
		$data = $m->order('path')->select();
		$this->assign('data',$data);
	   	$this->display('plate/index');
    }
    
    // 加载添加板块模板
	public function add(){
    	//echo '添加父板块或者子板块';
		$m = M('Plate');
		$data = $m->select();
		$this->assign('data',$data);
    	$this->display('plate/add');
	}
	
	// 执行添加板块操作
	public function insert(){
		//echo '添加板块成功';
//		var_dump($_POST);die;
		$m = M('Plate');
		if($m->create()){
			$res = $m->add();//写入数据到数据库
			if($res){
				$insertId = $res;//返回自增id
				$data = $m->where('id='.$insertId)->find();
				if($data['pid']==0){
					$path = $data['id'].'.'.$data['pid'];
					$m->path = $path;
					$m->where('id='.$insertId)->save();
					$this->success('板块添加成功','/thinkphp/admin/plate/index');
				}else{
					$path = $data['pid'].'.'.$data['id'];
					$m->path = $path;
					$m->where('id='.$insertId)->save();
					$this->success('板块添加成功','/thinkphp/admin/plate/index');
				}
			}else{
				$this->error('板块添加失败');
			}
		}else {
			$this->error($m->getError());
		}
	}
	
	// 执行删除板块操作
	public function del($id){
		//echo '删除板块成功';
		$m = M('Plate');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('板块删除成功','/thinkphp/admin/plate/index');
		}else{
			$this->error('板块删除失败');
		}
	}
	
	// 加载修改板块信息模板
	public function edit($id){
		//echo '修改板块信息';
		$m = M('Plate');
		$data = $m->where('id='.$id)->find();
		$this->assign('data',$data);
		$this->display('plate/edit');
	}
	
	// 执行修改板块信息操作
	public function update(){
		//echo '修改板块信息成功';
		$m = M('Plate');
		if(!$m->create()){
			exit($m->getError());
		}else{
			$res = $m->save();
			if($res){
				$this->success('板块修改成功','/thinkphp/admin/plate/index');
			}else{
				$this->error('板块修改失败');
			}
		}
	}
}