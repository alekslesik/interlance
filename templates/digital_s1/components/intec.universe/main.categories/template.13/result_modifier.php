<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use intec\core\helpers\ArrayHelper;

/**
 * @var array $arResult
 * @var array $arParams
 */

$arParams = ArrayHelper::merge([
    'PROPERTY_LINK' => null,
    'COLUMNS' => 3,
    'WIDE' => 'N',
    'PREVIEW_SHOW' => 'N',
    'LINK_USE' => 'N',
    'LINK_BLANK' => 'N',
], $arParams);

$arVisual = [
    'COLUMNS' => ArrayHelper::fromRange([3, 4], $arParams['COLUMNS']),
    'WIDE' => $arParams['WIDE'] === 'Y',
    'PREVIEW' => [
        'SHOW' => $arParams['PREVIEW_SHOW'] === 'Y'
    ],
    'LINK' => [
        'USE' => $arParams['LINK_USE'] === 'Y',
        'BLANK' => $arParams['LINK_BLANK'] === 'Y'
    ]
];

$arResult['VISUAL'] = $arVisual;

unset($arVisual);