<?php
declare (strict_types=1);

namespace app\index\controller;

class Index
{
    /**
     * 显示可用的api列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return json(['1', '2', 3]);
    }
    
}
