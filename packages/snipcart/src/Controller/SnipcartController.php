<?php

namespace Pagekit\Snipcart\Controller;

use Pagekit\Application as App;
use Pagekit\Snipcart\Model\Product;

/**
* @Access(admin=true)
*/
class SnipcartController
{
    public function indexAction()
    {
        $products = array_values(Product::findAll());

        return [
          '$data' => $products,
          '$view' => [
            'title' => 'Snipcart management',
            'name' => 'snipcart:views/admin/index.php'
          ]
        ];
    }

    public function settingsAction()
    {
        return [
            '$view' => [
                'title' => __('Snipcart Settings'),
                'name'  => 'snipcart/admin/settings.php'
            ],
            '$data' => [
                'config' => App::module('snipcart')->config()
            ]
        ];
    }

    /**
     * @Request({"api_key": "string"}, csrf=true)
     */
    public function saveAction($api_key="")
    {
          App::config('snipcart')->set('api_key', $api_key);
          return ['sucess' => true];
    }

    /**
     * @Request({"id": "string"}, csrf=true)
     */
    public function removeAction($id="")
    {
          $product = Product::find($id);
          $product->delete();

          return ['sucess' => true];
    }

    /**
     * @Request({"sku": "string", "url": "string", "name": "string", "price": "int", "description": "string"}, csrf=true)
     */
    public function addAction($sku="", $url="", $name="", $price=0, $description="")
    {
          $product = Product::create([
            "sku" => $sku,
            "url" => $url,
            "name" => $name,
            "price" => $price,
            "description" => $description
          ]);

          $product->save();

          return ['sucess' => true];
    }
}
