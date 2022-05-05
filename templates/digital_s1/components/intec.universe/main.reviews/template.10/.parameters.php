<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die() ?>
<?php

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arCurrentValues
 */

$arTemplateParameters['COLUMNS'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_STAFF_TEMPLATE_2_COLUMNS'),
    'TYPE' => 'LIST',
    'VALUES' => [
        1 => 1,
        2 => 2
    ],
    'DEFAULT' => 2
];

$arTemplateParameters['HIDING_USE'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_STAFF_TEMPLATE_2_HIDING_USE'),
    'TYPE' => 'CHECKBOX',
    'REFRESH' => 'Y'
];

if ($arCurrentValues['HIDING_USE'] === 'Y') {
    $arTemplateParameters['HIDING_VISIBLE'] = [
        'PARENT' => 'VISUAL',
        'NAME' => Loc::getMessage('C_MAIN_STAFF_TEMPLATE_2_HIDING_VISIBLE'),
        'TYPE' => 'STRING',
        'DEFAULT' => 2
    ];
}

//$arTemplateParameters['LINE_COUNT'] = [
//   'PARENT' => 'VISUAL',
//   'NAME' => Loc::getMessage('C_MAIN_STAFF_TEMPLATE_2_HIDING_VISIBLE'),
//   'TYPE' => 'STRING',
//   'DEFAULT' => 2
//];