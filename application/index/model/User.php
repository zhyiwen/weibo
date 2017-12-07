<?php

/**
 * Created by PhpStorm.
 * User: zhangyiwen
 * Date: 2017/12/4
 * Time: 下午2:26
 */
namespace app\index\model;
use think\Model;
class User extends Model
{
    // 定义关联方法
    public function intro()
    {
        return $this->hasMany('Intro','user_id','id');
    }
}