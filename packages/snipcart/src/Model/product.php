<?php

  namespace Pagekit\Snipcart\Model;

  use Pagekit\Database\ORM\ModelTrait;

  /**
   * @Entity(tableClass="@products")
   */
  class Product
  {
      use ModelTrait;

      /** @Column(type="integer") @Id */
      public $id;

      /** @Column */
      public $sku = '';

      /** @Column */
      public $name = '';

      /** @Column */
      public $description = '';

      /** @Column */
      public $url = '';

      /** @Column(type="integer") */
      public $price;
  }
