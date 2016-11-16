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

    //Add your extension to the dashbaord's menu
    'menu' => [
      'snipcart' => [
        'label' => 'Snipcart',
        'url' => '@snipcart',
        'icon' => 'snipcart:icon.svg'
      ]
    ]
];
