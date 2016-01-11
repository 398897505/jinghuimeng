<?php exit;?>001478789068b34dc439d4dc8790f77f6e7e3b4100ccs:4760:"a:2:{s:8:"template";s:4696:"<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title><?php echo $media["title"];?></title>
    <meta name="keywords" content="<?php echo $media["keywords"];?>" />
    <meta name="description" content="<?php if (trim($contentInfo["description"])!=""){ ?><?php echo $contentInfo["description"];?><?php }else{ ?><?php echo $media["description"];?><?php } ?>" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/themes/jinghuimeng/assets/css/amazeui.min.css">
    <link rel="stylesheet" href="/themes/jinghuimeng/assets/css/jinghuimeng.css">
    <!--[if lt IE 9]>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="/themes/jinghuimeng/assets/js/amazeui.ie8polyfill.min.js"></script>
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
    <script src="/themes/jinghuimeng/assets/js/jquery.min.js"></script>
    <!--<![endif]-->
    <script src="/themes/jinghuimeng/assets/js/amazeui.min.js"></script>
</head>
<body>
<?php $__Template->display("themes/jinghuimeng/header"); ?>
<div class="main">
    <div class="am-container am-g">
        <div class="am-u-sm-3 page-left">
            <div class="title">
                <i class="am-icon-map-marker"></i>
                <span>
                    <?php if ($categoryInfo["parent_id"]!=0){ ?>
                    <?php echo $parentCategoryInfo["name"];?>
                    <?php }else{ ?>
                    <?php echo $categoryInfo["name"];?>
                    <?php } ?>
                </span>
            </div>
            <div class="nav">
                <ul>
                    <?php if ($categoryInfo["parent_id"]!=0){ ?>
                    <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$categoryInfo["parent_id"], "limit"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>"><?php echo $list["name"];?></a></li>
                    <?php } ?>
                    <?php }else{ ?>
                    <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$categoryInfo["class_id"], "limit"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>"><?php echo $list["name"];?></a></li>
                    <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <div class="desc">
                <?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"page_adv"));  echo $echoList; ?>
            </div>
        </div>
        <div class="am-u-sm-9 page-right">
            <div class="title">
                <i class="am-icon-map-marker"></i>
                <span>
                首页
                <?php foreach ($crumb as $vo) { ?>
                 &gt; <a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a>
                <?php } ?>
                </span>
            </div>
            <div class="pagecontent">
                <h1><?php echo $contentInfo["title"];?></h1>
                <div class="info"><span><?php echo date('Y-m-d H:i',$contentInfo['time']);?></span>　<span>来源：<?php echo $contentInfo["copyfrom"];?></span>　<span>浏览：<?php echo $contentInfo["views"];?></span></div>
                <?php if (trim($contentInfo["description"])!=""){ ?>
                <div class="description"><?php echo $contentInfo["description"];?></div>
                <?php } ?>
                <div class="content"><?php echo $contentInfo["content"];?></div>
                <?php if (trim($prevInfo["title"])!=""){ ?>
                <div class="last"><span>上一篇：</span>
                    <a href="<?php echo $prevInfo["aurl"];?>"><?php echo $prevInfo["title"];?></a>
                </div>
                <?php } ?>
                <?php if (trim($nextInfo["title"])!=""){ ?>
                <div class="next"><span>下一篇：</span>
                    <a href="<?php echo $nextInfo["aurl"];?>"><?php echo $nextInfo["title"];?></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php $__Template->display("themes/jinghuimeng/footer"); ?>
</body>
</html>
";s:12:"compile_time";i:1447253068;}";