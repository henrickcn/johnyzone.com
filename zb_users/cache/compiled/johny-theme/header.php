<?php  /* Template Name:公共头部 */  ?>
<!DOCTYPE html>
<html lang="<?php  echo $lang['lang_bcp47'];  ?>" class="ace ace-card-on ace-tab-nav-on ace-main-nav-on ace-sidebar-on" data-theme-color="#c0e3e7">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="johny zone blog" />
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
    <meta name="description" content="">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">-->
    <!-- Icon Fonts -->
    <link href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/common/johny/fonts/icomoon/style.css" rel="stylesheet">
    <!-- Styles -->
    <link href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/common/johny/js/plugins/highlight/solarized-light.css" rel="stylesheet">
    <link href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/common/johny/style.css" rel="stylesheet">
    <!-- Modernizer -->
    <script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/common/johny/js/vendor/modernizr-3.3.1.min.js"></script>
    <?php  echo $header;  ?>
    <?php if ($type=='index'&&$page=='1') { ?>
    <link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
    <?php } ?>
</head>
<body>
<div class="ace-wrapper">
    <header id="ace-header" class="ace-container-shift ace-logo-in ace-head-boxed ace-nav-right">
        <div class="ace-head-inner">
            <div class="ace-head-container ace-container">
                <div class="ace-head-row">
                    <div id="ace-head-col1" class="ace-head-col text-left">
                        <a id="ace-logo" class="ace-logo" href="<?php  echo $host;  ?>">
                            <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/common/johny/img/uploads/brand/logo.svg" alt="ace resume"><span>.Certy</span>
                        </a>
                    </div>

                    <div id="ace-head-col2" class="ace-head-col text-right">
                        <div class="ace-nav-container ace-container hidden-sm hidden-xs">
                            <nav id="ace-main-nav">
                                <ul class="clear-list">
                                    <?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
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
                <a href="index.html" data-tooltip="Home"><img class="avatar avatar-42" src="img/uploads/avatar/avatar-42x42.png" alt=""></a>
            </li>
            <li>
                <a href="experience.html" data-tooltip="Experience"><span class="ace-icon ace-icon-experience"></span></a>
            </li>
            <li>
                <a href="portfolio.html" data-tooltip="Portfolio"><span class="ace-icon ace-icon-portfolio"></span></a>
            </li>
            <li>
                <a href="testimonials.html" data-tooltip="References"><span class="ace-icon ace-icon-references"></span></a>
            </li>
            <li>
                <a href="contact.html" data-tooltip="Contact"><span class="ace-icon ace-icon-contact"></span></a>
            </li>
            <li>
                <a href="category.html" data-tooltip="Blog"><span class="ace-icon ace-icon-blog"></span></a>
            </li>
        </ul>
    </nav>
    <article id="ace-card" class="ace-card bg-primary">
        <div class="ace-card-inner text-center">
            <img class="avatar avatar-195" src="img/uploads/avatar/avatar-195x195.png" width="195" height="195" alt="">
            <h1>Ola Lowe</h1>
            <p class="text-muted">Florist | Decorator</p>
            <ul class="ace-social clear-list">
                <li><a><span class="ace-icon ace-icon-facebook"></span></a></li>
                <li><a><span class="ace-icon ace-icon-twitter"></span></a></li>
                <li><a><span class="ace-icon ace-icon-google-plus"></span></a></li>
                <li><a><span class="ace-icon ace-icon-instagram"></span></a></li>
                <li><a><span class="ace-icon ace-icon-pinterest"></span></a></li>
            </ul>
        </div>

        <footer class="ace-card-footer">
            <a class="btn btn-lg btn-block btn-thin btn-upper " href="#">Download Resume</a>
        </footer>
    </article><!-- #ace-card -->

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

            <article class="ace-card bg-primary">
                <div class="ace-card-inner text-center">
                    <img class="avatar avatar-195" src="img/uploads/avatar/avatar-195x195.png" width="195" height="195" alt="">
                    <h1>Ola Lowe</h1>
                    <p class="text-muted">Florist | Decorator</p>
                    <ul class="ace-social clear-list">
                        <li><a><span class="ace-icon ace-icon-facebook"></span></a></li>
                        <li><a><span class="ace-icon ace-icon-twitter"></span></a></li>
                        <li><a><span class="ace-icon ace-icon-google-plus"></span></a></li>
                        <li><a><span class="ace-icon ace-icon-instagram"></span></a></li>
                        <li><a><span class="ace-icon ace-icon-pinterest"></span></a></li>
                    </ul>
                </div>
            </article><!-- #ace-card -->

            <aside class="widget-area">
                <section class="widget widget_search">
                    <form role="search" method="get" class="search-form" action="http://sc.chinaz.com/jiaoben/">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search" value="" name="s">
                        </label>
                        <button type="submit" class="search-submit">
                            <span class="screen-reader-text">Search</span>
                            <span class="ace-icon ace-icon-search"></span>
                        </button>
                    </form>
                </section>

                <section class="widget widget_posts_entries">
                    <h2 class="widget-title">popular posts</h2>
                    <ul>
                        <li>
                            <a class="post-image" href="">
                                <img src="http://noemi.px-lab.com/wp-content/uploads/2016/05/tttt-70x70.png" alt="">
                            </a>
                            <div class="post-content">
                                <h3>
                                    <a href="">contextual advertising</a>
                                </h3>
                            </div>
                            <div class="post-category-comment">
                                <a href="" class="post-category">Work</a>
                                <a href="" class="post-comments">256 comments</a>
                            </div>
                        </li>

                        <li>
                            <a class="post-image" href="">
                                <img src="http://noemi.px-lab.com/wp-content/uploads/2016/05/IMG_8945-1-70x70.jpg" alt="">
                            </a>
                            <div class="post-content">
                                <h3>
                                    <a href="">grilling tips for the dog days of summer</a>
                                </h3>
                            </div>
                            <div class="post-category-comment">
                                <a href="" class="post-category">Work</a>
                                <a href="" class="post-comments">256 comments</a>
                            </div>
                        </li>

                        <li>
                            <a class="post-image" href="">
                                <img src="http://noemi.px-lab.com/wp-content/uploads/2016/05/15-70x70.png" alt="">
                            </a>
                            <div class="post-content">
                                <h3><a href=""></a>branding do you know who are</h3>
                            </div>
                            <div class="post-category-comment">
                                <a href="" class="post-category">Work</a>
                                <a href="" class="post-comments">256 comments</a>
                            </div>
                        </li>
                    </ul>
                </section>

                <section id="tag_cloud-2" class="widget widget_tag_cloud">
                    <h2 class="widget-title">Tags</h2>
                    <div class="tagcloud">
                        <a href="http://sc.chinaz.com/jiaoben/tag/audios/" class="tag-link-5 tag-link-position-1" title="1 topic" style="font-size: 1em;">Audios</a>
                        <a href="" class="tag-link-7 tag-link-position-2" title="1 topic" style="font-size: 1em;">Freelance</a></div>
                </section>

                <section id="recent-posts-3" class="widget widget_recent_entries">
                    <h4 class="widget-title">Recent Posts</h4>
                    <ul>
                        <li>
                            <a href="">Global Travel And Vacations  Luxury Travel On A Tight  Budget</a>
                            <div class="post-category-comment">
                                <a href="" class="post-category">Photography</a>
                                <a href="" class="post-comments">256 comments</a>
                            </div>
                        </li>
                        <li>
                            <a href="">cooking for one</a>
                            <div class="post-category-comment">
                                <a href="" class="post-category">Work</a>
                                <a href="" class="post-comments">256 comments</a>
                            </div>
                        </li>
                        <li>
                            <a href="">An Ugly Myspace Profile Will  Sure Ruin Your Reputation</a>
                            <div class="post-category-comment">
                                <a href="" class="post-category">Photography</a>
                                <a href="" class="post-comments">256 comments</a>
                            </div>
                        </li>
                    </ul>
                </section>

                <section class="widget widget_categories">
                    <h4 class="widget-title">post categories</h4>
                    <ul>
                        <li class="cat-item"><a href="">Audios</a>5</li>
                        <li class="cat-item"><a href="">Daili Inspiration</a>2</li>
                        <li class="cat-item"><a href="">Freelance</a>27</li>
                        <li class="cat-item"><a href="">Links</a>5</li>
                        <li class="cat-item"><a href="">Mobile</a>2</li>
                        <li class="cat-item"><a href="">Phography</a>27</li>
                    </ul>
                </section>
            </aside>

        </div><!-- #ace-sidebar-inner -->
    </div><!-- #ace-sidebar -->