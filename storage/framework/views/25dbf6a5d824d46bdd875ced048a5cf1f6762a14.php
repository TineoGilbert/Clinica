<!doctype html>
<html lang="en">
<head>
    <title>Inventario</title>
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
    <div class="row">
        <div class="col-md-4">
           
            <div class="card border-primary mb-4">
                
                <div class="card-header">
                    <h3>Cliníca Ramírez & Domínguez</h3>
                    <div class="row">
                        <div class="col-md-10">
                            <strong>Agregar Medicamento</strong>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="addUser" class="" method="POST" action="">
                        <div class="form-group">
                            <label for="first_name" class="col-md-12 col-form-label">Nombre</label>

                            <div class="col-md-12">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-md-12 col-form-label">Proveedor</label>

                            <div class="col-md-12">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cantidad" class="col-md-12 col-form-label">Almacén</label>

                            <div class="col-md-12">
                                <input id="cantidad" type="text" class="form-control" name="cantidad" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tipo" class="col-md-12 col-form-label">Tipo</label>

                            <div class="col-md-12">
                                
                                <select name="tipo" id="tipo" class="custom-select">
                                    <option value="Liquido">Liquido</option>
                                    <option value="Ampoya">Ampoya</option>
                                    <option value="Pastilla">Pastilla</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contenido" class="col-md-12 col-form-label">Contenido</label>

                            <div class="col-md-12">
                                <input id="contenido" type="text" class="form-control" name="contenido" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fecha" class="col-md-12 col-form-label">Fecha Vencimiento</label>

                            <div class="col-md-12">
                                <input id="fecha" type="date" class="form-control" name="fecha" value="" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-3">
                                <button type="button" class="btn btn-primary btn-block desabled" id="submitUser">
                                    Insertar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card border-primary mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <strong>Inventario</strong>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            
                            <th>Nombre</th>
                            
                            <th>Proveedor</th>
                            <th>Almacén</th>
                            <th>Tipo</th>
                            <th>Contenido</th>
                            <th>Fecha Vencimiento</th>
        
                            
                            <a> <th width="180" class="text-center">Acción</th></a>
                        
                            
                        </tr>
                        <tbody id="tbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<form action="" method="POST" class="users-remove-record-model">
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
<form action="" method="POST" class="users-update-record-model form-horizontal">
    <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Actualizar Medicamento</h4>
                    <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body" id="updateBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success waves-effect waves-light updateUserRecord">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    var config = {
        apiKey: "<?php echo e(config('services.firebase.api_key')); ?>",
authDomain: "<?php echo e(config('services.firebase.auth_domain')); ?>",
databaseURL: "<?php echo e(config('services.firebase.database_url')); ?>",
projectId: "<?php echo e(config('services.firebase.project_id')); ?>",
storageBucket: "<?php echo e(config('services.firebase.storage_bucket')); ?>",
messagingSenderId: "<?php echo e(config('services.firebase.messaging_sender_id')); ?>",
appId: "<?php echo e(config('services.firebase.app_id')); ?>"
    };

    firebase.initializeApp(config);
    var database = firebase.database();
    var lastIndex = 0;
</script>
<script src="./js/lista.js"></script>
<script src="https://kit.fontawesome.com/d01099666b.js" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp1\htdocs\FirebaseCrud\resources\views/listamedicamentos.blade.php ENDPATH**/ ?>