<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Document</title>
</head>
<body class="#263238">
    
   <nav class="nav-wrapper  blue-grey darken-4">
       <div class="container">
           <a href="#" class="brand-logo">Clínica de Especialidades</a>
           <a href="#" class="sidenav-trigger" data-target="disparador"><i class="material-icons">menu</i></a>
           <ul class="hide-on-med-and-down right">
               <!-- <li class="active"><a href="#">Home</a></li> -->
               <li class="active"><a href="{{route('cerrar.cerrar')}}">Cerrar Sección</a></li>
               
           </ul>

       </div>
   </nav>

   <div class="container section">

    <div class="col s6 m6">
      <div class="card-panel grey lighten-2">
        <center><a href="{{route('historial.historial')}}">  <i class="fas fa-clipboard-list fa-4x" style="color: #263238"></i> </a></center>
        <center><p>FORMULARIO DE REGISTRO</p></center>
      </div>
    </div>
  </div>
          
   </div>


   <div class="container section">
     
    <div class="row">
      <div class="col s6 m6">
        <div class="card-panel grey lighten-2">
          <center><a href="{{route('doctores.doctores')}}">  <i class="fas fa-user-md fa-4x" style="color: #263238"></i> </a></center>
          <center><p>DOCTORES DISPONIBLES</p></center>
        </div>
      </div>
  
  
      <div class="col s6 m6">
        <div class="card-panel grey lighten-2">
          <center><a href="{{route('registrosclinicos.registrosclinicos')}}">  <i class="far fa-address-book fa-4x" style="color: #263238"></i> </a></center>
          <center><p>HISTORIALES CLÍNICOS</p></center>
        </div>
      </div>
    </div>
            
     </div>

     <div class="container section">
     
     



   <ul class="sidenav" id="disparador">
    <li class="active"><a href="#"><i class="material-icons"> home</i> Home</a></li>
    <li><a href="#"> <i class="material-icons">public</i> Services</a></li>
    <li><a href="#"> <i class="material-icons"> email</i> Contact us</a></li>
    <li><a href="#"> <i class="material-icons"> group</i> About us</a></li>
</ul>
   


<!--
    <div class="fixed-action-btn toolbar">
        <a class="btn-floating btn-large blue">
          <i class="large material-icons">local_hospital</i>
        </a>
        <ul>
          <li><a class="btn-floating lighten-5"><i class="material-icons" style="color: white">home</i></a></li>
          <li><a class="btn-floating lighten-5"><i class="material-icons" style="color: white">person</i></a></li>
          <li><a class="btn-floating lighten-5"><i class="material-icons" style="color: white">search</i></a></li>
          <li><a class="btn-floating lighten-5" ><i class="material-icons" style="color: white">content_paste</i></a></li>
          <li><a class="btn-floating lighten-5" ><i class="material-icons" style="color: white">settings</i></a></li>
        </ul>
      </div>

    -->

    



      <script>
           document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      toolbarEnabled: true
    });
  })

      </script>


    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

     <!--DISPARADOR-->

     <script>
         const slide_menu = document.querySelectorAll(".sidenav");
         M.Sidenav.init(slide_menu,{});
     </script>

<script src="./js/darkmode.js"></script>
<script src="https://kit.fontawesome.com/d01099666b.js" crossorigin="anonymous"></script>
</body>
</html>