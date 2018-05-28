<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/24
 * Time: 14:53
 */
namespace app\index\controller;
use core\View;

class Index
{

    function index(){
//        加载页面
        return View::make();
    }
}