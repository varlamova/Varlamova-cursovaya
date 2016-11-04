<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 03.11.2016
 * Time: 22:03
 */
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/reset.css");?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/style.css");?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/slider.css");?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/skin.css");?>
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/jquery-1.7.min.js", true);?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.easing.1.3.js", true);?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/tms-0.4.1.js", true);?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.jcarousel.min.js", true);?>
    <script>
        $(document).ready(function(){
            $('.slider')._TMS({
                show:0,
                pauseOnHover:false,
                prevBu:false,
                nextBu:false,
                playBu:false,
                duration:700,
                preset:'fade',
                pagination:'.pags',
                pagNums:false,
                slideshow:7000,
                numStatus:false,
                banners:false,// fromLeft, fromRight, fromTop, fromBottom
                waitBannerAnimation:false,
                progressBar:false
            })
            jQuery('#mycarousel').jcarousel({
                horisontal: true,
                wrap:'circular',
                scroll:1,
                easing:'easeInOutBack',
                animation:1200
            });
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."/_include/js/html5.js", true);?>

    <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."/_include/css/ie.css");?>
    <![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!--==============================header=================================-->
<div class="header">
    <div>
        <div class="nav">
            <nav>
                <ul class="menu">
                    <li class="current li-none"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="li-left li-none"><a href="services.html">Services</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                </ul>
            </nav>
        </div>
        <header>
            <h1><a href="index.html">
                    <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                            )
                        );?>
                        <?if(!CSite::InDir('/')):?></a><?endif;?>
                </a></h1>
        </header>
        <div id="slide">
            <div class="slider">
                <ul class="items">
                    <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide-11.jpg" alt="" /></li>
                    <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide-22.jpg" alt="" /></li>
                    <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide-33.jpg" alt="" /></li>
                    <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide-44.jpg" alt="" /></li>
                    <li><img src="<?=SITE_TEMPLATE_PATH;?>/images/slide-55.jpg" alt="" /></li>
                </ul>
            </div>
            <ul class="pags">
                <li><a href="#"><strong>0</strong>1</a></li>
                <li><a href="#"><strong>0</strong>2</a></li>
                <li><a href="#"><strong>0</strong>3</a></li>
                <li><a href="#"><strong>0</strong>4</a></li>
                <li><a href="#"><strong>0</strong>5</a></li>
            </ul>
        </div>
    </div>
</div>
