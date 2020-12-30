// Route 
var rToDashboard = server + "account/seller/dashboard";
var rToMyBranch = server + "account/seller/branch";
var rToProductList = server + "account/seller/product/list";

// Vue object 
var divUtama = new Vue({
    el : '#divUtama',
    data : {
        
    },
    methods : {
        dashboardAtc : function()
        {
            renderPage(rToDashboard, 'Seller Dashboard', '');
        },
        myBranchAtc : function()
        {
            renderPage(rToMyBranch, 'List Branch', '');
        },
        myProductAtc : function()
        {
            renderPage(rToProductList, 'List Product', '');
        }
    }
});

var divBreadcumb = new Vue({
    el : '#divBreadcumb',
    data : {
        titleForm : 'Seller Dashboard'
    }
});

// Inisialisasi 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

renderPage(rToDashboard, 'Seller Dashboard', '');

// Function 
function renderPage(page, titleForm, subTitle){
    $('#divContainerUtama').html("");
    $('#loaderPage').show();
    setTimeout(function(){
        divBreadcumb.titleForm = titleForm;
        $('#divContainerUtama').load(page);
        $('#loaderPage').hide();
    }, 1000);
    
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}