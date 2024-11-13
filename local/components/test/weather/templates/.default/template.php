<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

use Bitrix\Main\Localization\Loc;
use Bitrix\Tasks;
use Bitrix\Tasks\Integration\SocialNetwork;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);
$this->SetViewTarget("sidebar", 80);
$frame = $this->createFrame()->begin();
$this->addExternalCss(SITE_TEMPLATE_PATH."/css/sidebar.css");
?>

<div id='weather_widget' class="sidebar-widget sidebar-widget-tasks">
	<div class="sidebar-widget-top">
		<div class="sidebar-widget-top-title">
    		<?= (
    		    $arResult['WEATHER']['geo_object']['locality']['name']
    		    ? GetMessage("WEATHER_TITLE").$arResult['WEATHER']['geo_object']['locality']['name'] 
    		    : GetMessage("WIDGET_WEATHER_TITLE")
    		)?>
        </div>
	</div>
	<div class="sidebar-widget-item-wrap">
    	<div class="dflex flex-center">
        	<div class="icon">
        		<img src="https://yastatic.net/weather/i/icons/funky/dark/<?=$arResult['WEATHER']['fact']['icon']?>.svg" alt="" />
        	</div>
    	</div>
    	<div class="dflex flex-center mb-1">
    		<div class="text text-temp">
                <span>
                    <?=$arResult['WEATHER']['fact']['temp']?>˚C 
                    (<?=$arResult['WEATHER']['fact']['feels_like']?>˚C)
                </span>
    		</div>
    	</div>
    	<div class="dflex flex-center mb-1">
    		<div class="text text-wind">
        		<span>
            		ветер: <?=$arResult['WEATHER']['fact']['wind_dir']?> 
            		<?=$arResult['WEATHER']['fact']['wind_speed']?> м/с, 
            		до: <?=$arResult['WEATHER']['fact']['wind_gust']?> м/с
        		</span>
            </div>
    	</div>
    	<div class="dflex flex-center">
    		<div class="text text-pres">
        		<span>
        		    давление: <?=$arResult['WEATHER']['fact']['pressure_mm']?> мм рт.ст
        		</span>
    		</div>
    	</div>
	</div>
</div>

<?
$frame->end();
$this->EndViewTarget();
?>
