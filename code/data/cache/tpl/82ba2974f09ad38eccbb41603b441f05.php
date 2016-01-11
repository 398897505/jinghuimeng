<?php exit;?>00148405938088aa7195fe5c10b86a26517ba1c7109cs:2583:"a:2:{s:8:"template";s:2519:"<script>
    $(function(){
        $('#navbar > li').hover(function(){
            $('#navbar > li').removeClass('actived');
            $('#navbar').find('.dropdown').hide();
            $(this).addClass('actived');
            $(this).find('.dropdown').show();
        });
    });
</script>
<div class="header">
    <div class="am-container topbar">
        <div class="logo am-fl" style="background:#eee;"><?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"header_logo"));  echo $echoList; ?></div>
        <div class="search am-fr">
            <form class="am-form" action="<?php echo url('Article/Search/index');?>" method="post">
                <select name="model" class="select am-fl">
                    <option value="0">标题</option>
                    <option value="1">内容</option>
                </select>
                <input type="text" class="input am-fl" name="keyword" value="" placeholder="请输入关键字" />
                <button type="button" class="am-btn button am-btn-xs submit am-fr">搜索</button>
            </form>
        </div>
    </div>
    <div class="nav">
        <ul class="am-container navbar" id="navbar">
            <li class="am-fl actived">
                <a href="/" title="京徽蒙">网站首页</a>
            </li>
            <?php $channelList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>0 , "limit"=>5, "order"=>"sequence"));  if(is_array($channelList)) foreach($channelList as $channel){ ?>
            <li class="am-fl">
                <a href="<?php echo $channel["curl"];?>" title="<?php echo $channel["name"];?>"><?php echo $channel["name"];?></a>
                <ul class="dropdown">
                    <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$channel['class_id'], "limit"=>10));  if(is_array($listList)) foreach($listList as $list){ ?>
                    <li class="am-fl"><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>"><?php echo $list["name"];?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php } ?>
        </ul>
    </div>
    <div class="banner">
        <a href="" title="" target="_blank"><img src="/themes/jinghuimeng/assets/images/banner.png" class="am-img-responsive" title="" alt="" /></a>
    </div>
</div>";s:12:"compile_time";i:1452523380;}";