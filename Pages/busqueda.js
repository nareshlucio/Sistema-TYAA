$(function(){
	$('#Buscador').submit(function(e){
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var busqueda = $('#search').val();

		$.ajax({
			type: 'POST',
			 url: 'Registrosphp/result.php',
			 data: {'search': busqueda}
			})
		.done(function(resultado){
			if(resultado !="")
			$('#result').html(resultado)
		})
		.fail(function(){
			alert('Hubo algun error')
		})
	})
})


var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("¡Yo esperaba una dirección de correo, cariño!");
  } else {
    email.setCustomValidity("");
  }
});