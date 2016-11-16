$(function(){
  new Vue({
      el: '#settings',

      data: {
          api_key: $data.config.api_key
      },

      methods: {
          save: function(){
              this.$http.post('admin/snipcart/save', {api_key: this.api_key},
                function(){
                  UIkit.notify('Settings have been saved.');
                }).error(function(){
                  UIkit.notify("Oops, something went wrong, settings couldn't be saved.");
                })
          }
      }
  });
});
