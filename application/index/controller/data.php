<?php
namespace app\index\controller;
use think\Controller;
class data extends Controller
{
    public function return($name="林嘉涛")
    {
        echo "我的名字叫做".$name;
    }
}
