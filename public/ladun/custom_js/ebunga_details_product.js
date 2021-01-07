/**
 * Route
 */
var rToSilentLogout = server + "logout/silent";
var rToLogin = server + 'login/proses';
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
        capchaState : false
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
                let dr = res.data;
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
function nextStep()
{
    $('#divOrderDetails').hide()
    $('#divShipmentAddress').show();
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