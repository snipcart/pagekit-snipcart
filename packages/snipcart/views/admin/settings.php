<?php $view->script('snipcart', 'snipcart:js/settings.js', 'vue') ?>
<?php $view->style('style', 'snipcart:css/snipcart.css') ?>

<div id="settings">
  <div>
      <p class='entry'>
          Api Key: <input v-model="api_key" placeholder="Your snipcart api key.">
      </p>
      <button class='save entry' @click="save">Save</button>
  </div>

</div>
