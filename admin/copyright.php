<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>
<div class="typecho-foot" role="contentinfo">
    <div class="copyright">
        <p><?php _e('基于%s强力驱动, 版本 %s (%s)', $options->software, $prefixVersion, $suffixVersion); ?></p>
    </div>
    <nav class="resource">
        <a href="http://docs.typecho.org"><?php _e('帮助文档'); ?></a> &bull;
        <a href="https://github.com/typecho/typecho/issues"><?php _e('报告错误'); ?></a> &bull;
        <a href="http://extends.typecho.org"><?php _e('资源下载'); ?></a>
    </nav>
</div>
