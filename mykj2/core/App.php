<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/24
 * Time: 15:46
 */
namespace core;

class App{
    function run()
    {
//        根据参数不同加载 不同方法类
            if (isset($_GET['s'])) {
                $info = explode('/', $_GET['s']);
//                拆分字符串数组
                $m = $info[0];
//                给定第一个参数为模块
                $c = ucfirst($info[1]);
//                第二个是c
                $a = $info[2];
           } else {
//               不存在定义默认
                $m = 'index';
                $c = 'Index';
                $a = 'index';
            }
//            便于使用 定义常量。。。const
            define('MODULE', $m);
            define('CONTROLLER', $c);
            define('ACTION', $a);
//            组合出命名
            $class = '\app\\' . $m . '\\controller\\' . $c;
            //加载类
            echo call_user_func_array([new $class, $a], []);
  }
    }