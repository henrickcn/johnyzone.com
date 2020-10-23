<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- .ace-paper-cont -->
</main><!-- .ace-paper -->
</div><!-- .ace-paper-stock -->
</div><!-- .ace-container -->
</div><!-- #ace-content -->

<div id="ace-sidebar">
    <button id="ace-sidebar-close" class="btn btn-icon btn-light btn-shade">
        <span class="ace-icon ace-icon-close"></span>
    </button>

    <div id="ace-sidebar-inner">
        <nav id="ace-main-nav-sm" class="visible-xs visible-sm text-center">
            <ul class="clear-list">
                <li><a href="index.html">about</a></li>
                <li><a href="portfolio.html">portfolio</a>
                <li><a href="testimonials.html">references</a></li>
                <li class="has-sub-menu"><a href="#">pages</a>
                    <ul class="sub-menu">
                        <li><a href="typography.html">typography</a></li>
                        <li><a href="components.html">components</a></li>
                        <li><a href="search.html">search</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a href="category.html">blog</a>
                    <ul class="sub-menu">
                        <li><a href="single.html">single</a></li>
                        <li><a href="single-image.html">single image</a></li>
                        <li><a href="single-slider.html">single slider</a></li>
                        <li><a href="single-youtube.html">single youtube</a></li>
                        <li><a href="single-vimeo.html">single vimeo</a></li>
                        <li><a href="single-dailymotion.html">single dailymotion</a></li>
                        <li><a href="single-soundcloud.html">single soundcloud</a></li>
                        <li><a href="single-video.html">single video</a></li>
                        <li><a href="single-audio.html">single audio</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">contact</a></li>
            </ul>
        </nav><!-- #ace-main-nav-sm -->

        <aside class="widget-area">
            <section class="widget widget_search">
                <form role="search" method="get" class="search-form" action="">
                    <label>
                        <span class="screen-reader-text">搜索:</span>
                        <input type="search" class="search-field" placeholder="输入关键字..." value="" name="">
                    </label>
                    <button type="submit" class="search-submit">
                        <span class="screen-reader-text">搜索</span>
                        <span class="ace-icon ace-icon-search"></span>
                    </button>
                </form>
            </section>

            <section class="widget widget_posts_entries">
                <?php $this->need('sidebar.php'); ?>
            </section>
        </aside>

    </div><!-- #ace-sidebar-inner -->
</div><!-- #ace-sidebar -->

<footer id="ace-footer" class="ace-container-shift">
    <div class="ace-container">
        <div class="ace-footer-cont clear-mrg">
            <p class="text-center">
                Copyright &copy;<?php echo date('2014 - Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?=str_ireplace(['http://','https://','/'], '', $this->options->siteUrl) ?></a> All Rights Reserved<br />
                <?php _e('基于 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>
            </p>
        </div>
    </div><!-- .ace-container -->
</footer><!-- #ace-footer -->

<!-- Triangle Shapes -->
<svg id="ace-bg-shape-1" class="hidden-sm hidden-xs" height="519" width="758">
    <polygon points="0,455,693,352,173,0,92,0,0,71" style="fill:#d2d2d2;stroke:purple;stroke-width:0; opacity: 0.5">
</svg>

<svg id="ace-bg-shape-2" class="hidden-sm hidden-xs" height="536" width="633">
    <polygon points="0,0,633,0,633,536" style="fill:#c0e3e7;stroke:purple;stroke-width:0" />
</svg>
</div><!-- .ace-wrapper -->
<!-- Scripts -->
<script type="text/javascript" src="<?php $this->options->themeUrl('js/vendor/jquery-1.12.4.min.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/plugins/highlight/highlight.pack.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/plugins/jquery.mCustomScrollbar.min.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/plugins/isotope.pkgd.min.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/plugins/progressbar.min.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/plugins/slick.min.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/options.js');?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/main.js');?>"></script>
<?php $this->footer(); ?>
</body>
</html>
