// Route 
var rToGetProvinsi = server + "get-provinsi-all";
var rToGetKabupaten = server + "get-kabupaten/";
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

var divTambahBranch = new Vue({
  el : '#divTambahBranch',
  data : {
    provinsi : []
  },
  methods : {

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
      getProvinsi();
    }else if(kdCountry === 'my'){
      $('#txtRegionIndonesia').hide();
      $('#txtRegionMalaysia').show();
    }else{
      $('#txtRegionIndonesia').hide();
      $('#txtRegionMalaysia').hide();
    }
}

function getProvinsi()
{
  $.get(rToGetProvinsi, function(data){
    let provinsi = data.provinsi;
    provinsi.forEach(renderProvinsi);
    function renderProvinsi(item, index){
      divTambahBranch.provinsi.push({nama:provinsi[index].nama, id_prov:provinsi[index].id_prov});
    }
  });
}

function provinsiPilih()
{
  let idProvinsi = document.querySelector('#txtProvinsi').value;
  getKabupaten(idProvinsi);
}

function getKabupaten(idProvinsi){
  console.log(idProvinsi);
}