<?php
/**
 * Created by PhpStorm.
 * User: zhangyiwen
 * Date: 2017/12/5
 * Time: 下午2:48
 */

namespace app\index\model;


use think\Model;

class Intro extends Model
{
    // 定义关联方法
    public function user()
    {
        return $this->belongsTo('User');
    }
}