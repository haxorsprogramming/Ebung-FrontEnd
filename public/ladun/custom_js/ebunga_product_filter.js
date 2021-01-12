/**
 * Vue object
 */

/**
 * Inisialisasi
 */
$("#txtDaerah").select2({
    minimumInputLength: 3,
    allowClear: true,
    placeholder: 'masukkan nama kelurahan',
    ajax: { 
        url: server + "get/location/kelurahan",
        type: "post",
        dataType: 'json',
        delay: 250,
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
    let kelurahan = $("#txtDaerah").val();
    console.log(kelurahan);
 });;
/**
 * Function
 */
