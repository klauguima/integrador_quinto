$(function() {
    $("#logout").click(function() {
        $.post(base_url + 'login/ajax_logout', function() {
            document.location = base_url;
        });
    });
});

