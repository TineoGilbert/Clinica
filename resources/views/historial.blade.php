<!doctype html>
<html lang="en">
<head>
    <title>Historial Clínico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>

</head>
<body>
    
<div class="container">
    
    <div class="form-row">
        <div class="col-md-12">
           
            <div class="card border-primary mb-3">
                
                <div class="card-header">
                   <center> <h3>Registro Clínico</h3></center>
                    <div class="row">
                        <div class="col-md-12">
                            <center>Centro de Cardiología y Especialidades <strong>Ramírez & Domínguez</strong></center>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h4>Datos Personales</h4>
                    <form id="addHistorial" class="form-row" method="POST" action="">
                        <div class="form-group col-md-6">
                            <label for="nombre" class="col-form-label">Nombre</label>

                            <div class="col">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="edad" class="col-form-label">Edad</label>

                            <div class="col">
                                <input id="edad" type="text" class="form-control" name="edad" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="sexo" class="col-form-label">Sexo</label>

                            <div class="col-md-12">
                                
                                <select name="sexo" id="sexo" class="custom-select">
                                    <option value="masculino">M</option>
                                    <option value="femenino">F</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nacionalidad" class="col-form-label">Nacionalidad</label>

                            <div class="col">
                                <input id="nacionalidad" type="text" class="form-control" name="nacionalidad" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="civil" class="col-form-label">Est. Civil</label>

                            <div class="col-md-12">

                                <select name="civil" id="civil" class="custom-select">
                                    <option value="Casado">Casado</option>
                                    <option value="Soltero">Soltero</option>
                                    <option value="Viudo">Viudo/a</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ocupacion" class="col-form-label">Ocupación</label>

                            <div class="col">
                                <input id="ocupacion" type="text" class="form-control" name="ocupacion" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="domicilio" class="col-form-label">Domicilio</label>

                            <div class="col">
                                <input id="domicilio" type="text" class="form-control" name="domicilio" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="telefono" class="col-form-label">Teléfono</label>

                            <div class="col">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="fecha" class="col-md-12 col-form-label">Fecha de Ingreso</label>

                            <div class="col">
                                <input id="fecha" type="date" class="form-control" name="fecha" value="" required autofocus>
                            </div>
                        </div>
                        
                        <div class="car-body">
                            <h4 class="card-title"> Información Cliníca</h4>
                        </div>
                         
                        <div class="form-group col-md-6">
                            <label for="first_name" class="col-form-label"></label>

                            
                        </div>
                        <div class="form-group col-md-4">
                            <label for="cedula" class="col-form-label">Cédula</label>

                            <div class="col">
                                <input id="cedula" type="text" class="form-control" name="cedula" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="seguro" class="col-form-label">Seguro Médico</label>

                            <div class="col-md-12">
                                
                                <select name="seguro" id="seguro" class="custom-select">
                                    <option value="humano">ARS Humano</option>
                                    <option value="Senasa">Senasa</option>
                                    <option value="Palic">ARS Palic</option>
                                    

                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="doctor" class="col-form-label">Doctor/a</label>

                            <div class="col">
                                <input id="doctor" type="text" class="form-control" name="doctor" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-group col-md-8">
                                <button type="button" class="btn btn-primary btn-block desabled" id="submitHistorial">
                                    Registrar Información
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

    </div>
</div>

<!-- Delete Modal -->
<form action="" method="POST" class="historial-remove-record-model">
    <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Borrar Médicamento</h4>
                    <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>¿Seguro que desea eliminar este Médicamento?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light deleteMatchRecord">Borrar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Update Model -->
<form action="" method="POST" class="historial-update-record-model form-horizontal">
    <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Actualizar Artículo</h4>
                    <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body" id="updateBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success waves-effect waves-light updateHistorialRecord">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<center><a href="{{route('principal.sistema')}}">  <i class="fas fa-home fa-2x" style="color: #263238"></i> </a></center>
<script>
    var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
authDomain: "{{ config('services.firebase.auth_domain') }}",
databaseURL: "{{ config('services.firebase.database_url') }}",
projectId: "{{ config('services.firebase.project_id') }}",
storageBucket: "{{ config('services.firebase.storage_bucket') }}",
messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
appId: "{{ config('services.firebase.app_id') }}"
    };

    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = 0;
</script>
<script src="./js/historial.js"></script>
<script src="https://kit.fontawesome.com/d01099666b.js" crossorigin="anonymous"></script>
</body>
</html>