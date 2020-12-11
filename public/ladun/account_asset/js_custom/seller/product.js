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

// Function
function getImg() {
    var sampul = document.querySelector("#txtFoto");
    var imgPrev = document.querySelector("#image");
    var fileGambar = new FileReader();
    fileGambar.readAsDataURL(sampul.files[0]);

    fileGambar.onload = function (e) {
        let hasil = e.target.result;
        imgPrev.src = hasil;
        $('#image').show();
        var image = document.querySelector("#image");
        var minAspectRatio = 0.5;
        var maxAspectRatio = 1.5;
        var cropper = new Cropper(image, {
            aspectRatio: 1 / 1,
            cropBoxMovable: true,
            cropBoxResizable: false,
            ready: function () {
                var cropper = this.cropper;
                var containerData = cropper.getContainerData();
                var cropBoxData = cropper.getCropBoxData();
                var aspectRatio = cropBoxData.width / cropBoxData.height;
                var newCropBoxWidth;

                if (
                    aspectRatio < minAspectRatio ||
                    aspectRatio > maxAspectRatio
                ) {
                    newCropBoxWidth =
                        cropBoxData.height *
                        ((minAspectRatio + maxAspectRatio) / 2);

                    cropper.setCropBoxData({
                        left: (containerData.width - newCropBoxWidth) / 2,
                        width: newCropBoxWidth,
                    });
                }
            },

            cropmove: function () {
                var cropper = this.cropper;
                var cropBoxData = cropper.getCropBoxData();
                var aspectRatio = cropBoxData.width / cropBoxData.height;

                if (aspectRatio < minAspectRatio) {
                    cropper.setCropBoxData({
                        width: cropBoxData.height * minAspectRatio,
                    });
                } else if (aspectRatio > maxAspectRatio) {
                    cropper.setCropBoxData({
                        width: cropBoxData.height * maxAspectRatio,
                    });
                }
                var croppedimage = cropper.getCroppedCanvas({width: 160, height: 160});
                document.querySelector('#image2').setAttribute("src", croppedimage.toDataURL());
            },
        });
    };
}

function saveProduct() {
    var sampul = $('#image2').attr('src');
    // $('#divHasilCrop').
    document.querySelector("#divHasilCrop").setAttribute("src", sampul);
    // var fileGambar = new FileReader();
    // var gambar = fileGambar.readAsDataURL(sampul.value);
    
    console.log(sampul);
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
