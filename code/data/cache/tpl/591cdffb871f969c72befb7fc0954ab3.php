<?php exit;?>001466146128d7b63bf0ef17d9ead8e0bde6a3cf79f6s:2648:"a:2:{s:8:"template";s:2584:"<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DuxCms安装向导</title>
<link href="/duxcms/public/install/css/base.css" rel="stylesheet" type="text/css" />
<link href="/duxcms/public/install/css/style.css" rel="stylesheet" type="text/css" />
<script src="/duxcms/public/install/js/install.js"></script>
</head>
<body>
<div class="g-install">
  <div class="m-head">
    <h1>DuxCms安装环境测试</h1>
  </div>
  <div class="m-body">
    <div class="tt"></div>
    <div class="m-form">
      <legend>功能支持检测</legend>
      <?php foreach ($check_env as $vo) { ?>
      <div class="formitm">
        <label class="lab"><?php echo $vo["0"];?>：</label>
        <div class="ipt">
         <?php echo $vo["3"];?>&nbsp;&nbsp;&nbsp;&nbsp;
          <?php if ($vo[4] == 'error'){
          	echo "<font color=red><b>×</b></font>";
          } else {
          	echo "<font color=green><b>√</b></font>";
          } ?>
        </div>
      </div>
      <?php } ?>
      <legend>函数支持检测</legend>
      <?php foreach ($check_func as $vo) { ?>
      <div class="formitm">
        <label class="lab"><?php echo $vo["0"];?>：</label>
        <div class="ipt">
         <?php echo $vo["3"];?>&nbsp;&nbsp;&nbsp;&nbsp;
          <?php if ($vo[4] == 'error'){
          	echo "<font color=red><b>×</b></font>";
          } else {
          	echo "<font color=green><b>√</b></font>";
          } ?>
        </div>
      </div>
      <?php } ?>
      <div class="formitm"> 以上模块功能如果不可用可能会影响到系统的部分功能将无法使用 </div>
      <legend>目录权限检测</legend>
      <?php foreach ($check_dirfile as $vo) { ?>
      <div class="formitm">
        <label class="lab"><?php echo $vo["1"];?>：</label>
        <div class="ipt">
         <?php echo $vo["3"];?>&nbsp;&nbsp;&nbsp;&nbsp;
          <?php if ($vo[2] == 'error'){
          	echo "<font color=red><b>×</b></font>";
          } else {
          	echo "<font color=green><b>√</b></font>";
          } ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <div class="m-foot"> <a href="<?php echo url('index');?>">上一步</a>
    <?php if (!function_exists('mysql_connect')||!function_exists('mysql_pconnect')){ ?>
    <a href="javascript:;" onclick="alert('关键功能无法使用，无法继续操作！')">下一步</a>
    <?php }else { ?>
    <a href="<?php echo url('setup2');?>" class="submit">下一步</a>
    <?php } ?>
  </div>
</div>
</body>
</html>";s:12:"compile_time";i:1434610128;}";