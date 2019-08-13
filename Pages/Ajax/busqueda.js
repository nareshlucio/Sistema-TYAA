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
			$('#result').html(resultado);
		})
		.fail(function(){
			alert('Hubo algun error');
		})
	})
})