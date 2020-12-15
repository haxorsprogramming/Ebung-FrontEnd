// Route
var rToGetCordinateVillage = "https://maps.googleapis.com/maps/api/geocode/json?address=Medan+Estate&key="+pathEbunga;
var rToGetCordinateVillage2 = "https://maps.googleapis.com/maps/api/geocode/json?address=Tanjung+Morawa&key="+pathEbunga;
var rToGetKabupaten = server + "get-kabupaten/";
var rToGetKecamatan = server + "get-kecamatan/";
var rToGetKelurahan = server + "get-kelurahan/";

var mapProp = { center:new google.maps.LatLng(3.634085,98.7030042), zoom:11 };
var map = new google.maps.Map(document.getElementById("maps"),  mapProp);

axios.get(rToGetCordinateVillage).then(function (response) {
    // handle success
    // console.log(response);
    let lat = response.data.results[0].geometry.location.lat;
    let lng = response.data.results[0].geometry.location.lng;
    let myLatLng = { lat: lat, lng: lng };
    new google.maps.Marker({position: myLatLng, map, title: "Medan Estate"});
    var circle = new google.maps.Circle({
        radius: 60*60, 
        center: myLatLng,
        map: map,
        fillColor: '#FF0000',
        fillOpacity: 0.2,
        strokeColor: '#FF0000',
        strokeOpacity: 0.6
        }); 
    // console.log(lat);
}).catch(function (error) {
    // handle error
    console.log(error);
});



axios.get(rToGetCordinateVillage2).then(function (response) {
    // handle success
    // console.log(response);
    let lat = response.data.results[0].geometry.location.lat;
    let lng = response.data.results[0].geometry.location.lng;
    let myLatLng = { lat: lat, lng: lng };
    new google.maps.Marker({position: myLatLng, map, title: "Lubuk Pakam"});
    var circle = new google.maps.Circle({
        radius: 60*60, 
        center: myLatLng,
        map: map,
        fillColor: '#FF0000',
        fillOpacity: 0.2,
        strokeColor: '#FF0000',
        strokeOpacity: 0.6
        }); 
    // console.log(lat);
}).catch(function (error) {
    // handle error
    console.log(error);
});

// Inisialisasi 
$('#divProvinsi').hide();
$('#divKabupaten').hide();
$('#divKecamatan').hide();

// Vue Object 
var divAddCoverage = new Vue({
    el : '#divAddCoverage',
    data : {
        kabupaten : [],
        kecamatan : [],
        keluarahan : [],
        kelurahanDipilih : []
    },
    methods : {

    }
});

// Function 
function countryPilih()
{
    let kdCountry = document.querySelector('#txtCountry').value;
    if(kdCountry === 'id'){
        $('#divProvinsi').show();
    }else{

    }
}

function provinsiPilih()
{
    let kdProvinsi = document.querySelector('#txtProvinsi').value;
    getKabupaten(kdProvinsi);
    $('#divKabupaten').show();
}

function kabupatenPilih()
{
    let kdKabupaten = document.querySelector('#txtKabupaten').value;
    getKecamatan(kdKabupaten);
    $('#divKecamatan').show();
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
