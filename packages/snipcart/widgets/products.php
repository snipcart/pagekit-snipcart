<?php

Use Pagekit\Snipcart\Model\Product;
use Pagekit\Application as App;

return [

    'name' => 'snipcart/productswidget',

    'label' => 'Products Widget',

    'events' => [
        'view.scripts' => function ($event, $scripts) use ($app) {
            $scripts->register('widget-productswidget', 'snipcart:js/widget.js', ['~widgets']);
        }
    ],

    'render' => function ($widget) use ($app) {
        $products = Product::findAll();
        $api_key = App::config('snipcart')->get('api_key');

        return $app->view('snipcart:widget.php', compact('products', 'api_key'));
    }

];
