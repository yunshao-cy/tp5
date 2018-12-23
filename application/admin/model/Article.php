<?php

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class Article extends Model
{
	// 软删除
    use SoftDelete;
	protected $deleteTime = 'delete_time';

	// 获取器
	public function getARecAttr($value)
	{
		$a_rec = [0=>'否',1=>'是'];
		return $a_rec[$value];
	}

	// public function getTIdsAttr ($value)
	// {
	// 	return explode(',', $value);
	// }

	// 修改器
	public function setTIdsAttr ($value)
	{
		return implode(',', $value);
	}

	/*
		关联模型：多对一
		关联表：Cate
		关联的字段：c_id
		方法名可以自定义，例如cates，调用博文的时候：$art = Article::get(1);调用博文的分类：$art->category;调用分类名称：$art->category->c_name

	*/
	public function category ()
	{
		return $this->belongsTo('Cate','c_id');
	}
}
