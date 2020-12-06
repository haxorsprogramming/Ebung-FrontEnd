// ROUTE 

// WEB WORKER 
const ebungaWorkers = new Worker(server+"ladun/homepage/js_custom/ebunga_worker.js");

ebungaWorkers.addEventListener("message", function(event){});

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
            ebungaWorkers.postMessage("Haloo");
            $('#capNotifToLogin').hide();
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

function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return true;
  }
    return false;
}
