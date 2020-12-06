// ROUTE 

// WEB WORKER 
const ebungaWorkers = new Worker(server + "ladun/homepage/js_custom/ebunga_registrasi_worker.js");

ebungaWorkers.onmessage = function(e) {}

// VUE OBJECT 
var divRegister = new Vue({
    el : '#divRegister',
    data : {
        username : '',
        capMessage : '-'
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
document.querySelector('#txtEmailRegistrasi').focus();
$('#loaderLokasi').hide();
$('#capNotifIsiField').hide();

$('#txtEmailRegistrasi').click(function(){
    $('#capNotifIsiField').hide();
});

// FUNCTION 
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
    }else{
        document.querySelector("#passReg_1").style.textDecoration  = "line-through";
        if((password.match(/[a-z]/) && password.match(/\d+/))){
            document.querySelector("#passReg_2").style.textDecoration  = "line-through";
        }else{
            document.querySelector("#passReg_2").style.textDecoration  = "none";
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
