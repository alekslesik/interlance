<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use intec\core\helpers\ArrayHelper;

$arProperties = [
    'template-background-show' => [
        'grid' => ['size' => 2]
    ],
    'template-background-color' => [
        'grid' => ['size' => 2]
    ],
    'template-menu-show' => [
        'title' => 'inner'
    ],
    'template-cache' => [
        'title' => 'inner'
    ],
    'base-regionality-use' => [
        'title' => 'inner'
    ],
    'base-consent' => [
        'title' => 'inner'
    ],
    'basket-use' => [
        'title' => 'inner'
    ],
    'basket-delay-use' => [
        'title' => 'inner'
    ],
    'basket-compare-use' => [
        'title' => 'inner'
    ],
    'basket-fixed-auto' => [
        'title' => 'inner'
    ],
    'basket-notifications-use' => [
        'title' => 'inner'
    ],
    'catalog-quick-view-use' => [
        'title' => 'inner'
    ],
    'catalog-detail-panel-show' => [
        'title' => 'inner'
    ],
    'catalog-root-menu-show' => [
        'title' => 'inner'
    ],
    'catalog-sections-menu-show' => [
        'title' => 'inner'
    ],
    'catalog-detail-menu-show' => [
        'title' => 'inner'
    ],
    'catalog-filter-ajax' => [
        'title' => 'inner'
    ],
    'catalog-filter-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'catalog-root-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'catalog-sections-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'catalog-elements-tile-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'catalog-detail-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'catalog-quick-view-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'footer-form-use' => [
        'title' => 'inner'
    ],
    'footer-template' => [
        'view' => 'list.template'
    ],
    'header-basket-popup-show' => [
        'title' => 'inner'
    ],
    'header-template' => [
        'view' => 'list.template'
    ],
    'header-fixed-use' => [
        'title' => 'inner'
    ],
    'header-mobile-template' => [
        'view' => 'list.template'
    ],
    'header-mobile-fixed' => [
        'title' => 'inner'
    ],
    'pages-main-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'sections-shares-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'sections-contacts-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'sections-news-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'sections-certificates-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'services-root-menu-show' => [
        'title' => 'inner'
    ],
    'services-root-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'services-section-menu-show' => [
        'title' => 'inner'
    ],
    'services-section-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ],
    'services-element-template' => [
        'view' => 'list.template',
        'view.grid' => [
            'size' => 2
        ]
    ]
];

$arResult['PROPERTIES'] = ArrayHelper::merge(
    $arResult['PROPERTIES'],
    $arProperties
);