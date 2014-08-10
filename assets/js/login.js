$(function() {
    $("#form").submit(function() {
        if($(this).validateForm()) {
            $.post(base_url+'login/ajax_login', $("#form").serialize(), function(data) {
                if(data.retorno){
                  document.location = base_url+'principal/index'; 
                }
                else{
                    alert(data.mensagem);
                }
            },'json');
        }
        return false;
    });
});

