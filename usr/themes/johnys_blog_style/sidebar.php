<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-offset-1 col-3 kit-hidden-tb" id="secondary" role="complementary">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h4 class="widget-title"><?php _e('最新文章'); ?></h4>
        <ul>
            <?php $this->widget('Widget_Contents_Post_Recent')->to($post); ?>
            <?php while ($post->next()):?>
            <li>
                <a href="<?php $post->permalink(); ?>"><?php $post->title(); ?></a>
                <div class="post-category-comment">
                    <a href="" class="post-category"><?php echo date("Y-m-d", $post->created); ?></a>
                    <a href="" class="post-comments"><?php $post->commentsNum(); ?>评论</a>
                </div>
            </li>
            <?php endwhile;?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget" style="display: none;">
		<h3 class="widget-title"><?php _e('最近回复'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <section id="tag_cloud-2" class="widget widget_tag_cloud">
            <h2 class="widget-title"><?php _e('分类'); ?></h2>
            <div class="tagcloud">
                <?php $this->widget('Widget_Metas_Category_List')->to($list); ?>
                <?php while ($list->next()): ?>
                <a href="<?php $list->permalink()?>" class="tag-link-5 tag-link-position-1" title="<?php $list->name()?>" style="font-size: 1em;"><?php $list->name()?></a>
                <?php endwhile;?>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>

        <section class="widget widget_categories">
            <h4 class="widget-title"><?php _e('归档'); ?></h4>
            <ul>
                <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
                    ->parse('<li class="cat-item"><a href="{permalink}">{date}</a></li>'); ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="widget">
		<h3 class="widget-title"><?php _e('其它'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
        </ul>
	</section>
    <?php endif; ?>

</div><!-- end #sidebar -->
