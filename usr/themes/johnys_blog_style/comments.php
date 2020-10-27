<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('说点什么？'); ?></h3>
        <div class="padd-box-sm">
            <form action="<?php $this->commentUrl() ?>" id="comment-form" role="form" method="post" class="contact-form">
                <?php if($this->user->hasLogin()): ?>
                <?php else: ?>
                <div class="form-group">
                    <label class="form-label" for="author"><?php _e('称呼'); ?></label>
                    <div class="form-item-wrap">
                        <input type="text" name="author" id="author" class="form-item" value="<?php $this->remember('author'); ?>" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
                    <div class="form-item-wrap">
                        <input type="email" name="mail" id="mail" class="form-item" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站'); ?></label>
                    <div class="form-item-wrap">
                        <input type="url" name="url" id="url" class="form-item" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                    </div>
                </div>
                <?php endif; ?>


                <div class="form-group">
                    <label for="textarea" class="required form-label"><?php _e('内容'); ?></label>
                    <div class="form-item-wrap">
                        <textarea rows="8" cols="50" name="text" id="textarea" id="comment" class="form-item" required ><?php $this->remember('text'); ?></textarea>
                    </div>
                </div>

                <div class="form-submit form-item-wrap">
                    <button class="btn btn-primary btn-lg" type="submit"><?php _e('提交评论'); ?></button>
                </div>
            </form>
        </div>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
