$(buscar_datos());

var parametro = "consulta1";

function buscar_datos(consulta,parametro){
	$.ajax({
		url: '../php/buscar.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta,
				consulta1:parametro},
	})
	.done(function(respuesta){
		if (parametro=="consulta") {
			$("#datos").html(respuesta);
				}
		else if(parametro=="consulta1"){
		$("#datos_cliente").html(respuesta);
			}
		else if(parametro=="consulta2"){
			$("#datos_rutas").html(respuesta);
		}
		else if(parametro=="consulta3"){
			$("#datos_recompensas").html(respuesta);
		}
	})
	.fail(function(){
		console.log("error");
	});
}



$(document).on('keyup','#caja_busqueda', function(){
	var valor = $(this).val();
	var parametro = "consulta";
	if (valor != "") {
		buscar_datos(valor,parametro);
	}else{
		buscar_datos();
	}
});

$(document).on('keyup','#caja_busqueda_cliente', function(){
	var valor = $(this).val();
	var parametro = "consulta1";
	if (valor != "") {
		buscar_datos(valor,parametro);
	}else{
		buscar_datos();
	}
});


$(document).on('keyup','#caja_busqueda_rutas', function(){
	var valor = $(this).val();
	var parametro = "consulta2";
	if (valor != "") {
		buscar_datos(valor,parametro);
	}else{
		buscar_datos();
	}
});

$(document).on('keyup','#caja_busqueda_recompensas', function(){
	var valor = $(this).val();
	var parametro = "consulta3";
	if (valor != "") {
		buscar_datos(valor,parametro);
	}else{
		buscar_datos();
	}
});

