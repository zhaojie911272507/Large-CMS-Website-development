<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return '前台等待完善';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
