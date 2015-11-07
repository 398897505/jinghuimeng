<?php exit;?>0014685052951a4beec773d70fcc5f10b730b48eed11s:2200:"a:2:{s:8:"template";s:2136:"<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $media["title"];?></title>
<meta name="keywords" content="<?php echo $media["keywords"];?>" />
<meta name="description" content="<?php echo $media["description"];?>" />
<link href="/duxcms/themes/default/css/base.css" rel="stylesheet" type="text/css">
<link href="/duxcms/themes/default/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php $__Template->display("themes/default/head"); ?>
<div class="g-bd">
	<div class="g-mn">
		<div class="m-crumb">
			<ul class="f-cb">
				<li><a href="/duxcms/">首页</a></li>
				<?php foreach ($crumb as $vo) { ?> 
				<li><i>&gt;</i><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a></li>
				<?php } ?>
			</ul>
		</div>
		
		<div class="m-pg-tt"><?php echo $contentInfo["title"];?></div>
		<div class="m-pg-info"><span><?php echo date('Y-m-d H:i:s',$contentInfo['time']);?></span>　<span>来源：<?php echo $contentInfo["copyfrom"];?></span>　<span>浏览：<?php echo $contentInfo["views"];?></span> </div>
		<div class="m-pg-bd">
			<?php echo $contentInfo["content"];?>
		</div>
		<div class="m-pg-ln">
			<div class="last"><span>上一篇：</span>
			<a href="<?php echo $prevInfo["aurl"];?>"><?php echo $prevInfo["title"];?></a> 
			</div>
			<div class="next"><span>下一篇：</span> 
			<a href="<?php echo $nextInfo["aurl"];?>"><?php echo $nextInfo["title"];?></a> 
			</div>
			<div class="f-cb"></div>
		</div>
		<div class="m-pg-rlt">
			<div class="tt">关键词：
            <?php $listList = service("duxcms","Label","tagsList",array( "app"=>"DuxCms", "label"=>"tagsList", "limit"=>15, "name"=>$contentInfo['keywords']));  if(is_array($listList)) foreach($listList as $list){ ?>
            <span><a href="<?php echo $list["url"];?>"><?php echo $list["name"];?></a> </span>
            <?php } ?>
			</div>
		</div>
	</div>
	<div class="g-sd">
		<?php $__Template->display("themes/default/sidebar"); ?>
	</div>
	<div class="f-cb"></div>
</div>
<?php $__Template->display("themes/default/foot"); ?>
</body>
</html>
";s:12:"compile_time";i:1436969295;}";