<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

use Vogood\Statistics\General;

/**
 * Class StatisticsCalculationComponent
 */
class StatisticsCalculationComponent extends CBitrixComponent{

	public $arParams = array();
	protected $needModules = array('iblock');
	protected $arrFilter = array();

	/*
	 * Prepare parameters
	 *
	 * @param array $arParams
	 * @return array
	 */
	public function onPrepareComponentParams($arParams){
		global $USER;

		if(!isset($arParams['CACHE_TIME']))
			$arParams['CACHE_TIME'] = 36000000;

		return $arParams;
	}

	

	protected function checkModules(){
		if(!empty($this->needModules)){
			foreach($this->needModules as $module){
				if(!CModule::IncludeModule($module)){
					throw new \Bitrix\Main\LoaderException('Module '.$module.' is not found');
				}
			}
		}
	}

	public function executeComponent(){
		global $USER, $APPLICATION;

		try{
			$this->checkModules();
		}catch(\Exception $e){
			//echo $e->getMessage();
			return;
		}

		if($this->StartResultCache(false, array($this->arrFilter, CDBResult::NavStringForCache($this->arParams['PAGE_ELEMENT_COUNT']), ($this->arParams['CACHE_GROUPS']==='N'? false: $USER->GetGroups()))))
		{
			global $CACHE_MANAGER;
			$this->IncludeComponentTemplate();
		}
	}

}