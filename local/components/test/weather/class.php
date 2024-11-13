<?
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Type\Date;
use Bitrix\Main\Type\DateTime;
use Bitrix\Main\Error;
use Bitrix\Main\ErrorCollection;
use Bitrix\Intranet\Integration\Timeman\Worktime;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

class WeatherComponent extends CBitrixComponent implements \Bitrix\Main\Engine\Contract\Controllerable, \Bitrix\Main\Errorable
{
    private const ACCESS_KEY = 'demo_yandex_weather_api_key_ca6d09349ba0';//'40d299a4-49f2-46e9-a1a6-b08761633f40';

	private $lat;
	private $lon;

	protected $errorCollection;

	public function __construct($component = null)
	{
		$this->errorCollection = new ErrorCollection();

		parent::__construct($component);
	}

	public function onPrepareComponentParams($arParams)
	{
		if (!isset($this->arParams["PATH_TO_USER"]))
		{
			$arParams['PATH_TO_USER'] = SITE_DIR."company/personal/user/#user_id#/";
		}

		return parent::onPrepareComponentParams($arParams);
	}

	protected function listKeysSignedParameters()
	{
		return array();
	}

	public function getErrorByCode($code)
	{
		return $this->errorCollection->getErrorByCode($code);
	}

	public function configureActions()
	{
		return array();
	}

	public function getErrors()
	{
		return $this->errorCollection->toArray();
	}

	private function getWeather()
	{
        $opts = array(
          'http' => array(
            'method' => 'GET',
            'header' => 'X-Yandex-Weather-Key: ' . self::ACCESS_KEY
          )
        );
        
        $context = stream_context_create($opts);
        
        $result = file_get_contents('https://api.weather.yandex.ru/v2/forecast?lat=51.69295885005825&lon=39.145095826994634', false, $context);


		return json_decode($result, true);
	}


	public function executeComponent(): void
	{
		if (!$this->checkModules())
		{
			$this->showErrors();

			return;
		}

		$this->arResult["WEATHER"] = $this->getWeather();

		$this->includeComponentTemplate();

		return;
	}


	/* utils functions */

	protected function checkModules(): bool
	{
		if (!Loader::includeModule('pull'))
		{
			$this->errors[] = Loc::getMessage('INTRANET_USTAT_ONLINE_COMPONENT_MODULE_NOT_INSTALLED');

			return false;
		}

		return true;
	}

	protected function hasErrors(): bool
	{
		return (count($this->errors) > 0);
	}

	protected function showErrors(): void
	{
		if (count($this->errors) <= 0)
		{
			return;
		}

		foreach ($this->errors as $error)
		{
			ShowError($error);
		}

		return;
	}
}