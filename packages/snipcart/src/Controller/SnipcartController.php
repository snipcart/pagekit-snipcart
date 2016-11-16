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
          return [
            '$view' => [
              'title' => 'Snipcart management',
              'name' => 'snipcart:views/admin/index.php'
            ]
          ];
      }
  }
