<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/usr/share/nginx/html/tp5/public/../application/admin/view/tag/index.html";i:1545547783;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="/static/admin/css/pintuer.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css">
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href=""><span class="icon-plus-square-o"></span> 添加内容</a>
  </div> 
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>     
      <th>标签名称</th>  
      <th width="250">操作</th>
    </tr>
   <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
      <td><?php echo $vo['t_id']; ?></td>      
      <td><?php echo $vo['t_name']; ?></td>  
      <td>
      <div class="button-group">
      <!-- <a type="button" class="button border-main" href="<?php echo url('admin/cate/edit',['t_id'=>$vo['t_id']]); ?>"><span class="icon-edit"></span>修改</a> -->
       <a class="button border-red" href="javascript:void(0)" onclick="return del(<?php echo $vo['t_id']; ?>)"><span class="icon-trash-o"></span> 删除</a>
      </div>
      </td>
    </tr> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
<script>
function del(id){
	if(confirm("您确定要删除吗?")){
		location.href = "delete/t_id/"+id;
	}
}
</script>

</body>
</html>