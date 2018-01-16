<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		'DISPLAY_STORE_VISITS' => array(
			"PARENT" => "DATA_SOURCE",
			"SORT" => 100,
			"NAME" => GetMessage("STATISTICS_COUNTER_STORE_VISITS"),
			"TYPE" => "STRING",
			"DEFAULT" => "Y"
		),
		'DISPLAY_PRODUCT_VIEWS' => array(
			"PARENT" => "DATA_SOURCE",
			"SORT" => 200,
			"NAME" => GetMessage("STATISTICS_COUNTER_PRODUCT_VIEWS"),
			"TYPE" => "STRING",
			"DEFAULT" => "Y"
		),
		'DISPLAY_SITE_TRANSITIONS' => array(
			"PARENT" => "DATA_SOURCE",
			"SORT" => 400,
			"NAME" => GetMessage("STATISTICS_COUNTER_SITE_TRANSITIONS"),
			"TYPE" => "STRING",
			"DEFAULT" => "Y"
		),
		'CITY_CODE'	=> array(
			"PARENT" => "DATA_SOURCE",
			"SORT" => 500,
			"NAME" => GetMessage("STATISTICS_COUNTER_CITY_CODE"),
			"TYPE" => "STRING"
		),
		"CACHE_TIME"  => array("DEFAULT" => 600),
	)
);

