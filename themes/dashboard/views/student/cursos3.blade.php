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
                      <div>
                  <p class="lead"> 
              <iframe width="90%" height="325" src="https://www.youtube.com/embed/7d3Tje0bEJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </p>
                  </div>
                        <br>
                        
                        <div>
                          <br><br><h3><strong>Utiliza la siguiente calculadora para comprobar tus resultados:</strong></h3>
                        <label for="initialVelocity">Velocidad Inicial (m/s):</label><br>
                    <input type="number" id="initialVelocity" step="0.1" style="width: 90%; border-radius:4px; height: 5%; background-color: #030d4f; border:none; color:white;">
                      <br><br>
                    <label for="angle">Ángulo (grados):</label><br>
                    <input type="number" id="angle" step="1" style="width: 90%; border-radius:4px; height: 5%; background-color: #030d4f; border:none;color:white;"><br>
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
                      </figure>
                                      </div>
                    <div class="col-sm-6">
                      <!-- Contenedor 2 -->
                      
                      <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Parabola</strong></h1>
                      <p class="lead" style="text-align:justify;">Imagina que estás jugando al béisbol y lanzas la pelota hacia arriba. En ese momento, la pelota sube, luego se detiene en su punto 
                      más alto y comienza a caer de nuevo hacia abajo. La trayectoria que sigue la pelota en el aire es una parábola. Sus componentes son: <br><br>
                      <strong>Foco (F):</strong> El foco es un punto especial dentro de la parábola. La distancia entre el foco y la parábola se llama la distancia focal (f).

                      <strong>Directriz (D):</strong> La directriz es una línea recta que se encuentra a una distancia fija del foco.  <br>

                      <strong>Eje de Simetría (Línea de Simetría):</strong> Es una línea recta que pasa por el foco y es perpendicular a la directriz. Divide la parábola en dos partes iguales y es el eje de simetría de la curva. Todos los puntos en la parábola son simétricos con respecto a esta línea.

                      <strong>Vértice (V):</strong> El vértice es el punto donde la parábola toca su eje de simetría. Es el punto más cercano a la directriz. El vértice es un punto importante para determinar la posición y la forma de la parábola.

                      <strong>Eje de la Parábola (Eje Principal):</strong> Es el eje a lo largo del cual la parábola es simétrica. Está definido por la línea de simetría y se extiende infinitamente en ambas direcciones.

</p>
            <img src="/assets/images/parabolico.png" class="mx-auto d-block" width="45%" height="auto" alt="">

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
                  </div>
                </div>
                  </div>

                </div>
              </div>

                  

                  <br><br><br><br>

              <a href="{{ url('student/cursos2') }}" class="btn btn-primary" style="background-color:#44749d; color:white; border:none;">
                Anterior
              </a>

              <a href="{{ url('student/cursos4') }}" class="btn btn-primary" style="background-color:#44749d; color:white; border:none;">
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
