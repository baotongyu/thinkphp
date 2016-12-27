<?php
namespace Admin\Controller;

use Think\Controller;

class QuestionsController extends Controller
{
	// 加载查看单选题模板
    public function index1()
    {
	   	//echo '这是单选题管理';
		$m = M('Danxuan');
		$data = $m->select();
		//var_dump($data);die;
		$this->assign('data',$data);
	   	$this->display('questions/index1');
    }
	
	// 加载查看多选题模板
	public function index2()
	{
		//echo '这是多选题管理';
		$m = M('Duoxuan');
		$data = $m->select();
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('questions/index2');
	}
	
	// 加载查看判断题模板
	public function index3()
	{
		//echo '这是判断题管理';
		$m = M('Panduan');
		$data = $m->select();
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('questions/index3');
	}
    
    // 加载添加单选题模板
	public function add1(){
    	//echo '添加试题';
		$m = M('plate');
		$data = $m->where('pid != 0')->select();
		//var_dump($data);die;
		$this->assign('data',$data);
    	$this->display('questions/add1');
	}
	
	// 加载添加多选题模板
	public function add2(){
		//echo '添加试题';
		$m = M('plate');
		$data = $m->where('pid != 0')->select();
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('questions/add2');
	}
	
	// 加载添加判断题模板
	public function add3(){
		//echo '添加试题';
		$m = M('plate');
		$data = $m->where('pid != 0')->select();
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('questions/add3');
	}
	
	// 执行添加单选题操作
	public function insert1(){
		//echo '添加试题成功';
		//var_dump($_POST);die;
		$m = M('Danxuan');
		if($m->create()){
			$res = $m->add();
			if($res){
				$this->success('试题添加成功','/thinkphp/admin/questions/index1');
			}else{
				$this->error('试题添加失败');
			}
		}else{
			$this->error($m->getError());
		}
	}
	
	// 执行添加多选题操作
	public function insert2(){
		//echo '添加试题成功';
		//var_dump($_POST);die;
		$m = M('Duoxuan');
		if($m->create()){
			$res = $m->add();
			if($res){
				$this->success('试题添加成功','/thinkphp/admin/questions/index2');
			}else{
				$this->error('试题添加失败');
			}
		}else{
			$this->error($m->getError());
		}
	}
	
	// 执行添加判断题操作
	public function insert3(){
		//echo '添加试题成功';
		//var_dump($_POST);die;
		$m = M('Panduan');
		if($m->create()){
			$res = $m->add();
			if($res){
				$this->success('试题添加成功','/thinkphp/admin/questions/index3');
			}else{
				$this->error('试题添加失败');
			}
		}else{
			$this->error($m->getError());
		}
	}
	
	// 执行删除单选题操作
	public function del1($id){
		//echo '删除试题成功';
		$m = M('Danxuan');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('试题删除成功','/thinkphp/admin/questions/index1');
		}else{
			$this->error('试题删除失败');
		}
	}
	
	// 执行删除多选题操作
	public function del2($id){
		//echo '删除试题成功';
		$m = M('Duoxuan');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('试题删除成功','/thinkphp/admin/questions/index2');
		}else{
			$this->error('试题删除失败');
		}
	}
	
	// 执行删除判断题操作
	public function del3($id){
		//echo '删除试题成功';
		$m = M('Panduan');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('试题删除成功','/thinkphp/admin/questions/index3');
		}else{
			$this->error('试题删除失败');
		}
	}
	
	// 加载修改单选题模板
	public function edit1($id){
		//echo '修改试题信息';
		$m = M('Danxuan');
		$data = $m->where('id='.$id)->find();
		$m = M('plate');
		$res = $m->where('pid != 0')->select();
		$this->assign('res',$res);
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('questions/edit1');
	}
	
	// 加载修改多选题模板
	public function edit2($id){
		//echo '修改试题信息';
		$m = M('Duoxuan');
		$data = $m->where('id='.$id)->find();
		$m = M('plate');
		$res = $m->where('pid != 0')->select();
		$this->assign('res',$res);
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('questions/edit2');
	}
	
	// 加载修改判断题模板
	public function edit3($id){
		//echo '修改试题信息';
		$m = M('Panduan');
		$data = $m->where('id='.$id)->find();
		$m = M('plate');
		$res = $m->where('pid != 0')->select();
		$this->assign('res',$res);
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('questions/edit3');
	}
	
	// 执行修改单选题操作
	public function update1(){
		//echo '修改试题信息成功';
		//var_dump($_POST);die;
		$m = M('Danxuan');
		if(!$m->create()){
			exit($m->getError());
		}else{
			$res = $m->save();
			if($res){
				$this->success('试题修改成功','/thinkphp/admin/questions/index1');
			}else{
				$this->error('数据修改失败');
			}
		}
	}
	
	// 执行修改多选题操作
	public function update2(){
		//echo '修改试题信息成功';
		//var_dump($_POST);die;
		$m = M('Duoxuan');
		if(!$m->create()){
			exit($m->getError());
		}else{
			$res = $m->save();
			if($res){
				$this->success('试题修改成功','/thinkphp/admin/questions/index2');
			}else{
				$this->error('数据修改失败');
			}
		}
	}
	
	// 执行修改判断题操作
	public function update3(){
		//echo '修改试题信息成功';
		//var_dump($_POST);die;
		$m = M('Panduan');
		if(!$m->create()){
			exit($m->getError());
		}else{
			$res = $m->save();
			if($res){
				$this->success('试题修改成功','/thinkphp/admin/questions/index3');
			}else{
				$this->error('数据修改失败');
			}
		}
	}
}