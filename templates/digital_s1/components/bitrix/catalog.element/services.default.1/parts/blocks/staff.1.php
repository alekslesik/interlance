<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

/**
 * @var array $arParams
 * @var array $arResult
 * @var array $arBlock
 */

?>
<?php $APPLICATION->IncludeComponent(
	'intec.universe:main.staff', 
	'template.3', 
	[
		'IBLOCK_TYPE' => $arBlock['IBLOCK']['TYPE'],
		'IBLOCK_ID' => $arBlock['IBLOCK']['ID'],
		'SECTIONS' => [],
        'FILTER' => [
        	'ID' => $arBlock['IBLOCK']['ELEMENTS']
		],
		'ELEMENTS_COUNT' => '',
		'HEADER_SHOW' => 'Y',
		'HEADER_POSITION' => 'center',
		'HEADER_TEXT' => $arBlock['HEADER'],
		'DESCRIPTION_SHOW' => 'Y',
        'DESCRIPTION_POSITION' => 'center',
        'DESCRIPTION_TEXT' => $arBlock['DESCRIPTION'],
		'COLUMNS' => '2',
		'HIDING_USE' => 'Y',
		'HIDING_VISIBLE' => '2',
		'CACHE_TYPE' => 'N',
		'SORT_BY' => 'SORT',
		'ORDER_BY' => 'ASC'
	],
	$component
) ?>
