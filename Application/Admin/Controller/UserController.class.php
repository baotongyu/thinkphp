<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller
{
	//加载用户管理模板
    public function index()
    {
    	//echo '这是网站后台首页';
		$m = M('User');
		$data = $m->select();
		$this->assign('data',$data);
        $this->display('user/index');
    }
    
    //加载添加用户模板
    public function add(){
    	$this->display('user/add');
	}
	
	//执行用户添加操作
	public function insert(){
//    	var_dump($_POST);die;
    	//echo '添加学生信息';
		$m = M('user');
		if($m->create()){
			if (false !== $m->add()) {
				$this->success('数据添加成功',U('admin/user/index'));
			} else {
				$this->error('数据写入错误');
			}
		}else {
			// 字段验证错误
			$this->error($m->getError());
		}
	}
	
	// 执行用户删除操作
	public function del($id){
		//echo $id;
		$m = M('User');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('数据删除成功');
		}else{
			$this->error('数据删除失败');
		}
	}
	
	// 加载用户信息修改模板
	public function edit($id){
		//var_dump($id);die;
		$m = M('User');
		$data = $m->where('id='.$id)->find();
		$this->assign('data',$data);
		$this->display('user/edit');
	}
	
	// 执行用户信息修改
	public function update(){
//		var_dump($_POST);die;
		$m = M('User');
		if(!$m->create()){
			exit($m->getError());
		}else{
			//验证规则ok
			$res = $m->save();
			if($res){
				$this->success('数据修改成功',U('admin/user/index'));
			}else{
				$this->error('数据修改失败');
			}
		}
	}
}