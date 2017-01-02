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
    	//var_dump($_POST);die;
    	//echo '添加学生信息';
		if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['repassword']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['auth']) && !empty($_POST['status'])){
			if($_POST['password']==$_POST['repassword']){
				$data['name'] = $_POST['name'];
				$data['password'] = md5($_POST['password']);
				$data['phone'] = $_POST['phone'];
				$data['email'] = $_POST['email'];
				$data['auth'] = $_POST['auth'];
				$data['status'] = $_POST['status'];
				//echo '<pre>';
				//var_dump($data);die;
				//echo '</pre>';
				$user = M('User');
				$res = $user->add($data);
				if($res){
					$this->success('用户添加成功','/thinkphp/admin/user/index');
				}else{
					$this->error('用户添加失败');
				}
			}else{
				$this->error('前后密码输入不一致');
			}
		}else{
			$this->error('不能提交空数据');
		}
	}
	
	// 执行用户删除操作
	public function del($id){
		//echo $id;
		$m = M('User');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('数据删除成功','/thinkphp/admin/user/index');
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
				$this->success('数据修改成功','/thinkphp/admin/user/index');
			}else{
				$this->error('数据修改失败');
			}
		}
	}
}