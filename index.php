<?php

//这是入口文件

//控制器
$c = isset($_GET['c']) ? $_GET['c'] : 'welcome';
$c = ucfirst(strtolower($c));

//方法
$a = isset($_GET['a']) ? $_GET['a'] : 'index';
$a = strtolower($a);

//包含控制器
include './controllers/'.$c.'Controller.php';

//实例化控制器对象
$class_name = $c.'Controller';
$controller = new $class_name;

//调用方法
$controller->$a();