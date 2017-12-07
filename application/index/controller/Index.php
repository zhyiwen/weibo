<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\index\model\Intro as IntroModel;
use app\index\model\User as UserModel;
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

    public function addIntro()
    {
        $user               = UserModel::get(1);
        $intro               = new IntroModel();
        $intro->content        = 'ThinkPHP5快速入门';
        $intro->add_time = 2017-05-23;
        $user->intro()->save($intro);
        return '发表成功';
    }
    public function myhome($id=''){
        $user=UserModel::get($id);
//        return view('myhome',['user'=>$user]);
        $intro_list=Db::name('intro')
            ->where('user_id', '=',$user)
            ->select();
        $this->assign('intro_list',$intro_list);
        return view('myhome',['user'=>$user]);
    }
}
