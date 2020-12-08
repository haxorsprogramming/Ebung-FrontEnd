// Route 
var rToDashboard = server + "account/seller/dashboard";
var rToMyBranch = server + "account/seller/sellerbranch";
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
renderPage(rToDashboard, 'Customer Dashboard', '');

// Function 
function renderPage(page, titleForm, subTitle){
    $('#divContainerUtama').html("");
    $('#loaderPage').show();
    setTimeout(function(){
        divBreadcumb.titleForm = titleForm;
        $('#divContainerUtama').load(page);
        $('#loaderPage').hide();
    }, 300);
    
}