// Obtención de datos - Read
firebase.database().ref('users/').on('value', function(snapshot) {
    var value = snapshot.val();
    var htmls = [];
    $.each(value, function(index, value){
        
        if(value) {

        htmls.push('<tr>\
        <td>'+ value.first_name +'</td>\
        <td>'+ value.last_name +'</td>\
        <td>'+ value.cantidad +'</td>\
        <td>'+ value.tipo +'</td>\
        <td>'+ value.contenido +'</td>\
        <td>'+ value.fecha +'</td>\
        <td><a data-toggle="modal" data-target="#update-modal" class="btn btn-outline-success updateData" data-id="'+index+'">Editar</a>\
        <a data-toggle="modal" data-target="#remove-modal" class="btn btn-outline-danger removeData" data-id="'+index+'">Eliminar</a></td>\
        </tr>');
        }    

        lastIndex = index;
    });
    $('#tbody').html(htmls);
    $("#submitUser").removeClass('disabled');
});





$('#submitUser').on('click', function(){
	var values = $("#addUser").serializeArray();
	var first_name = values[0].value;
    var last_name = values[1].value;
    var cantidad = values[2].value;
    var tipo = values[3].value;
    var contenido = values[4].value;
    var fecha = values[5].value;
    var userID = lastIndex+1;
    
	 
	firebase.database().ref('users/' + userID).set({
		first_name: first_name,
        last_name: last_name,
        cantidad: cantidad,
        tipo: tipo,
        contenido: contenido,
        fecha: fecha,
	});
	 
	// Reassign lastID value
	lastIndex = userID;
	$("#addUser input").val("");
});





// Actualización de datos - Update
var updateID = 0;
$('body').on('click', '.updateData', function() {
	updateID = $(this).attr('data-id');
	firebase.database().ref('users/' + updateID).on('value', function(snapshot) {
		var values = snapshot.val();
		var updateData = '<div class="form-group">\
		<label for="first_name" class="col-md-12 col-form-label">Nombre</label>\
		<div class="col-md-12">\
		<input id="first_name" type="text" class="form-control" name="first_name" value="'+values.first_name+'" required autofocus>\
	</div>\
</div>\
<div class="form-group">\
	<label for="last_name" class="col-md-12 col-form-label">Proveedor</label>\
	<div class="col-md-12">\
	<input id="last_name" type="text" class="form-control" name="last_name" value="'+values.last_name+'" required autofocus>\
    </div>\
    <div class="form-group">\
	<label for="cantidad" class="col-md-12 col-form-label">Almacén</label>\
	<div class="col-md-12">\
	<input id="cantidad" type="text" class="form-control" name="cantidad" value="'+values.cantidad+'" required autofocus>\
    </div>\
    <label for="tipo" class="col-md-12 col-form-label">Tipo</label>\
	<div class="col-md-12">\
	<input id="tipo" type="text" class="form-control" name="tipo" value="'+values.tipo+'" required autofocus>\
    </div>\
    <label for="contenido" class="col-md-12 col-form-label">Contenido</label>\
	<div class="col-md-12">\
	<input id="contenido" type="text" class="form-control" name="contenido" value="'+values.contenido+'" required autofocus>\
    </div>\
    <label for="fecha" class="col-md-12 col-form-label">Fecha Vencimiento</label>\
	<div class="col-md-12">\
	<input id="fecha" type="text" class="form-control" name="fecha" value="'+values.fecha+'" required autofocus>\
	</div>\
</div>';
		 
	$('#updateBody').html(updateData);
	});
});
 
$('.updateUserRecord').on('click', function() {
	var values = $(".users-update-record-model").serializeArray();
	var postData = {
	first_name : values[0].value,
    last_name : values[1].value,
    cantidad : values[2].value,
    tipo : values[3].value,
    contenido : values[4].value,
    fecha : values[5].value,
};
 
var updates = {};
updates['/users/' + updateID] = postData;
 
firebase.database().ref().update(updates);
 
$("#update-modal").modal('hide');
});






// Borrado de datos - Delete
$("body").on('click', '.removeData', function() {
	var id = $(this).attr('data-id');
        $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
});
 
$('.deleteMatchRecord').on('click', function(){
	var values = $(".users-remove-record-model").serializeArray();
	var id = values[0].value;
	firebase.database().ref('users/' + id).remove();
	$('body').find('.users-remove-record-model').find( "input" ).remove();
	$("#remove-modal").modal('hide');
	});

$('.remove-data-from-delete-form').click(function() {
	$('body').find('.users-remove-record-model').find( "input" ).remove();
});



