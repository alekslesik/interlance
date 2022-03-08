<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die() ?>
<?php

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arCurrentValues
 */

$arTemplateParameters['BACKGROUND_SIZE'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_ADVANTAGES_TEMPLATE_3_BACKGROUND_SIZE'),
    'TYPE' => 'LIST',
    'VALUES' => [
        'cover' => Loc::getMessage('C_MAIN_ADVANTAGES_TEMPLATE_3_BACKGROUND_SIZE_COVER'),
        'contain' => Loc::getMessage('C_MAIN_ADVANTAGES_TEMPLATE_3_BACKGROUND_SIZE_CONTAIN')
    ],
    'DEFAULT' => 'cover'
];

$arTemplateParameters['ARROW_SHOW'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_ADVANTAGES_TEMPLATE_3_ARROW_SHOW'),
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'N'
];