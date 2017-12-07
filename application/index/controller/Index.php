<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\Intro as IntroModel;

class Index extends Controller
{
    public function index()
    {
        $intro_list=Db::name('intro')
            ->select();
//        var_dump($intro_list);
        $this->assign('intro_list',$intro_list);
//        return $this->fetch();
        return view();
    }

    // 新增用户数据
    public function add()
    {
        var_dump(input('post.'));
        $data = new IntroModel;
        if ($data->allowField(true)->save(input('post.'))) {
            return '发表成功';
        } else {
            return $data->getError();
        }
    }
    public function myhome()
    {
        return $this->fetch();
    }
}
