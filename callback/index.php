<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратный звонок");
?><?$APPLICATION->IncludeComponent(
	"bitrix:callback.form", 
	".default", 
	array(
		"IBLOCK_ID" => "13",
		"COMPONENT_TEMPLATE" => ".default",
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>