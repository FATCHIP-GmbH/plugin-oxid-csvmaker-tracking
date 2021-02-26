<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oemct',
    'title'       => [
        'de' => 'OXID Market Connect Tracking',
        'en' => 'OXID Market Connect Tracking',
    ],
    'description' => [
        'de' => 'Verbindet OXID eShop mit dem OXID Market Connect Umsatz-Tracking.',
        'en' => 'Connects OXID eShop with the OXID Market Connect sales tracking.',
    ],
    'version'     => '1.0.0',
    'author'      => 'OXID eSales AG',
    'url'         => 'https://www.oxid-esales.com',
    'thumbnail'   => 'logo.png',
    'email'       => 'support@oxid-esales.com',
    'blocks' => [
        [
            'template' => 'page/checkout/thankyou.tpl',
            'block'=>'checkout_thankyou_info',
            'file'=>'/views/blocks/thankyou_checkout_thankyou_info.tpl'
        ],
    ],
    'settings' => [
        [
            'group' => 'mctUrls',
            'name' => 'mctUrlToMcInstallation',
            'type' => 'str',
            'value' => ''
        ],
    ],
];
