<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 03.11.2016
 * Time: 22:03
 */
?>
<footer>
        <div class="container_12">
                <div class="wrapper">
                        <div class="grid_8">
                                Varlamova Nadezhda &copy; <? echo (date("Y ")); ?> &nbsp;  | &nbsp;   <?$APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    Array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => SITE_TEMPLATE_PATH."/include_areas/telephon.php"
                                    )
                                );?>
                        </div>
                        <div class="grid_4">
                                <div class="social">
                                        My Social:<a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/facebook.png" alt=""></a><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/images/twitter.png" alt=""></a>
                                </div>
                        </div>
                </div>
        </div>
</footer>
</body>
</html>
