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
$('#txtRegionIndonesia').hide();
$('#txtRegionMalaysia').hide();

// Function
function checkCountry()
{
    let kdCountry = document.querySelector('#txtKdCountry').value;
    if(kdCountry === 'id'){
      $('#txtRegionIndonesia').show();
      $('#txtRegionMalaysia').hide();
    }else if(kdCountry === 'my'){
      $('#txtRegionIndonesia').hide();
      $('#txtRegionMalaysia').show();
    }else{
      $('#txtRegionIndonesia').hide();
      $('#txtRegionMalaysia').hide();
    }
}
