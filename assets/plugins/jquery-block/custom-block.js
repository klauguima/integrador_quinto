$(document).ajaxStart(function() {
        $.blockUI({ message: '<h5><img src="'+ base_url +'/assets/img/ajax-loader.gif" /> Aguarde...</h5>' });
});
$(document).ajaxStop($.unblockUI);


