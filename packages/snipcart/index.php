<?php

use Pagekit\Application;

return [
    //Your extension's name
    'name' => 'snipcart',

    //It is necessary to pagekit so it can register properly our module as an extension.
    'type' => 'extension',

    //Specify a path to your source files
    'autoload' => [
        'Pagekit\\Snipcart\\' => 'src'
    ],

    'widgets' => [
        'widgets/products.php'
    ],


    //To store the api_key we will use later on.
    'config' => [
        'api_key' => ''
    ],

    //Specify a path alias. Since it's empty, it will point to the current directory
    'ressources' => [
        'snipcart:' => ''
    ],

    //Bind your dashboard route to your controller
    'routes' => [
        '@snipcart' => [
            'path' => '/snipcart',
            'controller' => 'Pagekit\\Snipcart\\Controller\\SnipcartController'
        ],
    ],

    'settings' => '@snipcart/settings',

    //Add your extension to the dashbaord's menu
    'menu' => [
        'snipcart' => [
            'label' => 'Snipcart',
            'url' => '@snipcart',
            'icon' => 'snipcart:icon.svg'
        ],
        'snipcart: product' => [
             'label' => 'Products',
             'parent' => 'snipcart',
             'url' => '@snipcart',
        ],
        'snipcart: settings' => [
             'label' => 'Settings',
             'parent' => 'snipcart',
             'url' => '@snipcart/settings',
        ]
    ]
];
