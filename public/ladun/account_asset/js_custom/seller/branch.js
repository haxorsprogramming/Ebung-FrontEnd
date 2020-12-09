// Route 
var rToGetProvinsi = server + "get-provinsi-all";
var rToGetKabupaten = server + "get-kabupaten/";
var rToGetKecamatan = server + "get-kecamatan/";
var rToGetKelurahan = server + "get-kelurahan/";

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
  console.log(idKecamatan);
  getKelurahan(idKecamatan);
}

function getKelurahan(idKecamatan)
{
  $.get(rToGetKelurahan+idKecamatan, function(data){
    console.log(data);
    let kelurahan = data.kelurahan;
    kelurahan.forEach(renderKelurahan);
    function renderKelurahan(item, index){
      divTambahBranch.kelurahan.push({nama:kelurahan[index].nama, id_kel:kelurahan[index].id_kel});
    }
  });
}