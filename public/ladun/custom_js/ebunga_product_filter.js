/**
 * Route
 */
var rToDefaultProduct = server + "rest/product/list/default";
var rToGetProductByKelurahan = server + "rest/product/getProductByKelurahan";
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
var ds = { 'kategori':kategori }
axios.post(rToDefaultProduct, ds).then(function(res){
  let dr = res.data;
  let produk = dr.produk;
  console.log(produk);
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
});

setTimeout(function(){
  $('#divListProduk').show();
}, 500);

setTimeout(function(){
  $('#divLoading').hide();
}, 500);

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
            console.log(response);
          return {
             results: response
          };
        },
        cache: true
       }
}).on('select2:select', function (evt) {
    let kdKelurahan = $("#txtDaerah").val();
    divListProduk.kdKelurahanDipilih = kdKelurahan;
    searchKel(kdKelurahan);
 });

/**
 * Function
 */
function searchKel(kdKelurahan)
{
  clearProduk();
  $('#divLoading').show();
  $('#divListProduk').hide();

    var ds = {'kategori':kategori, 'kelurahan':kdKelurahan}
    axios.post(rToDefaultProduct, ds).then(function(res){
      let dr = res.data;
      let produk = dr.produk;
      console.log(produk);
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
    });

    setTimeout(function(){
      $('#divListProduk').show();
    }, 500);
    
    setTimeout(function(){
      $('#divLoading').hide();
    }, 500);

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