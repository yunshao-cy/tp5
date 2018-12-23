<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/usr/share/nginx/html/tp5/public/../application/admin/view/article/edit.html";i:1545549008;}*/ ?>
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
<!-- 配置文件 -->
<script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/ueditor/ueditor.all.min.js"></script>
<!-- 语言包 -->
<script type="text/javascript" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 添加博文</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('admin/article/update'); ?>"> 
      <input type="hidden" name="a_id" value="<?php echo $art['a_id']; ?>">     
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="a_title" value="<?php echo $art['a_title']; ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="a_pic" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：500*200</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="a_author" value="<?php echo $art['a_author']; ?>">
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>是否推荐：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          <label class="button <?php if($art['a_rec'] == '是'): ?> active<?php endif; ?>"><span class="icon icon-check"></span>             
              <input name="a_rec" value="1" type="radio" <?php if($art['a_rec'] == '是'): ?> checked="checked"<?php endif; ?>>是             
          </label>             
          <label class="button <?php if($art['a_rec'] == '否'): ?> active<?php endif; ?>"><span class="icon icon-check"></span>             
              <input name="a_rec" value="1" type="radio" <?php if($art['a_rec'] == '否'): ?> checked="checked"<?php endif; ?>>否             
          </label>         
          </div>       
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>阅读：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="a_read" value="<?php echo $art['a_read']; ?>">
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>赞：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="a_like" value="<?php echo $art['a_like']; ?>">
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>标签：</label>
        </div>
        <div class="field">
          <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <input type="checkbox" name="t_ids[]" value="<?php echo $vo['t_id']; ?>" <?php if(in_array($vo['t_name'],explode(',',$art['t_ids']))): ?> checked="checked"<?php endif; ?>><?php echo $vo['t_name']; endforeach; endif; else: echo "" ;endif; ?>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>所属分类：</label>
        </div>
        <div class="field">
          <select name="c_id" class="input w50">
            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <option value="<?php echo $vo['c_id']; ?>" <?php if($art['c_id'] == $vo['c_id']): ?> selected="selected" <?php endif; ?>><?php echo $vo['c_name']; ?></option>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
        <!-- 加载编辑器的容器 -->
            <script id="container" name="a_content" type="text/plain"><?php echo $art['a_content']; ?></script>
        <!-- 加载编辑器的容器 -->
            <div class="tips"></div>
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
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container',{initialFrameHeight:320});
</script>
</body>
</html>