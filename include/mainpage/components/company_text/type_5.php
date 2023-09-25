<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?global $arRegion?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"front_company", 
	array(
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"IBLOCK_TYPE" => "aspro_max_content",
		"IBLOCK_ID" => "14",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "URL",
			2 => "IMG4",
			3 => "LINK_BENEFIT1",
			4 => "VIDEO",
			5 => "VIDEO_SRC",
			6 => "VIDEO_SOURCE",
			7 => "COMPANY_NAME",
			8 => "COMPANY_TEXT",
			9 => "",
		),
		"DETAIL_URL" => "",
		"SECTION_URL" => "",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DISPLAY_PANEL" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"USE_PERMISSIONS" => "N",
		"GROUP_PERMISSIONS" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_SHOW_ALL" => "Y",
		"CHECK_DATES" => "N",
		"ELEMENT_ID" => "",
		"ELEMENT_CODE" => "front_company_item",
		"IBLOCK_URL" => "",
		"COUNT_BENEFIT" => "3",
		"BENEFIT_COL" => "3",
		"COMPONENT_TEMPLATE" => "front_company",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"SHOW_ALL_TITLE" => "",
		"MORE_BUTTON_TITLE" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"TYPE_IMG" => "sm",
		"TIZERS_IBLOCK_ID" => "12",
		"TYPE_BLOCK" => "type2",
		"MESSAGE_404" => "",
		"FILTER_NAME" => "arRegionLink",
		"REGION" => $arRegion
	),
	false
);?>