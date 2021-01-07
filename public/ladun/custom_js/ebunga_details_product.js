/**
 * Route
 */
var rToSilentLogout = server + "logout/silent";

/**
 * Vue object
 */
var divProduct = new Vue({
    el : '#divProduct',
    data : {
        urlBucket : 'https://s3-id-jkt-1.kilatstorage.id/ebunga/product/'
    },
    methods : {
        buyNowAtc : function()
        {
            let kategori = document.querySelector('#txtKategoriHidden').value;
            pesanUmumApp('info', 'Reminder', 'Pastikan coverage area produk sesuai dengan jangkauan alamat pengiriman produk ini ..');
            $('#divDescProduct').hide();
            $('#divOrder').show();
        },
        changeVariantAtc(kd, type, nama)
        {
            if(type === 'main'){
                document.querySelector('#divImgProduct').setAttribute("src", this.urlBucket+"main-product/"+kd+".jpg");
                document.querySelector('#divCapProduct').innerHTML = "Main variant";
                document.querySelector('#capJudulProduct').innerHTML = "Main variant";
                document.querySelector('#txtVariant').value = "main";
            }else{
                document.querySelector('#divImgProduct').setAttribute("src", this.urlBucket+"variant/"+kd+".jpg");
                document.querySelector('#divCapProduct').innerHTML = nama;
                document.querySelector('#capJudulProduct').innerHTML = nama;
                document.querySelector('#txtVariant').value = kd;
            }
        }
    }
});

var divOrder = new Vue({
    el : '#divOrder',
    data : {

    },
    methods : {
        silentLogout : function()
        {
            axios.get(rToSilentLogout).then(function(res){
                let dr = res.data;
                window.location.reload();
            });
        }
    } 
});

/**
 * Inisialisasi
 */
$('#divOrder').hide();

/**
 * Function
 */
function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}