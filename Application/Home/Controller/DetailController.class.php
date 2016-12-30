<?php
namespace Home\Controller;

use Think\Controller;

class DetailController extends Controller
{
    public function index($id)
    {
        //echo '这是详情页';
		$t = M('Test');
		$test = $t->where('id='.$id)->find();
		$this->assign('test',$test);// 传递试卷名称
		$pan = explode(',',$test['panduan']);
		$p = M('Panduan');
		foreach($pan as $k=>$v){
			$ti = $p->where('id='.$v)->find();
			$arr[] = $ti;
		}
		$this->assign('ti',$arr);
		//echo '<pre>';
		//var_dump($arr);die;
		//echo '</pre>';
		$this->display('detail/index');
    }
    
    // 加载查看正确答案
//    public function answer($tid,$id){
//    	$t = M('Test');
//    	$test = $t->where('id='.$tid)->find();
//    	$this->assign('test',$test); // 传递试卷名称
//		$pan = explode(',',$test['panduan']);
//		$p = M('Panduan');
//		foreach($pan as $k=>$v){
//			$ti = $p->where('id='.$v)->find();
//			$arr[] = $ti;
//		}
//		$answer = $p->where('id='.$id)->find();
//		$this->assign('answer',$answer); // 传递指定id的试题答案
//		$this->assign('ti',$arr); // 传递试题
//		$this->display('detail/index');
//    	$this->display('detail/answer');
//	}
}