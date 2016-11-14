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
        <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?><br>

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
        <?$APPLICATION->IncludeComponent("bitrix:photo.section", "slide", Array(
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем фотографии
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки фотографий в разделе
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"IBLOCK_ID" => "7",	// Инфоблок
		"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"LINE_ELEMENT_COUNT" => "3",	// Количество фотографий, выводимых в одной строке таблицы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Фотографии",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "20",	// Количество элементов на странице
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "",
		),
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
	),
	false
);?><br>

    </div>
</div>
