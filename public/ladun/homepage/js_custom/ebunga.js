// ROUTE 
var rToDetailProduct = server + "product/detail/";
var rToCheckArea = server + "product/checkarea";
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


// FUNCTION 
function searchArea()
{
    clearArea();
    let lokasi = $('#txtLokasi').val();
    $('#txtTabelArea').hide();
    if(lokasi === ''){
        $('#loaderLokasi').hide();
        $('#txtTabelArea').hide();
    }else{
        if(lokasi.length > 4){
            $('#loaderLokasi').show();
            console.clear();
            
            $.post(rToCheckArea,{'slug':lokasi}, function(data){
                let area = data.area;
                area.forEach(looping_daerah);
                function looping_daerah(item, index){
                    console.log(area[index].nama);
                    div_modal_product.listDaerah.push({'nama':area[index].nama});
                }
                $('#txtTabelArea').show();
                $('#loaderLokasi').hide();
            });
        }else{
        }
    }
}

function clearArea()
{
    let panjang = div_modal_product.listDaerah.length;
    var i;
    for(i = 0; i < panjang; i++){
        div_modal_product.listDaerah.splice(0,1);
    }
}