<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en" class="ace ace-card-on ace-tab-nav-on ace-main-nav-on ace-sidebar-on" data-theme-color="#c0e3e7">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="description" content="">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Icon Fonts -->
    <link href="<?php $this->options->themeUrl('fonts/icomoon/style.css')?>" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php $this->options->themeUrl('js/plugins/highlight/solarized-light.css')?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('style.css')?>" rel="stylesheet">

    <!-- Modernizer -->
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/vendor/modernizr-3.3.1.min.js')?>"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="category">

<div class="ace-wrapper">
    <header id="ace-header" class="ace-container-shift ace-logo-in ace-head-boxed ace-nav-right">
        <div class="ace-head-inner">
            <div class="ace-head-container ace-container">
                <div class="ace-head-row">
                    <div id="ace-head-col1" class="ace-head-col text-left">
                        <a id="ace-logo" class="ace-logo" href="<?php $this->options->siteUrl(); ?>">
                            <img src="<?php $this->options->themeUrl('img/uploads/brand/logo.svg') ?>" alt="<?php $this->options->title() ?>">
                        </a>
                    </div>

                    <div id="ace-head-col2" class="ace-head-col text-right">
                        <div class="ace-nav-container ace-container hidden-sm hidden-xs">
                            <nav id="ace-main-nav">
                                <ul class="clear-list">
                                    <li><a<?php if($this->is('index')): ?> class="active"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
                                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                    <?php while($pages->next()): ?>
                                        <li><a<?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div id="ace-head-col3" class="ace-head-col text-right">
                        <button id="ace-sidebar-btn" class="btn btn-icon btn-light btn-shade">
                            <span class="ace-icon ace-icon-side-bar-icon"></span>
                        </button>
                    </div>
                </div>
            </div><!-- .ace-container -->
        </div><!-- .ace-head-inner -->
    </header><!-- #ace-header -->


    <nav id="ace-nav-sm" class="ace-nav hidden-lg hidden-md">
        <ul class="clear-list">
            <li>
                <a href="<?php $this->options->siteUrl(); ?>" data-tooltip="返回首页"><img class="avatar avatar-42" src="<?php $this->options->themeUrl('img/uploads/avatar/avatar-42x42.png')?>" alt=""></a>
            </li>
            <li class="active">
                <a href="<?php $this->options->siteUrl(); ?>about.html" data-tooltip="Blog"><span class="ace-icon ace-icon-blog"></span></a>
            </li>
            <li>
                <a href="<?php $this->options->siteUrl(); ?>portfolio.html" data-tooltip="Portfolio"><span class="ace-icon ace-icon-portfolio"></span></a>
            </li>
            <li>
                <a href="<?php $this->options->siteUrl(); ?>guest_book.html" data-tooltip="References"><span class="ace-icon ace-icon-references"></span></a>
            </li>
            <li>
                <a href="<?php $this->options->siteUrl(); ?>contact.html" data-tooltip="Contact"><span class="ace-icon ace-icon-contact"></span></a>
            </li>
        </ul>
    </nav><!-- #ace-tab-nav-sm -->

    <article id="ace-card" class="ace-card bg-primary">
        <div class="ace-card-inner text-center">
            <img class="avatar avatar-195" src="<?php $this->options->themeUrl('img/uploads/avatar/avatar-195x195.png')?>" width="195" height="195" alt="">
            <h1>Johny He</h1>
            <p class="text-muted">
                全栈工程师
            </p>
            <ul class="ace-social clear-list">
                <li><a><span class="ace-icon ace-icon-github"></span></a></li>
                <li><a><span class="ace-icon ace-icon-google"></span></a></li>
                <li><a><span class="ace-icon ace-icon-weibo"></span></a></li>
                <li><a><span class="ace-icon ace-icon-qq"></span></a></li>
            </ul>
        </div>

        <footer class="ace-card-footer">
            <a class="btn btn-lg btn-block btn-thin btn-upper " href="/down_my_pdf.html">简历下载</a>
        </footer>
    </article><!-- #ace-card -->

    <div id="ace-content" class="ace-container-shift">
        <div class="ace-container">
            <div id="ace-nav-wrap" class="hidden-sm hidden-xs">
                <div class="ace-nav-cont">
                    <div id="ace-nav-scroll">
                        <nav id="ace-nav" class="ace-nav">
                            <ul class="clear-list">
                                <li>
                                    <a href="<?php $this->options->siteUrl(); ?>" data-tooltip="返回首页"><img class="avatar avatar-42" src="<?php $this->options->themeUrl('img/uploads/avatar/avatar-42x42.png') ?>" alt=""></a>
                                </li>
                                <li class="active">
                                    <a href="<?php $this->options->siteUrl(); ?>about.html" data-tooltip="关于博主"><span class="ace-icon ace-icon-blog"></span></a>
                                </li>
                                <li>
                                    <a href="<?php $this->options->siteUrl(); ?>portfolio.html" data-tooltip="项目作品"><span class="ace-icon ace-icon-portfolio"></span></a>
                                </li>
                                <li>
                                    <a href="<?php $this->options->siteUrl(); ?>guest_book.html" data-tooltip="雁过留声"><span class="ace-icon ace-icon-references"></span></a>
                                </li>
                                <li>
                                    <a href="<?php $this->options->siteUrl(); ?>contact.html" data-tooltip="联系我"><span class="ace-icon ace-icon-contact"></span></a>
                                </li>

                            </ul>
                        </nav>
                    </div>

                    <div id="ace-nav-tools" class="hidden">
                        <span class="ace-icon ace-icon-dots-three-horizontal"></span>

                        <button id="ace-nav-arrow" class="clear-btn">
                            <span class="ace-icon ace-icon-chevron-thin-down"></span>
                        </button>
                    </div>
                </div>
                <div class="ace-nav-btm"></div>
            </div><!-- .ace-nav-wrap -->

            <div class="ace-paper-stock">
                <main class="ace-paper clearfix">

                    <div class="ace-paper-cont clear-mrg">

                        <!-- START: PAGE CONTENT -->
                        <header class="page-header padd-box">
                            <h1 class="title-lg text-upper">
                                <?php if($this->is('index')): ?>
                                博客
                                <?php endif; ?>
                                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                                <?php while($pages->next()): ?>
                                    <?php if($this->is('page', $pages->slug)): ?>
                                        <?php $pages->title(); ?>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </h1>
                        </header>



    
    
