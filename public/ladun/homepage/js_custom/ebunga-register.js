// ROUTE 

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
                divRegister.capMessage = 'Please fill the email!!';
            }else{
                var checkEmail = ValidateEmail(email);
                if(checkEmail === false){
                    $('#capNotifIsiField').show();
                    divRegister.capMessage = 'Wrong email format!!! please input again!!';
                }else{
                    
                }
            }
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
