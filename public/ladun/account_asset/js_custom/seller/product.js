// Route
var rToGetSubKategori = server + "get-sub-kategori/";

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
var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = false;
$('.cropme').simpleCropper();

// Function
function getImg() {
    let img = $('#divUpload img').attr('src');
    console.log(img);
}

function saveProduct() {
    
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
