<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/24
 * Time: 15:54
 */

namespace core;

class View
{
    public static function __callStatic($name, $arguments)
    {
        return self::parseAction($name, $arguments);
    }

    public static function parseAction($name, $arguments){

        return call_user_func_array([new Base(),$name],$arguments);



    }
}