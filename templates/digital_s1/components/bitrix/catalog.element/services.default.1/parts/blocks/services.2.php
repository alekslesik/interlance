<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use intec\core\helpers\ArrayHelper;

/**
 * @var array $arParams
 * @var array $arResult
 * @var array $arBlock
 */

?>
<?php $APPLICATION->IncludeComponent(
	'intec.universe:main.services', 
	'template.14',
    ArrayHelper::merge($arBlock['PARAMETERS'], [
        'IBLOCK_TYPE' => $arBlock['IBLOCK']['TYPE'],
        'IBLOCK_ID' => $arBlock['IBLOCK']['ID'],
        'FILTER' => [
            'ID' => $arBlock['IBLOCK']['ELEMENTS']
        ],
        'HEADER_BLOCK_SHOW' => 'Y',
        'HEADER_BLOCK_POSITION' => 'center',
        'HEADER_BLOCK_TEXT' => $arBlock['HEADER'],
        'DESCRIPTION_BLOCK_SHOW' => 'N',
        'ELEMENTS_COUNT' => '',
        'MODE' => 'N',
        'SECTIONS' => null,
        'CACHE_TYPE' => 'N'
    ]),
	$component
) ?>