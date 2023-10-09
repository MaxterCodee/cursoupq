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
    <select id="opcion" style="width: 90%; border-radius: 4px; height: 3%; background-color: #44749d; border: none; color: white;">
        <option value="vf">Velocidad final (vf)</option>
        <option value="vi">Velocidad inicial (vi)</option>
        <option value="a">Aceleración (a)</option>
        <option value="d">Distancia recorrida (d)</option>
        <option value="t">Tiempo (t)</option>
    </select>
    <br><br>
    <div id="inputContainer">
        <label for="inputValue">Ingresa el valor conocido:</label>
        <input type="number" id="inputValue" style="width: 90%; border-radius: 4px; height: 3%; background-color: #44749d; border: none; color: white;">
    </div>
    <br><br>
    <button onclick="calcular()" class="btn btn-primary" style="background-color: #44749c; color: white; border: none;">Calcular</button>
    <br><br>
    <h2 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Resultado:</strong></h2>
    <h3 id="resultado">-</h3>


                        </div>
                      </figure>
                                      </div>
      <div class="col-sm-6">
        <!-- Contenedor 2 -->
                      
        <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>M.R.U.A.</strong></h1>
        <p class="lead" style="text-align:justify;">El MRUA es un tipo de movimiento en física en el que un objeto se 
        desplaza en línea recta y su velocidad cambia de manera constante debido a una aceleración constante. Durante un
        MRUA, la velocidad inicial del objeto se incrementa o disminuye uniformemente con el tiempo, mientras que su posición 
        cambia de acuerdo con una función cuadrática.</p><br><br>
                  
        <img src="/assets/images/carro.png" class="mx-auto d-block" width="25%" height="auto" alt="">

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
            const opcion = document.getElementById("opcion").value;
            const valorConocido = parseFloat(document.getElementById("inputValue").value);
            
            if (isNaN(valorConocido)) {
                alert("Ingresa un valor válido.");
                return;
            }
            
            let vf, vi, a, d, t;
            
            switch (opcion) {
                case "vf":
                    vi = parseFloat(prompt("Ingresa la velocidad inicial (vi):"));
                    a = parseFloat(prompt("Ingresa la aceleración (a):"));
                    t = parseFloat(prompt("Ingresa el tiempo (t):"));
                    
                    vf = vi + a * t;
                    document.getElementById("resultado").textContent = `Velocidad final (vf) = ${vf}`;
                    break;
                    
                case "vi":
                    vf = parseFloat(prompt("Ingresa la velocidad final (vf):"));
                    a = parseFloat(prompt("Ingresa la aceleración (a):"));
                    t = parseFloat(prompt("Ingresa el tiempo (t):"));
                    
                    vi = vf - a * t;
                    document.getElementById("resultado").textContent = `Velocidad inicial (vi) = ${vi}`;
                    break;
                    
                case "a":
                    vf = parseFloat(prompt("Ingresa la velocidad final (vf):"));
                    vi = parseFloat(prompt("Ingresa la velocidad inicial (vi):"));
                    t = parseFloat(prompt("Ingresa el tiempo (t):"));
                    
                    a = (vf - vi) / t;
                    document.getElementById("resultado").textContent = `Aceleración (a) = ${a}`;
                    break;
                    
                case "d":
                    vi = parseFloat(prompt("Ingresa la velocidad inicial (vi):"));
                    a = parseFloat(prompt("Ingresa la aceleración (a):"));
                    t = parseFloat(prompt("Ingresa el tiempo (t):"));
                    
                    d = vi * t + 0.5 * a * t * t;
                    document.getElementById("resultado").textContent = `Distancia recorrida (d) = ${d}`;
                    break;
                    
                case "t":
                    vi = parseFloat(prompt("Ingresa la velocidad inicial (vi):"));
                    a = parseFloat(prompt("Ingresa la aceleración (a):"));
                    vf = parseFloat(prompt("Ingresa la velocidad final (vf):"));
                    
                    t = (vf - vi) / a;
                    document.getElementById("resultado").textContent = `Tiempo (t) = ${t}`;
                    break;
            }
        }
    </script>