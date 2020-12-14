// Route
var rToGetSubKategori = server + "get-sub-kategori/";
var rToAddProduct = server + "account-seller/product/add/proses";

// Vue object
var divProductList = new Vue({
    el: "#divProductList",
    data: {},
    methods: {
        detailProductAtc: function () {
            console.log("hang up ..");
        },
        tambahProductTampilAtc: function () {
            divBreadcumb.titleForm = "Add new product";
            $("#divProductList").hide();
            $("#divTambahProduct").show();
            document.querySelector("#txtProductName").focus();
            // $('.cropper-container').hide();
            $(".cropper-container").attr("width", "1500px");
        },
    },
});

var divTambahProduct = new Vue({
    el: "#divTambahProduct",
    data: {
        subKategori: [],
        variantProduct : [],
        productName : '',
        numVariant : 0
    },
    methods: {
        addVariantAtc : function ()
        {
            this.numVariant++;
            console.log(this.numVariant);
            this.variantProduct.push({name: "Variant "+ this.numVariant});
        },
        backAtc: function () {
            divUtama.myProductAtc();
        },
    },
});

// Inisialisasi 
var konten = document.getElementById("txtDeksripsiProduct");
CKEDITOR.replace(konten, {language:'id-gb'});
CKEDITOR.config.allowedContent = true;

$(document).ready(function(){
    $('.cropme').simpleCropper();
});


// Function
function submitProduct()
{
    let deksripsiProduk = CKEDITOR.instances['txtDeksripsiProduct'].getData();
    let productName = document.querySelector('#txtProductName').value;
    let kategori = document.querySelector('#txtKategori').value;
    let subKategori = document.querySelector('#txtSubKategori').value;
    let branch = document.querySelector('#txtBranch').value;
    let price = document.querySelector('#txtPrice').value;
    let stock = document.querySelector('#txtStock').value;
    let picUtama = $('#txtFotoUtama img').attr('src');
    let var1 = $('#txtVariant1 img').attr('src');
    let var2 = $('#txtVariant2 img').attr('src');
    let var3 = $('#txtVariant3 img').attr('src');
    let var4 = $('#txtVariant4 img').attr('src');
    let dataSend = {'var1':var1, 'var2':var2, 'var3':var3, 'var4':var4, 'name':productName, 'deks':deksripsiProduk, 'kategori':kategori, 'subKategori':subKategori, 'branch':branch, 'price':price, 'stock':stock, 'picUtama':picUtama}
    
    // if()
    if(productName === ''){
        $('#helpProductName').show();
    }

    // $.post(rToAddProduct, dataSend, function(data){
    //     let status = data.status;
    //     if(status === 'success'){
    //         pesanUmumApp('success', 'Success', 'New branch applied ...');
    //     }else{

    //     }
    // });

}

function kategoriPilih() {
    clearSubKategori();
    let kdKategori = document.querySelector("#txtKategori").value;
    $.get(rToGetSubKategori + kdKategori, function (data) {
        let subKategori = data.dataSubKategori;
        subKategori.forEach(renderSubKategori);
        function renderSubKategori(item, index) {
            divTambahProduct.subKategori.push({
                nama: subKategori[index].nama_kategori,
            });
        }
    });
}

function clearSubKategori() {
    let jlhItem = divTambahProduct.subKategori.length;
    let i;
    for (i = 0; i < jlhItem; i++) {
        divTambahProduct.subKategori.splice(0, 1);
    }
}
