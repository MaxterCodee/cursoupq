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
        <br><br>
      <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
          <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <div class="row">
                <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">TIER 2</h1>
                  <p class="lead">El Tier 2 se encarga de la producción de sub-ensambles, partes y componentes que se utilizan en la fabricación de productos finales. Los Tier 2 suelen trabajar en estrecha colaboración con los Tier 1, que son los principales fabricantes de equipos originales (OEM) y se encargan de la producción de los productos finales.                          </p>
                  <p class="lead">Además, los Tier 2 pueden colaborar con los Tier 1 en el diseño e innovación de los productos finales. Esta colaboración puede incluir la identificación de oportunidades para mejorar el rendimiento y la eficiencia de los productos, así como la implementación de nuevas tecnologías y procesos de fabricación.                          </p>
                  <br><br>
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">EJEMPLO:</h1>

                </div>
                <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <figure>
                    <img src="/assets/images/tier2.jpeg" class="mx-auto d-block" width="90%" height="auto" alt="">
                  </figure>
                </div>
              </div>

              <figure>
                <img src="/assets/images/tier21.png" class="mx-auto d-block" width="70%" height="auto" alt="">
              </figure>

              <br>


              <br><br>




              <a href="{{ url('student/cursos11') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos13') }}" class="btn btn-primary">
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



