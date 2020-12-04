// ROUTE 
var rToDetailProduct = server + "product/detail/";

// VUE OBJECT 
var div_product_depan = new Vue({
    el : '#div_product_depan',
    data : {
        cap_div : 'Product of Ebunga'
    },
    methods : {
        detailAtc : function(id_product)
        {
            $.get(rToDetailProduct+id_product, function(data){
                
                div_modal_product.title_modal = data.product.nama_produk;
                div_modal_product.deks_produk = data.product.deks_produk;
            });
            
        }
    }
});

var div_modal_product = new Vue({
    el : '#div_modal_product',
    data : {
        title_modal : 'loading ...',
        deks_produk : 'loading ...'
    }
});

// INISIALISASI 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});