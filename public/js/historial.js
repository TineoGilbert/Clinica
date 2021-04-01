// Obtención de datos - Read
firebase.database().ref('historial/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value){
        
        if(value) {

        htmls.push('<tr>\
        <td style="color: coral">'+ value.nombre +'</td>\
        <td style="color: coral">'+ value.edad +'</td>\
        <td style="color: coral">'+ value.sexo +'</td>\
        <td style="color: coral">'+ value.nacionalidad +'</td>\
        <td style="color: coral">'+ value.civil +'</td>\
        <td style="color: coral">'+ value.ocupacion +'</td>\
        <td style="color: coral">'+ value.domicilio +'</td>\
        <td style="color: coral">'+ value.telefono +'</td>\
        <td style="color: coral">'+ value.fecha +'</td>\
        <td style="color: coral">'+ value.cedula +'</td>\
        <td style="color: coral">'+ value.seguro +'</td>\
        <td style="color: coral">'+ value.doctor +'</td>\
        <td><a data-toggle="modal" data-target="#update-modal" class="btn btn-success updateData" data-id="'+index+'">Editar</a>\
        <a data-toggle="modal" data-target="#remove-modal" class="btn btn-danger removeData" data-id="'+index+'">Eliminar</a></td>\
        </tr>');
        }    

        lastIndex = index;
    });
    $('#tbody').html(htmls);
    $("#submitHistorial").removeClass('disabled');
});





$('#submitHistorial').on('click', function(){
	var values = $("#addHistorial").serializeArray();
	var nombre = values[0].value;
    var edad = values[1].value;
    var sexo = values[2].value;
    var nacionalidad = values[3].value;
    var civil = values[4].value;
    var ocupacion = values[5].value;
    var domicilio = values[6].value;
    var telefono = values[7].value;
    var fecha = values[8].value;
    var cedula = values[9].value;
    var seguro = values[10].value;
    var doctor = values[11].value;
    var userID = lastIndex+1;
    
	 
	firebase.database().ref('historial/' + userID).set({
		nombre: nombre,
        edad: edad,
        sexo: sexo,
        nacionalidad: nacionalidad,
        civil: civil,
        ocupacion: ocupacion,
        domicilio: domicilio,
        telefono: telefono,
        fecha: fecha,
        cedula: cedula,
        seguro: seguro,
        doctor: doctor,
	});
	 
	// Reassign lastID value
	lastIndex = userID;
	$("#addHistorial input").val("");
});





// Actualización de datos - Update
var updateID = 0;
$('body').on('click', '.updateData', function() {
	updateID = $(this).attr('data-id');
	firebase.database().ref('historial/' + updateID).on('value', function(snapshot) {
		var values = snapshot.val();
		var updateData = '<div class="form-group">\
		<label for="nombre" class="col-md-12 col-form-label">Nombre</label>\
		<div class="col-md-12">\
		<input id="nombre" type="text" class="form-control" name="nombre" value="'+values.nombre+'" required autofocus>\
	</div>\
</div>\
<div class="form-group">\
	<label for="edad" class="col-md-12 col-form-label">Edad</label>\
	<div class="col-md-12">\
	<input id="edad" type="text" class="form-control" name="edad" value="'+values.edad+'" required autofocus>\
    </div>\
    <div class="form-group">\
	<label for="sexo" class="col-md-12 col-form-label">Sexo</label>\
	<div class="col-md-12">\
	<input id="sexo" type="text" class="form-control" name="sexo" value="'+values.sexo+'" required autofocus>\
    </div>\
    <label for="nacionalidad" class="col-md-12 col-form-label">Nacionalidad</label>\
	<div class="col-md-12">\
	<input id="nacionalidad" type="text" class="form-control" name="nacionalidad" value="'+values.nacionalidad+'" required autofocus>\
    </div>\
    <label for="civil" class="col-md-12 col-form-label">Civil</label>\
	<div class="col-md-12">\
	<input id="civil" type="text" class="form-control" name="civil" value="'+values.civil+'" required autofocus>\
    </div>\
    <label for="ocupacion" class="col-md-12 col-form-label">Ocupación</label>\
	<div class="col-md-12">\
	<input id="ocupacion" type="text" class="form-control" name="ocupacion" value="'+values.ocupacion+'" required autofocus>\
	</div>\
    <label for="domicilio" class="col-md-12 col-form-label">Domicilio</label>\
	<div class="col-md-12">\
	<input id="domicilio" type="text" class="form-control" name="domicilio" value="'+values.domicilio+'" required autofocus>\
	</div>\
    <label for="telefono" class="col-md-12 col-form-label">Telefono</label>\
	<div class="col-md-12">\
	<input id="telefono" type="text" class="form-control" name="telefono" value="'+values.telefono+'" required autofocus>\
	</div>\
    <label for="fecha" class="col-md-12 col-form-label">Fecha</label>\
	<div class="col-md-12">\
	<input id="fecha" type="text" class="form-control" name="fecha" value="'+values.fecha+'" required autofocus>\
	</div>\
    <label for="cedula" class="col-md-12 col-form-label">Cédula</label>\
	<div class="col-md-12">\
	<input id="cedula" type="text" class="form-control" name="cedula" value="'+values.cedula+'" required autofocus>\
	</div>\
    <label for="seguro" class="col-md-12 col-form-label">Seguro</label>\
	<div class="col-md-12">\
	<input id="seguro" type="text" class="form-control" name="seguro" value="'+values.seguro+'" required autofocus>\
	</div>\
    <label for="doctor" class="col-md-12 col-form-label">Doctor</label>\
	<div class="col-md-12">\
	<input id="doctor" type="text" class="form-control" name="doctor" value="'+values.doctor+'" required autofocus>\
	</div>\
</div>';
		 
	$('#updateBody').html(updateData);
	});
});
 
$('.updateHistorialRecord').on('click', function() {
	var values = $(".historial-update-record-model").serializeArray();
	var postData = {
	nombre : values[0].value,
    edad : values[1].value,
    sexo : values[2].value,
    nacionalidad : values[3].value,
    civil : values[4].value,
    ocupacion : values[5].value,
    domicilio : values[6].value,
    telefono : values[7].value,
    fecha : values[8].value,
    cedula : values[9].value,
    seguro : values[10].value,
    doctor : values[11].value,
};
 
var updates = {};
updates['/historial/' + updateID] = postData;
 
firebase.database().ref().update(updates);
 
$("#update-modal").modal('hide');
});






// Borrado de datos - Delete
$("body").on('click', '.removeData', function() {
	var id = $(this).attr('data-id');
        $('body').find('.historial-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
});
 
$('.deleteMatchRecord').on('click', function(){
	var values = $(".historial-remove-record-model").serializeArray();
	var id = values[0].value;
	firebase.database().ref('historial/' + id).remove();
	$('body').find('.historial-remove-record-model').find( "input" ).remove();
	$("#remove-modal").modal('hide');
	});

$('.remove-data-from-delete-form').click(function() {
	$('body').find('.historial-remove-record-model').find( "input" ).remove();
});



