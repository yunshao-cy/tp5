<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Cate as Category;

class Cate extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = Category::all();
        $this->assign('data',$data);
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
        $data = $request->post();
        $res = Db::name('cate')->insert($data);
        if ($res) {
            $this->success('添加成功','admin/cate/index');
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
    public function edit($c_id)
    {
        $row = Category::get($c_id);
        $this->assign('row',$row);
        return $this->fetch();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $c_id)
    {
        $data = $request->post();
        $cate = new Category;
        $res = $cate->save($data,['c_id'=>$c_id]);
        if ($res) {
            $this->success('修改成功','admin/cate/index');
        }else{
            $this->error('修改失败');
        }
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($c_id)
    {
        $res = Category::destroy($c_id);
        if ($res) {
            $this->success('删除成功','admin/cate/index');
        }else{
            $this->error('删除失败');
        }
    }
}
