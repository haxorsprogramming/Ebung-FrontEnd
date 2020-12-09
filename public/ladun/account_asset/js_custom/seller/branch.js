// Vue object 
var divBranch = new Vue({
    el : '#divBranch',
    data : {

    },
    methods : {
        tampilFormTambahAtc : function()
        {
            document.querySelector('#titlePanel').innerHTML = "Add new branch";
            document.querySelector('#divBranch').style.display = "none";
            $('#divTambahBranch').show();
            document.querySelector('#txtNameBranch').focus();
        }
    }
});

// Inisialisasi 
$('#divTambahBranch').hide();