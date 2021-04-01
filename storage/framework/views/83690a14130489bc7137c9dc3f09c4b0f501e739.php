<!doctype html>
<html lang="en">
<head>
    <title>Registro Clínico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>

</head>
<body>
<center><a href="<?php echo e(route('principal.sistema')); ?>">  <i class="fas fa-home fa-2x" style="color: #263238"></i> </a></center>
    <div class="form-row">
        <div class="col-md-12">
           
            <div class="card border-primary mb-3">
                
               
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-12">
            <div class="card card text-white bg-dark mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <center><h3>Registros Clínicos</h3></center>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            
                           <center>
                            <th  style="color: blanchedalmond">Nombre</th>
                            
                            <th style="color: blanchedalmond">Edad</th>
                            <th style="color: blanchedalmond">Sexo</th>
                            <th style="color: blanchedalmond">Nacionalidad</th>
                            <th style="color: blanchedalmond">Civil</th>
                            <th style="color: blanchedalmond">Ocupación</th>
                            <th style="color: blanchedalmond">Domicilio</th>
                            <th style="color: blanchedalmond">Télefono</th>
                            <th style="color: blanchedalmond">Fecha</th>
                            <th style="color: blanchedalmond">Cédula</th>
                            <th style="color: blanchedalmond">Seguro</th>
                            <th style="color: blanchedalmond">Doctor</th>

                            
                           </center>
        
                            
                            <a> <th width="180" style="color: gold" class="text-center">Acción</th></a>
                        
                            
                        </tr>
                        <tbody id="tbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<!-- Delete Modal -->
<form action="" method="POST" class="historial-remove-record-model">
    <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Registro Clínico</h4>
                    <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h5>¿Está seguro que desea eliminar este Registro?</h5>
                    <p>Una vez se elimine este registro, no podrá recuperar esta información,
                        asegurese de revisar bien esta información antes de realizar dicha acción !
                    </p>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form border border-success" data-dismiss="modal">Cerrar</button>
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
                    <h4 class="modal-title" id="custom-width-modalLabel">Actualizar Registro</h4>
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
<script src="./js/historial.js"></script>
<script src="https://kit.fontawesome.com/d01099666b.js" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp1\htdocs\FirebaseCrud\resources\views/registrosclinicos.blade.php ENDPATH**/ ?>