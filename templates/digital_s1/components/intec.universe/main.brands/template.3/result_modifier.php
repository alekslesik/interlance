<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die() ?>
<?php

use intec\core\helpers\ArrayHelper;
use intec\core\helpers\StringHelper;
use intec\core\helpers\Type;

/**
 * @var array $arResult
 * @var array $arParams
 */

$arParams = ArrayHelper::merge([
    'LINE_COUNT' => 4,
    'ALIGNMENT' => 'center',
    'TRANSPARENCY' => 0,
    'EFFECT' => 'zoom',
    'LINK_USE' => 'Y',
    'LINK_BLANK' => 'N',
    'SLIDER_USE' => 'Y',
    'SLIDER_LOOP' => 'N',
    'SLIDER_DOTS' => 'Y',
    'SLIDER_NAVIGATION' => 'Y',
    'SLIDER_AUTO_USE' => 'N',
    'SLIDER_AUTO_PAUSE' => 'N',
    'SLIDER_AUTO_SPEED' => 500,
    'SLIDER_AUTO_TIME' => 5000,
    'FOOTER_SHOW' => 'N',
    'FOOTER_POSITION' => 'center',
    'FOOTER_BUTTON_SHOW' => 'N',
    'FOOTER_BUTTON_TEXT' => null
], $arParams);

$arMacros = [
    'SITE_DIR' => SITE_DIR
];

$arResult['BLOCKS']['FOOTER'] = [
    'SHOW' => $arParams['FOOTER_SHOW'] === 'Y',
    'POSITION' => ArrayHelper::fromRange([
        'left',
        'center',
        'right'
    ], $arParams['FOOTER_POSITION']),
    'BUTTON' => [
        'SHOW' => $arParams['FOOTER_BUTTON_SHOW'] === 'Y',
        'TEXT' => $arParams['FOOTER_BUTTON_TEXT'],
        'LINK' => null
    ]
];

if (!empty($arParams['LIST_PAGE_URL']))
    $arResult['BLOCKS']['FOOTER']['BUTTON']['LINK'] = StringHelper::replaceMacros(
        $arParams['LIST_PAGE_URL'],
        $arMacros
    );

if (
    empty($arResult['BLOCKS']['FOOTER']['BUTTON']['TEXT']) ||
    empty($arResult['BLOCKS']['FOOTER']['BUTTON']['LINK'])
) $arResult['BLOCKS']['FOOTER']['BUTTON']['SHOW'] = false;

if (!$arResult['BLOCKS']['FOOTER']['BUTTON']['SHOW'])
    $arResult['BLOCKS']['FOOTER']['SHOW'] = false;

$arResult['VISUAL']['COLUMNS'] = ArrayHelper::fromRange([3, 4, 5], $arParams['LINE_COUNT']);
$arResult['VISUAL']['ALIGNMENT'] = ArrayHelper::fromRange([
    'center',
    'left',
    'right'
], $arParams['ALIGNMENT']);

$arResult['VISUAL']['EFFECT'] = ArrayHelper::fromRange([
    'none',
    'blur',
    'brightness',
    'grayscale',
    'sepia',
    'zoom'
], $arParams['EFFECT']);

$arResult['VISUAL']['LINK'] = [
    'USE' => $arParams['LINK_USE'] === 'Y',
    'BLANK' => $arParams['LINK_BLANK'] === 'Y'
];

$arResult['VISUAL']['SLIDER'] = [
    'USE' => $arParams['SLIDER_USE'] === 'Y',
    'LOOP' => $arParams['SLIDER_LOOP'] === 'Y',
    'DOTS' => $arParams['SLIDER_DOTS'] === 'Y',
    'NAVIGATION' => $arParams['SLIDER_NAVIGATION'] === 'Y',
    'AUTO' => [
        'USE' => $arParams['SLIDER_AUTO_USE'] === 'Y',
        'SPEED' => Type::toInteger($arParams['SLIDER_AUTO_SPEED']),
        'TIME' => Type::toInteger($arParams['SLIDER_AUTO_TIME']),
        'PAUSE' => $arParams['SLIDER_AUTO_PAUSE'] === 'Y'
    ]
];

$arResult['VISUAL']['TRANSPARENCY'] = Type::toInteger($arParams['TRANSPARENCY']);

if ($arResult['VISUAL']['ALIGNMENT'] === 'left')
    $arResult['VISUAL']['ALIGNMENT'] = 'start';

if ($arResult['VISUAL']['ALIGNMENT'] === 'right')
    $arResult['VISUAL']['ALIGNMENT'] = 'end';

if ($arResult['VISUAL']['SLIDER']['AUTO']['SPEED'] < 100)
    $arResult['VISUAL']['SLIDER']['AUTO']['SPEED'] = 100;

if ($arResult['VISUAL']['SLIDER']['AUTO']['TIME'] < 100)
    $arResult['VISUAL']['SLIDER']['AUTO']['TIME'] = 100;

if ($arResult['VISUAL']['TRANSPARENCY'] > 100)
    $arResult['VISUAL']['TRANSPARENCY'] = 100;

if ($arResult['VISUAL']['TRANSPARENCY'] < 0)
    $arResult['VISUAL']['TRANSPARENCY'] = 0;

$arResult['VISUAL']['TRANSPARENCY'] = 1 - ($arResult['VISUAL']['TRANSPARENCY'] / 100);

$arVisual = [
   'COLUMNS' => ArrayHelper::fromRange([4, 3, 5], $arParams['COLUMNS']),
   'LINK' => [
      'USE' => $arParams['LINK_USE'] === 'Y'
   ],
   'BACKGROUND' => [
      'USE' => $arParams['BACKGROUND_USE'] === 'Y',
      'THEME' => ArrayHelper::fromRange(['light', 'dark'], $arParams['BACKGROUND_THEME'])
   ],
   'OPACITY' => Type::toInteger($arParams['OPACITY']),
   'GRAYSCALE' => $arParams['GRAYSCALE'] === 'Y'
];

if ($arVisual['OPACITY'] >= 0 && $arVisual['OPACITY'] <= 100)
   $arVisual['OPACITY'] = 1 - $arVisual['OPACITY'] / 100;
else
   $arVisual['OPACITY'] = 1;

$arResult['VISUAL'] = ArrayHelper::merge($arVisual, $arResult['VISUAL']);