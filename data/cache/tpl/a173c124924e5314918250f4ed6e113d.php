<?php exit;?>001471956527e4cbe7333a0641236775e313547b3f09s:2217:"a:2:{s:8:"template";s:2153:"<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url();?>">
    <div class="panel dux-box  active">
        <div class="panel-head">
            <strong><?php echo $name;?>碎片</strong>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="label">
                    <label>碎片名称</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="name" name="name" size="60" datatype="s" value="<?php echo $info["name"];?>">
                    <div class="input-note">碎片名称</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>碎片标识</label>
                </div>
                <div class="field">
                    <input type="text" class="input" id="label" name="label" size="60" datatype="/^(?!\d)\w+$/" errormsg="碎片标识只能为英文数字和下划线！" value="<?php echo $info["label"];?>">
                    <div class="input-note">用于碎片调用</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>碎片内容</label>
                </div>
                <div class="field">
                    <textarea class="input js-editor" id="content" name="content" rows="20" ><?php echo html_out($info["content"]);?></textarea>
                </div>
            </div>
            
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <input type="hidden" name="fragment_id" type="hidden" value="<?php echo $info["fragment_id"];?>">
                <button class="button bg-main" type="submit">保存</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxFormPage();
    });
</script>";s:12:"compile_time";i:1440420527;}";