/**
 * Vue object
 */

/**
 * Inisialisasi
 */
$("#txtDaerah").select2({
    ajax: { 
        minimumInputLength: 3,
        placeholder: 'masukkan nama daerah',
        url: server + "get/location/provinsi",
        type: "post",
        dataType: 'json',
        delay: 250,
        data: function (params) {
         return {
           searchTerm: params.term // search term
         };
        },
        processResults: function (response) {
          return {
             results: response
          };
        },
        cache: true
       }
      
});
/**
 * Function
 */
