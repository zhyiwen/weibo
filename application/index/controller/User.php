<?php
/**
 * Created by PhpStorm.
 * User: zhangyiwen
 * Date: 2017/12/4
 * Time: 下午2:32
 */

namespace app\index\controller;

use app\index\model\User as UserModel;
use think\Controller;
use think\Db;

class User extends Controller
{
    public  function test(){
        $user=Db::name('user')
            ->select();
        var_dump($user);
    }
    // 新增用户数据
    public function add()
    {
        $user = new UserModel;
        if ($user->allowField(true)->save(input('post.'))) {
            return '用户[ ' . $user->phone . ':' . $user->id . ' ]新增成功';
        } else {
            return $user->getError();
        }
    }
    public function login(){
        return view();
    }
}