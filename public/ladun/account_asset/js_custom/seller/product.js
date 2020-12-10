// Route 
var rToGetSubKategori = server + "get-sub-kategori/";

// Vue object 
var divProductList = new Vue({
    el : '#divProductList',
    data : {

    },
    methods : {
        detailProductAtc : function()
        {
            console.log("hang up ..");
        },
        tambahProductTampilAtc : function()
        {
            divBreadcumb.titleForm = "Add new product";
            $('#divProductList').hide();
            $('#divTambahProduct').show();
            document.querySelector('#txtProductName').focus();
        }
    }
});

var divTambahProduct = new Vue({
    el : '#divTambahProduct',
    data : {

    },
    methods : {
        backAtc : function()
        {
            divUtama.myProductAtc();
        }
    }
});

// Inisialisasi 
function kategoriPilih()
{
    let kdKategori = document.querySelector('#txtKategori').value;
    $.get(rToGetSubKategori+kdKategori, function(data){
        console.log(data);
    });
}
