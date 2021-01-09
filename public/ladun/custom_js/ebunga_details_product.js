/**
 * Route
 */
var rToSilentLogout = server + "logout/silent";
var rToLogin = server + 'login/proses';
var rToGetKelurahan = server + "get/location/kelurahan/";
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
            // pesanUmumApp('info', 'Reminder', 'Pastikan coverage area produk sesuai dengan jangkauan alamat pengiriman produk ini ..');
            $('#divDescProduct').hide();
            $('#divOrder').show();
            $('#divProduct').hide();
            $('#divModelPayment').show();
            window.scrollTo({top:800, left:0, behavior : 'smooth'});
        },
        changeVariantAtc(kd, type, nama)
        {
            if(type === 'main'){
                document.querySelector('#divImgProduct').setAttribute("src", this.urlBucket + "main-product/" + kd + ".jpg");
                divOrder.imgPrevPath = this.urlBucket + "main-product/" + kd + ".jpg";
                document.querySelector('#divCapProduct').innerHTML = "Main variant";
                document.querySelector('#capJudulProduct').innerHTML = "Main variant";
                document.querySelector('#txtVariant').value = "main";
            }else{
                document.querySelector('#divImgProduct').setAttribute("src", this.urlBucket + "variant/" + kd + ".jpg");
                divOrder.imgPrevPath = this.urlBucket + "variant/" + kd + ".jpg";
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
        capchaState : false,
        btnBawah : '1',
        item : 'Nama Itam',
        senderName : '-',
        receiverName : '-',
        receiverEmail : '-',
        receiverPhoneNumber : '-',
        captionOnGreetingCard : '-',
        deliveryDate : '',
        dataKelurahan : [],
        provinsi : '',
        kabupaten : '',
        kecamatan : '',
        kelurahan : '',
        detailAddress : '',
        imgPrevState : '0',
        imgPrevPath : 'https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA1705.jpg'
    },
    methods : {
        loginSilentAtc : function()
        {
            if(this.capchaState == false){
                pesanUmumApp('warning', 'Security check', 'Please complete the capcha ..');
            }else{
                let username = document.querySelector('#txtUsername').value;
                let password = document.querySelector('#txtPassword').value;
                let dataSend = {'username':username, 'password':password}
                $('#divLoading').show();
                $('#divFormLogin').hide();
                setTimeout(function(){
                    axios.post(rToLogin, dataSend).then(function(res){
                        let dr = res.data;
                        if(dr.status === 'success'){
                            window.location.reload();
                        }else{
                            pesanUmumApp('warning', 'Invalid login', 'Incorrect username & password ...');
                            $('#divLoading').hide();
                            $('#divFormLogin').show();
                            document.querySelector('#txtPassword').value = "";
                            document.querySelector('#txtUsername').focus();
                            grecaptcha.reset();
                            this.capchaState = false;
                        }
                    });
                }, 1000);
            }
        },
        silentLogout : function()
        {
            axios.get(rToSilentLogout).then(function(res){
                window.location.reload();
            });
        }
    } 
});

/**
 * Inisialisasi
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#divOrder').hide();

/**
 * Function
 */
function paymentProcess()
{
    var checkBox = document.querySelector("#chkBankTransfer");
    if(checkBox.checked === true){
        Swal.fire({
            title: "Process ?",
            text: "Process payment ... ? kamu akan menerima informasi cara pembayaran melalui email ..",
            icon: "info",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
        }).then((result) => {
            if(result.value) {
                
            }
        });
    }else{
        pesanUmumApp('warning', 'Choose payment', 'Please choose payment method ...');
    }
}

function checkBankTransfer()
{
    console.log("Bank");    
}

function paymentStep()
{
    Swal.fire({
        title: "Confirm?",
        text: "Apakah data pemesanan sudah benar? Lanjutkan ke pembayaran ... ?",
        icon: "info",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya",
        cancelButtonText: "Tidak",
    }).then((result) => {
        if (result.value) {
            $('#divShipmentAddress').hide();
            $('#divPayment').show();
            divOrder.btnBawah = "3";
            $('#divStepDetailsOrder').attr("style", "");
            $('#divStepDetailsOrder').addClass('wizard-step-active');
            $('#divProduct').hide();
            $('#divModelPayment').show();
            window.scrollTo({top:400, left:0, behavior : 'smooth'});
            divOrder.imgPrevState = '1';
        }
    });
}

 function deliveryDateSet()
{
    let deliveryDate = document.querySelector('#txtDeliveryDate').value;
    divOrder.deliveryDate = deliveryDate;
}

function kelurahanPilih()
{
    let kelurahan = document.querySelector('#txtKelurahan').value;
    divOrder.kelurahan = kelurahan;
}

function kecamatanPilih()
{
    clearKelurahan();
    let kecData = document.querySelector('#txtKecamatan').value;
    let kecDataEx = kecData.split("|");
    divOrder.kecamatan = kecDataEx[1];
    axios.get(rToGetKelurahan+kecDataEx[0]).then(function(res){
        let dr = res.data;
        let kelurahan = dr.kelurahan;
        kelurahan.forEach(renderKelurahan);
        function renderKelurahan(item, index){
            divOrder.dataKelurahan.push({nama : kelurahan[index].nama});
        }
    });
}

function clearKelurahan()
{
    let jlhItem = divOrder.dataKelurahan.length;
    let i;
    for(i = 0; i < jlhItem; i++){
        divOrder.dataKelurahan.splice(0,1);
    }
}

function nextStep()
{
    $('#divOrderDetails').hide()
    $('#divShipmentAddress').show();
    divOrder.btnBawah = '2';
    let provinsi = document.querySelector('#txtProvinsi').value;
    let kabupaten = document.querySelector('#txtKabupaten').value;
    divOrder.kabupaten = kabupaten;
    divOrder.provinsi = provinsi;
    // $('#divStepDetailsOrder').removeClass('wizard-step');
    $('#divStepDetailsOrder').addClass('stepOrderPrepare');
}

function recaptcha_callback()
{
    divOrder.capchaState = true;
}

function showLogin()
{
    $('#checkout-login').fadeIn(400);
    $('#txtUsername').focus();  
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}