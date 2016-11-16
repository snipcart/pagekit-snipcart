$(function(){
  new Vue({
      el: '#snipcart',

      data: {
          products: $data || []
      },

      methods: {
          remove: function(product){

              this.products = this.products.filter(function(obj){
                return !(obj.id === product.id)
              });

              this.$http.post('admin/snipcart/remove', {id: product.id},
                function(){
                  UIkit.notify('Product has been removed.');
                }).error(function(){
                  UIkit.notify("Oops, something went wrong, product couldn't be removed.");
                })
          },

          save: function(){
              var newProduct = {
                sku: this.sku,
                url: this.url,
                name: this.name,
                price: this.price,
                description: this.description
              }


              this.$http.post('admin/snipcart/add', {sku: newProduct.sku, url: newProduct.url, name: newProduct.name, price: newProduct.price, description: newProduct.description},
                function(){

                  this.products.push(newProduct);

                  this.sku = "";
                  this.url = "";
                  this.name = "";
                  this.price = "";
                  this.description = "";

                  UIkit.notify('Product has been added.');
                }).error(function(){
                  UIkit.notify("Oops, something went wrong, product couldn't be added.");
                })
          }
      }
  });
});
