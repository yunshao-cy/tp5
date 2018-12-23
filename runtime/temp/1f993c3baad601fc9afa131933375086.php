<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/usr/share/nginx/html/tp5/public/../application/admin/view/cate/create.html";i:1545547783;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/static/admin/css/pintuer.css">
<link rel="stylesheet" href="/static/admin/css/admin.css">
<script src="/static/admin/js/jquery.js"></script>
<script src="/static/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('admin/cate/save'); ?>">        
      <div class="form-group">
        <div class="label">
          <label>分类名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="c_name" value="" />
          <div class="tips"></div>
        </div>
      </div>        
      
      <div class="form-group">
        <div class="label">
          <label>状态：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          
          <label class="button active">
            <span class="icon icon-check"></span>             
              <input name="c_status" value="开启" type="radio" checked="checked">开启             
          </label>             
        
          <label class="button"><span class="icon icon-times"></span>            
              <input name="c_status" value="关闭"  type="radio">关闭
          </label>         
           </div>       
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>