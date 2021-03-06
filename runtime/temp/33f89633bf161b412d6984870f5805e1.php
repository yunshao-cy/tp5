<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/usr/share/nginx/html/tp5/public/../application/admin/view/article/create.html";i:1545547783;}*/ ?>
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
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('admin/article/save'); ?>">      
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="a_title" value="" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <script type="text/javascript">
          function showurl(file){
            var image_url = document.getElementById('image_url');
            image_url.value = file.value;
          }
          </script>
          <input type="text" id="image_url" class="input tips" style="width:25%; float:left;" value="" data-toggle="hover" data-place="right" data-image="" />
          <a class="button input-file bg-blue" href="javascript:void(0);">+ 浏览文件<input size="100" type="file" name="image" onchange="showurl(this)" /></a>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="a_author" value="">
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>是否推荐：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          <label class="button"><span class="icon icon-check"></span>             
              <input name="a_rec" value="1" type="radio">是             
          </label>             
          <label class="button active"><span class="icon icon-times"></span>            
              <input name="a_rec" value="0"  type="radio" checked="checked">否
          </label>         
           </div>       
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>阅读：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="a_read" value="">
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>赞：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="a_like" value="">
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>标签：</label>
        </div>
        <div class="field">
          <?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <input type="checkbox" name="t_ids[]" value="<?php echo $vo['t_id']; ?>"><?php echo $vo['t_name']; endforeach; endif; else: echo "" ;endif; ?>
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
            <option value="<?php echo $vo['c_id']; ?>"><?php echo $vo['c_name']; ?></option>
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
            <script id="container" name="a_content" type="text/plain"></script>
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