<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

use Bitrix\Main\Localization\Loc;
use Bitrix\Tasks;
use Bitrix\Tasks\Integration\SocialNetwork;

Loc::loadMessages(__FILE__);

/*
$this->setFrameMode(true);
$this->SetViewTarget("sidebar", 80);
$frame = $this->createFrame()->begin();
$this->addExternalCss(SITE_TEMPLATE_PATH."/css/sidebar.css");
*/
?>

<div class="sidebar-widget sidebar-widget-tasks">
	<div class="sidebar-widget-top">
		<div class="sidebar-widget-top-title"><?=GetMessage("WIDGET_WEATHER_TITLE")?></div>
		<a href="#" class="minus-icon"></a>
	</div>
	<div class="sidebar-widget-item-wrap">
		
		<?php //pre([$arResult["WEATHER"]]); //foreach ($arResult['ROLES'] as $role):?>
		<?
pre($arResult["WEATHER"]);

    		
    		
		?>
	</div>
</div>

<?
/*
$frame->end();
$this->EndViewTarget();
*/
?>
