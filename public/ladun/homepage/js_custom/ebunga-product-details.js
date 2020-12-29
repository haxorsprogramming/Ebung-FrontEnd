// Route
var rImgVariantProduct = "https://ebunga.s3.ap-southeast-1.amazonaws.com/product/variant/";
var rImgProduct = "https://ebunga.s3.ap-southeast-1.amazonaws.com/product/main-product/";
var rToGetRestDetailProductVariant = server + "rest/product/variant/";
var rToGetRestDetailProductMain = server + "rest/product/main/";
var messageBeforeOrder = "Please make sure the delivery area is available for this product";
// Vue object 
var divVariantFoto = new Vue({
    el : '#divVariantFoto',
    data : {

    },
    methods : {
        changeVariantAtc : function(idVariant, kdProduk)
        {
            divContent.totalHarga = 0;
            document.querySelector('#txtQt').value = 0;
            if(idVariant === 'utama'){
                axios.get(rToGetRestDetailProductMain+kdProduk).then(function(res){
                    let dr = res.data;
                    let dataProduk = dr.dataProduct;
                    let harga = dataProduk.harga;
                    divContent.hargaProduct = parseInt(harga);
                    let hargaCurrency = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'IDR' }).format(harga);
                    divContent.variantDipilih = "Default";
                    document.querySelector('#capNamaVariant').innerHTML = "Main variant";
                    document.querySelector('#capDeks').innerHTML = dataProduk.deks_produk;;
                    document.querySelector('#capHarga').innerHTML = "Rp. " + hargaCurrency;
                });
                document.querySelector('#imgUtama').setAttribute("src", rImgProduct+kdProduk);
            }else{
                axios.get(rToGetRestDetailProductVariant+kdProduk).then(function(res){
                    let dr = res.data;
                    let dataProduk = dr.dataProduct;
                    let deks = dataProduk.deks_variant;
                    let harga = dataProduk.harga;
                    divContent.hargaProduct = parseInt(harga);
                    let hargaCurrency = new Intl.NumberFormat('de-DE', { style: 'currency', currency: 'IDR' }).format(harga);
                    divContent.variantDipilih = dataProduk.nama_variant;
                    document.querySelector('#capNamaVariant').innerHTML = dataProduk.nama_variant;
                    document.querySelector('#capDeks').innerHTML = deks;
                    document.querySelector('#capHarga').innerHTML = "Rp. "+hargaCurrency;
                });
                document.querySelector('#imgUtama').setAttribute("src", rImgVariantProduct+kdProduk+".jpg");
            }
        }
    }
});

var divContent = new Vue({
    el : '#divContent',
    data : {
        variantDipilih : 'Default',
        totalHarga : 0,
        hargaProduct : 0
    },
    methods: {
        addQt : function(harga)
        {
            let hargaNow = parseInt(this.totalHarga) + parseInt(this.hargaProduct);
            this.totalHarga = hargaNow;
        },
        remQt : function(harga)
        {
            if(parseInt(this.totalHarga) <= 0){

            }else{
                let hargaNow = parseInt(this.totalHarga) - parseInt(this.hargaProduct);
                this.totalHarga = hargaNow;
            }
        }
    }
});

// Inisialisasi
setTimeout(function(){
    let hargaDef = document.querySelector('#txtHargaDefaultHidden').value;
    divContent.hargaProduct = parseInt(hargaDef);
}, 300);

// Function 
document.querySelector("#btnOrderNow").addEventListener('click', function(){
    pesanUmumApp('warning', 'Attention', messageBeforeOrder);
    let qt = document.querySelector('.input-number').value;
    if(parseInt(qt) <= 0){
        pesanUmumApp('warning', 'Pick a product !!!', 'Harap memilih produk untuk melanjutkan transaksi');
    }else{
        pesanUmumApp('info', 'Attention !!!', messageBeforeOrder);
        document.documentElement.scrollTop = 0;
        $('#divContent').hide();
        $('#divVariantFoto').hide();
        $('#divProductDeks').hide();
        $('#divStepOrder').fadeIn(200);
    }
});

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}