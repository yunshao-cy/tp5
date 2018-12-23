<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use \app\admin\model\Tag as Tags;

class Tag extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $tags = Tags::all();
        $this->assign('tags',$tags);
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $tag = new Tags;
        $res = $tag->save($request->post());
        if($res){
            $this->success('添加成功','admin/tag/index');
        }else{
            $this->error('添加失败');
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($t_id)
    {
        $res = Tags::destroy($t_id);
        if($res){
            $this->success('删除成功','admin/tag/index');
        }else{
            $this->error('删除失败');
        }
    }
}
