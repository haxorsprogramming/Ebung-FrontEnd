/**
 * Route
 */
var rToDefaultProduct = server + "rest/product/list/default";
var rToGetProductByKelurahan = server + "rest/product/getProductByKelurahan";
var rToGetForkDaerah = server + "get/location/fork/";
/**
 * Vue object
 */
var divListProduk = new Vue({
  el : '#divListProduk',
  data : {
    provinsiData : [],
    kabupatenData : [],
    kecamatanData : [],
    kelurahanData : [],
    produk : [],
    kdKelurahanDipilih : ''
  },
  methods : {

  }
});


/**
 * Inisialisasi
 */
pesanUmumApp('info', 'Set delivery area first', 'Please set area to delivery ..');
$('#txtDaerah').focus();

$("#txtDaerah").select2({
    minimumInputLength: 4,
    allowClear: true,
    placeholder: 'masukkan nama kelurahan',
    ajax: {
        url: server + "get/location/kelurahan",
        type: "post",
        dataType: 'json',
        delay: 200,
        data: function (params) {
         return {
           searchTerm: params.term // search term
         };
        },
        processResults: function (response) {
          return { results: response };
        },
        cache: true
       }
}).on('select2:select', function (evt) {
    let kdKelurahan = $("#txtDaerah").val();
    divListProduk.kdKelurahanDipilih = kdKelurahan;
    searchKel(kdKelurahan);
    updateArea(kdKelurahan);
 });

/**
 * Function
 */
 function updateArea(kdKelurahan)
 {
   axios.get(rToGetForkDaerah+kdKelurahan).then(function(res){
     let data = res.data;
     let kelurahan = data.dataKelurahanAll;
     kelurahan.forEach(renderKelurahan);
     function renderKelurahan(item, index){
       divListProduk.kelurahanData.push({ nama:kelurahan[index].nama, id_kel : kelurahan[index].id_kel });
     }
     document.querySelector('#txtKelurahan').selected = kdKelurahan;
     console.log(data);
   });
 }
function searchKel(kdKelurahan)
{
  clearProduk();
  $('#divLoading').show();
  $('#divListProduk').hide();
  $('#divNoProduct').hide();
    var ds = {'kategori':kategori, 'kelurahan':kdKelurahan}
    axios.post(rToDefaultProduct, ds).then(function(res){
      let dr = res.data;
      let status = dr.status;
      if(status === 'no_product'){
        pesanUmumApp('warning', 'No product', 'No product available on area');
        $('#divSearchCoverage').hide();
        $('#divNoProduct').show();
      }else{
        $('#divNoProduct').hide();
        let produk = dr.produk;
        produk.forEach(renderProduk);
        function renderProduk(item, index){
          divListProduk.produk.push({
            nama : produk[index].nama,
            kd_produk : produk[index].kd,
            kabupaten :produk[index].kabupaten,
            foto : produk[index].foto,
            harga : produk[index].harga,
            slug : produk[index].slug
          });
        }
      }
    });

    setTimeout(function(){
      $('#divListProduk').show();
    }, 500);

    setTimeout(function(){
      $('#divLoading').hide();
    }, 500);

}


function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function clearProduk()
{
  let pjgArray = divListProduk.produk.length;
  var i;
  for(i = 0; i < pjgArray; i++)
  {
    divListProduk.produk.splice(0,1);
  }
}
