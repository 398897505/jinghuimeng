<?php exit;?>001468483603e8f364fbd4750cbc443e17dcbe191d3cs:2268:"a:2:{s:8:"template";s:2204:"<!doctype html>
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
		<?php foreach ($pageList as $vo) { ?> 
		<div class="m-pg-lst">
			<div class="pic">
            <?php if ($vo['image']){ ?>
			<img src="<?php echo $vo["image"];?>" width="120" height="80">
			<?php }else{ ?>
			<img src="/duxcms/themes/default/images/fm.jpg" width="120" height="80">
			<?php } ?>
			</div>
			<div class="info">
				<div class="tt"><a href="<?php echo $vo["aurl"];?>"><?php echo $vo["title"];?></a></div>
				<div class="dsc"><?php echo $vo["description"];?></div>
				<div class="time"><span>时间：<?php echo date('Y-m-d',$vo['time']);?></span> <span>访问：<?php echo $vo["views"];?></span></div>
			</div>
			<div class="f-cb"></div>
		</div>
		<?php } ?>
		<div class="m-page"><?php echo $page;?> </div>
	</div>
	<div class="g-sd">
		<div class="m-sdc">
			<div class="tt">栏目分类</div>
			<div class="cls">
				<ul>
                    <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$categoryInfo['class_id']));  if(is_array($listList)) foreach($listList as $list){ ?>
					<li><a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<?php $__Template->display("themes/default/sidebar"); ?>
	</div>
	<div class="f-cb"></div>
</div>
<?php $__Template->display("themes/default/foot"); ?>
</body>
</html>
";s:12:"compile_time";i:1436947603;}";