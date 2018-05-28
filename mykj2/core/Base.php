<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/5/24
 * Time: 15:53
 */

namespace core;


class Base{
//   定义模板路径
    private $file;

    public function make(){
//       组装路径
        $this->file = "app/".MODULE."/view/".strtolower(CONTROLLER)."/".ACTION.".php";
//返回
        return $this;
    }

    public function __toString()
    {
//        当echo调用
        include $this->file;
        return '';
    }


}