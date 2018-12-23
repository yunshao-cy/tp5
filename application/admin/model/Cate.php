<?php

namespace app\admin\model;

use think\Model;

class Cate extends Model
{
    // protected $pk = 'c_id';
    // protected $table = 'tp_cate';

	/*
		关联模型：一对多
		关联表：article
		方法名可以自定义，例如方法名是art，调用主键为1的分类：$cate=Cate::get(1); 调用该分类下的博文：$cate->art;
			例如方法名是articles，调用主键为1的分类：$cate=Cate::get(1); 调用该分类下的博文：$cate->articles;

	*/
    // public function articles ()
    // {
    // 	return $this->hasMany('Article','c_id');
    // }
}
