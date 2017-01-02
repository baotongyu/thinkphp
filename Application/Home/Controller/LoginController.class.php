<?php
namespace Home\Controller;

use Think\Controller;

class LoginController extends Controller
{
	// 加载用户登录页面
    public function index()
    {
        //echo '用户登录页面';
    }
    
    // 执行登录操作
	public function dologin(){
    	if(!empty($_POST)){
			$u = I('Post.name');
			$p = I('Post.password');
			$data['name'] = $u;
			$data['password'] = md5($p);
			$user = M('User');
			$res = $user->where($data)->find();
			//echo '<pre>';
			//var_dump($res);die;
			//echo '</pre>';
			if($res){
				session('name',$_POST['name']);
				$this->success('登录成功','/thinkphp/home/index/index');
			}else{
				$this->error('用户名不存在或密码错误');
			}
		}else{
    		$this->error('不能提交空数据');
		}
	}
	
	// 执行注册操作
	public function doregister(){
		if($_POST['password']==$_POST['repassword']){
			//echo '<pre>';
			//var_dump($_POST);die;
			//echo '</pre>';
			$user = M('User');
			$data['name'] = $_POST['name'];
			$data['password'] = md5($_POST['password']);
			$data['phone'] = $_POST['phone'];
			$data['email'] = $_POST['email'];
			$data['status'] = $_POST['status'];
			$data['auth'] = $_POST['auth'];
			$res = $user->add($data);
			if($res){
				$this->success('用户注册成功，请登录','/thinkphp/home/index/index');
			}else{
				$this->error('用户注册失败');
			}
		}else{
			$this->error('前后输入的密码不一致，请重新输入');
		}
	}
	
	// 执行用户退出操作
	public function login_out(){
		//echo '退出成功';
		session('name',null);
		$this->redirect('index/index');
	}
}