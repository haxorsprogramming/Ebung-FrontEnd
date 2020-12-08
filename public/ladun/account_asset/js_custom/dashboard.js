// Route 
var rToDashboard = server + "account/dashboard";

// Vue object 
var divUtama = new Vue({
    el : '#divUtama',
    data : {
        
    },
    methods : {
        dashboardAtc : function()
        {
            renderPage(rToDashboard, 'Dashboard 2', 'Dashboard page');
        }
    }
});

var divBreadcumb = new Vue({
    el : '#divBreadcumb',
    data : {
        titleForm : 'Customer Dashboard'
    }
});
// Inisialisasi 

// Function
function renderPage(page, titleForm, subTitle){
    divBreadcumb.titleForm = titleForm;
    $('#divContainerUtama').load(page);
}