<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article class="post hentry">
    <div class="padd-box-sm">
        <header class="post-header text-center">
            <h2 class="post-title entry-title text-upper">
                <a rel="bookmark" href="<?php $this->permalink() ?>">
                    <?php $this->title() ?>
                </a>
            </h2>
            <div class="post-header-info">
                <span class="post-author vcard">
                    <?php _e('作者: '); ?>
                    <a class="url fn n" href="<?php $this->author->permalink(); ?>" rel="author">
                        <?php $this->author(); ?>
                    </a>
                </span>
                <span class="posted-on">
                    <?php _e('时间: '); ?>
                    <time class="post-date published" datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
                </span>
                <span class="posted-on">
                    <?php _e('分类: '); ?>
                    <?php $this->category(','); ?>
                </span>
            </div>
            <div>
                <?php $this->tags(', ', true, ''); ?>
            </div>
        </header>

        <div class="post-content entry-content editor clearfix clear-mrg">
            <p><?php $this->content(); ?></p>
        </div>

        <?php $this->need('comments.php'); ?>
        <ul class="post-near">
            <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
            <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
        </ul>
    </div>
</article><!-- .post -->


<?php $this->need('footer.php'); ?>
