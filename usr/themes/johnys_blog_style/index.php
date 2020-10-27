<?php
/**
 * Johny's Blog 蓝色风格主题皮肤
 * @package disigner by henrick
 * @author henrick
 * @version 1.0
 * @link https://johnyzone.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="page">
    <div class="page-content">

        <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
                <div class="header-photo">
                    <img src="<?php $this->options->themeUrl('img/main_photo.jpg')?>" alt="Alex Smith">
                </div>
                <div class="header-titles">
                    <h2>Johny He</h2>
                    <h4>Web全栈工程师</h4>
                </div>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">首页</span>
                    </a>
                </li>
                <li>
                    <a href="#about-me" class="nav-anim">
                        <span class="menu-icon lnr lnr-user"></span>
                        <span class="link-text">关于我</span>
                    </a>
                </li>
                <li>
                    <a href="#resume" class="nav-anim">
                        <span class="menu-icon lnr lnr-graduation-hat"></span>
                        <span class="link-text">简历</span>
                    </a>
                </li>
                <li style="display: none;">
                    <a href="#portfolio" class="nav-anim">
                        <span class="menu-icon lnr lnr-briefcase"></span>
                        <span class="link-text">项目</span>
                    </a>
                </li>
                <li>
                    <a href="#blog" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">博客</span>
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-anim">
                        <span class="menu-icon lnr lnr-envelope"></span>
                        <span class="link-text">联系我</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    <li><a href="#" target="_blank"><i class="fab fa-github"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-weixin"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-weibo"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>

            <div class="header-buttons">
                <a href="#" target="_blank" class="btn btn-primary">简历下载</a>
            </div>

            <div class="copyrights">
                copyright &copy; 2012 ~ <?php echo date('Y'); ?> All rights reserved.<br >
                <?php _e('基于<a href="http://www.typecho.org">Typecho</a>驱动二次开发'); ?>.
            </div>
        </header>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>
        <!-- End Arrows Nav -->

        <div class="content-area">
            <div class="animated-sections">
                <!-- Home Subpage -->
                <section data-id="home" class="animated-section start-page">
                    <div class="section-content vcentered">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <h2>Johny He</h2>
                                    <div class="owl-carousel text-rotation">
                                        <div class="item">
                                            <div class="sp-subtitle">Web前端工程师</div>
                                        </div>
                                        <div class="item">
                                            <div class="sp-subtitle">PHP工程师</div>
                                        </div>
                                        <div class="item">
                                            <div class="sp-subtitle">会做一点设计的程序猿</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section data-id="about-me" class="animated-section">
                    <div class="page-title">
                        <h2>About <span>Me</span></h2>
                    </div>

                    <div class="section-content">
                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <p style="line-height: 32px;text-indent: 30px;">
                                    目前在深圳从业，专职从事web研发工作已有<?php echo date("Y")-2013; ?>年之久，现就职于深圳市微拍档网络有限公司，担任PHP工程师（P5），主要负责公司大项目的技术选型、工期评估、新员工技术培训及研发团队管理。目前主要负责的项目有深圳市赤湾东方供应链系统、深圳市人才安居租赁系统等，积累了大量的企业信息化系统解决方案及项目实施工作经验。
                                </p>
                            </div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="info-list">
                                    <ul>
                                        <li>
                                            <span class="title">姓名</span>
                                            <span class="value">何金民 (Johny He)</span>
                                        </li>
                                        <li>
                                            <span class="title">职业</span>
                                            <span class="value">PHP工程师</span>
                                        </li>
                                        <li>
                                            <span class="title">公司</span>
                                            <span class="value">深圳市微拍档网络有限公司</span>
                                        </li>

                                        <li>
                                            <span class="title">地址</span>
                                            <span class="value">深圳市南山区琼宇路特发信息科技大厦</span>
                                        </li>

                                        <li>
                                            <span class="title">e-mail</span>
                                            <span class="value">
                                                henrick@vip.qq.com
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Personal Information -->

                        <div class="white-space-50"></div>

                        <!-- Services -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>能力 <span>范围</span></h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-laptop-phone"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Web前端能力</h4>
                                                <p style="line-height: 32px;text-indent: 30px;">
                                                    熟练应用基于html5、javascript、css3、vuejs等前端技术进行页面组件模块化封装及应用，熟悉对第三方CSS预处理Saas、Webpack打包工具的使用。了解node及express框架的开发流程。
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-flag"></i>
                                            </div><div class="ci-text">
                                                <h4>项目管理能力</h4>
                                                <p style="line-height: 32px;text-indent: 30px;">
                                                    通过各类大项目的实施，在项目研发的过程中积累学习了项目管理能力，如何合理快速的进行迭代开发及人才培养有自己摸索出来的一套管理方案，同时不断优化及敏捷迭代项目技术解决方案。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="col-inner">
                                    <div class="info-list-w-icon">
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-earth"></i>
                                            </div>
                                            <div class="ci-text">
                                                <h4>Web后端能力</h4>
                                                <p style="line-height: 32px;text-indent: 30px;">
                                                    熟练应用基于PHP、Mysql、Redis等后端技术进行各类系统的研发工作，有PHP数据结构、面向对象的（封装、多态、集成、抽象）、socket编程等项目实施经验，熟悉Yii2、CI、TP等框架的使用。
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info-block-w-icon">
                                            <div class="ci-icon">
                                                <i class="lnr lnr-star"></i>
                                            </div><div class="ci-text">
                                                <h4>学习能力</h4>
                                                <p style="line-height: 32px;text-indent: 30px;">
                                                    业余时间不断关注业内的技术及管理资讯，对新技术、新架构、新思维保持与时俱进的步伐，同时通过小实验实践从中验证新的技术的可行性及定位该技术运用的哪些场景的合同理性。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Services -->

                        <div class="white-space-30"></div>

                        <!-- Testimonials -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>好友评价</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="testimonials owl-carousel">
                                    <!-- Testimonial 1 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="<?php $this->options->themeUrl('img/testimonials/testimonial-1.jpg')?>" alt="Alex Smith">
                                        </div>
                                        <div class="text">
                                            <p>可以自己设计产品、自己研发，全能型人才。</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Aaron Wu</h4>
                                            <h5 class="company">大学童鞋</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 1 -->

                                    <!-- Testimonial 2 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="<?php $this->options->themeUrl('img/testimonials/testimonial-2.jpg')?>" alt="Alex Smith">
                                        </div>
                                        <div class="text">
                                            <p>火眼金睛，一看就知道问题所在，技术能力也很强。</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Pony Li</h4>
                                            <h5 class="company">同事</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 2 -->

                                    <!-- Testimonial 3 -->
                                    <div class="testimonial">
                                        <div class="img">
                                            <img src="<?php $this->options->themeUrl('img/testimonials/testimonial-3.jpg')?>" alt="Alex Smith">
                                        </div>
                                        <div class="text">
                                            <p>热心并且有耐心，人品不错</p>
                                        </div>

                                        <div class="author-info">
                                            <h4 class="author">Kristin Yang</h4>
                                            <h5 class="company">网友</h5>
                                            <div class="icon">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Testimonial 3 -->
                                </div>
                            </div>
                        </div>
                        <!-- End of Testimonials -->

                    </div>
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section data-id="resume" class="animated-section">
                    <div class="page-title">
                        <h2>简历</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <div class="col-xs-12 col-sm-7">

                                <div class="block-title">
                                    <h3>教育经历</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2012-09</h5>
                                            <span class="item-company">江西信息应用职业技术学院</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">计算机网络技术</h4>
                                            <p>在校区间曾获过：江西省网页技术大赛三等奖、学院Office大赛中一等奖、学院大学生职业生涯规划赛三等奖等</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2009-09</h5>
                                            <span class="item-company">宁都县第六中学</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">高中部</h4>
                                            <p>在校区间曾获过：校园歌手大赛第二名</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="white-space-50"></div>

                                <div class="block-title">
                                    <h3>工作经历</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2014 - 至今</h5>
                                            <span class="item-company">微拍档</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">PHP技术负责人</h4>
                                            <p>主要负责公司大型项目的研发、管理及后续公司新员工的招聘及培训工作，配合产品经理的需求评估、实施周期及需求可行性的解答，确保项目如期高效的进行</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2013 - 2014</h5>
                                            <span class="item-company">腾讯</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">IEG工具研发组</h4>
                                            <p>负责内部系统的研发及缺陷修复工作</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">2011 - 2013</h5>
                                            <span class="item-company">南昌起源科技</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">PHP程序员</h4>
                                            <p>实习期主要负责国外商城的页面bug修复及小项目的实施</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Skills & Certificates -->
                            <div class="col-xs-12 col-sm-5">
                                <!-- Design Skills -->
                                <div class="block-title">
                                    <h3>技术能力</h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill 1 -->
                                    <div class="skill clearfix">
                                        <h4>PHP</h4>
                                        <div class="skill-value">95%</div>
                                    </div>
                                    <div class="skill-container skill-1">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 1 -->

                                    <!-- Skill 2 -->
                                    <div class="skill clearfix">
                                        <h4>Javascript</h4>
                                        <div class="skill-value">95%</div>
                                    </div>
                                    <div class="skill-container skill-2">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 2 -->

                                    <!-- Skill 3 -->
                                    <div class="skill clearfix">
                                        <h4>HTML/CSS</h4>
                                        <div class="skill-value">95%</div>
                                    </div>
                                    <div class="skill-container skill-3">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 3 -->

                                    <!-- Skill 4 -->
                                    <div class="skill clearfix">
                                        <h4>NodeJs</h4>
                                        <div class="skill-value">60%</div>
                                    </div>
                                    <div class="skill-container skill-4">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 4 -->

                                </div>
                                <!-- End of Design Skills -->

                                <div class="white-space-10"></div>

                                <!-- Coding Skills -->
                                <div class="block-title">
                                    <h3>开源框架</h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill 5 -->
                                    <div class="skill clearfix">
                                        <h4>Yii2</h4>
                                        <div class="skill-value">95%</div>
                                    </div>
                                    <div class="skill-container skill-5">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 5 -->

                                    <!-- Skill 6 -->
                                    <div class="skill clearfix">
                                        <h4>ThinkPHP</h4>
                                        <div class="skill-value">85%</div>
                                    </div>
                                    <div class="skill-container skill-6">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 6 -->

                                    <!-- Skill 7 -->
                                    <div class="skill clearfix">
                                        <h4>CI</h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-7">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 7 -->

                                    <!-- Skill 8 -->
                                    <div class="skill clearfix">
                                        <h4>VueJS</h4>
                                        <div class="skill-value">75%</div>
                                    </div>
                                    <div class="skill-container skill-8">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 8 -->

                                    <!-- Skill 9 -->
                                    <div class="skill clearfix">
                                        <h4>小程序</h4>
                                        <div class="skill-value">90%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 9 -->
                                </div>
                                <!-- End of Coding Skills -->

                        </div>
                    </div>
                </section>
                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <section data-id="portfolio" class="animated-section">
                    <div class="page-title">
                        <h2>项目</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <!-- Portfolio Content -->
                                <div class="portfolio-content">

                                    <ul class="portfolio-filters">
                                        <li class="active">
                                            <a class="filter btn btn-sm btn-link" data-group="category_all">全部</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_detailed">系统类</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">商城类</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">小程序</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">移动端</a>
                                        </li>
                                    </ul>

                                    <!-- Portfolio Grid -->
                                    <div class="portfolio-grid three-columns">

                                        <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="<?php $this->options->themeUrl('img/portfolio/1.jpg');?>" alt="SoundCloud Audio" title="" />
                                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                                            </div>

                                            <i class="fa fa-volume-up"></i>
                                            <h4 class="name">SoundCloud Audio</h4>
                                            <span class="category">SoundCloud</span>
                                        </figure>

                                        <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                                            <div class="portfolio-item-img">
                                                <img src="<?php $this->options->themeUrl('img/portfolio/2.jpg')?>" alt="Media Project 2" title="" />
                                                <a href="portfolio-1.html" class="ajax-page-load"></a>
                                            </div>

                                            <i class="far fa-file-alt"></i>
                                            <h4 class="name">Detailed Project 2</h4>
                                            <span class="category">Detailed</span>
                                        </figure>

                                        <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                                            <div class="portfolio-item-img">
                                                <img src="<?php $this->options->themeUrl('img/portfolio/3.jpg') ?>" alt="Vimeo Video 1" title="" />
                                                <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                                            </div>

                                            <i class="fas fa-video"></i>
                                            <h4 class="name">Vimeo Video 1</h4>
                                            <span class="category">Vimeo Videos</span>
                                        </figure>

                                        <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                                            <div class="portfolio-item-img">
                                                <img src="<?php $this->options->themeUrl('img/portfolio/4.jpg') ?>" alt="Media Project 1" title="" />
                                                <a href="portfolio-1.html" class="ajax-page-load"></a>
                                            </div>

                                            <i class="far fa-file-alt"></i>
                                            <h4 class="name">Detailed Project 1</h4>
                                            <span class="category">Detailed</span>
                                        </figure>

                                        <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                                            <div class="portfolio-item-img">
                                                <img src="<?php $this->options->themeUrl('img/portfolio/5.jpg') ?>" alt="Mockup Design 1" title="" />
                                                <a class="lightbox" title="Mockup Design 1" href="img/portfolio/full/5.jpg"></a>
                                            </div>

                                            <i class="far fa-image"></i>
                                            <h4 class="name">Mockup Design 1</h4>
                                            <span class="category">Mockups</span>
                                        </figure>

                                        <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                                            <div class="portfolio-item-img">
                                                <img src="<?php $this->options->themeUrl('img/portfolio/6.jpg') ?>" alt="YouTube Video 1" title="" />
                                                <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                                            </div>

                                            <i class="fas fa-video"></i>
                                            <h4 class="name">YouTube Video 1</h4>
                                            <span class="category">YouTube Videos</span>
                                        </figure>
                                    </div>
                                </div>
                                <!-- End of Portfolio Content -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section data-id="blog" class="animated-section">
                    <div class="page-title">
                        <h2>博客</h2>
                    </div>

                    <div class="section-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="blog-masonry two-columns clearfix">

                                    <!-- Blog Post 1 -->
                                    <div class="item post-1">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <div class="category">
                                                    <a href="#" title="View all posts in Design">PHP技术</a>
                                                </div>
                                                <a href="blog-post-1.html">
                                                    <img src="<?php $this->options->themeUrl('img/blog/blog_post_1.jpg')?>" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">2020-10-27 11:42</div>
                                                <a href="blog-post-1.html">
                                                    <h4 class="blog-item-title">PHP如何进行内存的优化呢</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Blog Post 1 -->
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
                <!-- End of Blog Subpage -->

                <!-- Contact Subpage -->
                <section data-id="contact" class="animated-section">
                    <div class="page-title">
                        <h2>联系我</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <!-- Contact Info -->
                            <div class="col-xs-12 col-sm-4">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-map-marker"></i>
                                    <h4>广东 深圳</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-envelope"></i>
                                    <h4><a href="" class="__cf_email__" >henrick@vip.qq.com</a></h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>


                            </div>
                            <!-- End of Contact Info -->

                            <!-- Contact Form -->
                            <div class="col-xs-12 col-sm-8">
                                <div class="block-title">
                                    <h3>合作、建议、意见</h3>
                                </div>

                                <form id="contact_form" class="contact-form" action="contact_form/contact_form.php.json" method="post">

                                    <div class="messages"></div>

                                    <div class="controls two-columns">
                                        <div class="fields clearfix">
                                            <div class="left-column">
                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="不能空">
                                                    <label>您的名字</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="不能空">
                                                    <label>您的邮箱</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="">
                                                    <label>主题</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="right-column">
                                                <div class="form-group form-group-with-icon">
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="内容不能为空."></textarea>
                                                    <label>内容</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>

                                        <input type="submit" class="button btn-send" value="提交表单">
                                    </div>
                                </form>
                            </div>
                            <!-- End of Contact Form -->
                        </div>

                    </div>
                </section>
                <!-- End of Contact Subpage -->
            </div>
        </div>

    </div>
</div>
<?php $this->need('footer.php'); ?>
