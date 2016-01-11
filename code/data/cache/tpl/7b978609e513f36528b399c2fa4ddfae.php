<?php exit;?>001484059380d0d50dd6302a64e63f0c7f8154bb3d68s:5906:"a:2:{s:8:"template";s:5842:"<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title><?php echo $media["title"];?> </title>
    <meta name="keywords" content="<?php echo $media["keywords"];?>" />
    <meta name="description" content="<?php echo $media["description"];?>" />
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
        <div class="am-u-sm-4 news">
            <div class="title">
                <i class="am-icon-map-marker"></i><span>公司新闻</span><span class="more"><a href="" title="">更多</a></span>
            </div>
            <div class="list">
                <ul class="am-list">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>1, "sub"=>true, "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li><a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>" target="_blank"><i class="am-icon-angle-right am-icon-fw"></i><?php echo $list["title"];?></a><span class="date"><?php echo date('m-d',$list["time"]);?></span></li>
                    <?php } ?>
                    </ul>
            </div>
        </div>
        <div class="am-u-sm-4 news dt">
            <div class="title">
                <i class="am-icon-map-marker"></i><span>行业动态</span><span class="more"><a href="" title="">更多</a></span>
            </div>
            <div class="list">
                <ul class="am-list">
                    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "class_id"=>1, "sub"=>true, "limit"=>5));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li><a href="<?php echo $list["aurl"];?>" title="<?php echo $list["title"];?>" target="_blank"><i class="am-icon-angle-right am-icon-fw"></i><?php echo $list["title"];?></a><span class="date"><?php echo date('m-d',$list["time"]);?></span></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="am-u-sm-4">
            <div class="icons">
                <div class="pic" style="background:#eee;">
                    <a href="" title="" target="_blank">120X120</a>
                </div>
                <div class="txt">
                    <h2>特色产品</h2>
                    <p>English</p>
                </div>
            </div>
            <div class="icons">
                <div class="pic" style="background:#eee;">
                    <a href="" title="" target="_blank">120X120</a>
                </div>
                <div class="txt">
                    <h2>特色产品</h2>
                    <p>English</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="am-container am-g">
        <div class="am-u-sm-4">
            <div class="about">
                <div class="pic">
                    <img src="/themes/jinghuimeng/assets/images/about.jpg"  class="am-img-responsive">
                </div>
                <div class="txt">
                    <p><?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"index_aboutus"));  echo $echoList; ?></p>
                </div>
                <div class="logo">关于我们</div>
            </div>
        </div>
        <div class="am-u-sm-3 box-1">
            <div class="tz">
                <div class="txt">
                    <h2>招商合作</h2>
                    <p><?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"index_business"));  echo $echoList; ?></p>
                </div>
                <div class="pic">
                    <img src="/themes/jinghuimeng/assets/images/diannao.png" alt="" title="" height="100" />
                </div>
            </div>
        </div>
        <div class="am-u-sm-5 box-2">
            <div class="lxfs">
                <div class="pic">
                    <img src="/themes/jinghuimeng/assets/images/lxwm.png" alt="" title="" width="160" height="130" />
                </div>
                <div class="txt">
                    <?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"index_contact"));  echo $echoList; ?>
                </div>
            </div>
            <div class="zp">
                <div class="pic">
                    <img src="/themes/jinghuimeng/assets/images/zp.png" alt="" title="" width="130" height="130" />
                </div>
                <div class="txt">
                    <h2>人才招聘</h2>
                    <p><?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"index_job"));  echo $echoList; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__Template->display("themes/jinghuimeng/footer"); ?>
</body>
</html>
";s:12:"compile_time";i:1452523380;}";