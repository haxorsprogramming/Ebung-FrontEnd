// Route
var rToGetKabupaten = server + "get-kabupaten/";
var rToGetKecamatan = server + "get-kecamatan/";
var rToGetKelurahan = server + "get-kelurahan/";
var rToCekBranchLocation = server + "account/seller/sellerbranch/cek-branch-location/";
var rToSaveLocation = server + "";

var dataKelurahan = [];
// Vue Object 
var divAddCoverage = new Vue({
    el : '#divAddCoverage',
    data : {
        kabupaten : [],
        kecamatan : [],
        kelurahan : [],
        kelurahanDipilih : []
    },
    methods : {
        addKel : function(idKel)
        {
            let dataKelRec = idKel.split("-");
            let kdKel = dataKelRec[0];
            let namaKel = dataKelRec[1];
            this.kelurahanDipilih.push({ nama : namaKel, idKel : kdKel});
            let cekArray = dataKelurahan.includes(kdKel);
            let letakKel = dataKelurahan.indexOf(kdKel);
            dataKelurahan.splice(letakKel, 1);
            this.kelurahan.splice(letakKel, 1);
            
        }
    }
});

// Inisialisasi 
$('#divProvinsi').hide();
$('#divKabupaten').hide();
$('#divKecamatan').hide();
$('#divKelurahan').hide();

var rToGetCordinateVillage = "https://maps.googleapis.com/maps/api/geocode/json?address="+namaKel+"+"+namaKec+"&key="+pathEbunga;

axios.get(rToGetCordinateVillage).then(function(res){
  let lat = res.data.results[0].geometry.location.lat;
  let lng = res.data.results[0].geometry.location.lng;
  var mapProp = { center:new google.maps.LatLng(lat,lng), zoom:13 };
  var map = new google.maps.Map(document.getElementById("maps"),  mapProp);
}); 

// Function 
function countryPilih()
{
    let kdCountry = document.querySelector('#txtCountry').value;
    if(kdCountry === 'id'){
        $('#divKelurahan').hide();
        $('#divProvinsi').show();
    }else{

    }
}

function provinsiPilih()
{
    clearKabupaten();
    let kdProvinsi = document.querySelector('#txtProvinsi').value;
    getKabupaten(kdProvinsi);
    $('#divKabupaten').show();
}

function kabupatenPilih()
{
    clearKecamatan();
    let kdKabupaten = document.querySelector('#txtKabupaten').value;
    getKecamatan(kdKabupaten);
    $('#divKecamatan').show();
}


function kecamatanPilih()
{
    let kdKecamatan = document.querySelector('#txtKecamatan').value;
    $('#divProvinsi').hide();
    $('#divKabupaten').hide();
    $('#divKecamatan').hide();
    $('#divKelurahan').show();
    getKelurahan(kdKecamatan);
}


function getKabupaten(idProvinsi){
    $.get(rToGetKabupaten+idProvinsi, function(data){
      let kabupaten = data.kabupaten;
      kabupaten.forEach(renderKabupaten);
      function renderKabupaten(item, index){
        divAddCoverage.kabupaten.push({nama:kabupaten[index].nama, id_kab:kabupaten[index].id_kab});
      }
    });
}

function getKecamatan(idKabupaten)
{
  $.get(rToGetKecamatan+idKabupaten, function(data){
    let kecamatan = data.kecamatan;
    kecamatan.forEach(renderKecamatan);
    function renderKecamatan(item, index){
        divAddCoverage.kecamatan.push({nama:kecamatan[index].nama, id_kec:kecamatan[index].id_kec});
    }
  });
}

function getKelurahan(idKecamatan)
{
  $.get(rToGetKelurahan+idKecamatan, function(data){
    let kelurahan = data.kelurahan;
    kelurahan.forEach(renderKelurahan);
    function renderKelurahan(item, index){
        divAddCoverage.kelurahan.push({nama:kelurahan[index].nama, id_kel:kelurahan[index].id_kel});
        dataKelurahan.push(kelurahan[index].id_kel);
    }
  });
}


function clearKabupaten()
{
  let jlhItem = divAddCoverage.kabupaten.length;
  let i;
  for(i = 0; i < jlhItem; i++){
    divAddCoverage.kabupaten.splice(0,1);
  }
  clearKecamatan();
}


function clearKecamatan()
{
  let jlhItem = divAddCoverage.kecamatan.length;
  let i;
  for(i = 0; i < jlhItem; i++){
    divAddCoverage.kecamatan.splice(0,1);
  }
}