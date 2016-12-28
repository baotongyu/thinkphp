<?php
namespace Admin\Controller;

use Think\Controller;

class TestController extends Controller
{
	// 加载查看所有试卷模板
	public function index()
	{
		//echo '这是试卷管理页面';
		$m = M('Test');
		$data = $m->select();
		//var_dump($data);die;
		$this->assign('data',$data);
		$this->display('test/index');
	}
	
	// 加载查看初中语文试卷模板
    public function index1()
    {
	   	//echo '这是试卷管理页面';
		$m = M('Test');
		$data = $m->where('tid=8')->select();
		$res['course']='语文';
		//var_dump($data);die;
		$this->assign('res',$res);
		$this->assign('data',$data);
	   	$this->display('test/index1');
    }
	
    // 加载查看初中数学试卷模板
	public function index2()
	{
		//echo '这是试卷管理页面';
		$m = M('Test');
		$data = $m->where('tid=10')->select();
		$res['course']='数学';
		//var_dump($data);die;
		$this->assign('res',$res);
		$this->assign('data',$data);
		$this->display('test/index2');
	}
	
	// 加载查看高中物理试卷模板
	public function index3()
	{
		//echo '这是试卷管理页面';
		$m = M('Test');
		$data = $m->where('tid=11')->select();
		$res['course']='物理';
		//var_dump($data);die;
		$this->assign('res',$res);
		$this->assign('data',$data);
		$this->display('test/index3');
	}
	
	// 加载查看高中化学试卷模板
	public function index4()
	{
		//echo '这是试卷管理页面';
		$m = M('Test');
		$data = $m->where('tid=12')->select();
		$res['course']='化学';
		//var_dump($data);die;
		$this->assign('res',$res);
		$this->assign('data',$data);
		$this->display('test/index4');
	}
	
	// 加载查看高数试卷模板
	public function index5()
	{
		//echo '这是试卷管理页面';
		$m = M('Test');
		$data = $m->where('tid=14')->select();
		$res['course']='高数';
		//var_dump($data);die;
		$this->assign('res',$res);
		$this->assign('data',$data);
		$this->display('test/index5');
	}
	
	// 加载查看概率论试卷模板
	public function index6()
	{
		//echo '这是试卷管理页面';
		$m = M('Test');
		$data = $m->where('tid=15')->select();
		$res['course']='概率论';
		//var_dump($data);die;
		$this->assign('res',$res);
		$this->assign('data',$data);
		$this->display('test/index6');
	}
    
    // 加载查看试卷详情模板
	public function look($id){
    	$m = M('Test');
    	$data = $m->where('id='.$id)->find();
    	//var_dump($data);die;
    	$this->assign('data',$data);
    	$this->display('test/look');
	}
    
    // 加载试卷添加页面
	public function add(){
    	//echo '添加试卷';
		$m = M('Plate');
		$data = $m->where('pid != 0')->select();
		$this->assign('data',$data);
		$this->display('test/add');
	}
	
	// 执行试卷添加操作
	public function insert(){
		//echo '试卷添加成功';
		//var_dump($_POST);die;
		$m = M('Test');
		if($m->create()){
			$res = $m->add();
			if($res){
				$this->success('试卷添加成功','/thinkphp/admin/test/index');
			}else{
				$this->error('试卷添加失败');
			}
		}else{
			$this->error($m->getError());
		}
	}
	
	// 执行试卷删除操作
	public function del($id){
		//echo '试卷删除成功';
		$m = M('Test');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('试卷删除成功','/thinkphp/admin/test/index');
		}else{
			$this->error('试卷删除失败');
		}
	}
	
	// 加载试卷修改页面
	public function edit($id){
		//echo '修改试卷';
		$m = M('Test');
		$p = M('Plate');
		$res = $p->where('pid != 0')->select();
		$data = $m->where('id='.$id)->find();
		$this->assign('res',$res);
		$this->assign('data',$data);
		$this->display('test/edit');
	}
	
	// 执行修改试卷操作
	public function update($id){
		//echo '修改试卷成功';
		$m = M('Test');
		if(!$m->create()){
			exit($m->getError());
		}else{
			$res = $m->save();
			if($res){
				$this->success('试卷修改成功','/thinkphp/admin/test/index');
			}else{
				$this->error('试卷修改失败');
			}
		}
	}
}