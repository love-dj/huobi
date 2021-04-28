<?php
namespace think\facade;

use think\Facade;

class Huobi extends Facade
{
    protected static function getFacadeClass()
    {
        return \think\Huobi::class;
    }
}
