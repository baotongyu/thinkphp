<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
	   	//echo '请登录';die;
    }
    
    // 执行登录操作
	public function dologin(){
    	$m = M(Admin);
    	$res = $m->find();
    	if($res['uname']==$_POST['uname'] && $res['password']==md5($_POST['password'])){
    		session('name',$_POST['uname']);
			$this->success('登录成功',U('admin/index/index'));
		}else{
    		$this->error('登录失败');
		}
	}
	
	// 执行账号注册
	public function logon(){
		$m = M('Admin');
		$data['uname'] = $_POST['uname'];
		$data['password'] = md5($_POST['password']);
		$data['auth'] = $_POST['auth'];
		$m->add($data);
	}
	
	// 执行退出操作
	public function outlogin(){
		session('name',null);
		$this->redirect('index/index');
	}
}