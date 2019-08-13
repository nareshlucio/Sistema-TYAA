$(function(){
	$('#frmbus').submit(function(e){
		e.preventDefault();
	})

	$("#busalumno").keyup(function(){
		var busqueda = $("#busalumno").val();

		$.ajax({
			type: 'POST',
			 url: 'Registrosphp/BuscAlumno.php',
			 data: {'bus': busqueda}
			})
		.done(function(resultado){
			if(resultado !="")
			$('#Datos').html(resultado);
		})
		.fail(function(){
			alert('Hubo algun error');
		})
	})
})
/*$(BuscAlumno());
$(document).on('keyup', '#busalumno', function(){
	var valor = $(this).val();
		if(valor !=""){
			BuscAlumno(valor);
		}else{
			BuscAlumno();
		}
});
$("#frmbus").submit(function(e){
	e.preventDefault();
})
	function BuscAlumno(consulta){
		$.ajax({
			type: 'POST',
			 url: 'Registrosphp/BuscAlumno.php',
			 datatype: 'html',
			 data: {cons: consulta}
			})
		.done(function(respuesta){
			if(respuesta !="")
			$("#Datos").html(respuesta);
		})
		.fail(function(){
			console.log("Error Extraño");
		})
	}*/