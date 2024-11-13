<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
CUtil::InitJSCore(['fx', 'ui.fonts.opensans']);
?>
<div class="col-12 news_detail<?=$themeClass?>">
	<div class="mb-3" id="<?echo $this->GetEditAreaId($arResult['ID'])?>">

    	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
        	<div class="row flex-nowrap justify-content-between align-items-center">
        		<div class="col-3 news-detail-date text-success"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></div>
        		<div class="col-3 news-detail-date text-right"><a class="text-success" href="<?=$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"]?>"><?=GetMessage("T_NEWS_DETAIL_BACK")?></a></div>
            </div>
    	<?endif?>

		<div class="news-detail-body">

			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<h1 class="news_title text-center"><?=$arResult["NAME"]?></h1>
			<?endif;?>

			<div class="news-detail-content my-4">
				<?if($arResult["NAV_RESULT"]):?>
					<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
					<?echo $arResult["NAV_TEXT"];?>
					<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
				<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
					<?echo $arResult["DETAIL_TEXT"];?>
				<?else:?>
					<?echo $arResult["PREVIEW_TEXT"];?>
				<?endif?>
			</div>

		</div>

	</div>
</div>
