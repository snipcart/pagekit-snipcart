<?php $view->style('style', 'snipcart:css/widget-client.css') ?>

<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" <?php echo "data-api-key='$api_key'" ?> id="snipcart"></script>
<link href="https://snipcart.github.io/snipcart-themes-custom/themes/simple/snipcart.css" rel="stylesheet" type="text/css" />

<div class="products" id='widget'>
    <?php foreach($products as $product): ?>
      <div class='product'><?php

        echo "<h1>" . $product->name . "</h1>";

        echo "<p>" . $product->description . "</p>";

        echo "<button class='snipcart-add-item'
                data-item-id='$product->sku'
                data-item-name='$product->name'
                data-item-price='$product->price'
                data-item-url='$product->url'
                data-item-description='$product->description'>
                Buy $product->name
            </button>";
      ?></div>
    <?php endforeach; ?>
</div>
