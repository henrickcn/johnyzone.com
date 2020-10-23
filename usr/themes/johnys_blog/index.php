<?php
/**
 * Johny's Blog主题皮肤
 *
 * @author henrick
 * @version 1.0
 * @link https://johnyzone.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<?php while($this->next()): ?>
<article class="post hentry">
    <div class="post-media hidden">
        <a href="<?php $this->permalink() ?>" rel="bookmark">
            <figure class="post-figure">
                <img src="<?php $this->options->themeUrl('img/uploads/post-image.jpg')?>" alt="">
            </figure>
        </a>
    </div>
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
                    <a href="/" rel="bookmark">
                        <time class="post-date published" datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
                    </a>
                </span>
            </div>
        </header>

        <div class="post-content entry-content editor clearfix clear-mrg">
            <p><?php $this->content(); ?></p>
        </div>

        <footer class="post-footer">
            <div class="post-footer-top brd-btm clearfix">
                <div class="post-footer-info">
					<span class="post-cat-links">
                        <?php $this->category(','); ?>
                    </span>
                    <span class="post-line">|</span>
                    <a href="<?php $this->permalink() ?>#comments" class="post-comments-count"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
                </div>

                <div class="post-more">
                    <a class="btn btn-sm btn-primary" href="<?php $this->permalink() ?>" rel="bookmark">查看详情</a>
                </div>
            </div>
        </footer>
    </div>
</article><!-- .post -->

<?php endwhile; ?>

<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
<?php $this->need('footer.php'); ?>
