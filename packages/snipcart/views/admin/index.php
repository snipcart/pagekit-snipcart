<?php $view->script('snipcart', 'snipcart:js/snipcart.js', 'vue') ?>
<?php $view->style('style', 'snipcart:css/snipcart.css') ?>

<div class='snip-main-container' id="snipcart">
  <h1>Products</h1>

  <div class='products-container'>
    <table class="products" cellspacing="20">
      <tr class="header">
        <td>Id</td>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Url</td>
      </tr>
      <tr v-for="product in products">
        <td>{{ product.sku}}</td>
        <td>{{ product.name }}</td>
        <td>{{ product.description }}</td>
        <td>{{ product.price }}</td>
        <td>{{ product.url }}</td>
        <td><button class='remove' @click="remove(product)">Remove</button></td>
      </tr>
    </table>
  </div>

  <div class='form'>
      <h1>Create a new product</h1>
      <p class='entry'>
          ID: <input v-model="sku" placeholder="Your product's id.">
      </p>
      <p class='entry'>
          Name: <input v-model="name" placeholder="Your product's name.">
      </p>
      <p class='entry'>
          Description: <input v-model="description" placeholder="Your product's description.">
      </p>
      <p class='entry'>
          Price: <input v-model="price" placeholder="Your product's price.">
      </p>
      <p class='entry'>
          URL: <input v-model="url" placeholder="Your product's url.">
      </p>
      <button class='save entry' @click="save">Add product</button>
  </div>

</div>
