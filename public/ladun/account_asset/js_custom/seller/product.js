// Route
var rToGetSubKategori = server + "get-sub-kategori/";
var rToAddProduct = server + "account-seller/product/add/proses";
var rToProductList = server + "account-seller/product-list";
var teksSave = "Please fill all field of variant for set active of this variant";

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
        capTitleForm : 'Add new product',
        subKategori: [],
        variantProduct : [
            {nama:'', desk:'-', price : 0, stock : 0, deksBot : teksSave},
            {nama:'', desk:'-', price : 0, stock : 0, deksBot : teksSave},
            {nama:'', desk:'-', price : 0, stock : 0, deksBot : teksSave},
        ],
        productName : '',
        numVariant : 0,
        messageHelp : [
            {
                productName : '', kategori : '', subKategori : '', branch : '', deksripsi : '', price : '', stok : '', mainPhotos : '', minPic : ''
            } 
        ],
        stateSave : [
            { 
                productName : false, kategori : false, subKategori : false, branch : false, deksripsi : false, price : false, stok : false, mainPic : false, minPic : false
            }
        ]
    },
    methods: {
        backAtc: function () {
            divUtama.myProductAtc();
        },
    },
});

// Inisialisasi 
var deksProduct = document.getElementById("txtDeksripsiProduct");
var deksVar2 = document.getElementById("txtDeksVar2");
var deksVar3 = document.getElementById("txtDeksVar3");
var deksVar4 = document.getElementById("txtDeksVar4");
CKEDITOR.replace(deksProduct, {language:'id-gb'});
CKEDITOR.replace(deksVar2, {language:'id-gb'});
CKEDITOR.replace(deksVar3, {language:'id-gb'});
CKEDITOR.replace(deksVar4, {language:'id-gb'});
CKEDITOR.config.allowedContent = true;
$('.cropme').simpleCropper();
$('#txtPrice').mask('000.000.000.000.000', {reverse: true});

// Function
function addVariantAtc()
{
    let deksripsiProduk = CKEDITOR.instances['txtDeksripsiProduct'].getData();
    let productName = document.querySelector('#txtProductName').value;
    let kategori = document.querySelector('#txtKategori').value;
    let subKategori = document.querySelector('#txtSubKategori').value;
    let branch = document.querySelector('#txtBranch').value;
    let price = document.querySelector('#txtPrice').value;
    let stock = document.querySelector('#txtStock').value;
    let picUtama = $('#txtFotoUtama img').attr('src');
    let dataSend = {'name':productName, 'deks':deksripsiProduk, 'kategori':kategori, 'subKategori':subKategori, 'branch':branch, 'price':price, 'stock':stock, 'picUtama':picUtama}
    
    // if()
    if(productName === ''){
        divTambahProduct.messageHelp[0].productName = 'Please fill the field ...!!!';
        $('#helpProductName').show();
        divTambahProduct.stateSave[0].productName = false;
    }else{
        $('#helpProductName').hide();
        divTambahProduct.stateSave[0].productName = true;
    }

    if(kategori === 'none'){
        divTambahProduct.messageHelp[0].kategori = 'Choose kategory ...!!!';
        $('#helpKategori').show();
        divTambahProduct.stateSave[0].kategori = false;
    }else{
        divTambahProduct.stateSave[0].kategori = true;
        $('#helpKategori').hide();
    }

    if(subKategori === 'none'){
        divTambahProduct.messageHelp[0].subKategori = 'Choose sub-kategory ...!!!';
        $('#helpSubKategori').show();
        divTambahProduct.stateSave[0].subKategori = false;
    }else{
        divTambahProduct.stateSave[0].subKategori = true;
        $('#helpSubKategori').hide();
    }
    
    if(branch === 'none'){
        divTambahProduct.messageHelp[0].branch = 'Choose branch ...!!!';
        $('#helpBranch').show();
        divTambahProduct.stateSave[0].branch = false;
    }else{
        divTambahProduct.stateSave[0].branch = true;
        $('#helpBranch').hide();
    }

    if(picUtama === undefined){
        divTambahProduct.messageHelp[0].mainPhotos = 'Choose pic of main product ...!!!';
        $('#helpMainPhotos').show();
        divTambahProduct.stateSave[0].picUtama = false;
    }else{
        $('#helpMainPhotos').hide();
        divTambahProduct.stateSave[0].picUtama = true;
    }

    if(price === ''){
        divTambahProduct.messageHelp[0].price = 'Please fill the field ...!!!';
        $('#helpPrice').show();
        divTambahProduct.stateSave[0].price = false;
    }else{
        divTambahProduct.stateSave[0].price = true;
        $('#helpPrice').hide();
    }

    if(stock === ''){
        divTambahProduct.messageHelp[0].stok = 'Please fill the field ...!!!';
        $('#helpStok').show();
        divTambahProduct.stateSave[0].stok = false;
    }else{
        divTambahProduct.stateSave[0].stok = true;
        $('#helpStok').hide();
    }

    let stProductName = divTambahProduct.stateSave[0].productName;
    let stKategori = divTambahProduct.stateSave[0].kategori;
    let stSubKategori = divTambahProduct.stateSave[0].subKategori;
    let stBranch = divTambahProduct.stateSave[0].branch;
    let stPicUtama = divTambahProduct.stateSave[0].picUtama;
    let stPrice = divTambahProduct.stateSave[0].price;
    let stStock = divTambahProduct.stateSave[0].stok;

    if(stProductName === true && stKategori === true && stSubKategori === true && stBranch === true && stPicUtama === true && stPrice === true && stStock === true){
        $('#conVariant').show();
        $('#divDataProduct').hide();
        $('#divBtnAddVariant').hide();
        divTambahProduct.capTitleForm = "Add variant product";
        $('#btnAddVariant').hide();
        $('#btnSubmitNewProduct').show();
    }else{
       console.log("Not yet? ...");
    }
}

function submitProduct()
{
    
    
}

function kategoriPilih() {
    clearSubKategori();
    let kdKategori = document.querySelector("#txtKategori").value;
    $.get(rToGetSubKategori + kdKategori, function (data) {
        let subKategori = data.dataSubKategori;
        subKategori.forEach(renderSubKategori);
        function renderSubKategori(item, index) {
            divTambahProduct.subKategori.push({
                nama: subKategori[index].nama_kategori, idSubKategori : subKategori[index].kd_sub_kategori
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
