<?php  /* Template Name:公共底部 */  ?>
<div class="clear"></div>
<div class="layui-fluid footer">
    <div class="layui-container">
        <div class="layui-row">
            <div class="layui-col-md12">
                <div id="divBottom">
                    <h4 id="BlogPowerBy">Powered By <?php  echo $zblogphphtml;  ?></h4>
                    <h3 id="BlogCopyRight"><?php  echo $copyright;  ?><?php  echo date("Y");  ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/common/layui-v2.5.6/layui.all.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/base.js" type="text/javascript"></script>
<?php  echo $footer;  ?>
</body>
</html>