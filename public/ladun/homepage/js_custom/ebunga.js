// VUE OBJECT 
var div_product_depan = new Vue({
    el : '#div_product_depan',
    data : {
        cap_div : 'Product of Ebunga'
    },
    methods : {
        detailAtc : function()
        {
            div_modal_product.title_modal = "Le minerale";
        }
    }
});

var div_modal_product = new Vue({
    el : '#div_modal_product',
    data : {
        title_modal : 'loading ...'
    }
});