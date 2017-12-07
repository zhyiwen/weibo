<?php
/**
 * Created by PhpStorm.
 * User: zhangyiwen
 * Date: 2017/12/7
 * Time: 下午2:02
 */

namespace app\index\validate;


use think\Validate;

class user extends Validate
{
    // 验证规则
    protected $rule = [
        ['phone|手机号','require|number|length:11|token'],
        ['password|密码','require|alphaNum|length:6,15','密码必须为6-15位字母或数字'],
        ['password_repeat|确认密码','require','与原密码不同'],
        ['protocol|用户协议','require'],
    ];
}