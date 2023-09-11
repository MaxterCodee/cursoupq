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

            <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <header class="mb-4 lg:mb-6 not-format">

                    <br><h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong>Movimiento Rectilineo Uniformemente Acelerado</strong></h1>
                </header>
                <p class="lead">A comparación del Movimiento Rectilineo Uniforme, en el M.R.U.A presenta una aceleración o en caso de ser negativa, una desaceleración,
            la V1 o Velocidad Inicial, posterior a un tiempo determinado y de recorrer una distancia d, la V2 o Velocidad Final es diferente. Cada un de los diferentes 
            valores pueden ser calculados con una fomula en el video, ¡Ve nuestro video para adentrarte más en el tema!</p><br>
                <br>
              </div>
              <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <br><br><br>
                  <iframe width="600" height="350" src="https://www.youtube.com/embed/7d3Tje0bEJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <br><br>
              <div>
              <h1>Calculadora de MRUA</h1>
    <label for="initialPosition">Posición Inicial (m):</label>
    <input type="number" id="initialPosition" step="0.1">
    <br>
    <label for="initialVelocity">Velocidad Inicial (m/s):</label>
    <input type="number" id="initialVelocity" step="0.1">
    <br>
    <label for="acceleration">Aceleración (m/s²):</label>
    <input type="number" id="acceleration" step="0.1">
    <br>
    <label for="time">Tiempo (s):</label>
    <input type="number" id="time" step="0.1">
    <br>
    <button onclick="calcular()">Calcular</button>
    <br><br>
    <h2>Resultados:</h2>
    <p>Posición Final: <span id="finalPosition">-</span> m</p>
    <p>Velocidad Final: <span id="finalVelocity">-</span> m/s</p>
              </div>

              <a href="{{ url('student/cursos1') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none; margin-left:1%;">
                Anterior
              </a>

              <a href="{{ url('student/cursos3') }}" class="btn btn-primary" style="background-color:#ffb350; color:#030d4f; border:none;">
                Siguiente
              </a>
              <br><br>
              
              <h1 class="text-xl font-bold text-gray-900 dark:text-white"></h1>
              <p class="lead"> </p>
    </div>
    </div>


@endsection



