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
      <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
          <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <br>
                <h1 class="text-xl font-bold text-gray-900 dark:text-white"><strong> NUESTRO ACENTO AUTOMOTRIZ </strong></h1>
            </header>


            <br>

            <div class="row">
              <div class="col-sm-6">
                <!-- Contenedor 1 -->

                <div class="row">
                  <div class="col-sm-6">
                  <!-- Contenedor 1 -->
                      <figure>
                           <img src="/assets/images/polo1.png" class="mx-auto d-block" width="110%" height="auto" alt="">
                      </figure>
                  </div>
                  <div class="col-sm-6">
                  <!-- Contenedor 2 -->
                  <figure>
                      <br><br><br><br>
                      <img src="/assets/images/polo2.png" class="mx-auto d-block" width="100%" height="auto" alt="">
                 </figure>
                  </div>
              </div>

                                </div>
              <div class="col-sm-6">
                <!-- Contenedor 2 -->
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">Los egresados de la UPQ:</h1>
                <p class="lead">Son capaces de desarrollar sistemas que manipulen los componentes tecnológicos del campo automotriz</p>
                <p class="lead">Son Agentes de cambio que optimizan los recursos e impulsan desarrollo organizacional en entidades del sector automotriz con un enfoque humano</p>
                <p class="lead">Somos generadores de innovación para el avance tecnológico y de diseño enfocado el sector automotriz.</p>
                <p class="lead">Genera innovación en la manufactura y desarrollo de mecanismos con un alto estándar de calidad cumpliendo las expectativas que demanda el sector</p>
                <p class="lead">Brindan soluciones relacionadas a la mejora en los procesos inteligentes de comunicación y conexiones tecnológicas de los sistemas automotrices</p>
                <p class="lead">Logran la integración de los diversos elementos mecánicos, eléctricos y de control, para el desarrollo de sistemas, procesos y productos del sector automotriz</p>
                <p class="lead">Son profesionales en la generación de estratégicas de logística, exportación e importación que permiten la optimización de los recursos y el fortalecimiento de las relaciones internacionales entre los mercados que convergen en el sector automotriz</p>
                <p class="lead"></p>
              </div>
            </div>


            <br><br>








              <br><br>




              <a href="{{ url('student/cursos20') }}" class="btn btn-primary">
                Anterior
              </a>

              <a href="{{ url('student/cursos22') }}" class="btn btn-primary">
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



