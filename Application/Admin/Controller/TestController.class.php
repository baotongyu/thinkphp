<?php
namespace Admin\Controller;

use Think\Controller;

class TestController extends Controller
{
	// 加载查看试卷模板
    public function index(){
    	$m = M('Test');
    	$data = $m->select();
    	$this->assign('data',$data);
		$this->display('test/index');
    }
    
    // 加载添加试卷模板
	public function add(){
    	$m = M('Plate');
    	$data = $m->where('pid != 0')->select();
    	$this->assign('data',$data);
    	$this->display('test/add');
	}
	
	// 加载添加判断题到试卷模板
	public function addpa(){
		$m = M('Panduan');
		$data = $m->select();
		$this->assign('data',$data);
		$this->display('test/addpa');
	}
	
	// 执行添加判断题到试卷操作
	public function insertpa(){
		//var_dump($_POST);die;
		if(!empty($_POST)){
			$panduan = implode(',',$_POST);//得到类似‘1,2,3’的字符串
			$m = M('Test');
			$res['panduan'] = $panduan;
			$d = $m->add($res);
			if($d){
				$insertid = $d;
				$this->assign('insertid',$insertid);
				$p = M('Plate');
				$data = $p->where('pid != 0')->select();
				$this->assign('data',$data);
				$this->display('test/add');
			}
		}
	}
	
	// 执行添加试卷操作
	public function insert(){
		$m = M('test');
		if(!$m->create()){
			exit($m->getError());
		}else{
			$res = $m->save();
			if($res){
				$this->success('试卷添加成功',u('Test/index'));
			}else{
				$this->error('试卷添加失败');
			}
		}
	}
	
	// 执行查看试卷详情操作
	public function look($id){
		$m = M('Test');
		$test = $m->where('id='.$id)->find();
		//echo $m->getLastSql();
		$this->assign('test',$test);// 传递试卷名称
		$res = explode(',',$test['panduan']);
		$p = M('Panduan');
		foreach($res as $k=>$v){
			$ti = $p->where('id='.$v)->find();
		/*	echo '<pre>';
		var_dump($ti);
		echo '</pre>';*/
			$arr[]=$ti;
		}
		$this->assign('ti',$arr);// 传递试题
		
		$this->display('test/look');
	}
	
	// 执行删除试卷操作
	public function del($id){
		$m = M('Test');
		$res = $m->where('id='.$id)->delete();
		if($res){
			$this->success('试卷删除成功','/thinkphp/admin/test/index');
		}else{
			$this->error('试卷删除失败');
		}
	}
}