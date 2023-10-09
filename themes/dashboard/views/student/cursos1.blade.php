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
                          <br><h3 style="width:85%;"><strong>Utiliza la siguiente calculadora de MRU para comprobar tus resultados:</strong></h3>
                        <label for="option">Seleccione lo que desea calcular:</label><br>
    <select id="option" style="width: 90%; border-radius: 4px; height: 3%; background-color: #44749d; border: none; color: white;">
        <option value="distance">Distancia Recorrida (metros)</option>
        <option value="time">Tiempo (segundos)</option>
        <option value="velocity">Velocidad (m/s)</option>
    </select>
    <br><br>
    <label for="input1">Valor 1:</label><br>
    <input type="number" id="input1" step="0.1" style="width: 90%; border-radius: 4px; height: 3%; background-color: #44749d; border: none; color: white;">
    <br><br>
    <label for="input2">Valor 2:</label><br>
    <input type="number" id="input2" step="0.1" style="width: 90%; border-radius: 4px; height: 3%; background-color: #44749d; border: none; color: white;">
    <br><br>
    <button onclick="calcular()" class="btn btn-primary" style="background-color: #44749c; color: white; border: none;">Calcular</button>
    <br><br>
    <h2 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Resultado:</strong></h2>
    <h3 id="result">-</h3>


                        </div>
                      </figure>
                                      </div>
      <div class="col-sm-6">
        <!-- Contenedor 2 -->
                      
        <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>M.R.U.</strong></h1>
        <p class="lead" style="text-align:justify;">El MRU es un tipo de movimiento en física en el cual un objeto se desplaza en línea recta 
        con una velocidad constante en magnitud y dirección. Durante un MRU, la aceleración es igual a cero, lo que significa que no hay cambios 
        en la velocidad. Las ecuaciones fundamentales del MRU son <strong style="font-style: italic;">d = (v)(t), </strong>donde d es la distancia recorrida, v es la velocidad constante y t es el tiempo.
        Este tipo de movimiento se observa en situaciones como un automóvil viajando a velocidad constante en una carretera recta o un objeto deslizándose sin fricción en una superficie horizontal.</p><br><br>
                  
        <img src="/assets/images/parabolico.png" class="mx-auto d-block" width="25%" height="auto" alt="">

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


              <a href="{{ url('student/cursos') }}" class="btn btn-primary" style="background-color:#44749d; color:white; border:none;">
                Anterior
              </a>

              <a href="{{ url('student/cursos2') }}" class="btn btn-primary" style="background-color:#44749d; color:white; border:none;">
                Siguiente
              </a><br><br>


    </div>
    </div>


@endsection


<script>
        function calcular() {
            const option = document.getElementById("option").value;
            const input1 = parseFloat(document.getElementById("input1").value);
            const input2 = parseFloat(document.getElementById("input2").value);

            let result;

            if (option === "distance") {
                result = input1 * input2; // Distancia = Velocidad * Tiempo
            } else if (option === "time") {
                result = input1 / input2; // Tiempo = Distancia / Velocidad
            } else if (option === "velocity") {
                result = input1 / input2; // Velocidad = Distancia / Tiempo
            } else {
                result = "Opción no válida";
            }

            document.getElementById("result").textContent = result.toFixed(2);
        }
    </script>