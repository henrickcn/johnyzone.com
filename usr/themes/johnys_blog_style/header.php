<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="henrick" />
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico')?>">


    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/reset.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap-grid.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/animations.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/perfect-scrollbar.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/owl.carousel.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/magnific-popup.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css')?>" type="text/css">

    <script src="<?php $this->options->themeUrl('js/modernizr.custom.js')?>"></script>
</head>

<body>

<!-- Animated Background -->
<div class="lm-animated-bg" style="background-image: url(<?php $this->options->themeUrl('img/main_bg.png')?>);"></div>
<!-- /Animated Background -->
<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->