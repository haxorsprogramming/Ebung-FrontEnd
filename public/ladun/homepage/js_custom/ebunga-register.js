// VUE OBJECT 
var divRegister = new Vue({
    el : '#divRegister',
    data : {
        username : ''
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
                pesanUmumApp('warning', 'Isi field!!', 'Harap isi field!!');
            }else{
                var checkEmail = ValidateEmail(email);
                console.log(checkEmail);
            }
        }
    }
});

// INISIALISASI 
document.querySelector('#txtEmailRegistrasi').focus();
$('#loaderLokasi').hide();

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
