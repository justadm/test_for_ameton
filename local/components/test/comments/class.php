<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Disk\Uf\Integration\DiskUploaderController;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Security\Sign\Signer;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Web\Uri;

Loc::loadMessages(__FILE__);

final class CommentsList extends CBitrixComponent
{
	public function __construct($component = null)
	{
		parent::__construct($component);

		$this->sign = (new Signer());
	}

	public function parseTemplate(array $res, array $arParams, $template)
	{
		global $USER;

		//$todayString = ConvertTimeStamp();

		$replacement = array(
			"#ID#" =>
				$res["ID"],
			"#PARENT_ID#" =>
				$res["PARENT_ID"],
			"#DATE#" =>
			    $res["DATE"],
			"#AUTHOR#" =>
				$res["AUTHOR"],
			"#TEXT#" =>
			    str_replace(array("\001", "#"), array("", "\001"), $res["TEXT"]),
		);

		return str_replace(array_merge(array_keys($replacement), array("\001")), array_merge(array_values($replacement), array("#")), $template);
	}

	protected function prepareParams(array &$arParams)
	{
		$arParams["NEWS_ID"] = intval($arParams["NEWS_ID"]);
		$arParams["AVATAR_SIZE"] = ($arParams["AVATAR_SIZE"] > 0 ? $arParams["AVATAR_SIZE"] : 100);
		$arParams["DATE_TIME_FORMAT"] = trim($arParams["DATE_TIME_FORMAT"]);
	}

	protected function getComments(): int
	{
		include_once(__DIR__."/table.php");
		$this->arResult["ITEMS"] = [];

        return count($this->arResult["ITEMS"]);
	}

	public function executeComponent()
	{
		try
		{
			$this->prepareParams($this->arParams);
			$countComments = $this->getComments();

//			ob_start();
			$this->includeComponentTemplate();
//			$output = ob_get_clean();

		}
		catch (\Exception $e)
		{
    		$this->arResult['ERRORS'][] = [
				"status" => "error",
				"message" => $e->getMessage()
    		];
			$this->includeComponentTemplate();
			$this->sendJsonResponse(array(
				"status" => "error",
				"message" => $e->getMessage()
			));
		}
	}

	protected function sendJsonResponse($response)
	{
		$this->getApplication()->restartBuffer();
		while (ob_end_clean());
		header('Content-Type:application/json; charset=UTF-8');
		/** @noinspection PhpUndefinedClassInspection */
		\CMain::finalActions(Json::encode($response));
	}

	protected function getApplication()
	{
		global $APPLICATION;
		return $APPLICATION;
	}

	protected function getUser()
	{
		global $USER;
		return $USER;
	}

	protected function getUserId()
	{
		static $userId = null;
		if (is_null($userId))
		{
			$userId = 0;

			global $USER;
			if (($USER instanceof \CUser) && $USER->IsAuthorized())
			{
				$userId = $USER->GetID();
			}
		}
		return $userId;
	}

}
