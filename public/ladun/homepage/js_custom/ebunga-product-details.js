// Route
var rImgVariantProduct = "https://ebunga.s3.ap-southeast-1.amazonaws.com/product/variant/";
var rImgProduct = "https://ebunga.s3.ap-southeast-1.amazonaws.com/product/main-product/";
var rToGetRestDetailProduct = server + "rest/product/variant/";

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
                    var deks = dataProduk.deks_variant;
                    document.querySelector('#capNamaVariant').innerHTML = dataProduk.nama_variant;
                    document.querySelector('#capDeks').innerHTML = deks;
                    console.log(deks);
                });
                
                document.querySelector('#imgUtama').setAttribute("src", rImgVariantProduct+kdProduk+".jpg");
            }
        }
    }
});
