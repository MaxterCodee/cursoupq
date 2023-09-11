@extends('layouts.student')
@section('title','Cursos')
@section('content')


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


                <br><br>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- Contenedor 1 -->
                      <figure>
                        <br>
                        <img src="/assets/images/parabolico.png" class="mx-auto d-block" width="45%" height="auto" alt="">
                      </figure>
                                      </div>
                    <div class="col-sm-6">
                      <!-- Contenedor 2 -->
                      <br><br>
                      <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Parabola</strong></h1>
                      <p class="lead" style="text-align:justify;">Imagina que estas con tus amigos jugando billar, cada que es tu turno, al momento de pegarle a la bola blanca, esta hace colisión con las demas bolas, sin embargo
            al momento de que chocan, las bolas no se deforman, a esto se le conoce como colisión inelastica. Ahora imagina que dos automoviles impactan en la carretera y ambos se deforman,
            en una colisión donde estos cuerpos se deforman, se le conoce como colisión elastica.</p>

              <!-- Ejercicios -->
              <br><br>
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong><center>Ejercicios de Practica</center></strong></h1><br>
         <p>1.- ¿A qué velocidad viaja un vehículo que recorrio 50 m en 600 segundo?</p>
         <p>2.- Calcula el tiempo que tarda en recorrer un vehiculo que viajo 850 metros a 250 m/s.</p>
         <p>3.- Calcula la velocidad a la que recorre un avión una distacia de 250 km en 3 hrs. Recuerda manejar metros y segundos.</p>
         <p>4.- ¿Cuánto tiempo tarda en recorrer una bicicleta que viaja con velocidad constante de 25 m/s y recorrio una distancia de 45 m.</p>
         <p>1.- ¿A que velociad viaja un vehículo que recorrio 50 m en 600 segundo?</p>
         <p>2.- Calcula el tiempo que tarda en recorrer un vehiculo que viajo 850 metros a 250 m/s.</p>
         <p>3.- Calcula la velocidad a la que recorre un avión una distacia de 250 km en 3 hrs. Recuerda manejar metros y segundos.</p>
         <p>4.- ¿Cuánto tiempo tarda en recorrer una bicicleta que viaja con velocidad constante de 25 m/s y recorrio una distancia de 45 m.</p>
              </p>
                  <br>
</div></div>
                      <label for="initialVelocity">Velocidad Inicial (m/s):</label><br>
                    <input type="number" id="initialVelocity" step="0.1" style="width: 100%; border-radius:4px; height: 5%; background-color: #030d4f; border:none; color:white;">
                      <br><br>
                    <label for="angle">Ángulo (grados):</label><br>
                    <input type="number" id="angle" step="1" style="width: 100%; heigth: 20%;  border-radius:4px; height: 5%; background-color: #030d4f; border:none;color:white;"><br>
                      <br>
                      <button onclick="calcular()"  class="btn btn-primary" style="background-color: #030d4f; color:white; border:none;">Calcular</button>
                      <br><br>
                      <h2 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Resultados:</strong></h2>
                      <p>Velocidad en X: <span id="velocityX">-</span> m/s</p>
                      <p>Velocidad en Y: <span id="velocityY">-</span> m/s</p>
                      <p>Tiempo de Vuelo: <span id="flightTime">-</span> s</p>
                      <p>Altura Máxima: <span id="maxHeight">-</span> m</p>
                      <p>Alcance: <span id="range">-</span> m</p>
                  </div>

                </div>
              </div>

                  

                  <br><br><br><br>

              <a href="{{ url('student/cursos2') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none;">
                Anterior
              </a>

              <a href="{{ url('student/cursos4') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none;">
                Siguiente
              </a>
              <br><br>


              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>

              <p class="lead"> </p>
              <p class="lead"> </p>
              <p class="lead"> </p>


    </div>
    </div>


@endsection


<script>
        function calcular() {
            const initialVelocity = parseFloat(document.getElementById("initialVelocity").value);
            const angle = parseFloat(document.getElementById("angle").value);

            const angleRad = (angle * Math.PI) / 180;
            const velocityX = initialVelocity * Math.cos(angleRad);
            const velocityY = initialVelocity * Math.sin(angleRad);

            const flightTime = (2 * velocityY) / 9.81;
            const maxHeight = (velocityY * velocityY) / (2 * 9.81);
            const range = velocityX * flightTime;

            document.getElementById("velocityX").textContent = velocityX.toFixed(2);
            document.getElementById("velocityY").textContent = velocityY.toFixed(2);
            document.getElementById("flightTime").textContent = flightTime.toFixed(2);
            document.getElementById("maxHeight").textContent = maxHeight.toFixed(2);
            document.getElementById("range").textContent = range.toFixed(2);
        }
    </script>
