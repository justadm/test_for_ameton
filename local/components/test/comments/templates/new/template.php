<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var CMain $APPLICATION
 * @var CUser $USER
 * @global CDatabase $DB
 * @var array $arParams
 * @var array $arResult
*/

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

pre($arResult);