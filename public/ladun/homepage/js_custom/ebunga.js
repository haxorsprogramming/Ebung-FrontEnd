// ROUTE 
var rToDetailProduct = server + "product/detail/";
var rToCheckArea = server + "product/checkarea/";
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
                div_modal_product.price = data.product.harga;
                $('#txtLokasi').focus();
            });
            
        }
    }
});

var div_modal_product = new Vue({
    el : '#div_modal_product',
    data : {
        title_modal : 'loading ...',
        deks_produk : 'loading ...',
        currency : 'Rp.',
        price : 'loading ...',
        listDaerah : []
    }
});

// INISIALISASI 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#loaderLokasi').hide();
$('#txtTabelArea').hide();

$('#txtLokasi').keyup(function(){
    let lokasi = $('#txtLokasi').val();
    $('#loaderLokasi').show();
    if(lokasi === ''){

    }else{
        $.get(rToCheckArea+lokasi, function(data){
            console.log(data);
            $('#loaderLokasi').hide();
        });
    }
});