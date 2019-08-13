$(document).on("submit", "#formRegistro", function(event){
    event.preventDefault();
    $("#formRegistro").bind("submit", function(){
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(resultado){
                if(resultado !="")
                $('#result').html(resultado);
                $("#msg_error").hide();
            },
            error: function(){
                $("#msg_error").text("Lo siento Ocurrio un error al enviar el formulario :(").show();
                return false;
            }
        });
        return false;
    });
});