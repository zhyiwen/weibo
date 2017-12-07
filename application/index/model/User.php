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
    // add_time读取器
    protected function getAddTimeAttr($addtime)
    {
        return date('Y-m-d', $addtime);
    }
    // 修改器
    protected function setAddTimeAttr($addtime)
    {
        return strtotime($addtime);
    }
    // 全局查询范围
    protected static function base($query)
    {
        // 查询状态为1的数据
        $query->where('status',1);
    }
}