// Route
var rImgVariantProduct = "https://ebunga.s3.ap-southeast-1.amazonaws.com/product/variant/";
var rImgProduct = "https://ebunga.s3.ap-southeast-1.amazonaws.com/product/main-product/";
var rToGetRestDetailProduct = server + "rest/product/variant/";
var messageBeforeOrder = "Please make sure the delivery area is available for this product";
// Vue object 
var divVariantFoto = new Vue({
    el : '#divVariantFoto',
    data : {

    },
    methods : {
        changeVariantAtc : function(idVariant, kdProduk)
        {
            if(idVariant === 'utama'){
                document.querySelector('#imgUtama').setAttribute("src", rImgProduct+kdProduk);
            }else{
                axios.get(rToGetRestDetailProduct+kdProduk).then(function(res){
                    let dr = res.data;
                    let dataProduk = dr.dataProduct;
                    let deks = dataProduk.deks_variant;
                    let harga = dataProduk.harga;
                    let hargaCurrency = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'IDR' }).format(harga);
                    document.querySelector('#capNamaVariant').innerHTML = dataProduk.nama_variant;
                    document.querySelector('#capDeks').innerHTML = deks;
                    document.querySelector('#capHarga').innerHTML = "Rp. "+hargaCurrency;
                });
                document.querySelector('#imgUtama').setAttribute("src", rImgVariantProduct+kdProduk+".jpg");
            }
        }
    }
});

var boxOrderQuantity = new Vue({
    el : '#boxOrderQuantity',
    data : {
        totalHarga : 0
    },
    methods : {

    }
})

// Inisialisasi
$('#boxOrderQuantity').hide();

// Function 
document.querySelector("#btnOrderNow").addEventListener('click', function(){
    pesanUmumApp("info", "Attention", messageBeforeOrder);
    setTimeout(function(){
        $('.product-text').hide();
        $('#boxOrderQuantity').show();
        $('#btnOrderNow').hide();
    }, 1000);
});

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}