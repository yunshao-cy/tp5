<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use \app\admin\model\Article as Art;

class Article extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = Art::paginate(7);
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
        $tags = \app\admin\model\Tag::all();
        $this->assign('tags',$tags);
        $cates = \app\admin\model\Cate::all();
        $this->assign('cates',$cates);
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
        $a_pic = $this->upload();
        $data['a_pic'] = $a_pic;
        $art = new Art;
        $res = $art->save($data);
        if($res){
            $this->success('添加成功','admin/article/index');
        }else{
            unlink(ROOT_PATH . 'public' . DS . "uploads/{$a_pic}");
            $this->error('添加失败');
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read()
    {

    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($a_id)
    {
        $tags = \app\admin\model\Tag::all();
        $this->assign('tags',$tags);
        $cates = \app\admin\model\Cate::all();
        $this->assign('cates',$cates);
        $art = Art::get($a_id);
        $this->assign('art',$art);
        return $this->fetch();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $a_id)
    {
        $data = $request->post();
        $art = new Art;
        $res = $art->save($data,$a_id);
        if($res){
            $this->success('修改成功','admin/article/index');
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
    public function delete($a_id)
    {
        $res = Art::destroy($a_id);
        if($res){
            $this->success('删除成功','admin/article/index');
        }else{
            $this->error('删除失败');
        }
    }

    // 回收站
    public function recycle ()
    {
        $data = Art::onlyTrashed()->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    // 图片上传
    public function upload(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->validate(['size'=>102400,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            // 成功上传后 获取上传信息
            return $info->getSaveName();
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
    } 

    public function search (Request $request)
   {
       $keywords = $request->only('keywords');
       $art = new Art;
       $data = $art->whereLike('a_title',"%{$keywords['keywords']}%")->paginate(1);
       $this->assign('data',$data);
       return $this->fetch('index');
   }   
}
