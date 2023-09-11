@extends('layouts.student')
@section('title','Cursos')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Physics - Hub</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Physics - Hub</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div class="flex  items-center">
    <div class="inline-block p-2 rounded-lg bg-gray-200 mx-auto">

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
      <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
          <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
              <header class="mb-4 lg:mb-6 not-format">

                  <br><h1 class="text-xl font-bold text-gray-900 dark:text-white">Movimiento Rectilineo Uniforme</h1>
              </header>

              <p class="lead" stye="text-align:justify;">Imagina un avión que viaja a una velocidad constante y recorre una distancia de 500 km en 2 hrs, por las condiciones de movimiento podemos decir que es un movimiento rectilineo uniforme. Hablando en terminos más concretos,
            el Movimiento Rectilineo Uniforme se produce cuando un objeto se mueve en linea recta con una <strong>valocidad constante</strong> y recorre una distancia <strong>d</strong> en un tiempo determinado <strong>t</strong>.</p>
              <br>

              <center>
              <p class="lead"> 
              <iframe width="70%" height="650" src="https://www.youtube.com/embed/7d3Tje0bEJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </p>
              </center>
              <br>


              <!-- Button trigger modal -->
              <center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color:#ffb350; color:#030d4f; border:none;">
              <strong>Calculadora de Formulas de MRU</strong>
              </button></center>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Calculadora MRU</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="">
                        <label for="">Ingresa Tu Velocidad (m/s)</label>
                        <input type="number" id="v"><br><br>
                        <label for="">Ingresa Tu Distancia (m)</label>
                        <input type="number" id="d"><br><br>
                        <label for="">Ingresa Tu Tiempo (s)</label>
                        <input type="number" id="t"><br><br>
                        <center><button class="btn btn-primary" onClick="mru" style="background-color:#ffb350; color:#030d4f; border:none; pading:1%; border-radius:10px;">Calcular</button>
                        <div id="resultado"></div>
                      </center>
                      </form>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:#ffb350; color:#030d4f; border:none;">Cerrar</button>
                    </div>
                  </div>
                </div>
              </div>

              <p class="lead" stye="text-align:justify;">
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Ejercicios de Practica.</strong></h1><br>
         <p>1.- ¿A que velociad viaja un vehículo que recorrio 50 m en 600 segundo?</p>
         <p>2.- Calcula el tiempo que tarda en recorrer un vehiculo que viajo 850 metros a 250 m/s.</p>
         <p>3.- Calcula la velocidad a la que recorre un avión una distacia de 250 km en 3 hrs. Recuerda manejar metros y segundos.</p>
         <p>4.- ¿Cuánto tiempo tarda en recorrer una bicicleta que viaja con velocidad constante de 25 m/s y recorrio una distancia de 45 m.</p>
         <p>1.- ¿A que velociad viaja un vehículo que recorrio 50 m en 600 segundo?</p>
         <p>2.- Calcula el tiempo que tarda en recorrer un vehiculo que viajo 850 metros a 250 m/s.</p>
         <p>3.- Calcula la velocidad a la que recorre un avión una distacia de 250 km en 3 hrs. Recuerda manejar metros y segundos.</p>
         <p>4.- ¿Cuánto tiempo tarda en recorrer una bicicleta que viaja con velocidad constante de 25 m/s y recorrio una distancia de 45 m.</p>
              </p>
              <br>

              {{-- <figure><img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt="">
              </figure><br> --}}


              <a href="{{ url('student/cursos') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none;">
                Anterior
              </a>
              

              <a href="{{ url('student/cursos2') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none;">
                Siguiente
              </a>
              
              

              <br><br>
            </div>
          </div>


@endsection


<script>
  var v = getElementById("v").value

  function mru(){
    if(){

    }
  }
</script>
