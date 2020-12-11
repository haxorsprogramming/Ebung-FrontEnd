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
    },
    methods: {
        backAtc: function () {
            divUtama.myProductAtc();
        },
    },
});

// Inisialisasi
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
