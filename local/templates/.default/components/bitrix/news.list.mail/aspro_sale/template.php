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
//$this->setFrameMode(true);

$itemIdList = array();
foreach($arResult["ITEMS"] as $item)
{
	$itemIdList[] = $item['ID'];
}
\Bitrix\Main\Mail\EventMessageThemeCompiler::includeComponent(
	"bitrix:catalog.show.products.mail",
	"aspro_sale",
	Array(
		"LIST_ITEM_ID" => $itemIdList,
		"SITE_ADDRESS" => $arParams["SITE_ADDRESS"],
		"THEME_COLOR" => $arParams["THEME_COLOR"],
		"SALE_PAGE" => $arParams["SALE_PAGE"],
		"SHOW_SALE" => $arParams["SHOW_SALE"],
	)
);