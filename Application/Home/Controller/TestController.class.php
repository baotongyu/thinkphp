<?php
namespace Home\Controller;

use Think\Controller;

class TestController extends Controller
{
    public function index($id)
    {
        //echo '这是考试页面';
		$t = M('Test');
		$test = $t->where('id='.$id)->find();
		$this->assign('test',$test); // 传递试卷名称
		$pan = explode(',',$test['panduan']);
		$p = M('Panduan');
		foreach($pan as $k=>$v){
			$ti = $p->where('id='.$v)->find();
			$arr[] = $ti;
		}
		$this->assign('ti',$arr);// 传递试题
		$this->display('test/index');
    }
    
    // 执行考试提交操作
	public function submit(){
    	echo '提交成功';
	}
}