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
}