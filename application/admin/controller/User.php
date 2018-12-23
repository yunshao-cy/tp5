<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class User extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $row = Db::name('user')->where('u_id',1)->find();
        $this->assign('row',$row);
        return $this->fetch();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
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
    public function edit($u_id)
    {
        $row = Db::name('user')->where('u_id',1)->find();
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
    public function update(Request $request, $u_id)
    {
        $data = $request->post();
        $res = Db::name('user')->update($data);
        if($res){
            $this->success('修改成功','admin/user/index');
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
    public function delete($u_id)
    {
        $res = Db::name('user')->delete($u_id);
        if($res){
            $this->success('删除成功','admin/user/index');
        }else{
            $this->error('删除失败');
        }
    }

    public function pass ()
    {
        $user = new \app\admin\model\User;
        $data = $user->find(1);
        $this->assign('data',$data);
        return $this->fetch();
    }

    public function setPass (Request $request)
    {
        $data = $request->post();
        $result = $this->validate($data,['u_pwd|密码' => 'require','newpass|新密码' => 'require|min:4','renewpass|确认密码' => 'require|confirm:newpass']);
        if(true !== $result){
            $this->error($result);
        }
        // if($data['newpass'] != $data['renewpass']){
        //     $this->error('两次输入的密码不一致');
        // }
        // $u = new \app\admin\model\User;
        // $user = $u->find($data['u_id']);
        // if(md5($data['u_pwd']) != $user->u_pwd){
        //     $this->error('密码错误');
        // }
        // $res = $u->save(['u_pwd'=>md5($data['newpass'])],['u_id'=>$data['u_id']]);
        // if ($res) {
        //     $this->success('密码修改成功','admin/user/index');
        // }else{
        //     $this->error('密码修改失败');
        // }
    }
}
