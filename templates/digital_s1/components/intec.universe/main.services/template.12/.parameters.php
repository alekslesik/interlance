<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use intec\core\collections\Arrays;

/**
 * @var array $arCurrentValues
 */

if (!Loader::includeModule('iblock'))
    return;

if (!Loader::includeModule('intec.core'));

$arTemplateParameters = [];

if (!empty($arCurrentValues['IBLOCK_ID'])) {
    $arProperties = Arrays::fromDBResult(CIBlockProperty::GetList([], [
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => $arCurrentValues['IBLOCK_ID']
    ]))->indexBy('ID');

    $hPropertyString = function ($sKey, $arProperty) {
        if (($arProperty['PROPERTY_TYPE'] === 'S' || $arProperty['PROPERTY_TYPE'] === 'N') && $arProperty['MULTIPLE'] === 'N')
            return [
                'key' => $arProperty['CODE'],
                'value' => '['.$arProperty['CODE'].'] '.$arProperty['NAME']
            ];

        return ['skip' => true];
    };

    $arPropertyString = $arProperties->asArray($hPropertyString);

    $arTemplateParameters['PROPERTY_PRICE'] = [
        'PARENT' => 'DATA_SOURCE',
        'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_PROPERTY_PRICE'),
        'TYPE' => 'LIST',
        'VALUES' => $arPropertyString,
        'ADDITIONAL_VALUES' => 'Y',
        'REFRESH' => 'Y'
    ];
}

$arTemplateParameters['COLUMNS'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_COLUMNS'),
    'TYPE' => 'LIST',
    'VALUES' => [
        3 => '3',
        4 => '4'
    ],
    'DEFAULT' => 4
];
$arTemplateParameters['LINK_USE'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_LINK_USE'),
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'N'
];
$arTemplateParameters['PICTURE_SHOW'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_PICTURE_SHOW'),
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'N'
];

if (!empty($arCurrentValues['PROPERTY_PRICE'])) {
    $arTemplateParameters['PRICE_SHOW'] = [
        'PARENT' => 'VISUAL',
        'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_PRICE_SHOW'),
        'TYPE' => 'CHECKBOX',
        'DEFAULT' => 'N'
    ];
}

$arTemplateParameters['FOOTER_SHOW'] = [
    'PARENT' => 'VISUAL',
    'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_FOOTER_SHOW'),
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'N',
    'REFRESH' => 'Y'
];

if ($arCurrentValues['FOOTER_SHOW'] == 'Y') {
    $arTemplateParameters['FOOTER_POSITION'] = [
        'PARENT' => 'VISUAL',
        'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_FOOTER_POSITION'),
        'TYPE' => 'LIST',
        'VALUES' => [
            'left' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_POSITION_LEFT'),
            'center' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_POSITION_CENTER'),
            'right' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_POSITION_RIGHT')
        ],
        'DEFAULT' => 'center'
    ];
    $arTemplateParameters['FOOTER_BUTTON_SHOW'] = [
        'PARENT' => 'VISUAL',
        'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_FOOTER_BUTTON_SHOW'),
        'TYPE' => 'CHECKBOX',
        'DEFAULT' => 'N',
        'REFRESH' => 'Y'
    ];

    if ($arCurrentValues['FOOTER_BUTTON_SHOW'] === 'Y')
        $arTemplateParameters['FOOTER_BUTTON_TEXT'] = [
            'PARENT' => 'VISUAL',
            'NAME' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_FOOTER_BUTTON_TEXT'),
            'TYPE' => 'STRING',
            'DEFAULT' => Loc::getMessage('C_MAIN_SERVICES_TEMPLATE_12_FOOTER_BUTTON_TEXT_DEFAULT')
        ];
}