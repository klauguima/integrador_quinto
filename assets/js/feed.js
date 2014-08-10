$(function() {
    $("#feed_form").submit(function() {
//        if ($(this).validateForm()) {
            var data = new FormData(this);
            $.ajax({
                url: base_url+'noticias/cadastrar',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(data) {
                    alert(data);
                }
            });
//        }
        return false;
    });
});




