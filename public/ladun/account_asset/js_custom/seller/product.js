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
        addVariant : function ()
        {
            this.numVariant ++;
            console.log(this.numVariant);
            this.variantProduct.push({name : 'Variant', id_variant:'variant_'+this.numVariant});
        },
        backAtc: function () {
            divUtama.myProductAtc();
        },
    },
});

// Inisialisasi 
var konten = document.getElementById("txtDeksripsiProduct");
CKEDITOR.replace(konten,{language:'id-gb'});
CKEDITOR.config.allowedContent = true;
$('.cropme').simpleCropper();

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
    let pic = $('#txtFotoUtama img').attr('src');
    let dataSend = {'name':productName, 'deks':deksripsiProduk, 'kategori':kategori, 'subKategori':subKategori, 'branch':branch, 'price':price, 'stock':stock, 'pic':pic}
    $.post(rToAddProduct, dataSend, function(data){
        console.log(data);
    });
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