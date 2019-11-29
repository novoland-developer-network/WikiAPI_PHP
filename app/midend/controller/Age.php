<?php
declare (strict_types=1);

namespace app\midend\controller;

use think\Request;

class Age
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return json([1, 2, 3, [333]]);
    }
    
    /**
     * 保存新建的资源
     *
     * @param \think\Request $request
     *
     * @return \think\Response
     */
    public function save(Request $request)
    {
        return json($request);
    }
    
    /**
     * 显示指定的资源
     *
     * @param int $id
     *
     * @return \think\Response
     */
    public function read($id)
    {
        return json($id);
    }
    
    /**
     * 保存更新的资源
     *
     * @param \think\Request $request
     * @param int            $id
     *
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        return json([$request, $id]);
    }
    
    /**
     * 删除指定资源
     *
     * @param int $id
     *
     * @return \think\Response
     */
    public function delete($id)
    {
        return json($id);
    }
}
