// ROUTE 
const rToRegister = server + 'register/proses';

// WEB WORKER 
const ebungaWorkers = new Worker(server + "ladun/homepage/js_custom/ebunga_registrasi_worker.js");

ebungaWorkers.onmessage = function(e) {}

// VUE OBJECT 
var divRegister = new Vue({
    el : '#divRegister',
    data : {
        username : '',
        capMessage : '-',
        statePassword : false
    },
    methods : {
        loginAtc : function()
        {
            console.log("Halooo");
        },
        daftarAtc : function()
        {
            let email = document.querySelector('#txtEmailRegistrasi').value;
            let password = document.querySelector('#txtPasswordRegistrasi').value;

            if(email === ''){
                $('#capNotifIsiField').show();
                divRegister.capMessage = 'Please fill the email & password!!';
            }else{
                var checkEmail = ValidateEmail(email);
                if(checkEmail === false){
                    $('#capNotifIsiField').show();
                    divRegister.capMessage = 'Wrong email format!!! please input again!!';
                }else{
                    if(password.length === 0){
                        $('#capNotifIsiField').show();
                        divRegister.capMessage = 'Please fill the email & password!!';
                    }else{
                        if(this.statePassword === false){
                            
                        }else{
                            // start registration proses
                            let dataSend = {'email':email, 'password':password} 
                            $('#loaderLokasi').show();
                            document.querySelector('#txtEmailRegistrasi').setAttribute("disabled", "disabled");
                            document.querySelector('#txtPasswordRegistrasi').setAttribute("disabled", "disabled");
                            document.querySelector('#txtTipeUser').setAttribute("disabled","disabled");
                            $('#capchaGoogle').hide();
                            $('#btnSignUp').hide();
                            $.post(rToRegister, dataSend, function(data){
                                console.log(data);
                            });
                        }
                    }
                }
            }
        },
        tampilFormLoginAtc : function()
        {
            let dataSend = {'nama':'aditia'}
            ebungaWorkers.postMessage(dataSend);
            // $('#capNotifToLogin').hide();
            $('#formLogin').show();
        }
    }
});

// INISIALISASI 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

document.querySelector('#txtEmailRegistrasi').focus();
$('#loaderLokasi').hide();
$('#capNotifIsiField').hide();
$('#btnSignUp').hide();
$('#loaderLokasi').hide();

$('#txtEmailRegistrasi').click(function(){
    $('#capNotifIsiField').hide();
});

$('#txtPasswordRegistrasi').click(function(){
    $('#capNotifIsiField').hide();
});

// FUNCTION 
function recaptcha_callback()
{
    $('#btnSignUp').show();
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function checkPassword()
{
    let password = document.querySelector('#txtPasswordRegistrasi').value;

    if(password.length <= 6){
        document.querySelector("#passReg_1").style.textDecoration  = "none";
        divRegister.statePassword = false;
    }else{
        document.querySelector("#passReg_1").style.textDecoration  = "line-through";
        
        if((password.match(/[a-z]/) && password.match(/\d+/))){
            document.querySelector("#passReg_2").style.textDecoration  = "line-through";
            divRegister.statePassword = true;
        }else{
            document.querySelector("#passReg_2").style.textDecoration  = "none";
            divRegister.statePassword = false;
        }
    }

}

function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return true;
  }
    return false;
}
