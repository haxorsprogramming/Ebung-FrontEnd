// route
const rToRegister = server + 'register/proses';
const rToLogin = server + 'auth/login/proses';

// vue object
var divAuth = new Vue({
  el : '#divAuth',
  data : {
    stateAuth : 'login',
    statusCapcha : false
  },
  methods : {
    loginAtc : function()
    {
      let email = document.querySelector('#txtEmail').value;
      let password = document.querySelector('#txtPassword').value;
      let dataSend = {'username':email, 'password':password}
      if(this.statusCapcha === false){
        pesanUmumApp('info', 'Security check', 'Please complete the capcha');
      }else{
        axios.post(rToLogin, dataSend).then(function(res){
          let dr = res.data;
          if(dr.status === 'success'){
            window.location.assign(server + "account");
          }else{
            pesanUmumApp('warning', 'Auth failed', 'Username & password wrong, try again...!!!');
            grecaptcha.reset();
          }
        });
      }
    },
    loginFormOpen : function()
    {
      document.querySelector('#txtEmail').focus();
    },
    registerFormOpen : function()
    {
      
    }
  }
});

// inisialisasi
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#txtPhoneNumber').mask('(00) 0000-0000-0000');

function recaptcha_callback()
{
  divAuth.statusCapcha = true;
}

// fungsi
function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}
