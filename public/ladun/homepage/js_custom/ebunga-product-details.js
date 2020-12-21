// Route
var rImgVariantProduct = server + "ladun/ebunga_asset/image/product/variant/";
var rImgProduct = server + "ladun/ebunga_asset/image/product/";

// Vue object 
var divProduct = new Vue({
    el : '#divProduct',
    data : {
        qt : 1
    },
    methods : {
        addQtAtc : function()
        {
            this.qt++;
            console.log(this.qt);
        },
        incQtAtc : function()
        {
            if(this.qt <= 0){
                
            }else{
                this.qt--;
                console.log(this.qt);
            }
        }
    }
});

var divVariantFoto = new Vue({
    el : '#divVariantFoto',
    data : {

    },
    methods : {
        changeVariantAtc : function(idVariant, kdProduk)
        {
            if(idVariant === 'utama'){
                document.querySelector('#imgUtama').setAttribute("src", rImgProduct+kdProduk+".jpg");
            }else{
                document.querySelector('#imgUtama').setAttribute("src", rImgVariantProduct+idVariant);
            }
        }
    }
})