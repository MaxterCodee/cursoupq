@extends('layouts.student')
@section('title','Cursos')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Curso de Introducción a la Industria Automotriz</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Curso de Introducción a la Industria Automotriz</li>
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

                  <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong> PLANTILLA cursos3 </strong></h1>
              </header>


              <br>

              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <figure>
                    <img src="/assets/images/auto2.jpeg" class="mx-auto d-block" width="75%" height="auto" alt="">
                  </figure>
                                  </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <p class="lead">TEXTO AQUI</p>
                </div>
              </div>


              <br><br>



              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">SUBTEMA AQUI</h1><br>
                  <p class="lead">TEXto aqui </p>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <figure>
                    <img src="/assets/images/auto21.png" class="mx-auto d-block" width="90%" height="auto" alt="">
                  </figure>
                </div>
              </div>


              <br><br>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <figure>
                    <img src="/assets/images/apqp.jpg" class="mx-auto d-block" width="72%" height="auto" alt="">
                  </figure>
                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->

                  <p class="lead"> TEXTO <strong> DE PRUEBA AQUI</strong></p>

                </div>
              </div>


              <br><br>


              <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <p class="lead"> TEXTO <strong> DE PRUEBA AQUI</strong></p>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                    <figure>
                        <img src="/assets/images/auto23.jpg" class="mx-auto d-block" width="72%" height="auto" alt="">
                    </figure>
                </div>
              </div>





              <br><br>




              <a href="{{ url('student/cursos2') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos4') }}" class="btn btn-primary">
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



