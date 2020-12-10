// Route 
var rToGetProvinsi = server + "get-provinsi-all";
var rToGetKabupaten = server + "get-kabupaten/";
var rToGetKecamatan = server + "get-kecamatan/";
var rToGetKelurahan = server + "get-kelurahan/";
var rToApplyNewBranch = server + "account-seller/apply-new-branch";

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
    provinsi : [],
    kabupaten : [],
    kecamatan : [],
    kelurahan : []
  },
  methods : {
    saveNewBranchAtc : function()
    {
      let nameBranch = document.querySelector('#txtNameBranch').value;
      let emailBranch = document.querySelector('#txtEmailBranch').value;
      let phoneBranch = document.querySelector('#txtPhoneBranch').value;
      let country = document.querySelector('#txtKdCountry').value;
      let provinsi = document.querySelector('#txtProvinsi').value;
      let kabupaten = document.querySelector('#txtKabupaten').value;
      let kecamatan = document.querySelector('#txtKecamatan').value;
      let kelurahan = document.querySelector('#txtKelurahan').value;
      if(nameBranch === '' || emailBranch === '' || phoneBranch === '' || country === 'none' || provinsi === 'none' || kabupaten === 'none' || kecamatan === 'none' || kelurahan === 'none'){
        pesanUmumApp('warning', 'Isi field!!!', 'Please fill the all field!!');
      }else{
        $.post(rToApplyNewBranch, function(data){
          console.log(data);
        });
      }
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
      getProvinsi();
    }else if(kdCountry === 'my'){
      clearKabupaten();
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
  clearKabupaten();
  let idProvinsi = document.querySelector('#txtProvinsi').value;
  getKabupaten(idProvinsi);
}

function getKabupaten(idProvinsi){
  $.get(rToGetKabupaten+idProvinsi, function(data){
    let kabupaten = data.kabupaten;
    kabupaten.forEach(renderKabupaten);
    function renderKabupaten(item, index){
      divTambahBranch.kabupaten.push({nama:kabupaten[index].nama, id_kab:kabupaten[index].id_kab});
    }
  });
}

function kabupatenPilih()
{
  clearKecamatan();
  let idKabupaten = document.querySelector('#txtKabupaten').value;
  getKecamatan(idKabupaten);
}

function getKecamatan(idKabupaten)
{
  $.get(rToGetKecamatan+idKabupaten, function(data){
    let kecamatan = data.kecamatan;
    kecamatan.forEach(renderKecamatan);
    function renderKecamatan(item, index){
      divTambahBranch.kecamatan.push({nama:kecamatan[index].nama, id_kec:kecamatan[index].id_kec});
    }
  });
}

function kecamatanPilih()
{
  let idKecamatan = document.querySelector('#txtKecamatan').value;
  getKelurahan(idKecamatan);
}

function getKelurahan(idKecamatan)
{
  $.get(rToGetKelurahan+idKecamatan, function(data){
    let kelurahan = data.kelurahan;
    kelurahan.forEach(renderKelurahan);
    function renderKelurahan(item, index){
      divTambahBranch.kelurahan.push({nama:kelurahan[index].nama, id_kel:kelurahan[index].id_kel});
    }
  });
}

function clearKabupaten()
{
  let jlhItem = divTambahBranch.kabupaten.length;
  let i;
  for(i = 0; i < jlhItem; i++){
    divTambahBranch.kabupaten.splice(0,1);
  }
  clearKecamatan();
}

function clearKecamatan()
{
  let jlhItem = divTambahBranch.kecamatan.length;
  let i;
  for(i = 0; i < jlhItem; i++){
    divTambahBranch.kecamatan.splice(0,1);
  }
  clearKelurahan();
}

function clearKelurahan()
{
  let jlhItem = divTambahBranch.kelurahan.length;
  let i;
  for(i = 0; i < jlhItem; i++){
    divTambahBranch.kelurahan.splice(0,1);
  }
}